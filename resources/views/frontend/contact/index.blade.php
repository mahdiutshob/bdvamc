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
                        <span>Contact</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>Contact Four</li>
                        </ul>
                        <h1>Contact Four</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- Contact Details Start -->
    <div class="contact__four section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact__four-info">
                        <div class="contact__four-info-icon">
                            <img src="{{ asset('frontend/assets/img/icon/locationss.png') }}" alt="">
                        </div>
                        <h4>Office Location</h4>
                        <span>You are most welcome to visit office.</span>
                        <p>8502 Preston Rd. Inglewood,<br> Maine 98380</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 wow fadeInUp" data-wow-delay=".8s">
                    <div class="contact__four-info">
                        <div class="contact__four-info-icon">
                            <img src="{{ asset('frontend/assets/img/icon/phone-call.png') }}" alt="">
                        </div>
                        <h4>Tell With US</h4>
                        <span>Keeping you always better connected.</span>
                        <p><a href="tel:+125(895)658568">+125 (895) 658 568</a></p>
                        <p><a href="tel:+125(874)452645">+125 (874) 452 645</a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="contact__four-info">
                        <div class="contact__four-info-icon">
                            <img src="{{ asset('frontend/assets/img/icon/emails.png') }}" alt="">
                        </div>
                        <h4>Quick Email</h4>
                        <span>Drop us a mail we will answer you asap.</span>
                        <p><a href="mailto:info.conbix@gmail.com">info.conbix@gmail.com</a></p>
                        <p><a href="mailto:conbix@gmail.com">conbix@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Details End -->
    <!-- Contact Form Start -->
    <div class="contact__four">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__four-form t-center">
                        <div class="contact__four-form-title">
                            <span class="subtitle-one">Get in Touch</span>
                            <h2>We are always Ready for your solution</h2>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="fal fa-user"></span>
                                        <input type="text" name="name" placeholder="Full Name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6 md-mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="far fa-envelope-open"></span>
                                        <input type="email" name="email" placeholder="Email Address"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="fal fa-book"></span>
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="far fa-comments"></span>
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact__two-right-form-item">
                                        <button class="btn-one" type="submit">Submit Message <i
                                                class="far fa-chevron-double-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
    <!-- Map Area Start -->
    <div class="contact__two-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7111398394145!2d90.40614877609357!3d23.793298487126755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c709437028dd%3A0x303f37c6e279ead!2sBDV%20AMC%20Limited!5e0!3m2!1sen!2sbd!4v1681247080598!5m2!1sen!2sbd"
            loading="lazy"></iframe>
    </div>

    <!-- Map Area End -->
@endsection
