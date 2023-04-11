@extends('frontend.layouts.master')

@section('seo-title')
    {{-- Title of Site --}}
    <title>About || BDV Asset Management Company Ltd.</title>
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
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="{{ asset('frontend/assets/img/pages/page-banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>About</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>Company About</li>
                        </ul>
                        <h1>Company About</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- About Company Area Start -->
    <div class="about__company section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-6 xl-mb-30">
                    <div class="about__company-left">
                        <div class="about__company-left-image dark__image">
                            <img src="{{ asset('frontend/assets/img/about/about-7.jpg') }}" alt="">
                            <img src="{{ asset('frontend/assets/img/about/about-8.jpg') }}" alt="">
                        </div>
                        <div class="about__company-left-experience">
                            <h2><span class="counter">180</span>+</h2>
                            <h6>Get national Award</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6">
                    <div class="about__company-right">
                        <div class="about__company-right-title">
                            <span class="subtitle-one">About Our Company</span>
                            <h2>Find out more about our business consulting</h2>
                            <p>Fusce quis lacus laoreet, dignissim quam eu, scelerisque tortor. Cras volutpat aliquet
                                efficitur. Quisque dignissim justo ac erat tincidunt tristique. Curabitur id tortor ipsum.
                                Suspendisse suscipit commodo turpis eu interdum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="about__one-shape-1" src="{{ asset('frontend/assets/img/shape/about-1.png') }}" alt="">
        <img class="about__one-shape-2" src="{{ asset('frontend/assets/img/shape/about-2.png') }}" alt="">
    </div>
    <!-- About Company Area End -->
    <!-- About Company Two Area Start -->
    <div class="company__two section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 lg-mb-30">
                    <div class="company__two-left">
                        <div class="company__two-left-title">
                            <span class="subtitle-one">Who we are</span>
                            <h2>best company Especially in Business</h2>
                            <p>Aenean ac vulputate nibh, sed fringilla metus. Pellentesque porttitor felis eu nunc feugiat,
                                nec condimentum magna ultricies. Nam vitae est accumsan nunc</p>
                        </div>
                        <div class="company__two-left-skill">
                            <div class="company__two-left-skill-item">
                                <h2><span class="counter">89</span>k</h2>
                                <h6>Project Completed Last Years</h6>
                            </div>
                            <div class="company__two-left-skill-item">
                                <h2><span class="counter">87</span>k</h2>
                                <h6>happy customer worldwide</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="company__two-right dark__image t-right">
                        <img class="img__full" src="{{ asset('frontend/assets/img/about/about-9.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Company Two Area End -->
    <!-- About Solution Area Start -->
    <div class="about__solution" data-background="{{ asset('frontend/assets/img/about/about-solution.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8">
                    <div class="about__solution-left xl-t-center">
                        <h2>implement solutions & achieve goals.</h2>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="about__solution-right t-right xl-t-center">
                        <a class="btn-one" href="contact.html">Get Free Consultations<i
                                class="far fa-chevron-double-right"></i></a>
                        <img class="about__solution-right-shape left-right-animate"
                            src="{{ asset('frontend/assets/img/shape/about-solution.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Solution Area End -->
@endsection
