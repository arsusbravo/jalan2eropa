@php
    $byName = collect($places)->keyBy('name');
    $examples = collect([
        'Benelux klasik' => ['Atomium', 'Kastil Gravensteen, Ghent', 'Rijksmuseum: Amsterdam', 'Anne Frank House'],
        'Paris & sekitarnya' => ['Menara Eiffel', 'Museum Louvre', 'Sacre Coeur', 'Teluk Mont-Saint-Michel'],
        'Belgia – Jerman – Belanda' => ['Atomium', 'Katedral Köln', 'Rijksmuseum: Amsterdam'],
    ])->map(fn (array $names): array => collect($names)->map(fn (string $name) => $byName->get($name)['id'] ?? null)->filter()->values()->all())
        ->filter(fn (array $ids): bool => count($ids) >= 2);
    $booking = \App\Support\AffiliateOffers::groups(['flight', 'transfer', 'car', 'esim', 'luggage', 'bike'], limit: 1);
@endphp

@push('head')
    @vite(['resources/css/planner.css', 'resources/js/planner.js'])
@endpush

<x-layouts.site title="Route planner" description="Susun rute perjalanan keliling Eropa, lihat di peta, dan cek jarak serta waktu tempuh antar tujuan.">
    <x-page-hero eyebrow="Route planner" title="Susun rute perjalanan Anda sendiri"
        lead="Pilih tempat wisata, bandara, dan stasiun, lihat rutenya di peta, lalu cek tiket dan hotel di setiap perhentian."
        :breadcrumbs="['Beranda' => route('home'), 'Route planner' => null]" />

    <section class="py-10 sm:py-16" id="planner"
        data-hotel-endpoint="{{ route('planner.hotel') }}">
        <script type="application/json" id="planner-places">@json($places)</script>
        <script type="application/json" id="planner-examples">@json($examples)</script>

        <div id="planner-print" class="planner-print" aria-hidden="true"></div>

        <div class="planner-screen container-site grid grid-cols-[minmax(0,1fr)] gap-6 lg:grid-cols-2 lg:items-start">
            {{-- MAP --}}
            <div class="lg:sticky lg:top-24 lg:order-2" data-reveal>
                <div class="overflow-hidden rounded-3xl bg-white ring-1 ring-ink/5">
                    <button type="button" id="planner-map-toggle" aria-expanded="false" aria-controls="planner-map-wrap"
                        class="flex w-full items-center justify-between gap-3 px-5 py-4 text-left font-semibold lg:hidden">
                        <span class="inline-flex items-center gap-2"><x-icon name="map-pin" class="text-tulip size-5" /> <span data-map-label>Tampilkan peta</span></span>
                        <span aria-hidden="true" class="text-ink/40">▾</span>
                    </button>
                    <div id="planner-map-wrap" class="hidden lg:block">
                        <div id="planner-map" class="h-[22rem] w-full bg-sand sm:h-[28rem] lg:h-[calc(100vh-18rem)] lg:min-h-[28rem]"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-px bg-ink/5 text-center sm:grid-cols-5" id="planner-summary">
                        <div class="bg-white p-4"><dt class="text-[0.7rem] font-semibold tracking-widest text-ink/45 uppercase">Perhentian</dt><dd class="display mt-1 text-2xl font-semibold" data-sum="stops">0</dd></div>
                        <div class="bg-white p-4"><dt class="text-[0.7rem] font-semibold tracking-widest text-ink/45 uppercase">Hari</dt><dd class="display mt-1 text-2xl font-semibold" data-sum="days">0</dd></div>
                        <div class="bg-white p-4"><dt class="text-[0.7rem] font-semibold tracking-widest text-ink/45 uppercase">Negara</dt><dd class="display mt-1 text-2xl font-semibold" data-sum="countries">0</dd></div>
                        <div class="bg-white p-4"><dt class="text-[0.7rem] font-semibold tracking-widest text-ink/45 uppercase">Jarak</dt><dd class="display mt-1 text-2xl font-semibold" data-sum="distance">–</dd></div>
                        <div class="bg-white p-4"><dt class="text-[0.7rem] font-semibold tracking-widest text-ink/45 uppercase">Waktu tempuh</dt><dd class="display mt-1 text-2xl font-semibold" data-sum="time">–</dd></div>
                    </dl>
                </div>
                <p class="mt-3 px-2 text-xs text-ink/45" id="planner-note">Jarak dan waktu tempuh adalah perkiraan perjalanan dengan mobil.</p>
            </div>

            <div class="min-w-0 space-y-6 lg:order-1">
                {{-- PICKER --}}
                <div id="planner-picker" class="scroll-mt-24 rounded-3xl bg-white p-5 ring-1 ring-ink/5 sm:p-7" data-reveal>
                    <h2 class="display text-xl font-semibold sm:text-2xl">Tambah perhentian</h2>
                    <div class="mt-4 grid gap-3 sm:grid-cols-2">
                        <label class="sr-only" for="planner-search">Cari tempat</label>
                        <input id="planner-search" type="search" placeholder="Cari tempat, mis. Atomium" autocomplete="off"
                            class="h-12 rounded-2xl border border-ink/10 bg-cream px-4 outline-none focus-visible:ring-2 focus-visible:ring-tulip/40">
                        <label class="sr-only" for="planner-country">Negara</label>
                        <select id="planner-country" class="h-12 rounded-2xl border border-ink/10 bg-cream px-4 outline-none focus-visible:ring-2 focus-visible:ring-tulip/40">
                            <option value="">Semua negara</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->slug }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3 flex flex-wrap gap-2" id="planner-types">
                        @foreach (['' => 'Semua', 'tourist' => 'Wisata', 'airport' => 'Bandara', 'train station' => 'Stasiun', 'shopping' => 'Belanja'] as $value => $label)
                            <button type="button" data-type="{{ $value }}" class="rounded-full border border-ink/10 px-4 py-1.5 text-sm font-medium transition hover:border-tulip hover:text-tulip data-[active]:border-tulip data-[active]:bg-tulip data-[active]:text-white" @if ($value === '') data-active @endif>{{ $label }}</button>
                        @endforeach
                    </div>
                    <ul class="mt-4 max-h-72 divide-y divide-ink/5 overflow-y-auto rounded-2xl bg-cream/60" id="planner-results" aria-live="polite"></ul>
                </div>

                {{-- ROUTE --}}
                <div class="rounded-3xl bg-white p-5 ring-1 ring-ink/5 sm:p-7" data-reveal>
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <h2 class="display text-xl font-semibold sm:text-2xl">Rute Anda</h2>
                        <div class="flex gap-2">
                            <button type="button" id="planner-pdf" class="btn btn-primary !px-4 !py-2">Unduh PDF</button>
                            <button type="button" id="planner-share" class="btn border border-ink/10 !px-4 !py-2 hover:border-tulip hover:text-tulip">Salin link</button>
                            <button type="button" id="planner-clear" class="btn border border-ink/10 !px-4 !py-2 hover:border-tulip hover:text-tulip">Kosongkan</button>
                        </div>
                    </div>

                    <div id="planner-empty" class="mt-6 rounded-2xl bg-cream/70 p-6 text-center">
                        <x-icon name="route" class="text-tulip mx-auto size-8" />
                        <p class="mt-3 font-semibold">Belum ada perhentian</p>
                        <p class="mt-1 text-sm text-ink/60">Tambahkan tempat dari daftar di atas, atau mulai dari contoh rute:</p>
                        <div class="mt-4 flex flex-wrap justify-center gap-2">
                            @foreach ($examples as $label => $ids)
                                <button type="button" data-example="{{ $label }}" class="btn btn-primary !px-4 !py-2">{{ $label }}</button>
                            @endforeach
                        </div>
                    </div>

                    <ol class="mt-6 space-y-3" id="planner-stops"></ol>

                    <p class="mt-4 hidden text-sm text-ink/60" id="planner-copied" role="status">Link rute disalin.</p>
                    <p class="mt-3 text-xs text-ink/45">Tombol &ldquo;Unduh PDF&rdquo; membuka dialog cetak; pilih &ldquo;Simpan sebagai PDF&rdquo;.</p>
                </div>

                @if ($booking->isNotEmpty())
                    <div class="rounded-3xl bg-white p-5 ring-1 ring-ink/5 sm:p-7" data-reveal>
                        <h2 class="display text-xl font-semibold sm:text-2xl">Pesan untuk perjalanan ini</h2>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($booking as $category => $offers)
                                @foreach ($offers as ['program' => $program, 'url' => $url])
                                    <a href="{{ $url }}" target="_blank" rel="sponsored nofollow noopener" class="btn border border-ink/10 !px-4 !py-2 hover:border-tulip hover:text-tulip">{{ \App\Support\AffiliateOffers::CATEGORIES[$category][0] }} · {{ $program->name }}</a>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endif

                <p class="px-2 text-xs text-ink/45">Tautan hotel dan tiket adalah tautan afiliasi: kami bisa mendapat komisi tanpa biaya tambahan untuk Anda. Peta &copy; OpenStreetMap.</p>
            </div>
        </div>
    </section>

    <button type="button" id="planner-add-more" hidden
        class="btn btn-primary fixed bottom-5 left-1/2 z-40 -translate-x-1/2 !px-5 !py-3 shadow-xl shadow-ink/25 lg:!hidden">
        <span aria-hidden="true">↑</span> Tambah tempat lagi
    </button>
</x-layouts.site>
