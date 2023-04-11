    <div class="header__area header__sticky">
        <div class="container custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="{{route('index')}}"><img class="dark-n" src="{{ asset('frontend/assets/img/logo-1.png') }}"
                                alt=""><img class="light-n" src="{{ asset('frontend/assets/img/logo-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu menu-responsive">
                        <ul id="mobilemenu">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li class="menu-item-has-children"><a href="#">ABOUT US</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('about')}}">ABOUT COMPANY</a></li>
                                    <li class="menu-item-has-children"><a href="#">TEAMS</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('team.director')}}">BOARD OF DIRECTORS</a></li>
                                            <li><a href="{{route('about')}}">MANAGEMENT TEAM</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-two.html">WHY CHOOSE BDVAMC?</a></li>
                                    <li><a href="index-three.html">MISSION & VISSION</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="#">Fundes</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">BDV AMC FUNDS</a>
                                        <ul class="sub-menu">
                                            <li><a href="project-two.html">Reports</a></li>
                                            <li><a href="project-three.html">Downloads</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="{{route('service')}}">Services</a></li>

                            <li class="menu-item-has-children"><a href="#">Knowledge</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">News & Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="project-two.html">News</a></li>
                                            <li><a href="project-three.html">Events</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="project-two.html">Frequently Asked Questions</a></li>
                                </ul>
                            </li>

                            <li><a href="pricing.html">Contact US</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__area-menubar-right">
                    <div class="header__area-menubar-right-box">
                        <div class="header__area-menubar-right-box-search">
                            <div class="search">
                                <span class="header__area-menubar-right-box-search-icon open"><i
                                        class="fal fa-search"></i></span>
                            </div>
                            <div class="header__area-menubar-right-box-search-box">
                                <form>
                                    <input type="search" placeholder="Search Here.....">
                                    <button type="submit"><i class="fal fa-search"></i>
                                    </button>
                                </form> <span class="header__area-menubar-right-box-search-box-icon"><i
                                        class="fal fa-times"></i></span>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-sidebar">
                            <div class="header__area-menubar-right-sidebar-popup-icon"><img
                                    src="{{ asset('frontend/assets/img/icon/menu.png') }}" alt=""></div>
                        </div>
                        {{-- <div class="header__area-menubar-right-box-btn">
                            <a class="btn-one" href="request-quote.html">Request quote<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div> --}}
                        <!-- sidebar Menu Start -->
                        <div class="header__area-menubar-right-sidebar-popup">
                            <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                            <div class="header__area-menubar-right-sidebar-popup-logo">
                                <a href="index.html"> <img src="{{ asset('frontend/assets/img/logo-2.png') }}"
                                        alt=""> </a>
                            </div>
                            <p>BDV Asset Management Company Limited (BDV AMC) Is A Subsidiary Of BD Venture Limited (One Of The Pioneered Venture Capital And Private Equity Companies Owned By Several Banks, NBFIs, Insurance Companies And Other Institutes. BDV AMC Received The Asset Management Company (AMC) License From The Bangladesh Securities & Exchange Commission (BSEC) In February 2017.</p>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact">
                                <h4 class="mb-30">Get In Touch</h4>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-phone-alt icon-animation"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Call Now</span>
                                        <h6><a href="tel:+125(895)658568">+88 (01718) 507 989</a></h6>
                                    </div>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Quick Email</span>
                                        <h6><a href="mailto:info.help@gmail.com">info@bdvamc.com</a></h6>
                                    </div>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Office Address</span>
                                        <h6><a href="#">Flat 6B (6'th Floor), 36 Delta Dahlia,
                                            Kamal Ataturk Avenue,
                                            Banani, Dhaka - 1212</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-overlay"></div>
                        <!-- sidebar Menu Start -->
                    </div>
                    <div class="responsive-menu"></div>
                </div>
            </div>
        </div>
    </div>
