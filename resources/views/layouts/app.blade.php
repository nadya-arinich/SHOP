<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Pronia">
        <title>{{ config('app.name', 'Pronia') }}</title>
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">


        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/Pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.min.css')}}">

        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
       
        @stack('styles')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('scripts')

    </head>
    <body>
        <div class="main-wrapper">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="main-header-area">
                    {{ $header }}
                </header>
            @endif
            <br>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

    </body>
</html>
