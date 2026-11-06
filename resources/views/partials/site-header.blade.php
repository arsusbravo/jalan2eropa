@php
    $tips = [
        ['Visa Schengen', 'Cara mengurus visa ke Eropa', 'passport', 'visa'],
        ['Transportasi', 'Kereta, bus, dan pesawat', 'train', 'transportasi'],
        ['Persiapan perjalanan', 'Checklist sebelum berangkat', 'suitcase', 'persiapan'],
        ['Tax refund', 'Klaim pajak belanja Anda', 'receipt', 'tax-refund'],
    ];
    $linkBase = 'relative inline-flex items-center gap-1 rounded-full px-4 py-2 text-sm font-medium transition-colors duration-300';
@endphp

<header
    data-header
    @if ($transparent) data-transparent @endif
    class="group/header fixed inset-x-0 top-0 z-50 transition-all duration-500 ease-smooth
           data-[scrolled]:bg-white/80 data-[scrolled]:shadow-[0_1px_0_rgba(14,26,43,.06),0_12px_30px_-18px_rgba(14,26,43,.35)] data-[scrolled]:backdrop-blur-xl
           {{ $transparent ? '' : 'bg-white/80 shadow-[0_1px_0_rgba(14,26,43,.06)] backdrop-blur-xl' }}"
>
    <div class="container-site flex h-[72px] items-center justify-between gap-6">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5" aria-label="{{ config('app.name') }} — beranda">
            <img src="{{ asset('storage/images/logo.png') }}" alt="" width="36" height="36" class="size-9 transition-transform duration-500 ease-smooth hover:rotate-[-8deg] hover:scale-110">
            <span class="display text-xl font-semibold transition-colors duration-300
                {{ $transparent ? 'text-white group-data-[scrolled]/header:text-ink' : 'text-ink' }}">
                Jalan<span class="{{ $transparent ? 'text-[#ff5a64] group-data-[scrolled]/header:text-tulip' : 'text-tulip' }}">2</span>Eropa
            </span>
        </a>

        @php
            $textClass = $transparent
                ? 'text-white/90 hover:bg-white/15 group-data-[scrolled]/header:text-ink group-data-[scrolled]/header:hover:bg-sand'
                : 'text-ink hover:bg-sand';
        @endphp

        <nav class="hidden items-center gap-1 lg:flex" aria-label="Navigasi utama">
            <a href="{{ route('home') }}" class="{{ $linkBase }} {{ $textClass }}" @if (request()->routeIs('home')) aria-current="page" @endif>Beranda</a>

            {{-- Countries mega menu --}}
            <div data-dropdown class="group/dd relative">
                <button type="button" data-dropdown-trigger aria-expanded="false" aria-haspopup="true" class="{{ $linkBase }} {{ $textClass }}">
                    Negara-negara Eropa
                    <x-icon name="chevron-down" class="size-4 transition-transform duration-300 group-data-[open]/dd:rotate-180" />
                </button>
                <div class="pointer-events-none invisible absolute left-1/2 top-full w-[640px] -translate-x-1/2 translate-y-3 pt-3 opacity-0 transition-all duration-300 ease-smooth group-data-[open]/dd:pointer-events-auto group-data-[open]/dd:visible group-data-[open]/dd:translate-y-0 group-data-[open]/dd:opacity-100">
                    <div class="overflow-hidden rounded-3xl border border-ink/5 bg-white p-3 text-ink shadow-2xl shadow-ink/15">
                        <div class="grid grid-cols-3 gap-1">
                            @foreach ($navCountries as $navCountry)
                                <a href="{{ route('countries.show', $navCountry) }}" class="group/item flex items-center gap-3 rounded-2xl px-3 py-2.5 transition-colors hover:bg-sand">
                                    <img src="{{ $navCountry->flag_url }}" alt="" width="28" height="19" loading="lazy" class="h-[19px] w-7 rounded-[3px] object-cover shadow-sm ring-1 ring-ink/10 transition-transform duration-300 group-hover/item:scale-110">
                                    <span class="text-sm font-medium">{{ $navCountry->name }}</span>
                                </a>
                            @endforeach
                        </div>
                        <a href="{{ route('countries.index') }}" class="mt-2 flex items-center justify-between rounded-2xl bg-sand px-4 py-3 text-sm font-semibold transition-colors hover:bg-tulip hover:text-white">
                            Lihat semua negara <x-icon name="arrow-right" class="size-4" />
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('pesan') }}" class="{{ $linkBase }} {{ $textClass }}" @if (request()->routeIs('pesan')) aria-current="page" @endif>Pesan</a>

            {{-- Tips dropdown --}}
            <div data-dropdown class="group/dd relative">
                <button type="button" data-dropdown-trigger aria-expanded="false" aria-haspopup="true" class="{{ $linkBase }} {{ $textClass }}">
                    Tips &amp; info
                    <x-icon name="chevron-down" class="size-4 transition-transform duration-300 group-data-[open]/dd:rotate-180" />
                </button>
                <div class="pointer-events-none invisible absolute left-1/2 top-full w-80 -translate-x-1/2 translate-y-3 pt-3 opacity-0 transition-all duration-300 ease-smooth group-data-[open]/dd:pointer-events-auto group-data-[open]/dd:visible group-data-[open]/dd:translate-y-0 group-data-[open]/dd:opacity-100">
                    <div class="rounded-3xl border border-ink/5 bg-white p-2 text-ink shadow-2xl shadow-ink/15">
                        @foreach ($tips as [$label, $hint, $icon, $path])
                            <a href="{{ route('tips.show', $path) }}" class="flex items-center gap-3 rounded-2xl px-3 py-2.5 transition-colors hover:bg-sand">
                                <span class="grid size-10 place-items-center rounded-xl bg-tulip/10 text-tulip"><x-icon :name="$icon" class="size-5" /></span>
                                <span>
                                    <span class="block text-sm font-semibold">{{ $label }}</span>
                                    <span class="block text-xs text-ink/60">{{ $hint }}</span>
                                </span>
                            </a>
                        @endforeach
                        <a href="{{ route('tips.index') }}" class="mt-1 flex items-center justify-between rounded-2xl bg-sand px-4 py-3 text-sm font-semibold transition-colors hover:bg-tulip hover:text-white">
                            Semua tips <x-icon name="arrow-right" class="size-4" />
                        </a>
                    </div>
                </div>
            </div>

        </nav>

        <div class="flex items-center gap-2">
            <a href="{{ route('planner') }}" class="btn btn-primary hidden !py-2.5 sm:inline-flex">
                Rencanakan perjalanan
            </a>
            <button type="button" data-menu-button aria-expanded="false" aria-controls="mobile-menu" aria-label="Buka menu"
                class="grid size-11 place-items-center rounded-full transition-colors lg:hidden {{ $transparent ? 'text-white group-data-[scrolled]/header:text-ink' : 'text-ink' }}">
                <x-icon name="menu" />
            </button>
        </div>
    </div>
</header>

{{-- Mobile menu --}}
<div id="mobile-menu" data-mobile-menu
    class="group/m invisible fixed inset-0 z-[60] bg-ink/60 opacity-0 backdrop-blur-sm transition-all duration-500 data-[open]:visible data-[open]:opacity-100 lg:hidden">
    <div class="ease-smooth absolute inset-y-0 right-0 flex w-[88%] max-w-sm translate-x-full flex-col overflow-y-auto bg-cream p-6 shadow-2xl transition-transform duration-500 group-data-[open]/m:translate-x-0">
        <div class="mb-6 flex items-center justify-between">
            <span class="display text-xl font-semibold">Jalan<span class="text-tulip">2</span>Eropa</span>
            <button type="button" onclick="document.querySelector('[data-menu-button]').click()" class="grid size-10 place-items-center rounded-full bg-sand" aria-label="Tutup menu"><x-icon name="close" class="size-5" /></button>
        </div>
        <nav class="flex flex-col gap-1 text-lg font-medium" aria-label="Navigasi seluler">
            <a href="{{ route('home') }}" class="rounded-xl px-3 py-2.5 hover:bg-sand">Beranda</a>
            <a href="{{ route('pesan') }}" class="rounded-xl px-3 py-2.5 hover:bg-sand">Pesan</a>
            <a href="{{ route('planner') }}" class="rounded-xl px-3 py-2.5 hover:bg-sand">Rencanakan perjalanan</a>
            @foreach ($tips as [$label, , , $path])
                <a href="{{ route('tips.show', $path) }}" class="rounded-xl px-3 py-2.5 hover:bg-sand">{{ $label }}</a>
            @endforeach
        </nav>
        <a href="{{ route('countries.index') }}" class="mt-6 mb-3 block text-xs font-semibold tracking-widest text-ink/50 uppercase">Negara-negara Eropa &rarr;</a>
        <div class="grid grid-cols-2 gap-1">
            @foreach ($navCountries as $navCountry)
                <a href="{{ route('countries.show', $navCountry) }}" class="flex items-center gap-2.5 rounded-xl px-3 py-2 text-sm font-medium hover:bg-sand">
                    <img src="{{ $navCountry->flag_url }}" alt="" width="24" height="16" loading="lazy" class="h-4 w-6 rounded-[2px] object-cover ring-1 ring-ink/10">
                    {{ $navCountry->name }}
                </a>
            @endforeach
        </div>
    </div>
</div>
