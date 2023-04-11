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
    <div class="page__banner" data-background=" {{ asset('frontend/assets/img/pages/page-banner.jpg') }} ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Grid</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>Blog Grid</li>
                        </ul>
                        <h1>3 Columns</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- Blog Area Start -->
    <div class="blog__two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-3.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">24</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Finances and accounting are one of the hardest</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-13.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">21</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">When a small business is just starting out,</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-10.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">19</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Our consultants can make your brand a reality</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-4.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">29</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Make your business work harder for you</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 xl-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-5.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">27</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Creating a business with authentic integrity.</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-6.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">24</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Developing leaders and high performance teams.</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 xl-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-12.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">18</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Financial Consulting for Small Businesses</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-11.jpg') }}" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">17</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">We have passion for helping businesses grow</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href="single-right-sidebar.html"><img
                                    src="{{ asset('frontend/assets/img/blog/blog-14.jp') }}g" alt=""></a>
                            <div class="blog__two-item-image-date">
                                <span class="text-three">16</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Innovation to accelerate business success</a></h4>
                            <a class="btn-six" href="single-right-sidebar.html">Read More<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-80 t-center">
                <div class="col-xl-12">
                    <div class="theme__pagination">
                        <ul>
                            <li><a class="active" href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#"><i class="far fa-ellipsis-h"></i></a></li>
                            <li><a href="#">05</a></li>
                            <li><a href="#"><i class="fas fa-chevron-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
@endsection
