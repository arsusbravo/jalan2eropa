import L from 'leaflet';

const root = document.getElementById('planner');

if (root) {
    const places = JSON.parse(document.getElementById('planner-places').textContent);
    const examples = JSON.parse(document.getElementById('planner-examples').textContent);
    const placeById = new Map(places.map((place) => [place.id, place]));
    const hotelEndpoint = root.dataset.hotelEndpoint;
    const STORAGE_KEY = 'jalan2eropa.route.v1';
    const OSRM = 'https://router.project-osrm.org/route/v1/driving/';

    const els = {
        search: document.getElementById('planner-search'),
        country: document.getElementById('planner-country'),
        types: document.getElementById('planner-types'),
        results: document.getElementById('planner-results'),
        stops: document.getElementById('planner-stops'),
        empty: document.getElementById('planner-empty'),
        share: document.getElementById('planner-share'),
        clear: document.getElementById('planner-clear'),
        copied: document.getElementById('planner-copied'),
        note: document.getElementById('planner-note'),
    };
    const sum = (key) => root.querySelector(`[data-sum="${key}"]`);

    const esc = (value) =>
        String(value ?? '').replace(/[&<>"']/g, (char) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' })[char]);

    /** @type {{id: number, kind: 'visit'|'stay', days: number, note: string, hotel: string, hotelUrl?: string}[]} */
    let route = [];
    let legs = [];
    let approximate = false;
    let filterType = '';
    let routeToken = 0;
    let schedule = [];
    let dragFrom = null;
    const MAX_DRIVE_MINUTES = 360;

    /* ---------- persistence ---------- */
    const encodeShare = () => btoa(JSON.stringify(route.map((s) => [s.id, s.kind === 'stay' ? 1 : 0, s.days]))).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/, '');

    const decodeShare = (value) => {
        try {
            const raw = JSON.parse(atob(value.replace(/-/g, '+').replace(/_/g, '/')));
            return raw
                .filter(([id]) => placeById.has(id))
                .slice(0, 40)
                .map(([id, stay, days]) => makeStop(id, stay ? 'stay' : 'visit', days));
        } catch {
            return [];
        }
    };

    const makeStop = (id, kind = 'visit', days = 1) => ({ id, kind, days: Math.min(30, Math.max(1, Number(days) || 1)), note: '', hotel: '', manual: false, auto: false });

    const save = () => {
        try {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(route));
        } catch {
            /* storage unavailable */
        }
    };

    const load = () => {
        const param = new URLSearchParams(location.search).get('r');
        if (param) {
            return decodeShare(param);
        }
        try {
            const stored = JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
            return stored.filter((s) => placeById.has(s.id)).map((s) => ({ ...makeStop(s.id, s.kind, s.days), note: String(s.note || '').slice(0, 200), hotel: String(s.hotel || '').slice(0, 120), manual: s.manual === true, auto: s.auto === true }));
        } catch {
            return [];
        }
    };

    /* ---------- map ---------- */
    const map = L.map('planner-map', { scrollWheelZoom: false }).setView([49.5, 8], 5);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);
    map.on('focus', () => map.scrollWheelZoom.enable());
    map.on('blur', () => map.scrollWheelZoom.disable());

    const markerLayer = L.layerGroup().addTo(map);
    let line = null;

    const numberIcon = (n, kind) =>
        L.divIcon({
            className: '',
            html: `<span class="planner-pin ${kind === 'stay' ? 'planner-pin--stay' : ''}">${n}</span>`,
            iconSize: [32, 32],
            iconAnchor: [16, 16],
        });

    const drawMap = (geometry) => {
        markerLayer.clearLayers();
        line?.remove();
        line = null;

        if (route.length === 0) {
            return;
        }

        const points = route.map((stop) => {
            const place = placeById.get(stop.id);
            return [place.lat, place.lng];
        });

        route.forEach((stop, index) => {
            const place = placeById.get(stop.id);
            L.marker(points[index], { icon: numberIcon(index + 1, stop.kind), title: place.name })
                .addTo(markerLayer)
                .bindPopup(`<strong>${esc(place.name)}</strong><br>${esc(place.country)}`)
                .on('click', () => document.getElementById(`stop-${index}`)?.scrollIntoView({ behavior: 'smooth', block: 'center' }));
        });

        if (route.length > 1) {
            line = L.polyline(geometry ?? points, { color: '#c62f3a', weight: 4, opacity: 0.85, dashArray: geometry ? null : '8 8' }).addTo(map);
            map.fitBounds(line.getBounds(), { padding: [40, 40] });
        } else {
            map.setView(points[0], 9);
        }
    };

    /* ---------- routing ---------- */
    const haversine = (a, b) => {
        const rad = (deg) => (deg * Math.PI) / 180;
        const dLat = rad(b.lat - a.lat);
        const dLng = rad(b.lng - a.lng);
        const h = Math.sin(dLat / 2) ** 2 + Math.cos(rad(a.lat)) * Math.cos(rad(b.lat)) * Math.sin(dLng / 2) ** 2;
        return 12742 * Math.asin(Math.sqrt(h));
    };

    const estimateLegs = () =>
        route.slice(1).map((stop, index) => {
            const km = haversine(placeById.get(route[index].id), placeById.get(stop.id)) * 1.3;
            return { km, minutes: (km / 75) * 60 };
        });

    const formatDuration = (minutes) => {
        const total = Math.round(minutes);
        const h = Math.floor(total / 60);
        const m = total % 60;
        return h > 0 ? `${h} j ${m} m` : `${m} m`;
    };
    const formatKm = (km) => `${Math.round(km).toLocaleString('id-ID')} km`;

    const fetchRoute = async () => {
        const token = ++routeToken;

        if (route.length < 2) {
            legs = [];
            approximate = false;
            render();
            drawMap();
            return;
        }

        legs = estimateLegs();
        approximate = true;
        render();
        drawMap();

        const coords = route.map((stop) => `${placeById.get(stop.id).lng},${placeById.get(stop.id).lat}`).join(';');
        const controller = new AbortController();
        const timer = setTimeout(() => controller.abort(), 8000);

        try {
            const response = await fetch(`${OSRM}${coords}?overview=full&geometries=geojson`, { signal: controller.signal });
            const data = await response.json();
            if (token !== routeToken || data.code !== 'Ok') {
                return;
            }
            const best = data.routes[0];
            legs = best.legs.map((leg) => ({ km: leg.distance / 1000, minutes: leg.duration / 60 }));
            approximate = false;
            render();
            drawMap(best.geometry.coordinates.map(([lng, lat]) => [lat, lng]));
        } catch {
            /* keep the straight-line estimate */
        } finally {
            clearTimeout(timer);
        }
    };

    /* ---------- schedule: day numbers and overnight stops ---------- */
    const computeSchedule = () => {
        let day = 1;
        const driven = {};
        let mutated = false;
        schedule = [];

        route.forEach((stop, index) => {
            let warning = null;

            if (index > 0) {
                const minutes = legs[index - 1]?.minutes ?? 0;
                const total = (driven[day] ?? 0) + minutes;
                if (minutes > 0 && total > MAX_DRIVE_MINUTES) {
                    day += Math.ceil(total / MAX_DRIVE_MINUTES) - 1;
                    warning = { minutes };
                }
                driven[day] = (driven[day] ?? 0) + minutes;
            }

            if (warning && !stop.manual && stop.kind !== 'stay') {
                stop.kind = 'stay';
                stop.auto = true;
                mutated = true;
            } else if (!warning && stop.auto && !stop.manual) {
                stop.kind = 'visit';
                stop.auto = false;
                mutated = true;
            }

            const arrive = day;
            day = stop.kind === 'stay' ? arrive + stop.days : arrive + stop.days - 1;
            schedule.push({ arrive, depart: day, warning });
        });

        if (mutated) {
            save();
        }
    };

    /* ---------- rendering ---------- */
    const chip = (href, label) =>
        `<a href="${esc(href)}" target="_blank" rel="sponsored nofollow noopener" class="inline-flex items-center gap-1 rounded-full bg-tulip/10 px-3 py-1.5 text-xs font-semibold text-tulip transition hover:bg-tulip hover:text-white">${label} ↗</a>`;

    const stopChips = (stop, place, index) => {
        const chips = [];
        if (stop.kind === 'stay') {
            if (stop.hotelUrl) {
                chips.push(chip(stop.hotelUrl, `Cek hotel “${esc(stop.hotel)}”`));
            }
            if (place.hotelUrl) {
                chips.push(chip(place.hotelUrl, `Hotel dekat ${esc(place.name)}`));
            }
        } else {
            place.links.forEach((link) => chips.push(chip(link.url, `Tiket di ${esc(link.name)}`)));
        }
        return `<div data-chips="${index}" class="${chips.length ? 'mt-3 ' : ''}flex flex-wrap gap-2">${chips.join('')}</div>`;
    };

    const dayLabel = (index) => {
        const when = schedule[index];
        if (!when) {
            return '';
        }
        const last = when.depart;
        return last > when.arrive ? `Hari ${when.arrive}–${last}` : `Hari ${when.arrive}`;
    };

    const renderStops = () => {
        els.empty.classList.toggle('hidden', route.length > 0);
        els.stops.innerHTML = route
            .map((stop, index) => {
                const place = placeById.get(stop.id);
                const leg = index > 0 ? legs[index - 1] : null;
                const when = schedule[index];
                const warning = when?.warning
                    ? `<li class="rounded-xl bg-amber-50 px-3 py-2 text-xs leading-snug text-amber-900 ring-1 ring-amber-200" role="alert">⚠ Perjalanan ${formatDuration(when.warning.minutes)} cukup jauh, jadi Anda baru tiba di hari ke-${when.arrive}. ${stop.auto ? 'Perhentian ini otomatis diubah ke Menginap.' : 'Pertimbangkan untuk menginap.'}${when.warning.minutes > 720 ? ' Untuk jarak sejauh ini, pesawat mungkin lebih praktis.' : ''}</li>`
                    : '';
                const legHtml = leg
                    ? `<li class="flex items-center gap-3 px-2 text-xs text-ink/55" aria-label="Perjalanan">
                        <span class="h-6 w-px bg-ink/15 ml-[1.15rem]"></span>
                        ${approximate ? '≈ ' : ''}${formatKm(leg.km)} · ${formatDuration(leg.minutes)} dengan mobil${approximate ? ' (perkiraan)' : ''}
                       </li>${warning}`
                    : '';
                return `${legHtml}
                <li id="stop-${index}" data-stop="${index}" class="rounded-2xl border border-ink/10 bg-cream/50 p-4 transition">
                    <div class="flex items-start gap-3">
                        <span class="planner-handle" draggable="true" data-handle="${index}" title="Seret untuk mengubah urutan" aria-hidden="true">⠿</span>
                        <span class="planner-pin ${stop.kind === 'stay' ? 'planner-pin--stay' : ''} shrink-0">${index + 1}</span>
                        <div class="min-w-0 flex-1">
                            ${place.url ? `<a href="${esc(place.url)}" class="font-semibold leading-snug hover:text-tulip">${esc(place.name)}</a>` : `<span class="font-semibold leading-snug">${esc(place.name)}</span>`}
                            <p class="text-xs text-ink/55">${esc(place.typeLabel)} · ${esc(place.country)}</p>
                            <p class="mt-1 inline-block rounded-full bg-white px-2 py-0.5 text-[0.7rem] font-semibold text-ink/70 ring-1 ring-ink/10">${dayLabel(index)}</p>
                        </div>
                        <div class="flex shrink-0 gap-1">
                            <button type="button" data-act="up" data-i="${index}" class="planner-icon-btn" aria-label="Naikkan" ${index === 0 ? 'disabled' : ''}>↑</button>
                            <button type="button" data-act="down" data-i="${index}" class="planner-icon-btn" aria-label="Turunkan" ${index === route.length - 1 ? 'disabled' : ''}>↓</button>
                            <button type="button" data-act="remove" data-i="${index}" class="planner-icon-btn" aria-label="Hapus ${esc(place.name)}">✕</button>
                        </div>
                    </div>
                    <div class="mt-3 flex flex-wrap items-center gap-2 text-sm">
                        <div class="inline-flex rounded-full bg-white p-0.5 ring-1 ring-ink/10" role="group" aria-label="Jenis perhentian">
                            <button type="button" data-act="kind" data-i="${index}" data-kind="visit" class="rounded-full px-3 py-1 ${stop.kind === 'visit' ? 'bg-tulip text-white' : ''}">Kunjungi</button>
                            <button type="button" data-act="kind" data-i="${index}" data-kind="stay" class="rounded-full px-3 py-1 ${stop.kind === 'stay' ? 'bg-tulip text-white' : ''}">Menginap</button>
                        </div>
                        <label class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1 ring-1 ring-ink/10">
                            <span class="text-ink/60">${stop.kind === 'stay' ? 'Malam' : 'Hari'}</span>
                            <input type="number" min="1" max="30" value="${stop.days}" data-field="days" data-i="${index}" class="w-12 bg-transparent text-center outline-none">
                        </label>
                    </div>
                    ${stop.kind === 'stay' ? `<input type="text" maxlength="120" placeholder="Nama hotel (opsional), mis. ibis budget Antwerpen Port" value="${esc(stop.hotel)}" data-field="hotel" data-i="${index}" class="mt-3 h-10 w-full rounded-xl border border-ink/10 bg-white px-3 text-sm outline-none focus-visible:ring-2 focus-visible:ring-tulip/40">` : ''}
                    <input type="text" maxlength="200" placeholder="Catatan" value="${esc(stop.note)}" data-field="note" data-i="${index}" class="mt-2 h-10 w-full rounded-xl border border-ink/10 bg-white px-3 text-sm outline-none focus-visible:ring-2 focus-visible:ring-tulip/40">
                    ${stopChips(stop, place, index)}
                </li>`;
            })
            .join('');
    };

    const renderSummary = () => {
        const countries = new Set(route.map((stop) => placeById.get(stop.id).countrySlug));
        sum('stops').textContent = route.length;
        sum('countries').textContent = countries.size;
        sum('days').textContent = schedule.length ? Math.max(...schedule.map((entry) => entry.depart)) : 0;
        const km = legs.reduce((total, leg) => total + leg.km, 0);
        const minutes = legs.reduce((total, leg) => total + leg.minutes, 0);
        sum('distance').textContent = legs.length ? `${approximate ? '≈ ' : ''}${formatKm(km)}` : '–';
        sum('time').textContent = legs.length ? `${approximate ? '≈ ' : ''}${formatDuration(minutes)}` : '–';
        els.note.textContent = approximate && legs.length
            ? 'Menampilkan perkiraan garis lurus. Rute jalan sedang dimuat atau tidak tersedia.'
            : 'Jarak dan waktu tempuh adalah perkiraan perjalanan dengan mobil.';
    };

    const renderResults = () => {
        const query = els.search.value.trim().toLowerCase();

        if (query === '' && els.country.value === '') {
            els.results.innerHTML = '<li class="p-6 text-center text-sm text-ink/55">Pilih negara atau ketik nama tempat untuk mulai menambahkan perhentian.</li>';
            return;
        }

        const inRoute = new Set(route.map((stop) => stop.id));
        const matches = places
            .filter((place) => (!filterType || place.type === filterType) && (!els.country.value || place.countrySlug === els.country.value) && (!query || place.name.toLowerCase().includes(query)))
            .slice(0, 40);

        els.results.innerHTML = matches.length
            ? matches
                  .map(
                      (place) => `<li class="flex items-center gap-3 p-3">
                        ${place.thumb ? `<img src="${esc(place.thumb)}" alt="" loading="lazy" class="size-11 shrink-0 rounded-xl object-cover">` : '<span class="size-11 shrink-0 rounded-xl bg-sand"></span>'}
                        <div class="min-w-0 flex-1"><p class="truncate font-medium">${esc(place.name)}</p><p class="text-xs text-ink/55">${esc(place.typeLabel)} · ${esc(place.country)}</p></div>
                        <button type="button" role="switch" aria-checked="${inRoute.has(place.id)}" aria-label="${inRoute.has(place.id) ? 'Hapus' : 'Tambah'} ${esc(place.name)}" data-toggle="${place.id}" class="planner-switch"><span></span></button>
                    </li>`,
                  )
                  .join('')
            : '<li class="p-6 text-center text-sm text-ink/55">Tidak ada tempat yang cocok.</li>';
    };

    function render() {
        computeSchedule();
        renderPrint();
        renderStops();
        renderSummary();
        renderResults();
    }

    const changed = ({ reroute = true } = {}) => {
        save();
        if (reroute) {
            fetchRoute();
        } else {
            renderSummary();
        }
    };

    /* ---------- printable itinerary (Save as PDF from the print dialog) ---------- */
    const printEl = document.getElementById('planner-print');

    function renderPrint() {
        if (!printEl) {
            return;
        }
        const km = legs.reduce((total, leg) => total + leg.km, 0);
        const minutes = legs.reduce((total, leg) => total + leg.minutes, 0);
        const days = schedule.length ? Math.max(...schedule.map((entry) => entry.depart)) : 0;
        const shareUrl = `${location.origin}${location.pathname}?r=${encodeShare()}`;

        printEl.innerHTML = route.length === 0 ? '' : `
            <h1>Rencana perjalanan Eropa</h1>
            <p class="meta">${route.length} perhentian · ${days} hari${legs.length ? ` · ${approximate ? '≈ ' : ''}${formatKm(km)} · ${approximate ? '≈ ' : ''}${formatDuration(minutes)} berkendara` : ''}</p>
            <ol>${route.map((stop, index) => {
                const place = placeById.get(stop.id);
                const leg = index > 0 ? legs[index - 1] : null;
                const when = schedule[index];
                const links = stop.kind === 'stay'
                    ? [stop.hotelUrl ? [`Hotel “${esc(stop.hotel)}”`, stop.hotelUrl] : null, place.hotelUrl ? [`Hotel dekat ${esc(place.name)}`, place.hotelUrl] : null]
                    : place.links.map((link) => [`Tiket di ${esc(link.name)}`, link.url]);
                return `${leg ? `<li class="leg">${approximate ? '≈ ' : ''}${formatKm(leg.km)} · ${formatDuration(leg.minutes)} dengan mobil${when?.warning ? ' — tiba di hari berikutnya' : ''}</li>` : ''}
                <li class="stop">
                    <p class="day">${dayLabel(index)} · ${stop.kind === 'stay' ? `Menginap ${stop.days} malam` : `Kunjungi ${stop.days} hari`}</p>
                    <p class="name">${index + 1}. ${esc(place.name)} <span>${esc(place.typeLabel)} · ${esc(place.country)}</span></p>
                    ${stop.kind === 'stay' && stop.hotel ? `<p>Hotel: ${esc(stop.hotel)}</p>` : ''}
                    ${stop.note ? `<p>Catatan: ${esc(stop.note)}</p>` : ''}
                    ${links.filter(Boolean).length ? `<p class="links">${links.filter(Boolean).map(([label, href]) => `<a href="${esc(href)}">${label}</a>`).join(' · ')}</p>` : ''}
                </li>`;
            }).join('')}</ol>
            <p class="foot">Dibuat di Jalan2Eropa · ${esc(shareUrl)}</p>`;
    }

    document.getElementById('planner-pdf')?.addEventListener('click', () => {
        if (route.length === 0) {
            return;
        }
        window.print();
    });

    /* ---------- events ---------- */
    const isMobile = () => window.matchMedia('(max-width: 1023px)').matches;
    const addMore = document.getElementById('planner-add-more');
    const picker = document.getElementById('planner-picker');

    /* mobile: map is hidden until asked for */
    const mapWrap = document.getElementById('planner-map-wrap');
    const mapToggle = document.getElementById('planner-map-toggle');
    mapToggle?.addEventListener('click', () => {
        const open = mapWrap.classList.toggle('hidden') === false;
        mapToggle.setAttribute('aria-expanded', String(open));
        mapToggle.querySelector('[data-map-label]').textContent = open ? 'Sembunyikan peta' : 'Tampilkan peta';
        if (open) {
            map.invalidateSize();
            if (line) {
                map.fitBounds(line.getBounds(), { padding: [40, 40] });
            } else if (route.length === 1) {
                const only = placeById.get(route[0].id);
                map.setView([only.lat, only.lng], 9);
            }
        }
    });

    /* mobile: after adding, jump to the new stop; a floating button leads back to the picker */
    const scrollToStop = (index) => {
        const item = document.getElementById(`stop-${index}`);
        if (!item) {
            return;
        }
        item.scrollIntoView({ behavior: 'smooth', block: 'center' });
        item.classList.add('planner-flash');
        setTimeout(() => item.classList.remove('planner-flash'), 1600);
    };

    const syncAddMore = () => {
        if (!addMore || !picker) {
            return;
        }
        const rect = picker.getBoundingClientRect();
        const pickerVisible = rect.bottom > 80 && rect.top < window.innerHeight - 80;
        addMore.hidden = !(isMobile() && route.length > 0 && !pickerVisible);
    };
    window.addEventListener('scroll', syncAddMore, { passive: true });
    window.addEventListener('resize', syncAddMore);
    addMore?.addEventListener('click', () => {
        picker.scrollIntoView({ behavior: 'smooth', block: 'start' });
        els.search.focus({ preventScroll: true });
    });

    els.results.addEventListener('click', (event) => {
        const button = event.target.closest('[data-toggle]');
        if (!button) {
            return;
        }
        const id = Number(button.dataset.toggle);
        const existing = route.findIndex((stop) => stop.id === id);
        let added = false;
        if (existing >= 0) {
            route.splice(existing, 1);
        } else if (route.length < 40) {
            route.push(makeStop(id));
            added = true;
        } else {
            return;
        }
        changed();
        if (added && isMobile()) {
            scrollToStop(route.length - 1);
        }
        setTimeout(syncAddMore, 700);
    });

    els.stops.addEventListener('click', (event) => {
        const button = event.target.closest('[data-act]');
        if (!button) {
            return;
        }
        const index = Number(button.dataset.i);
        const act = button.dataset.act;

        if (act === 'remove') {
            route.splice(index, 1);
        } else if (act === 'up' && index > 0) {
            [route[index - 1], route[index]] = [route[index], route[index - 1]];
        } else if (act === 'down' && index < route.length - 1) {
            [route[index + 1], route[index]] = [route[index], route[index + 1]];
        } else if (act === 'kind') {
            route[index].kind = button.dataset.kind;
            route[index].manual = true;
            route[index].auto = false;
            save();
            render();
            drawMap();
            return;
        }
        changed();
    });

    /* drag and drop (the up/down buttons remain for touch screens) */
    els.stops.addEventListener('dragstart', (event) => {
        const handle = event.target.closest('[data-handle]');
        if (!handle) {
            event.preventDefault();
            return;
        }
        dragFrom = Number(handle.dataset.handle);
        event.dataTransfer.effectAllowed = 'move';
        event.dataTransfer.setData('text/plain', String(dragFrom));
        const card = handle.closest('[data-stop]');
        event.dataTransfer.setDragImage(card, 20, 20);
        requestAnimationFrame(() => card.classList.add('opacity-40'));
    });

    const clearDropMarks = () => els.stops.querySelectorAll('[data-stop]').forEach((card) => card.classList.remove('opacity-40', 'planner-drop-before', 'planner-drop-after'));

    els.stops.addEventListener('dragover', (event) => {
        const card = event.target.closest('[data-stop]');
        if (dragFrom === null || !card) {
            return;
        }
        event.preventDefault();
        const rect = card.getBoundingClientRect();
        const after = event.clientY > rect.top + rect.height / 2;
        els.stops.querySelectorAll('[data-stop]').forEach((other) => other.classList.remove('planner-drop-before', 'planner-drop-after'));
        card.classList.add(after ? 'planner-drop-after' : 'planner-drop-before');
    });

    els.stops.addEventListener('drop', (event) => {
        const card = event.target.closest('[data-stop]');
        if (dragFrom === null || !card) {
            return;
        }
        event.preventDefault();
        const rect = card.getBoundingClientRect();
        const after = event.clientY > rect.top + rect.height / 2;
        let target = Number(card.dataset.stop) + (after ? 1 : 0);
        const [moved] = route.splice(dragFrom, 1);
        if (dragFrom < target) {
            target -= 1;
        }
        route.splice(target, 0, moved);
        dragFrom = null;
        changed();
    });

    els.stops.addEventListener('dragend', () => {
        dragFrom = null;
        clearDropMarks();
    });

    const hotelTimers = new Map();
    els.stops.addEventListener('input', (event) => {
        const input = event.target.closest('[data-field]');
        if (!input) {
            return;
        }
        const index = Number(input.dataset.i);
        const field = input.dataset.field;

        if (field === 'days') {
            route[index].days = Math.min(30, Math.max(1, Number(input.value) || 1));
        } else if (field === 'note') {
            route[index].note = input.value;
        } else if (field === 'hotel') {
            route[index].hotel = input.value;
            clearTimeout(hotelTimers.get(index));
            hotelTimers.set(index, setTimeout(() => resolveHotel(index), 500));
        }
        save();
    });

    async function resolveHotel(index) {
        const stop = route[index];
        if (!stop) {
            return;
        }
        const name = stop.hotel.trim();
        if (name === '') {
            delete stop.hotelUrl;
        } else {
            try {
                const response = await fetch(`${hotelEndpoint}?name=${encodeURIComponent(name)}`, { headers: { Accept: 'application/json' } });
                const data = await response.json();
                stop.hotelUrl = data.url || undefined;
            } catch {
                delete stop.hotelUrl;
            }
        }
        const container = document.querySelector(`[data-chips="${index}"]`);
        if (container) {
            container.outerHTML = stopChips(stop, placeById.get(stop.id), index);
        }
    }

    els.types.addEventListener('click', (event) => {
        const button = event.target.closest('[data-type]');
        if (!button) {
            return;
        }
        filterType = button.dataset.type;
        els.types.querySelectorAll('[data-type]').forEach((other) => other.toggleAttribute('data-active', other === button));
        renderResults();
    });
    els.search.addEventListener('input', renderResults);
    els.country.addEventListener('change', renderResults);

    els.clear.addEventListener('click', () => {
        route = [];
        changed();
    });

    els.share.addEventListener('click', async () => {
        const url = new URL(location.href);
        url.search = route.length ? `?r=${encodeShare()}` : '';
        history.replaceState(null, '', url);
        try {
            await navigator.clipboard.writeText(url.toString());
            els.copied.textContent = 'Link rute disalin.';
        } catch {
            els.copied.textContent = 'Salin link dari kolom alamat browser Anda.';
        }
        els.copied.classList.remove('hidden');
        setTimeout(() => els.copied.classList.add('hidden'), 3500);
    });

    root.querySelectorAll('[data-example]').forEach((button) => {
        button.addEventListener('click', () => {
            route = (examples[button.dataset.example] || []).map((id) => makeStop(id));
            changed();
        });
    });

    route = load();
    render();
    syncAddMore();
    fetchRoute();
    route.forEach((stop, index) => stop.hotel && resolveHotel(index));
}
