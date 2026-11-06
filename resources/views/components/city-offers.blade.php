@props(['country', 'cities', 'attractions', 'id' => 'rencana'])

@if ($cities->isNotEmpty() || $attractions->isNotEmpty())
    <section id="{{ $id }}" class="scroll-mt-32 py-20 sm:py-28">
        <div class="container-site">
            <div class="max-w-2xl" data-reveal>
                <p class="eyebrow">Pesan tur &amp; tiket</p>
                <h2 class="display mt-4 text-3xl font-semibold sm:text-4xl">Tur &amp; tiket populer di {{ $country->name }}</h2>
                <p class="mt-4 text-ink/65">Pilih kota, lalu lihat tur, tiket atraksi, dan hotel di sana lewat mitra tepercaya kami.</p>
            </div>

            @if ($cities->isNotEmpty())
                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($cities as $i => $city)
                        <div data-reveal style="--delay: {{ ($i % 3) * 80 }}ms" class="group relative isolate flex aspect-[4/3] flex-col justify-end overflow-hidden rounded-3xl bg-gradient-to-br from-ink to-ink-soft p-5 text-white">
                            @if ($city['image'])
                                <img src="{{ $city['image'] }}" alt="" loading="lazy" class="ease-smooth absolute inset-0 -z-10 size-full object-cover transition duration-[1200ms] group-hover:scale-105">
                            @endif
                            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink/90 via-ink/35 to-transparent"></div>

                            <h3 class="display text-2xl font-semibold">{{ $city['label'] }}</h3>
                            <p class="mt-1 text-xs text-white/70">Tur &amp; tiket di {{ $city['label'] }}</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach ($city['links'] as ['program' => $program, 'url' => $url])
                                    <a href="{{ $url }}" target="_blank" rel="sponsored nofollow noopener" class="ease-smooth inline-flex items-center gap-1 rounded-full bg-white px-3.5 py-1.5 text-xs font-semibold text-ink transition hover:-translate-y-0.5 hover:bg-tulip hover:text-white">
                                        {{ $program->name }} <x-icon name="arrow-up-right" class="size-3" />
                                    </a>
                                @endforeach
                                @if ($city['hotelUrl'])
                                    <a href="{{ $city['hotelUrl'] }}" target="_blank" rel="sponsored nofollow noopener" class="ease-smooth inline-flex items-center gap-1 rounded-full border border-white/50 px-3.5 py-1.5 text-xs font-semibold text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white hover:text-ink">
                                        <x-icon name="map-pin" class="size-3" /> Hotel
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if ($attractions->isNotEmpty())
                <h3 class="display mt-14 text-2xl font-semibold" data-reveal>Tiket atraksi populer</h3>
                <ul class="mt-6 grid gap-3 lg:grid-cols-2">
                    @foreach ($attractions as $i => $attraction)
                        <li data-reveal style="--delay: {{ ($i % 2) * 80 }}ms" class="flex items-center gap-4 rounded-2xl bg-white p-3 pr-4 ring-1 ring-ink/5">
                            @if ($attraction['image'])
                                <img src="{{ $attraction['image'] }}" alt="" loading="lazy" class="size-16 shrink-0 rounded-xl object-cover">
                            @else
                                <span class="grid size-16 shrink-0 place-items-center rounded-xl bg-ink text-white/60"><x-icon name="camera" class="size-6" /></span>
                            @endif
                            <div class="min-w-0 flex-1">
                                <p class="font-semibold">{{ $attraction['label'] }}</p>
                                <div class="mt-2 flex flex-wrap gap-1.5">
                                    @foreach ($attraction['links'] as ['program' => $program, 'url' => $url])
                                        <a href="{{ $url }}" target="_blank" rel="sponsored nofollow noopener" class="ease-smooth inline-flex items-center gap-1 rounded-full bg-tulip/10 px-3 py-1 text-xs font-semibold text-tulip transition hover:bg-tulip hover:text-white">
                                            Cek tiket di {{ $program->name }} <x-icon name="arrow-up-right" class="size-3" />
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif

            <p class="mt-8 text-xs text-ink/45" data-reveal>Tautan di bagian ini adalah tautan afiliasi: kami bisa mendapat komisi bila Anda memesan, tanpa biaya tambahan untuk Anda.</p>
        </div>
    </section>
@endif
