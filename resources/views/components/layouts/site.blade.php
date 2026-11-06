@props([
    'title' => null,
    'description' => 'Panduan lengkap liburan ke Eropa dalam Bahasa Indonesia: tempat wisata, kuliner, belanja, transportasi, visa, dan rencana perjalanan.',
    'transparentHeader' => false,
])

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ? $title.' · ' : '' }}{{ config('app.name') }}{{ $title ? '' : ' — Panduan Liburan ke Eropa' }}</title>
        <meta name="description" content="{{ $description }}">
        <meta name="theme-color" content="#0e1a2b">
        <meta property="og:title" content="{{ $title ?? config('app.name') }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:type" content="website">

        <link rel="icon" href="{{ asset('storage/images/icon.png') }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ asset('storage/images/logo-sq-xl.png') }}">

        @fonts
        @vite(['resources/css/site.css', 'resources/js/site.js'])
        @stack('head')

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YBVH1TPW7E"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-YBVH1TPW7E');
        </script>
    </head>
    <body class="min-h-screen">
        <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-full focus:bg-white focus:px-4 focus:py-2">Lewati ke konten</a>

        @include('partials.site-header', ['transparent' => $transparentHeader])

        <main id="main" @class(['pt-[72px]' => ! $transparentHeader])>
            {{ $slot }}
        </main>

        @include('partials.site-footer')
    </body>
</html>
