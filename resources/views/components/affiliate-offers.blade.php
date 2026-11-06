@props(['offers', 'title' => null, 'icon' => 'sparkle', 'id' => null])

@php
    $columns = [1 => 'sm:grid-cols-1', 2 => 'sm:grid-cols-2', 3 => 'sm:grid-cols-3'][min($offers->count(), 3)] ?? 'sm:grid-cols-3';
@endphp

@if ($offers->isNotEmpty())
    <div @if ($id) id="{{ $id }}" @endif {{ $attributes->class(['space-y-4', 'scroll-mt-32' => $id]) }}>
        @if ($title)
            <h3 class="flex items-center gap-2 text-sm font-semibold tracking-widest text-ink/55 uppercase">
                <x-icon :name="$icon" class="size-4 text-tulip" /> {{ $title }}
            </h3>
        @endif
        <div class="grid gap-3 {{ $columns }}">
            @foreach ($offers as ['program' => $program, 'url' => $url])
                <a href="{{ $url }}" target="_blank" rel="sponsored nofollow noopener"
                   class="ease-smooth group flex items-center gap-4 rounded-2xl bg-white p-4 ring-1 ring-ink/5 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-ink/10">
                    @if ($program->logo_url)
                        <img src="{{ $program->logo_url }}" alt="" loading="lazy" class="size-12 shrink-0 rounded-xl object-contain">
                    @else
                        <span class="display grid size-12 shrink-0 place-items-center rounded-xl bg-ink text-xl font-semibold text-white">{{ mb_substr($program->name, 0, 1) }}</span>
                    @endif
                    <span class="min-w-0 flex-1">
                        <span class="block font-semibold">{{ $program->name }}</span>
                        @if ($program->description)
                            <span class="line-clamp-2 block text-xs leading-snug text-ink/55">{{ $program->description }}</span>
                        @endif
                    </span>
                    <x-icon name="arrow-up-right" class="size-5 shrink-0 text-tulip transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </a>
            @endforeach
        </div>
    </div>
@endif
