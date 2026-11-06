@php
    $sections = collect([
        ['ikhtisar', 'Ikhtisar', 'description', 'Tentang '.$country->name],
        ['dilihat', 'Yang menarik dilihat', 'to_see', 'Yang menarik dilihat'],
        ['kuliner', 'Makan & minum', 'eatdrink', 'Makan & minum'],
        ['belanja', 'Belanja', 'shopping', 'Belanja'],
        ['lainnya', 'Info lainnya', 'others', 'Info lainnya'],
    ])->map(fn (array $s): array => $s + ['html' => $country->cleanHtml($s[2])])->filter(fn (array $s): bool => $s['html'] !== '');

    $spy = $sections->map(fn (array $s): array => [$s[0], $s[1]])->values()->all();
    if ($tourist->isNotEmpty()) { $spy[] = ['tempat', 'Tempat wisata']; }
    if ($shopping->isNotEmpty()) { $spy[] = ['pusat-belanja', 'Pusat belanja']; }
    if ($airports->isNotEmpty() || $stations->isNotEmpty()) { $spy[] = ['transportasi', 'Bandara & stasiun']; }
    if ($cityCards->isNotEmpty() || $attractions->isNotEmpty()) { $spy[] = ['rencana', 'Tur & tiket']; }
@endphp

<x-layouts.site :title="$country->name" :description="\App\Support\LegacyHtml::excerpt($country->short_desc ?: $country->description)" :transparent-header="true">
    {{-- Banner --}}
    <section class="relative isolate flex min-h-[52svh] items-end overflow-hidden bg-ink text-white">
        @if ($country->photo_url)
            <img src="{{ $country->photo_url }}" alt="" class="animate-kenburns absolute inset-0 -z-10 size-full scale-105 object-cover blur-[1px]">
        @endif
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink via-ink/60 to-ink/50"></div>

        <div class="container-site pt-36 pb-14">
            <x-breadcrumbs :items="['Beranda' => route('home'), 'Negara' => route('countries.index'), $country->name => null]" :light="true" class="mb-8" data-reveal />
            <div class="flex items-center gap-4" data-reveal style="--delay: 60ms">
                <img src="{{ $country->flag_url }}" alt="Bendera {{ $country->name }}" width="56" height="38" class="h-9 w-14 rounded-md object-cover shadow-xl ring-2 ring-white/70">
                <span class="eyebrow !text-white/80 [&::before]:hidden">{{ $country->international }}</span>
            </div>
            <h1 class="display mt-4 text-5xl leading-none font-semibold sm:text-7xl" data-reveal style="--delay: 120ms">{{ $country->name }}</h1>
            <p class="mt-5 max-w-2xl text-lg text-white/80" data-reveal style="--delay: 180ms">{{ trim($country->title) }}</p>
            <ul class="mt-8 flex flex-wrap gap-3 text-sm" data-reveal style="--delay: 240ms">
                <li class="rounded-full bg-white/10 px-4 py-2 backdrop-blur">{{ $tourist->count() }} tempat wisata</li>
                <li class="rounded-full bg-white/10 px-4 py-2 backdrop-blur">{{ $shopping->count() }} pusat belanja</li>
                <li class="rounded-full bg-white/10 px-4 py-2 backdrop-blur">{{ $airports->count() }} bandara &middot; {{ $stations->count() }} stasiun</li>
            </ul>
        </div>
    </section>

    {{-- Sticky section nav --}}
    <div class="sticky top-[72px] z-30 border-b border-ink/5 bg-cream/85 backdrop-blur-xl">
        <nav class="no-scrollbar container-site flex gap-2 overflow-x-auto py-3" aria-label="Bagian halaman">
            @foreach ($spy as [$id, $label])
                <a href="#{{ $id }}" data-spy-link class="spy-link ease-smooth shrink-0 rounded-full px-4 py-2 text-sm font-medium whitespace-nowrap transition hover:bg-sand">{{ $label }}</a>
            @endforeach
        </nav>
    </div>

    {{-- Articles --}}
    <div class="container-site grid gap-12 py-16 sm:py-24 lg:grid-cols-3 lg:gap-16">
        <div class="space-y-20 lg:col-span-2">
            @foreach ($sections as $section)
                <section id="{{ $section[0] }}" class="scroll-mt-40" data-reveal>
                    <p class="eyebrow">{{ $section[3] }}</p>
                    <div class="prose-site mt-5">{!! $section['html'] !!}</div>
                </section>
            @endforeach
        </div>

        <aside class="space-y-6 lg:sticky lg:top-40 lg:self-start">
            @if ($tourist->isNotEmpty())
                <div class="rounded-3xl bg-white p-6 ring-1 ring-ink/5" data-reveal>
                    <h2 class="flex items-center gap-2 text-sm font-semibold tracking-widest text-ink/50 uppercase"><x-icon name="map-pin" class="text-tulip size-4" /> Tempat wisata populer</h2>
                    <ul class="mt-4 space-y-3">
                        @foreach ($tourist->take(5) as $place)
                            <li>
                                <a href="{{ route('places.show', [$country, $place]) }}" class="group flex items-center gap-3">
                                    @if ($place->thumb_url)
                                        <img src="{{ $place->thumb_url }}" alt="" loading="lazy" class="size-14 shrink-0 rounded-xl object-cover">
                                    @endif
                                    <span class="font-semibold leading-snug group-hover:text-tulip">{{ $place->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <a href="#tempat" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-tulip">Lihat semua tempat wisata <x-icon name="arrow-right" class="size-4" /></a>
                </div>
            @endif

            @if ($cityCards->isNotEmpty())
                <div class="rounded-3xl bg-white p-6 ring-1 ring-ink/5" data-reveal>
                    <h2 class="flex items-center gap-2 text-sm font-semibold tracking-widest text-ink/50 uppercase"><x-icon name="camera" class="text-tulip size-4" /> Tur &amp; tiket</h2>
                    <ul class="mt-4 space-y-4">
                        @foreach ($cityCards->take(4) as $city)
                            <li>
                                <p class="font-semibold">{{ $city['label'] }}</p>
                                <div class="mt-2 flex flex-wrap gap-1.5">
                                    @foreach ($city['links'] as ['program' => $program, 'url' => $url])
                                        <a href="{{ $url }}" target="_blank" rel="sponsored nofollow noopener" class="inline-flex items-center gap-1 rounded-full bg-tulip/10 px-3 py-1 text-xs font-semibold text-tulip transition hover:bg-tulip hover:text-white">
                                            {{ $program->name }} <x-icon name="arrow-up-right" class="size-3" />
                                        </a>
                                    @endforeach
                                    @if ($city['hotelUrl'])
                                        <a href="{{ $city['hotelUrl'] }}" target="_blank" rel="sponsored nofollow noopener" class="inline-flex items-center gap-1 rounded-full border border-ink/15 px-3 py-1 text-xs font-semibold transition hover:bg-ink hover:text-white">Hotel</a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <a href="#rencana" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-tulip">Semua tur &amp; tiket <x-icon name="arrow-right" class="size-4" /></a>
                    <p class="mt-3 text-[0.7rem] leading-snug text-ink/40">Tautan afiliasi: kami bisa mendapat komisi tanpa biaya tambahan untuk Anda.</p>
                </div>
            @endif

            <a href="{{ route('planner') }}" class="btn btn-primary w-full justify-between !rounded-2xl" data-reveal>Rencanakan rute perjalanan <x-icon name="arrow-right" class="size-4" /></a>
        </aside>
    </div>

    {{-- Places --}}
    @if ($tourist->isNotEmpty())
        <section id="tempat" class="scroll-mt-32 bg-sand/60 py-20 sm:py-28">
            <div class="container-site">
                <div data-reveal>
                    <p class="eyebrow">Tempat wisata</p>
                    <h2 class="display mt-4 text-4xl font-semibold sm:text-5xl">Jelajahi {{ $country->name }}</h2>
                </div>
                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($tourist as $i => $place)
                        <x-place-card :country="$country" :place="$place" :delay="($i % 3) * 80" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($shopping->isNotEmpty())
        <section id="pusat-belanja" class="scroll-mt-32 py-20 sm:py-28">
            <div class="container-site">
                <div data-reveal>
                    <p class="eyebrow">Pusat belanja</p>
                    <h2 class="display mt-4 text-4xl font-semibold sm:text-5xl">Tempat belanja di {{ $country->name }}</h2>
                </div>
                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($shopping as $i => $place)
                        <x-place-card :country="$country" :place="$place" :delay="($i % 3) * 80" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($airports->isNotEmpty() || $stations->isNotEmpty())
        <section id="transportasi" class="scroll-mt-32 bg-ink py-20 text-white sm:py-28">
            <div class="container-site">
                <div data-reveal>
                    <p class="eyebrow !text-white/80 [&::before]:!bg-white/50">Transportasi</p>
                    <h2 class="display mt-4 text-4xl font-semibold sm:text-5xl">Bandara &amp; stasiun</h2>
                </div>
                <div class="mt-12 grid gap-10 lg:grid-cols-2">
                    @foreach ([['Bandara', 'route', $airports], ['Stasiun kereta', 'train', $stations]] as [$label, $icon, $items])
                        @if ($items->isNotEmpty())
                            <div data-reveal>
                                <h3 class="flex items-center gap-3 text-lg font-semibold"><x-icon :name="$icon" class="text-tulip size-5" /> {{ $label }}</h3>
                                <ul class="mt-5 grid gap-2">
                                    @foreach ($items as $item)
                                        <li class="rounded-2xl bg-white/5 px-5 py-3.5">{{ $item->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <x-city-offers :country="$country" :cities="$cityCards" :attractions="$attractions" />

    {{-- Prev / next --}}
    <section class="py-14">
        <div class="container-site grid gap-4 sm:grid-cols-2">
            @foreach ([['Sebelumnya', $previous, 'arrow-left'], ['Selanjutnya', $next, 'arrow-right']] as [$label, $target, $icon])
                @if ($target)
                    <a href="{{ route('countries.show', $target) }}" class="ease-smooth group flex items-center gap-4 rounded-3xl bg-white p-5 ring-1 ring-ink/5 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-ink/10 {{ $label === 'Selanjutnya' ? 'flex-row-reverse text-right sm:col-start-2' : '' }}">
                        <span class="grid size-12 shrink-0 place-items-center rounded-full bg-sand transition group-hover:bg-tulip group-hover:text-white"><x-icon :name="$icon" class="size-5" /></span>
                        <span>
                            <span class="block text-xs tracking-widest text-ink/50 uppercase">{{ $label }}</span>
                            <span class="display flex items-center gap-2 text-xl font-semibold {{ $label === 'Selanjutnya' ? 'flex-row-reverse' : '' }}">
                                <img src="{{ $target->flag_url }}" alt="" class="h-4 w-6 rounded-[2px] object-cover"> {{ $target->name }}
                            </span>
                        </span>
                    </a>
                @endif
            @endforeach
        </div>
    </section>
</x-layouts.site>
