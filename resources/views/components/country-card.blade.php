@props(['country', 'delay' => 0])

<a href="{{ route('countries.show', $country) }}" data-reveal="scale" style="--delay: {{ $delay }}ms"
   class="group relative isolate aspect-[3/4] overflow-hidden rounded-3xl bg-sand">
    @if ($country->photo_url)
        <img src="{{ $country->photo_url }}" alt="" loading="lazy" class="ease-smooth absolute inset-0 -z-10 size-full object-cover transition duration-[1200ms] group-hover:scale-110">
    @endif
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-ink/90 via-ink/20 to-transparent transition-opacity duration-500 group-hover:from-ink/95"></div>

    <img src="{{ $country->flag_url }}" alt="" width="36" height="24" loading="lazy" class="absolute top-4 left-4 h-6 w-9 rounded-md object-cover shadow-lg ring-2 ring-white/70">
    <span class="ease-smooth absolute top-4 right-4 grid size-9 -translate-y-2 place-items-center rounded-full bg-white text-ink opacity-0 transition duration-500 group-hover:translate-y-0 group-hover:opacity-100">
        <x-icon name="arrow-up-right" class="size-4" />
    </span>

    <div class="absolute inset-x-0 bottom-0 p-4 text-white sm:p-5">
        <h3 class="display text-xl font-semibold sm:text-2xl">{{ $country->name }}</h3>
        <p class="ease-smooth mt-1 line-clamp-2 max-h-0 text-sm leading-snug text-white/80 opacity-0 transition-all duration-500 group-hover:max-h-12 group-hover:opacity-100">{{ trim($country->title) }}</p>
    </div>
</a>
