@props(['title', 'lead' => null, 'icon' => 'sparkle', 'src', 'compact' => false])

<div {{ $attributes->class(['flex flex-col overflow-hidden rounded-3xl bg-white ring-1 ring-ink/5', $compact ? 'p-4' : 'p-5 sm:p-7']) }} data-reveal>
    <div class="flex items-start gap-4">
        <span class="bg-tulip/10 text-tulip grid size-12 shrink-0 place-items-center rounded-2xl"><x-icon :name="$icon" class="size-6" /></span>
        <div>
            <h3 class="display text-xl font-semibold sm:text-2xl">{{ $title }}</h3>
            @if ($lead)
                <p class="mt-1 text-sm text-ink/60">{{ $lead }}</p>
            @endif
        </div>
    </div>

    <div class="widget-frame relative mt-4 {{ $compact ? 'min-h-48' : 'min-h-72' }} flex-1 overflow-hidden rounded-2xl bg-cream/60">
        <div class="widget-skeleton absolute inset-0 animate-pulse space-y-3 p-5" aria-hidden="true">
            <div class="h-11 rounded-xl bg-sand"></div>
            <div class="h-11 rounded-xl bg-sand"></div>
            <div class="h-11 w-2/3 rounded-xl bg-sand"></div>
        </div>
        <div class="relative">
            <script async src="{{ $src }}" charset="utf-8"></script>
        </div>
    </div>
</div>
