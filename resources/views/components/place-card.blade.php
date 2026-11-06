@props(['country', 'place', 'delay' => 0])

<a href="{{ route('places.show', [$country, $place]) }}" data-reveal style="--delay: {{ $delay }}ms"
   class="ease-smooth group flex flex-col overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-ink/5 transition duration-500 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-ink/10">
    <div class="relative aspect-[4/3] overflow-hidden bg-gradient-to-br from-ink to-ink-soft">
        @if ($place->thumb_url)
            <img src="{{ $place->thumb_url }}" alt="{{ $place->name }}" loading="lazy" class="ease-smooth size-full object-cover transition duration-[1200ms] group-hover:scale-110">
        @else
            <div class="grid size-full place-items-center text-white/30">
                <x-icon :name="match ($place->type) { 'shopping' => 'bag', 'airport' => 'route', 'train station' => 'train', default => 'camera' }" class="size-14" />
            </div>
        @endif
        <span class="absolute top-3 left-3 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-ink backdrop-blur">{{ $place->type_label }}</span>
    </div>
    <div class="flex flex-1 flex-col p-5">
        <h3 class="display text-xl leading-snug font-semibold">{{ $place->name }}</h3>
        @if ($place->excerpt)
            <p class="mt-2 line-clamp-3 flex-1 text-sm leading-relaxed text-ink/60">{{ $place->excerpt }}</p>
        @endif
        <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-tulip">
            Selengkapnya <x-icon name="arrow-right" class="size-4 transition-transform duration-300 group-hover:translate-x-1.5" />
        </span>
    </div>
</a>
