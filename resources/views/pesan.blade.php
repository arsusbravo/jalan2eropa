<x-layouts.site title="Pesan hotel, tiket & kebutuhan perjalanan" description="Pesan hotel, tiket atraksi, transfer, sewa mobil, dan eSIM untuk liburan ke Eropa lewat mitra tepercaya.">
    <x-page-hero eyebrow="Pesan perjalanan" title="Pesan hotel, tiket, dan lainnya"
        lead="Pilih negara tujuan, lalu lanjutkan pemesanan lewat mitra tepercaya kami."
        :breadcrumbs="['Beranda' => route('home'), 'Pesan' => null]">
        <form method="GET" action="{{ route('pesan') }}" class="mt-8 flex max-w-xl flex-col gap-2 rounded-[28px] border border-white/20 bg-white/10 p-2 backdrop-blur-xl sm:flex-row sm:rounded-full" data-reveal style="--delay: 240ms">
            <label for="negara" class="sr-only">Negara tujuan</label>
            <div class="relative flex-1">
                <x-icon name="map-pin" class="pointer-events-none absolute top-1/2 left-5 size-5 -translate-y-1/2 text-white/70" />
                <select id="negara" name="negara" class="h-12 w-full cursor-pointer appearance-none rounded-full bg-transparent pr-12 pl-13 font-medium text-white outline-none focus-visible:ring-2 focus-visible:ring-white/60">
                    <option value="" class="text-ink">Semua Eropa</option>
                    @foreach ($countries as $option)
                        <option value="{{ $option->slug }}" class="text-ink" @selected($country?->is($option))>{{ $option->name }}</option>
                    @endforeach
                </select>
                <x-icon name="chevron-down" class="pointer-events-none absolute top-1/2 right-5 size-5 -translate-y-1/2 text-white/70" />
            </div>
            <button type="submit" class="btn btn-primary h-12">Tampilkan</button>
        </form>
    </x-page-hero>

    @unless ($country)
        <x-widget-section />
    @endunless

    @if ($country)
        @if ($cityCards->isNotEmpty() || $attractions->isNotEmpty())
            <x-city-offers :country="$country" :cities="$cityCards" :attractions="$attractions" />
        @else
            <section class="py-24">
                <p class="container-site text-center text-ink/60">Tur dan tiket untuk {{ $country->name }} akan segera tersedia.</p>
            </section>
        @endif
    @else
        <section class="py-16 sm:py-24">
            <div class="container-site">
                <div class="max-w-2xl" data-reveal>
                    <p class="eyebrow">Pilih negara</p>
                    <h2 class="display mt-4 text-3xl font-semibold sm:text-4xl">Ke mana Anda ingin pergi?</h2>
                    <p class="mt-4 text-ink/65">Pilih negara untuk melihat tur, tiket atraksi, dan hotel yang spesifik di kota-kotanya.</p>
                </div>
                <div class="mt-10 grid grid-cols-2 gap-3 sm:gap-5 lg:grid-cols-4">
                    @foreach ($countries as $i => $option)
                        <x-country-card :country="$option" :delay="($i % 4) * 80" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($country)
        <x-widget-section />
    @endif
</x-layouts.site>
