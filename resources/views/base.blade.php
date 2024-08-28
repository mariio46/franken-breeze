<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="{{ asset('images/franken-ui.png') }}" rel="icon" />

        <title>{{ $title ? $title . ' / ' . config('app.name') : config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="mx-auto min-h-screen max-w-screen-2xl font-sans antialiased">
        <!-- Main Content -->
        {{ $slot }}
        <!-- /Main Content -->
    </body>
</html>
