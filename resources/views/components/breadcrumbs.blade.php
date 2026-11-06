@props(['items', 'light' => false])

<nav aria-label="Breadcrumb" {{ $attributes }}>
    <ol class="flex flex-wrap items-center gap-1.5 text-sm {{ $light ? 'text-white/70' : 'text-ink/55' }}">
        @foreach ($items as $label => $url)
            <li class="flex items-center gap-1.5">
                @if (! $loop->first)
                    <span aria-hidden="true" class="opacity-50">/</span>
                @endif
                @if ($url)
                    <a href="{{ $url }}" class="transition-colors {{ $light ? 'hover:text-white' : 'hover:text-tulip' }}">{{ $label }}</a>
                @else
                    <span aria-current="page" class="{{ $light ? 'text-white' : 'font-medium text-ink' }}">{{ $label }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
