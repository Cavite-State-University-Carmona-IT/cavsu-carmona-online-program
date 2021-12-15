<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cavsu Extension Services') }}</title>

        @include('layouts.partials.styles')

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased" style="font-family: 'Open Sans', sans-serif;" x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
        <!-- Loading screen -->
        <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center" style="background-color: #F3F4F6;">
            <div class="la-ball-spin-fade-rotating la-2x"  style="color: #006A39";>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation.nav-component')
            <main>
                {{ $slot }}
            </main>
        </div>

        @include('layouts.navigation.footer-component')

        @stack('modals')




        @include('layouts.partials.scripts')



    </body>
</html>
