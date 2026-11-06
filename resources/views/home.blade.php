@php
    $slides = [
        ['rome', 'Colosseum, Roma'],
        ['italia', 'Venesia, Italia'],
        ['denmark', 'Nyhavn, Kopenhagen'],
        ['berlin', 'Katedral Berlin, Jerman'],
    ];
    $headline = ['Jelajahi', 'Eropa', 'dengan', 'cara', 'yang', 'lebih', 'mudah'];
    $pillars = [
        ['camera', 'Tempat wisata', 'Atraksi, museum, dan landmark yang wajib dikunjungi di setiap negara.'],
        ['utensils', 'Kuliner', 'Dari kedai lokal sampai hidangan khas yang sayang untuk dilewatkan.'],
        ['bag', 'Belanja', 'Pusat perbelanjaan, outlet, dan tips berburu barang terbaik.'],
        ['train', 'Transportasi', 'Rute kereta, bus, dan bandara agar perjalanan lancar.'],
    ];
    $tipCards = [
        ['passport', 'Visa Schengen', 'Dokumen, biaya, dan langkah mengurus visa ke Eropa.', 'visa'],
        ['train', 'Transportasi', 'Berpindah antarkota dengan kereta, bus, atau pesawat.', 'transportasi'],
        ['suitcase', 'Persiapan perjalanan', 'Checklist barang dan hal penting sebelum berangkat.', 'persiapan'],
        ['receipt', 'Tax refund', 'Cara mendapatkan kembali pajak dari belanja Anda.', 'tax-refund'],
    ];
@endphp

<x-layouts.site :transparent-header="true">
    {{-- HERO --}}
    <section class="relative isolate flex min-h-[100svh] items-center overflow-hidden bg-ink text-white">
        <div class="absolute inset-0 -z-10" data-parallax>
            @foreach ($slides as $i => [$file, $label])
                <div data-hero-slide="{{ $label }}" class="hero-slide absolute inset-0 {{ $i === 0 ? 'is-active' : '' }}">
                    <img src="{{ asset('storage/images/hero/'.$file.'.jpg') }}" alt="{{ $label }}" class="size-full object-cover" @if ($i > 0) loading="lazy" @endif fetchpriority="{{ $i === 0 ? 'high' : 'low' }}">
                </div>
            @endforeach
            <div class="absolute inset-0 bg-gradient-to-b from-ink/70 via-ink/35 to-ink/90"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-ink/60 via-transparent to-transparent"></div>
        </div>

        <div class="container-site pt-28 pb-24">
            <p class="eyebrow !text-white/85 [&::before]:!bg-white/60" style="animation: word-up 1s var(--ease-smooth) both">Panduan liburan ke Eropa</p>

            <h1 class="display mt-6 max-w-4xl text-5xl leading-[1.02] font-semibold sm:text-6xl lg:text-8xl">
                @foreach ($headline as $i => $word)
                    <span class="hero-word"><span style="--i: {{ $i }}" class="{{ $word === 'Eropa' ? 'text-tulip italic' : '' }}">{{ $word }}</span></span>
                @endforeach
            </h1>

            <p class="mt-7 max-w-xl text-lg leading-relaxed text-white/80" data-reveal style="--delay: 900ms">
                Tempat wisata, kuliner, belanja, visa, sampai rencana rute — semua dalam Bahasa Indonesia,
                untuk {{ $countries->count() }} negara favorit para pejalan.
            </p>

            {{-- Country picker --}}
            <form data-country-picker data-reveal style="--delay: 1100ms"
                class="mt-10 flex max-w-2xl flex-col gap-2 rounded-[28px] border border-white/20 bg-white/10 p-2 shadow-2xl shadow-black/30 backdrop-blur-xl sm:flex-row sm:rounded-full">
                <label for="country" class="sr-only">Pilih negara tujuan</label>
                <div class="relative flex-1">
                    <x-icon name="map-pin" class="pointer-events-none absolute top-1/2 left-5 size-5 -translate-y-1/2 text-white/70" />
                    <select id="country" name="country" class="h-14 w-full cursor-pointer appearance-none rounded-full bg-transparent pr-12 pl-13 text-base font-medium text-white outline-none focus-visible:ring-2 focus-visible:ring-white/60">
                        <option value="" class="text-ink">Mau ke negara mana?</option>
                        @foreach ($countries as $country)
                            <option value="{{ route('countries.show', $country) }}" class="text-ink">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    <x-icon name="chevron-down" class="pointer-events-none absolute top-1/2 right-5 size-5 -translate-y-1/2 text-white/70" />
                </div>
                <button type="submit" class="btn btn-primary h-14 px-8 text-base">
                    Jelajahi <x-icon name="arrow-right" class="size-5" />
                </button>
            </form>
        </div>

        {{-- Slide caption & dots --}}
        <div class="absolute inset-x-0 bottom-8 z-10">
            <div class="container-site flex items-end justify-between gap-6">
                <p class="flex items-center gap-2 text-sm text-white/80">
                    <x-icon name="map-pin" class="size-4" />
                    <span data-hero-label>{{ $slides[0][1] }}</span>
                </p>
                <div class="flex items-center gap-2" role="group" aria-label="Pilih gambar">
                    @foreach ($slides as $i => [, $label])
                        <button type="button" data-hero-dot @if ($i === 0) data-active @endif aria-label="{{ $label }}"
                            class="h-1.5 w-6 rounded-full bg-white/35 transition-all duration-500 hover:bg-white/70 data-[active]:w-12 data-[active]:bg-white"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- STATS --}}
    <section class="relative z-10 -mt-px bg-ink text-white">
        <div class="container-site grid grid-cols-3 divide-x divide-white/10 py-10">
            @foreach ([[$countries->count(), '', 'Negara'], [$cityCount, '', 'Tempat wisata'], [100, '%', 'Gratis diakses']] as [$value, $suffix, $label])
                <div class="px-3 text-center sm:px-8" data-reveal>
                    <p class="display text-4xl font-semibold sm:text-6xl"><span data-count="{{ $value }}">{{ $value }}</span><span class="text-tulip">{{ $suffix }}</span></p>
                    <p class="mt-1 text-xs tracking-wider text-white/60 uppercase sm:text-sm">{{ $label }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- COUNTRIES --}}
    <section id="negara" class="py-24 sm:py-32">
        <div class="container-site">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <div data-reveal>
                    <p class="eyebrow">Negara-negara Eropa</p>
                    <h2 class="display mt-4 max-w-2xl text-4xl leading-tight font-semibold sm:text-5xl">Pilih negara, mulai petualangan Anda</h2>
                </div>
                <p class="max-w-sm text-ink/65" data-reveal style="--delay: 120ms">
                    Setiap negara punya panduan tempat wisata, kuliner, belanja, dan hal menarik lainnya.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-2 gap-3 sm:gap-5 lg:grid-cols-4">
                @foreach ($countries as $i => $country)
                    <x-country-card :country="$country" :delay="($i % 4) * 80" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- INTRO / PILLARS --}}
    <section id="tentang" class="bg-sand/60 py-24 sm:py-32">
        <div class="container-site grid items-center gap-14 lg:grid-cols-2">
            <div data-reveal="left">
                <p class="eyebrow">Mengapa Jalan2Eropa</p>
                <h2 class="display mt-4 text-4xl leading-tight font-semibold sm:text-5xl">
                    Liburan seru di Eropa dimulai dari <span class="text-tulip italic">Jalan2Eropa</span>
                </h2>
                <p class="mt-6 max-w-lg text-lg leading-relaxed text-ink/70">
                    Merencanakan perjalanan ke Eropa membutuhkan banyak informasi. Kami merangkumnya agar Anda bisa
                    menyiapkan perjalanan dengan tenang — mulai dari memilih tujuan sampai berkeliling di sana.
                </p>
                <a href="{{ route('tips.show', 'persiapan') }}" class="btn btn-primary group mt-9">
                    Mulai persiapan <x-icon name="arrow-right" class="size-4 transition-transform duration-300 group-hover:translate-x-1" />
                </a>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($pillars as $i => [$icon, $label, $text])
                    <div data-reveal style="--delay: {{ $i * 100 }}ms"
                         class="ease-smooth group rounded-3xl border border-ink/5 bg-white p-6 shadow-sm transition duration-500 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-ink/10">
                        <span class="grid size-12 place-items-center rounded-2xl bg-tulip/10 text-tulip transition-colors duration-500 group-hover:bg-tulip group-hover:text-white">
                            <x-icon :name="$icon" />
                        </span>
                        <h3 class="mt-5 text-lg font-semibold">{{ $label }}</h3>
                        <p class="mt-1.5 text-sm leading-relaxed text-ink/65">{{ $text }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- POPULAR DESTINATIONS --}}
    @if ($destinations->isNotEmpty())
        <section id="tujuan" class="overflow-hidden py-24 sm:py-32" data-carousel>
            <div class="container-site flex items-end justify-between gap-6">
                <div data-reveal>
                    <p class="eyebrow">Tujuan populer</p>
                    <h2 class="display mt-4 text-4xl font-semibold sm:text-5xl">Tempat yang layak dikunjungi</h2>
                </div>
                <div class="hidden gap-2 sm:flex">
                    <button type="button" data-carousel-step="-1" aria-label="Sebelumnya" class="grid size-12 place-items-center rounded-full border border-ink/15 transition hover:bg-ink hover:text-white"><x-icon name="arrow-left" class="size-5" /></button>
                    <button type="button" data-carousel-step="1" aria-label="Berikutnya" class="grid size-12 place-items-center rounded-full border border-ink/15 transition hover:bg-ink hover:text-white"><x-icon name="arrow-right" class="size-5" /></button>
                </div>
            </div>

            <div data-carousel-track class="no-scrollbar mt-12 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth px-5 pb-4 sm:px-8 lg:px-[max(2rem,calc((100vw-80rem)/2+2rem))]">
                @foreach ($destinations as $i => $city)
                    <a href="{{ route('places.show', [$city->country, $city]) }}" data-reveal style="--delay: {{ $i * 70 }}ms"
                       class="group relative aspect-[4/5] w-[78%] shrink-0 snap-start overflow-hidden rounded-3xl sm:w-[44%] lg:w-[30%]">
                        <img src="{{ $city->thumb_url }}" alt="{{ $city->name }}" loading="lazy" class="ease-smooth size-full object-cover transition duration-[1200ms] group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-ink/85 via-transparent to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6 text-white">
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/15 py-1 pr-3 pl-1.5 text-xs font-medium backdrop-blur">
                                <img src="{{ $city->country->flag_url }}" alt="" width="20" height="14" class="h-3.5 w-5 rounded-[2px] object-cover">
                                {{ $city->country->name }}
                            </span>
                            <h3 class="display mt-3 text-2xl leading-tight font-semibold">{{ $city->name }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    {{-- BOOKING --}}
    @if ($booking->isNotEmpty())
        <section id="pesan" class="pb-24 sm:pb-32">
            <div class="container-site">
                <div class="mx-auto max-w-2xl text-center" data-reveal>
                    <p class="eyebrow">Pesan perjalanan</p>
                    <h2 class="display mt-4 text-4xl font-semibold sm:text-5xl">Semua kebutuhan liburan, satu tempat</h2>
                    <p class="mt-5 text-ink/65">Hotel, tiket atraksi, transportasi, dan internet selama di Eropa lewat mitra tepercaya.</p>
                </div>
                <div class="mt-12 flex flex-wrap justify-center gap-4" data-reveal style="--delay: 100ms">
                    @foreach ($booking as $category => $offers)
                        <a href="{{ route('pesan') }}"
                           class="ease-smooth group flex w-[calc(50%-0.5rem)] flex-col items-center gap-3 rounded-3xl bg-white p-6 text-center ring-1 ring-ink/5 transition duration-500 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-ink/10 sm:w-44">
                            <span class="grid size-14 place-items-center rounded-2xl bg-ink text-white transition-colors duration-500 group-hover:bg-tulip"><x-icon :name="\App\Support\AffiliateOffers::CATEGORIES[$category][1]" class="size-6" /></span>
                            <span class="text-sm font-semibold">{{ \App\Support\AffiliateOffers::CATEGORIES[$category][0] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- TIPS --}}
    <section id="tips" class="bg-sand/60 py-24 sm:py-32">
        <div class="container-site">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <p class="eyebrow">Tips &amp; info</p>
                <h2 class="display mt-4 text-4xl font-semibold sm:text-5xl">Siap berangkat? Mulai dari sini</h2>
                <p class="mt-5 text-ink/65">Hal-hal praktis yang sering ditanyakan sebelum terbang ke Eropa.</p>
            </div>

            <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($tipCards as $i => [$icon, $label, $text, $path])
                    <a href="{{ route('tips.show', $path) }}" data-reveal style="--delay: {{ $i * 90 }}ms"
                       class="ease-smooth group flex flex-col rounded-3xl bg-white p-7 shadow-sm ring-1 ring-ink/5 transition duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-ink/10">
                        <span class="grid size-14 place-items-center rounded-2xl bg-ink text-white transition-colors duration-500 group-hover:bg-tulip"><x-icon :name="$icon" class="size-6" /></span>
                        <h3 class="mt-6 text-xl font-semibold">{{ $label }}</h3>
                        <p class="mt-2 flex-1 text-sm leading-relaxed text-ink/65">{{ $text }}</p>
                        <span class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-tulip">
                            Baca selengkapnya <x-icon name="arrow-right" class="size-4 transition-transform duration-300 group-hover:translate-x-1.5" />
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ROUTE PLANNER CTA --}}
    <section id="planner" class="relative overflow-hidden py-24 sm:py-32">
        <svg class="pointer-events-none absolute inset-0 size-full text-tulip/25" viewBox="0 0 1200 400" preserveAspectRatio="none" fill="none" aria-hidden="true">
            <path class="route-line" d="M-20 320 C 200 120, 360 380, 560 200 S 900 60, 1220 180" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
            <circle cx="560" cy="200" r="9" fill="currentColor" />
            <circle cx="250" cy="250" r="7" fill="currentColor" />
            <circle cx="930" cy="105" r="9" fill="currentColor" />
        </svg>

        <div class="container-site relative text-center">
            <img src="{{ asset('storage/images/logo-sq-xl.png') }}" alt="" width="120" height="120" loading="lazy" class="animate-float mx-auto size-24" data-reveal>
            <h2 class="display mx-auto mt-6 max-w-3xl text-4xl leading-tight font-semibold sm:text-6xl" data-reveal style="--delay: 100ms">
                Susun rute perjalanan Anda sendiri
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg text-ink/65" data-reveal style="--delay: 200ms">
                Pilih kota, atur hari, dan lihat jarak serta waktu tempuh antar tujuan dalam satu rencana.
            </p>
            <div class="mt-10" data-reveal style="--delay: 300ms">
                <a href="{{ route('planner') }}" class="btn btn-primary group !px-8 !py-4 text-base">
                    <x-icon name="route" class="size-5" /> Coba route planner
                    <x-icon name="arrow-right" class="size-4 transition-transform duration-300 group-hover:translate-x-1" />
                </a>
            </div>
        </div>
    </section>
</x-layouts.site>
