<footer class="relative overflow-hidden bg-ink text-white">
    <div class="pointer-events-none absolute -right-24 -top-24 size-96 rounded-full bg-tulip/20 blur-3xl"></div>

    <div class="container-site relative grid gap-12 py-16 md:grid-cols-12">
        <div class="md:col-span-5">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('storage/images/logo.png') }}" alt="" width="44" height="44" class="size-11">
                <span class="display text-2xl font-semibold">Jalan<span class="text-tulip">2</span>Eropa</span>
            </a>
            <p class="mt-5 max-w-sm text-sm leading-relaxed text-white/65">
                Panduan perjalanan ke Eropa dalam Bahasa Indonesia — dari tempat wisata, kuliner, dan belanja
                sampai visa, transportasi, dan rencana rute.
            </p>
        </div>

        <div class="md:col-span-3">
            <h2 class="text-xs font-semibold tracking-[0.18em] text-white/50 uppercase">Jelajahi</h2>
            <ul class="mt-5 space-y-3 text-sm">
                <li><a class="text-white/80 transition hover:text-white" href="{{ route('pesan') }}">Pesan hotel &amp; tiket</a></li>
                <li><a class="text-white/80 transition hover:text-white" href="{{ route('planner') }}">Route planner</a></li>
                <li><a class="text-white/80 transition hover:text-white" href="{{ route('tips.show', 'visa') }}">Visa Schengen</a></li>
                <li><a class="text-white/80 transition hover:text-white" href="{{ route('tips.show', 'transportasi') }}">Transportasi</a></li>
                <li><a class="text-white/80 transition hover:text-white" href="{{ route('tips.show', 'persiapan') }}">Persiapan perjalanan</a></li>
                <li><a class="text-white/80 transition hover:text-white" href="{{ route('tips.show', 'tax-refund') }}">Tax refund</a></li>
            </ul>
        </div>

        <div class="md:col-span-4">
            <h2 class="text-xs font-semibold tracking-[0.18em] text-white/50 uppercase">Negara</h2>
            <ul class="mt-5 grid grid-cols-2 gap-x-4 gap-y-3 text-sm">
                @foreach ($navCountries as $navCountry)
                    <li>
                        <a class="flex items-center gap-2 text-white/80 transition hover:text-white" href="{{ route('countries.show', $navCountry) }}">
                            <img src="{{ $navCountry->flag_url }}" alt="" width="20" height="14" loading="lazy" class="h-3.5 w-5 rounded-[2px] object-cover">
                            {{ $navCountry->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="relative border-t border-white/10">
        <div class="container-site flex flex-col items-center justify-between gap-2 py-6 text-xs text-white/50 sm:flex-row">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Seluruh hak cipta dilindungi.</p>
            <p class="max-w-md text-center sm:text-left">Beberapa tautan adalah tautan afiliasi: kami bisa mendapat komisi bila Anda memesan, tanpa biaya tambahan untuk Anda.</p>
            <p>Dibuat dengan <span class="text-tulip">&hearts;</span> untuk para pejalan Indonesia.</p>
        </div>
    </div>
</footer>
