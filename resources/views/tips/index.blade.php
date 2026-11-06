<x-layouts.site title="Tips & info" description="Tips praktis jalan-jalan ke Eropa: visa, transportasi, persiapan perjalanan, dan tax refund.">
    <x-page-hero eyebrow="Tips & info" title="Siap berangkat? Mulai dari sini"
        lead="Hal-hal praktis yang sering ditanyakan sebelum terbang ke Eropa."
        :breadcrumbs="['Beranda' => route('home'), 'Tips & info' => null]" />

    <section class="py-16 sm:py-24">
        <div class="container-site grid gap-5 sm:grid-cols-2">
            @foreach ($tips as $slug => $tip)
                <a href="{{ route('tips.show', $slug) }}" data-reveal style="--delay: {{ $loop->index * 80 }}ms"
                   class="ease-smooth group flex gap-5 rounded-3xl bg-white p-7 shadow-sm ring-1 ring-ink/5 transition duration-500 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-ink/10">
                    <span class="grid size-14 shrink-0 place-items-center rounded-2xl bg-ink text-white transition-colors duration-500 group-hover:bg-tulip"><x-icon :name="$tip['icon']" class="size-6" /></span>
                    <span class="flex-1">
                        <span class="display block text-xl leading-snug font-semibold">{{ $tip['title'] }}</span>
                        <span class="mt-2 block text-sm leading-relaxed text-ink/60">{{ $tip['summary'] }}</span>
                        <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-tulip">Baca selengkapnya <x-icon name="arrow-right" class="size-4 transition-transform duration-300 group-hover:translate-x-1.5" /></span>
                    </span>
                </a>
            @endforeach
        </div>
    </section>

    <x-widget-section :slots="['flights', 'taxi', 'tours', 'bike']" eyebrow="Siapkan perjalanan" title="Sekalian atur tiket dan transportasi"
        lead="Sudah baca tipsnya? Cek harga tiket pesawat, antar jemput, tur, dan sewa sepeda untuk liburan Anda. Kami bisa menerima komisi tanpa biaya tambahan untuk Anda." />
</x-layouts.site>
