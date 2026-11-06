@props(['eyebrow' => null, 'title', 'lead' => null, 'breadcrumbs' => []])

<section class="relative isolate overflow-hidden bg-ink text-white">
    <div class="pointer-events-none absolute -top-24 -right-24 -z-10 size-[28rem] rounded-full bg-tulip/25 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-32 -left-16 -z-10 size-96 rounded-full bg-leaf/25 blur-3xl"></div>
    <div class="container-site py-14 sm:py-20">
        @if ($breadcrumbs)
            <x-breadcrumbs :items="$breadcrumbs" :light="true" class="mb-8" data-reveal />
        @endif
        @if ($eyebrow)
            <p class="eyebrow !text-white/80 [&::before]:!bg-white/50" data-reveal>{{ $eyebrow }}</p>
        @endif
        <h1 class="display mt-4 max-w-4xl text-4xl leading-[1.05] font-semibold sm:text-6xl" data-reveal style="--delay: 80ms">{{ $title }}</h1>
        @if ($lead)
            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-white/75" data-reveal style="--delay: 160ms">{{ $lead }}</p>
        @endif
        {{ $slot }}
    </div>
</section>
