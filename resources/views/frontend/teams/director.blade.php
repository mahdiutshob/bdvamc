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
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="{{ asset('frontend/assets/img/pages/page-banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Team</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>Team Two</li>
                        </ul>
                        <h1>Team Two</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- Team Page Area Start -->
    <div class="team__two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__two-item">
                        <div class="team__two-item-image">
                            <img src="{{ asset('frontend/assets/img/team/team-9.jpg') }}" alt="">
                        </div>
                        <div class="team__two-item-content">
                            <h4><a href="team-single.html">Steve Rhodes</a></h4>
                            <span class="text-eight">CEO Founder</span>
                            <div class="team__two-item-content-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__two-item">
                        <div class="team__two-item-image">
                            <img src="{{ asset('frontend/assets/img/team/team-10.jpg') }}" alt="">
                        </div>
                        <div class="team__two-item-content">
                            <h4><a href="team-single.html">Cansn Mina</a></h4>
                            <span class="text-eight">Sr. developer</span>
                            <div class="team__two-item-content-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__two-item">
                        <div class="team__two-item-image">
                            <img src="{{ asset('frontend/assets/img/team/team-11.jpg') }}" alt="">
                        </div>
                        <div class="team__two-item-content">
                            <h4><a href="team-single.html">Freddie Mercury</a></h4>
                            <span class="text-eight">Content Writer</span>
                            <div class="team__two-item-content-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__two-item">
                        <div class="team__two-item-image">
                            <img src="{{ asset('frontend/assets/img/team/team-12.jpg') }}" alt="">
                        </div>
                        <div class="team__two-item-content">
                            <h4><a href="team-single.html">Balm Bayrak</a></h4>
                            <span class="text-eight">Sr. Content Writer</span>
                            <div class="team__two-item-content-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__two-item">
                        <div class="team__two-item-image">
                            <img src="{{ asset('frontend/assets/img/team/team-13.jpg') }}" alt="">
                        </div>
                        <div class="team__two-item-content">
                            <h4><a href="team-single.html">Courtney Henry</a></h4>
                            <span class="text-eight">Sr. Consultant</span>
                            <div class="team__two-item-content-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__two-item">
                        <div class="team__two-item-image">
                            <img src="{{ asset('frontend/assets/img/team/team-14.jpg') }}" alt="">
                        </div>
                        <div class="team__two-item-content">
                            <h4><a href="team-single.html">Derya Kurtulus</a></h4>
                            <span class="text-eight">Project Manager</span>
                            <div class="team__two-item-content-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Page Area End -->
    <!-- Faq Area Start -->
    <div class="faq__two section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-lg-6 lg-mb-30">
                    <div class="faq__two-left">
                        <div class="faq__two-left-image">
                            <img src="{{ asset('frontend/assets/img/pages/faq-1.jpg') }}" alt="">
                            <img class="faq__two-left-image-one" src="{{ asset('frontend/assets/img/pages/faq-2.jpg') }}"
                                alt="">
                            <div class="faq__two-left-image-question left-right-animate">
                                <img src="{{ asset('frontend/assets/img/icon/questions.png') }}" alt="">
                                <h6>Have any questions?</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6">
                    <div class="faq__two-right">
                        <div class="faq__two-right-title">
                            <span class="subtitle-one">Faq Questions</span>
                            <h2>Have any questions And answers</h2>
                        </div>
                        <div class="faq__collapse mt-35">
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>How do you prioritize your work?
                                        </h6>
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content display-none">
                                        <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus
                                            ipsum, tempor quis mattis in, ornare ut tortor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>Open a Business Bank Account?</h6>
                                        <i class="far fa-minus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content active">
                                        <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus
                                            ipsum, tempor quis mattis in, ornare ut tortor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>What is required of a consultant?
                                        </h6>
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content display-none">
                                        <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus
                                            ipsum, tempor quis mattis in, ornare ut tortor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>How do consultants solve problems?
                                        </h6>
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content display-none">
                                        <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus
                                            ipsum, tempor quis mattis in, ornare ut tortor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Area End -->
@endsection
