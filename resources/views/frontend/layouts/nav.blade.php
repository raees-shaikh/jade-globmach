<div class="main-page-wrapper">
    <!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->



    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- offcanvas start  -->
    <div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
        <div class="offcanvas-header">
            <a data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fas fa-times search-close" id="search-close"></i>
            </a>
        </div>
        <div class="offcanvas-body">
            <!-- Fullscreen search -->
            <div class="search-wrap">
                <form method="get">
                    <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                </form>
            </div>
            <!-- end fullscreen search -->
        </div>
    </div>
    <!-- offcanvas end  -->

    <!-- header-area start -->
    <header class="theme-main-menu theme-menu-two black-bg">
        <div class="container header-custom-container pt-20 pb-20 d-none">
            <div class="row ">
                <div class="col-lg-3 d-none d-lg-inline-block">
                    <div class="logo-area">
                        <a class="front w-100 img-fluid" href="{{ url('/') }}"><img
                                src="{{asset('frontend/images/logo.jpeg') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-12 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <ul
                        class="list-none header-info d-flex align-items-center justify-content-center justify-content-lg-end">
                        <li>
                            <div class="header-info-box">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/img/icon/phone.svg') }}" alt="Phone">
                                </div>
                                {{-- <div class="text-content">
                                    <span>Call</span>
                                    <h6 class="top-head"><a href="tel:00919500271679">00919500271679</a></h6>
                                </div> --}}
                            </div>
                        </li>
                        <li class="d-none d-md-inline-block">
                            <div class="header-info-box">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/img/icon/location.svg') }}" alt="Phone">
                                </div>
                                <div class="text-content">
                                    <span>Location</span>
                                    <div class="right-language">
                                        <div class="dropdown">
                                            <a class="language-btn dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Mumbai
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li>
                                                    <a class="dropdown-item text-capitalize"
                                                        href="#">Coimbatore</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item text-capitalize" href="#">Ahmedabad
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-none d-lg-inline-block">
                            <div class="header-info-box">
                                <div class="icon email-svg">
                                    <img src="{{ asset('frontend/assets/img/icon/download.png') }}" alt="Phone"
                                        width="35px">
                                </div>
                                <div class="text-content">
                                    <span>Email</span>
                                    <h6 class="top-head">
                                        <a href="mailto:machinery@jadeglobmach.com">machinery@jadeglobmach.com</a>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-header-area pt-15 pb-10 py-0">
            <div class="container header-custom-container">
                <div class="row align-items-center justify-content-xl-center">
                    <div class="col-lg-12 col-6 text-lg-center mx-auto">
                        <div class="logo-area d-lg-none d-md-inline-block">
                            <a class="front" href="{{ url('/') }}"><img
                                    src="{{ asset('frontend/images/logo.jpeg') }}" alt="Header-logo"></a>
                        </div>
                        <div class="main-menu d-none d-lg-block ">
                            <nav id="mobile-menu">
                                <ul class="menu-list ps-0 justify-content-center mx-auto">
                                   <li class="d-lg-inline-block d-none logo-custom-align">
                                    <a class="front" href="{{ url('/') }}"><img
                                        src="{{ asset('frontend/images/logo.jpeg') }}" alt="Header-logo" width="150px" class="w-custom-logo"></a>
                                   </li>

                                    <li class="{{ URL::current() == url('/') ? 'active' : '' }}">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="{{ URL::current() == url('/company-profile') ? 'active' : '' }}">
                                        <a href="{{ url('/company-profile') }}">Company Profile</a>
                                    </li>
                                    <li class="{{ URL::current() == url('/latest-offers') ? 'active' : '' }}">
                                        <a href="{{ url('/latest-offers') }}">Latest Offers</a>
                                    </li>
                                    <li class="{{ URL::current() == url('/business-process') ? 'active' : '' }}">
                                        <a href="{{ url('/business-process') }}">Business Process</a>
                                    </li>
                                    <li class="{{ URL::current() == url('/exhibitions') ? 'active' : '' }}">
                                        <a href="{{ url('/exhibitions') }}">Exhibitions</a>
                                    </li>
                                    <li class="{{ URL::current() == url('/contact-us') ? 'active' : '' }} d-xl-none d-inline-block">
                                        <a href="{{ url('/contact-us') }}">Contact Us</a>
                                    </li>
                                    <li class="{{ URL::current() == url('/contact-us') ? 'active' : '' }} d-xl-inline-block d-none contact-cust-btn">
                                        <a href="{{url('/contact-us')}}"
                                        class="ht_btn  text-capitalize hover-bg nav-contact text-white">Contact Us</a>

                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 d-lg-none">
                        <div class="right-nav mb-0 d-flex align-items-center justify-content-end ms-5">
                            <div class="search-area me-4 d-none">
                                <a class="search_input" href="#" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <img src="frontend/assets/img/icon/search.svg" alt="Search">
                                </a>
                            </div>
                            <div class="hamburger-menu">
                                <a class="round-menu" href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.theme-main-menu -->
    </header>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <!-- offset-sidebar start -->
        <div class="offset-sidebar mt-0">
            <div class="offset-widget offset-logo mb-30">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('frontend/images/logo.jpeg') }}" alt="logo">
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="offset-widget mb-0">
                <div class="info-widget">
                    <h4 class="offset-title mb-20">About Us</h4>
                    <p class="mb-30">
                        Jade Globmach are leading Indian Agents-Brokers for RELOCATION of New, Unused, Used-Secondhand Industrial Plants, Machinery & Technology from different Countries worldwide.
                    </p>
                </div>
            </div>
            <div class="offset-widget mb-30 pr-10">
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-10">Contact Details</h4>

                    {{-- <p>
                        <i class="fal fa-phone"></i>
                        <a href="tel:00919500271679">00919500271679</a>
                    </p> --}}
                    <p class="mb-0">
                        <i class="fal fa-envelope-open"></i>
                        <a href="mailto:machinery@jadeglobmach.com" class="sidebar-email">machinery@jadeglobmach.com</a>
                    </p>
                     <p>
                        <i class="fal fa-address-book"></i>
                        Mumbai, Coimbatore, <span class="ahemd-mx">Ahmedabad</span>
                    </p>
                </div>
            </div>

        </div>
        <!-- offset-sidebar end -->

    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->
