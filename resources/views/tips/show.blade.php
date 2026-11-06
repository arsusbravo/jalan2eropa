<x-layouts.site :title="$content->title" :description="$tip['summary']">
    <x-page-hero eyebrow="Tips & info" :title="$content->title" :lead="$tip['summary']"
        :breadcrumbs="['Beranda' => route('home'), 'Tips & info' => route('tips.index'), $content->title => null]" />

    <div class="container-site grid gap-12 py-16 sm:py-24 lg:grid-cols-[1fr_20rem] lg:gap-16">
        <article class="prose-site max-w-3xl" data-reveal>{!! $content->body !!}</article>

        <aside class="min-w-0 space-y-5 lg:self-start">
            <div class="rounded-3xl bg-white p-3 ring-1 ring-ink/5" data-reveal>
                <p class="px-4 pt-3 pb-2 text-xs font-semibold tracking-widest text-ink/50 uppercase">Tips lainnya</p>
                @foreach ($others as $otherSlug => $other)
                    <a href="{{ route('tips.show', $otherSlug) }}" class="flex items-center gap-3 rounded-2xl px-3 py-3 transition-colors hover:bg-sand">
                        <span class="grid size-10 shrink-0 place-items-center rounded-xl bg-tulip/10 text-tulip"><x-icon :name="$other['icon']" class="size-5" /></span>
                        <span class="text-sm leading-snug font-medium">{{ $titles[$other['content']] ?? $otherSlug }}</span>
                    </a>
                @endforeach
            </div>

            @foreach (['bike', 'extra'] as $slot)
                <x-widget-card :compact="true" :title="config('widgets.'.$slot.'.title')" :lead="config('widgets.'.$slot.'.lead')" :icon="config('widgets.'.$slot.'.icon')" :src="config('widgets.'.$slot.'.src')" />
            @endforeach
        </aside>
    </div>

    <div class="border-t border-ink/5">
        <x-widget-section :slots="['taxi']" eyebrow="Antar jemput" title="Taksi dan transfer ke hotel Anda"
            lead="Pesan antar jemput bandara dan hotel dengan harga jelas. Kami bisa menerima komisi tanpa biaya tambahan untuk Anda." />
    </div>

    <x-plan-section :groups="$plan" eyebrow="Rekomendasi" heading="Yang mungkin Anda perlukan" :compact="true" class="border-t border-ink/5 bg-white" />
</x-layouts.site>
