<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('seo-title')
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon-1.png') }}">

    @include('frontend.layouts.partials.style')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Preloader Start -->
    @include('frontend.layouts.partials.preloader')
    <!-- Preloader End -->

    <!-- Dark Light Start -->
    @include('frontend.layouts.partials.switch')
    <!-- Dark Light End -->

    <!-- Top Bar Start -->
    @include('frontend.layouts.partials.top-bar')
    <!-- Top Bar End -->


    <!-- Header Area Start -->
    @include('frontend.layouts.partials.header')
    <!-- Header Area End -->


    @yield('content')

    @include('frontend.layouts.partials.footer')
    <!-- Scroll Btn Start -->
    @include('frontend.layouts.partials.scroll')
    <!-- Scroll Btn End -->



    @include('frontend.layouts.partials.script')

</body>

</html>
