@props(['groups', 'eyebrow' => 'Rencanakan perjalanan', 'heading', 'lead' => null, 'id' => 'rencana', 'compact' => false])

@if ($groups->isNotEmpty())
    <section id="{{ $id }}" {{ $attributes->class([$compact ? 'py-12 sm:py-16' : 'scroll-mt-32 py-20 sm:py-28']) }}>
        <div class="container-site">
            <div class="max-w-2xl" data-reveal>
                <p class="eyebrow">{{ $eyebrow }}</p>
                <h2 class="display mt-4 text-3xl font-semibold sm:text-4xl">{{ $heading }}</h2>
                @if ($lead)
                    <p class="mt-4 text-ink/65">{{ $lead }}</p>
                @endif
            </div>

            <div class="mt-10 space-y-10" data-reveal style="--delay: 100ms">
                @foreach ($groups as $category => $offers)
                    <x-affiliate-offers :offers="$offers" :id="$id.'-'.$category" :title="\App\Support\AffiliateOffers::CATEGORIES[$category][0] ?? $category" :icon="\App\Support\AffiliateOffers::CATEGORIES[$category][1] ?? 'sparkle'" />
                @endforeach
            </div>

            <p class="mt-8 text-xs text-ink/45" data-reveal>Tautan di bagian ini adalah tautan afiliasi: kami bisa mendapat komisi bila Anda memesan, tanpa biaya tambahan untuk Anda.</p>
        </div>
    </section>
@endif
