<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @yield('chat')
    @yield('JQlink')
    @yield('pagecss')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Andy Chao">
        <meta name="description" content="本網站作品僅提供本人作品集使用，無任何商業行為。">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            @yield('cart')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


        @yield('JSJQlink')
        <div style="background-color: rgb(0, 0, 0); text-align: center;color:white;">©2022 Copyright 趙耕誼Andy Chao. All rights reserved.</div>
    </body>
</html>
