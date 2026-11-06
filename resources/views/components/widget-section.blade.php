@props([
    'slots' => ['flights', 'tours', 'bike', 'taxi'],
    'eyebrow' => 'Cari & pesan langsung',
    'title' => 'Pesawat, tur, dan transfer dalam satu halaman',
    'lead' => 'Bandingkan harga langsung dari mitra kami. Kami bisa menerima komisi tanpa biaya tambahan untuk Anda.',
])

@php
    $widgets = config('widgets');
@endphp

<section class="py-16 sm:py-24">
    <div class="container-site">
        <div class="max-w-2xl" data-reveal>
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h2 class="display mt-4 text-3xl font-semibold sm:text-4xl">{{ $title }}</h2>
            <p class="mt-4 text-ink/65">{{ $lead }}</p>
        </div>

        <div class="mt-10 grid gap-5 lg:grid-cols-2">
            @foreach ($slots as $slot)
                <x-widget-card :class="in_array($slot, ['flights', 'taxi']) ? 'lg:col-span-2' : ''" :title="$widgets[$slot]['title']" :lead="$widgets[$slot]['lead']" :icon="$widgets[$slot]['icon']" :src="$widgets[$slot]['src']" />
            @endforeach
        </div>
    </div>
</section>
