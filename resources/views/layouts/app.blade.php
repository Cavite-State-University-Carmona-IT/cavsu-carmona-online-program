<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css" integrity="sha512-ajhUYg8JAATDFejqbeN7KbF2zyPbbqz04dgOLyGcYEk/MJD3V+HJhJLKvJ2VVlqrr4PwHeGTTWxbI+8teA7snw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link href="{{ asset('assets') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"> --}}

        <!-- Fonts -->
        {{-- <link href="{{ asset('assets') }}/vendor/font-style/stylesheet.css" rel="stylesheet"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

        {{-- <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')</style> --}}

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" style="font-family: 'Open Sans', sans-serif;">
        <x-jet-banner />

        @yield('content')

        @stack('modals')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @yield('page-script')


        <script>
            function openModal(key) {
                document.getElementById(key).showModal();
                document.body.setAttribute('style', 'overflow: hidden;');
                document.getElementById(key).children[0].scrollTop = 0;
                document.getElementById(key).children[0].classList.remove('opacity-0');
                document.getElementById(key).children[0].classList.add('opacity-100')
            }

            function modalClose(key) {
                document.getElementById(key).children[0].classList.remove('opacity-100');
                document.getElementById(key).children[0].classList.add('opacity-0');
                setTimeout(function () {
                    document.getElementById(key).close();
                    document.body.removeAttribute('style');
                }, 100);
            }
        </script>

        @livewireScripts

    </body>
</html>
