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
        <div class="page__banner" data-background="{{asset('frontend/assets/img/pages/page-banner.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__banner-content">
                            <span>Services</span>
                            <ul>
                                <li><a href="index.html">Home</a><span>|</span></li>
                                <li>Our Services</li>
                            </ul>
                            <h1>Our Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Area End -->
        <!-- Services Area Start -->
        <div class="services__page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="services__three-item page">
                            <img src="{{asset('frontend/assets/img/pages/services-5.jpg')}}" alt="">
                            <div class="services__three-item-content page">
                                <div class="services__three-item-content-icon">
                                    <img src="{{asset('frontend/assets/img/icon/services-9.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Business Consulting</a></h4>
                                <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                        <div class="services__three-item page">
                            <img src="{{asset('frontend/assets/img/pages/services-6.jpg')}}" alt="">
                            <div class="services__three-item-content page">
                                <div class="services__three-item-content-icon">
                                    <img src="{{asset('frontend/assets/img/icon/services-10.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Digital Solutions</a></h4>
                                <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
                        <div class="services__three-item page">
                            <img src="{{asset('frontend/assets/img/pages/services-7.jpg')}}" alt="">
                            <div class="services__three-item-content page">
                                <div class="services__three-item-content-icon">
                                    <img src="{{asset('frontend/assets/img/icon/service-11.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Human research</a></h4>
                                <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                        <div class="services__three-item page">
                            <img src="{{asset('frontend/assets/img/pages/services-8.jpg')}}" alt="">
                            <div class="services__three-item-content page">
                                <div class="services__three-item-content-icon">
                                    <img src="{{asset('frontend/assets/img/icon/service-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Creative Layout</a></h4>
                                <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                        <div class="services__three-item page">
                            <img src="{{asset('frontend/assets/img/pages/services-9.jpg')}}" alt="">
                            <div class="services__three-item-content page">
                                <div class="services__three-item-content-icon">
                                    <img src="{{asset('frontend/assets/img/icon/services-33.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">audit marketing</a></h4>
                                <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services__three-item page">
                            <img src="{{asset('frontend/assets/img/pages/services-10.jpg')}}" alt="">
                            <div class="services__three-item-content page">
                                <div class="services__three-item-content-icon">
                                    <img src="{{asset('frontend/assets/img/icon/service-7.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Machine Learning</a></h4>
                                <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- Cta Area Start -->
        <div class="cta__area">
            <div class="container">
                <div class="row cta__area-bg align-items-center">
                    <div class="col-xxl-5 col-xl-4">
                        <div class="cta__area-title">
                            <h2>Get Free Quote</h2>
                            <span class="text-two">Perfect solution for your company.</span>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-8 pr-0">
                        <div class="cta__area-form">
                            <form>
                                <div class="cta__area-form-item md-mb-30">
                                    <input type="text" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="cta__area-form-item md-mb-30">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="cta__area-form-item">
                                    <button class="btn-four" type="submit">Get Quote<i class="far fa-chevron-double-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cta Area End -->
        <!-- Solutions Area Start -->
        <div class="solutions__two section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 lg-mb-30">
                        <div class="solutions__two-title">
                            <span class="subtitle-one">Advance Solutions</span>
                            <h2>We help for Planing</h2>
                            <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-mb-30">
                        <div class="solutions__two-item">
                            <div class="solutions__two-item-icon">
                                <img src="{{asset('frontend/assets/img/icon/solutions-1.png')}}" alt="">
                            </div>
                            <h4>Digital Consulting</h4>
                            <p>Pellentesque vitae velit quis ligula vehicula ornare a et quam.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 md-mb-30">
                        <div class="solutions__two-item">
                            <div class="solutions__two-item-icon">
                                <img src="{{asset('frontend/assets/img/icon/solutions-2.png')}}" alt="">
                            </div>
                            <h4>Strategic planning</h4>
                            <p>Pellentesque vitae velit quis ligula vehicula ornare a et quam.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="solutions__two-item">
                            <div class="solutions__two-item-icon">
                                <img src="{{asset('frontend/assets/img/icon/solutions-3.png')}}" alt="">
                            </div>
                            <h4>customer service</h4>
                            <p>Pellentesque vitae velit quis ligula vehicula ornare a et quam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Solutions Area End -->
        <!-- Testimonial Area Start -->
        <div class="testimonial__area section-padding">
            <img class="testimonial__area-shape" src="{{asset('frontend/assets/img/shape/about.png')}}" alt="">
            <div class="container">
                <div class="row mb-70 align-items-end">
                    <div class="col-xl-8 col-lg-8 lg-mb-30">
                        <div class="testimonial__area-title lg-t-center">
                            <span class="subtitle-one">Testimonial</span>
                            <h2>What People say about Us</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="testimonial__area-button t-right lg-t-center">
                            <div class="testimonial__area-button-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                            <div class="testimonial__area-button-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="swiper testimonial__area-slider">
                            <div class="swiper-wrapper">
                                <div class="testimonial__area-item swiper-slide">
                                    <div class="testimonial__area-item-client">
                                        <div class="testimonial__area-item-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial__area-item-client-image">
                                            <img src="{{asset('frontend/assets/img/avatar/avatar-1.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial__area-item-client-title">
                                            <h5>Flores, Juanita</h5>
                                            <span class="text-eight">Co Founder</span>
                                        </div>
                                    </div>
                                    <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                    <div class="testimonial__area-item-reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimonial__area-item swiper-slide">
                                    <div class="testimonial__area-item-client">
                                        <div class="testimonial__area-item-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial__area-item-client-image">
                                            <img src="{{asset('frontend/assets/img/avatar/avatar-2.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial__area-item-client-title">
                                            <h5>Cooper, Kristin</h5>
                                            <span class="text-eight">Co Founder</span>
                                        </div>
                                    </div>
                                    <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                    <div class="testimonial__area-item-reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimonial__area-item swiper-slide">
                                    <div class="testimonial__area-item-client">
                                        <div class="testimonial__area-item-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial__area-item-client-image">
                                            <img src="{{asset('frontend/assets/img/avatar/avatar-3.jpg')}}" alt="">
                                        </div>
                                        <div class="testimonial__area-item-client-title">
                                            <h5>Johnsie Jock</h5>
                                            <span class="text-eight">sr. Designer</span>
                                        </div>
                                    </div>
                                    <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                    <div class="testimonial__area-item-reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
@endsection
