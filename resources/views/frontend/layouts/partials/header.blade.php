    <div class="header__area header__sticky">
        <div class="container custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="index.html"><img class="dark-n" src="{{ asset('frontend/assets/img/logo-1.png') }}"
                                alt=""><img class="light-n" src="{{ asset('frontend/assets/img/logo-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu menu-responsive">
                        <ul id="mobilemenu">
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-two.html">Home 02</a></li>
                                    <li><a href="index-three.html">Home 03</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html">Services 01</a></li>
                                            <li><a href="services-two.html">Services 02</a></li>
                                            <li><a href="services-right-sidebar.html">Single Right Sidebar</a></li>
                                            <li><a href="services-left-sidebar.html">Single Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pricing.html">Price Plans</a></li>
                                    <li><a href="faq.html">FAQ's</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li class="menu-item-has-children"><a href="#">Teams</a>
                                        <ul class="sub-menu">
                                            <li><a href="team-filter.html">Team Filter</a></li>
                                            <li><a href="team.html">Team 01</a></li>
                                            <li><a href="team-two.html">Team 02</a></li>
                                            <li><a href="team-three.html">Team 03</a></li>
                                            <li><a href="team-single.html">Team Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="request-quote.html">Request Quote</a></li>
                                    <li><a href="404-error.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Project</a>
                                <ul class="sub-menu">
                                    <li><a href="project-filter.html">Project Filter</a></li>
                                    <li class="menu-item-has-children"><a href="#">Project Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="project-two.html">2 Columns</a></li>
                                            <li><a href="project-three.html">3 Columns</a></li>
                                            <li><a href="project-four.html">4 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="project-single.html">Project Single</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">Blog Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-two.html">2 Columns</a></li>
                                            <li><a href="blog-grid-three.html">3 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Blog Standard</a>
                                        <ul class="sub-menu">
                                            <li><a href="standard-left-sidebar.html">Left SideBar</a></li>
                                            <li><a href="standard-full-width.html">Full Width</a></li>
                                            <li><a href="standard-right-sidebar.html">Right SideBar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Blog Single</a>
                                        <ul class="sub-menu">
                                            <li><a href="single-left-sidebar.html">Left SideBar</a></li>
                                            <li><a href="single-full-width.html">Full Width</a></li>
                                            <li><a href="single-right-sidebar.html">Right SideBar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Contact</a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">Contact Style 01</a></li>
                                    <li><a href="contact-two.html">Contact Style 02</a></li>
                                    <li><a href="contact-three.html">Contact Style 03</a></li>
                                    <li><a href="contact-four.html">Contact Style 04</a></li>
                                </ul>
                            </li>
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
                        <div class="header__area-menubar-right-box-btn">
                            <a class="btn-one" href="request-quote.html">Request quote<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                        <!-- sidebar Menu Start -->
                        <div class="header__area-menubar-right-sidebar-popup">
                            <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                            <div class="header__area-menubar-right-sidebar-popup-logo">
                                <a href="index.html"> <img src="{{ asset('frontend/assets/img/logo-2.png') }}"
                                        alt=""> </a>
                            </div>
                            <p>Morbi et tellus imperdiet, aliquam nulla sed, dapibus erat. Aenean dapibus sem non purus
                                venenatis vulputate. Donec accumsan eleifend blandit. Nullam auctor ligula</p>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact">
                                <h4 class="mb-30">Get In Touch</h4>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-phone-alt icon-animation"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Call Now</span>
                                        <h6><a href="tel:+125(895)658568">+125 (895) 658 568</a></h6>
                                    </div>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Quick Email</span>
                                        <h6><a href="mailto:info.help@gmail.com">info.help@gmail.com</a></h6>
                                    </div>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                        <span>Office Address</span>
                                        <h6><a href="#">PV3M+X68 Welshpool United Kingdom</a></h6>
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
