<x-layouts.site title="Negara-negara di Eropa" description="Panduan wisata, kuliner, dan belanja untuk negara-negara favorit di Eropa.">
    <x-page-hero eyebrow="Negara-negara Eropa" title="Mau jalan-jalan ke negara mana?"
        lead="Pilih negara untuk melihat tempat wisata, kuliner, belanja, serta bandara dan stasiun penting."
        :breadcrumbs="['Beranda' => route('home'), 'Negara' => null]" />

    <section class="py-16 sm:py-24">
        <div class="container-site grid grid-cols-2 gap-3 sm:gap-5 lg:grid-cols-4">
            @foreach ($countries as $i => $country)
                <x-country-card :country="$country" :delay="($i % 4) * 80" />
            @endforeach
        </div>
    </section>
</x-layouts.site>
