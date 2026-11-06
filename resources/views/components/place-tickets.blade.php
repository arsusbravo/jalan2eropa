@props(['place', 'links'])

@if ($links->isNotEmpty())
    <div {{ $attributes->class(['rounded-3xl bg-white p-6 ring-1 ring-ink/5']) }}>
        <h2 class="flex items-center gap-2 text-sm font-semibold tracking-widest text-ink/50 uppercase"><x-icon name="camera" class="text-tulip size-4" /> Tiket &amp; tur</h2>
        <p class="mt-3 leading-snug font-semibold">{{ $place->name }}</p>
        <p class="mt-1 text-sm text-ink/55">Cek harga dan jadwal langsung di mitra kami.</p>
        <div class="mt-4 grid gap-2">
            @foreach ($links as ['program' => $program, 'url' => $url])
                <a href="{{ $url }}" target="_blank" rel="sponsored nofollow noopener" class="btn btn-primary group w-full justify-between !rounded-2xl !py-3">
                    <span>Cek di {{ $program->name }}</span>
                    <x-icon name="arrow-up-right" class="size-4 transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </a>
            @endforeach
        </div>
        <p class="mt-3 text-[0.7rem] leading-snug text-ink/40">Tautan afiliasi: kami bisa mendapat komisi tanpa biaya tambahan untuk Anda.</p>
    </div>
@endif
