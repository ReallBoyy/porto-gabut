<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $portfolio['meta']['title'] }}</title>
    <meta name="description" content="{{ $portfolio['meta']['description'] }}">
    <meta name="theme-color" content="{{ $portfolio['meta']['theme_color'] }}">
    {{-- Light-only design: keep browser chrome and form controls light. --}}
    <meta name="color-scheme" content="light">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    {{-- Instrument Sans (body) + Fraunces (headings), configured in vite.config.js.
         @fonts emits the preload links and the @font-face rules at build time. --}}
    {!! Vite::fonts() !!}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    @include('partials.header')

    <main id="main">
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- Floating back-to-top control; revealed by JS after the hero scrolls away. --}}
    <button type="button" class="to-top" data-to-top hidden aria-label="Back to top">
        @include('partials.icon', ['name' => 'arrow-up'])
    </button>
</body>
</html>
