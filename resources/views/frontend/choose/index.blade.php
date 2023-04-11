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
                        <span>WHY BDVAMC</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>Project Single</li>
                        </ul>
                        <h1>Project Single</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- Project Details Area Start -->
    <div class="project__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project__details-area">
                        <div class="project__details-area-image dark__image">
                            <img src="{{ asset('frontend/assets/img/portfolio/project-details.jpg') }}" alt="">
                        </div>
                        <div class="project__details-area-meta">
                            <div class="project__details-area-meta-item">
                                <h6>Date :<span>29 December, 2022</span></h6>
                            </div>
                        </div>
                        <h2 class="mb-30">We offer consulting to both small and large companies</h2>
                        <p class="mb-25">Pellentesque sit amet justo consectetur, aliquam erat nec, interdum neque. Aliquam
                            eget lacinia massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean tempor,
                            lectus quis dictum posuere, mauris nisl pellentesque urna, eget sagittis tortor lacus at urna.
                            Quisque rutrum sollicitudin tristique. Nunc imperdiet, enim pulvinar rhoncus gravida, sem nisl
                            efficitur sapien, ac elementum augue metus quis mi. Curabitur aliquam est ut sapien laoreet, vel
                            dictum erat rhoncus. Sed at ex odio.</p>
                        <p>Fusce ornare mauris arcu, eget placerat erat porttitor at. Cras non justo consectetur, tempus
                            lectus a, tempor arcu. Proin luctus sagittis augue, vitae aliquet felis dignissim nec. Nam eget
                            nunc auctor, condimentum odio id, facilisis libero. Cras pellentesque risus in est dignissim
                            eleifend. Ut accumsan urna sed dictum faucibus. Integer condimentum vulputate sapien, id posuere
                            eros tincidunt in</p>
                        <div class="row mt-35 mb-40 dark__image">
                            <div class="col-sm-4 sm-mb-30">
                                <img class="img__full"
                                    src="{{ asset('frontend/assets/img/portfolio/project-details-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="col-sm-4 sm-mb-30">
                                <img class="img__full"
                                    src="{{ asset('frontend/assets/img/portfolio/project-details-2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="col-sm-4">
                                <img class="img__full"
                                    src="{{ asset('frontend/assets/img/portfolio/project-details-3.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <h3 class="mb-30">The Challenge</h3>
                        <p class="mb-35">Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus
                            ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit. Sed
                            sed nunc ullamcorper, hendrerit nunc a, vestibulum urna. Fusce vel blandit erat. Nulla
                            vestibulum faucibus neque eget ornare. Nam lobortis tincidunt semper</p>
                        <div class="project__details-area-list">
                            <span><i class="far fa-check"></i>It's essential to work with business consultants who
                                have</span>
                            <span><i class="far fa-check"></i>Business consultants may charge by the project or hour, or you
                                may need to pay daily or monthly retainers.</span>
                            <span><i class="far fa-check"></i>Meet with the board of directors and employees.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Details Area End -->
@endsection
