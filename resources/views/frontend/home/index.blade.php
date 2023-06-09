@extends('frontend.layouts.master')

@section('seo-title')
    {{-- Title of Site --}}
    <title>Home || BDV Asset Management Company Ltd.</title>
    {{-- Seo Meta Title --}}
    <meta name="description" content="Conbix - Business Consulting HTML5 Template">
    <meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template">
    <meta name="author" content="ThemeOri">
@endsection

@section('stylesheet')
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
@endsection

@section('script')
    {{-- Main JS --}}
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    {{-- Counter Up JS --}}
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    {{-- Popper JS --}}
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    {{-- Progressbar JS --}}
    <script src="{{ asset('frontend/assets/js/progressbar.min.js') }}"></script>
    {{-- Magnific Popup JS --}}
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    {{-- Swiper Bundle JS --}}
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    {{-- Isotope JS --}}
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    {{-- Waypoints JS --}}
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    {{-- Mean Menu JS --}}
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
    {{-- Custome Js --}}
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
@endsection

@section('content')
    {{-- Banner Area Start --}}
    @include('frontend.home.banner')
    {{-- Banner Area End --}}

    {{-- About Area Start --}}
    @include('frontend.home.about')
    {{-- About Area End --}}

    {{-- Work Area Start --}}
    @include('frontend.home.work')
    {{-- Work Area End --}}

    {{-- Services Area Start --}}
    @include('frontend.home.service')
    {{-- Services Area End --}}

    {{-- Cta Area Start --}}
    @include('frontend.home.cta')
    {{-- Cta Area End --}}

    {{-- Experience Area Start --}}
    @include('frontend.home.experience')
    {{-- Experience Area End --}}

    {{-- Portfolio Area Start --}}
    @include('frontend.home.portfolio')
    {{-- Portfolio Area End --}}

    {{-- Testimonial Area Start --}}
    @include('frontend.home.testimonial')
    {{-- Testimonial Area End --}}

    {{-- Get In Touch Start End --}}
    @include('frontend.home.touch')
    {{-- Get In Touch Area End --}}

    {{-- Emargency Help Area Start --}}
    @include('frontend.home.emargency')
    {{-- Emargency Help Area End --}}

    {{-- Blog Area Start --}}
    @include('frontend.home.blog')
    {{-- Blog Area End --}}
@endsection
