<x-layouts.site :title="$place->name.' — '.$country->name" :description="$place->excerpt ?: $place->name" :transparent-header="true">
    <section class="relative isolate flex min-h-[46svh] items-end overflow-hidden bg-ink text-white">
        @if ($place->thumb_url)
            <img src="{{ $place->thumb_url }}" alt="{{ $place->name }}" class="animate-kenburns absolute inset-0 -z-10 size-full object-cover">
        @endif
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink via-ink/55 to-ink/40"></div>

        <div class="container-site pt-36 pb-12">
            <x-breadcrumbs :items="['Beranda' => route('home'), $country->name => route('countries.show', $country), $place->name => null]" :light="true" class="mb-7" data-reveal />
            <span class="inline-flex items-center gap-2 rounded-full bg-white/15 py-1 pr-3 pl-1.5 text-xs font-medium backdrop-blur" data-reveal style="--delay: 60ms">
                <img src="{{ $country->flag_url }}" alt="" class="h-3.5 w-5 rounded-[2px] object-cover"> {{ $country->name }} &middot; {{ $place->type_label }}
            </span>
            <h1 class="display mt-5 max-w-4xl text-4xl leading-tight font-semibold sm:text-6xl" data-reveal style="--delay: 120ms">{{ $place->name }}</h1>
        </div>
    </section>

    <div class="container-site grid gap-12 py-16 sm:py-20 lg:grid-cols-3 lg:gap-16">
        <article class="lg:col-span-2">
            <div class="prose-site" data-reveal>{!! $place->body !!}</div>

            @if ($youtube)
                <div class="mt-12 overflow-hidden rounded-3xl bg-ink shadow-xl shadow-ink/10" data-reveal>
                    <iframe src="{{ $youtube }}" title="Video {{ $place->name }}" class="aspect-video w-full" loading="lazy" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            @endif
        </article>

        <aside class="space-y-6 lg:sticky lg:top-28 lg:self-start">
            <div class="rounded-3xl bg-white p-6 ring-1 ring-ink/5" data-reveal>
                <h2 class="flex items-center gap-2 text-sm font-semibold tracking-widest text-ink/50 uppercase"><x-icon name="map-pin" class="text-tulip size-4" /> Lokasi</h2>
                @if ($place->plain_address)
                    <p class="mt-3 leading-relaxed">{{ $place->plain_address }}</p>
                @endif
                @if ($mapUrl)
                    <iframe src="{{ $mapUrl }}" title="Peta {{ $place->name }}" loading="lazy" class="mt-4 aspect-[4/3] w-full rounded-2xl border-0"></iframe>
                    <a href="https://www.google.com/maps/search/?api=1&query={{ $place->latitude }},{{ $place->longitude }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary mt-4 w-full">Buka di Google Maps <x-icon name="arrow-up-right" class="size-4" /></a>
                @endif
            </div>

            @if ($transport !== [] && $place->type !== 'airport')
                <div class="rounded-3xl bg-white p-6 ring-1 ring-ink/5" data-reveal>
                    <h2 class="flex items-center gap-2 text-sm font-semibold tracking-widest text-ink/50 uppercase"><x-icon name="route" class="text-tulip size-4" /> Transportasi terdekat</h2>
                    <ul class="mt-4 space-y-3">
                        @foreach ($transport as $item)
                            <li>
                                <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer" class="group flex items-start justify-between gap-3">
                                    <span>
                                        <span class="block text-xs text-ink/55">{{ $item['label'] }}</span>
                                        <span class="font-semibold group-hover:text-tulip">{{ $item['name'] }}</span>
                                    </span>
                                    <span class="shrink-0 text-sm text-ink/60">&plusmn; {{ number_format($item['km'], 1, ',', '.') }} km</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-4 text-xs text-ink/50">Jarak garis lurus. Klik untuk rute di Google Maps.</p>
                </div>
            @endif

            <x-place-tickets :place="$place" :links="$tickets" data-reveal />
        </aside>
    </div>

    <x-plan-section :groups="$plan" :heading="'Rencanakan kunjungan Anda ke '.$place->name" :compact="true"
        class="border-t border-ink/5 bg-white" />

    @if ($related->isNotEmpty())
        <section class="bg-sand/60 py-20">
            <div class="container-site">
                <h2 class="display text-3xl font-semibold sm:text-4xl" data-reveal>Lainnya di {{ $country->name }}</h2>
                <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($related as $i => $other)
                        <x-place-card :country="$country" :place="$other" :delay="$i * 80" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</x-layouts.site>
