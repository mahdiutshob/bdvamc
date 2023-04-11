@extends('frontend.layouts.master')

@section('seo-title')
    {{-- Title of Site --}}
    <title>Teams Director || BDV Asset Management Company Ltd.</title>
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
                        <span>Team</span>
						<ul>
							<li><a href="index.html">Home</a><span>|</span></li>
							<li>Our Expert</li>
						</ul>
						<h1>Our Expert</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner Area End -->
	<!-- Team Page Area Start -->
    <div class="team__area section-padding dark__image">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Courtney Henry</a></h5>
							<span class="text-eight">Sr. Consultant</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Darrell Steward</a></h5>
							<span class="text-eight">Sr. Manager</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Guy Hawkins</a></h5>
							<span class="text-eight">Jr. Designer</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-4.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Elton John</a></h5>
							<span class="text-eight">Sr. Developer</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-5.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Thomas Girardi</a></h5>
							<span class="text-eight">Sr. Consultant</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 lg-mb-30">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-6.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Erika Jayne</a></h5>
							<span class="text-eight">Sr. Manager</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-7.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Devon Lane</a></h5>
							<span class="text-eight">Sr. Designer</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="{{asset('frontend/assets/img/team/team-8.jpg')}}" alt="">
							<div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
                                </div>
								<span><i class="fas fa-share-alt"></i></span>
                            </div>
						</div>
						<div class="team__area-item-content page">
							<h5><a href="team-single.html">Ralph Edwards</a></h5>
							<span class="text-eight">Jr. Developer</span>
						</div>
					</div>
				</div>
            </div>
            <div class="row mt-70">
                <div class="col-xl-12 t-center">
                    <h6>Consulting With our Expert Team Members <a href="#">schedule meeting</a></h6>
                </div>
            </div>
        </div>
    </div>
	<!-- Team Page Area End -->
	<!-- Faq Area Start -->
    <div class="faq__area section-padding pt-0">
        <div class="container">
            <div class="row mb-70">
                <div class="col-xl-12">
					<div class="faq__area-title t-center">
						<span class="subtitle-one">Frequently Ask Questions</span>
						<h2>What does Conbix do?</h2>
					</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 xl-mb-10">
                    <div class="faq-collapse">
                        <div class="faq-collapse-item">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>How do you manage consulting effectively?</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>How do consultants solve problems?</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>How can I improve my consulting skills?</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>What is required of a consultant?</h6>
                                    <i class="far fa-minus"></i>
                                </div>
                                <div class="faq-collapse-item-card-header-content active">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-accordion">
                        <div class="faq-accordion-item">
                            <div class="faq-accordion-item-card">
                                <div class="faq-accordion-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>Do you need a degree to become a consultant?</h6>
                                    <i class="far fa-minus"></i>
                                </div>
                                <div class="faq-accordion-item-card-header-content display-none">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item">
                            <div class="faq-accordion-item-card">
                                <div class="faq-accordion-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>Is a consulting business profitable?</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-accordion-item-card-header-content active">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item">
                            <div class="faq-accordion-item-card">
                                <div class="faq-accordion-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>Can you scale a consulting business?</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-accordion-item-card-header-content display-none">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item">
                            <div class="faq-accordion-item-card">
                                <div class="faq-accordion-item-card-header">
                                    <h6><span class="far fa-question-circle"></span>How do I sell myself as a consultant?</h6>
                                    <i class="far fa-plus"></i>
                                </div>
                                <div class="faq-accordion-item-card-header-content display-none">
                                    <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
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
