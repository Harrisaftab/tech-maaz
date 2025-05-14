<div id="preloader"></div>
<div class="cursor"></div>
    <div class="sidemenu-area sidemenu_1_active">
        <div class="sidemenu-close-btn sidemenu_close_btn">
            <i class="far fa-chevron-left"></i>
        </div>
        <div class="sidemenu-profile mb-30 is_show">
            <div class="img">
                <img src="public/assets/img/new_home/logo/logo-icon.png" alt="">
            </div>
            <h6 class="name">State To State Auto Transport</h6>
        </div>
        <div class="h2-sidemenu-wrap">
            <div class="mobile_menu"></div>
        </div>
        <div class="sidebar-mobile-menu-wrap is_show">
            <div class="mobile_menu">

            </div>
        </div>
        <div class="sidemenu-social-link mb-30 is_show">
            <h6 class="title">connect Social</h6>
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
        </div>
        <div class="sidemenu-contact-info is_show">
            <h6 class="title">Contact Information</h6>
            <div class="info-box-wrap">
                <div class="info-box">
                    <h6 class="title"><i class="fas fa-phone-alt"></i>Phone</h6>
                    <p>+1(862) 210-21739</p>
                </div>
                <div class="info-box">
                    <h6 class="title"><i class="fas fa-envelope"></i>Email</h6>
                    <p>support@statetotransport.com</p>
                </div>
                <div class="info-box">
                    <h6 class="title"><i class="fas fa-map-marker-alt"></i>Address</h6>
                    <p>310 Harrison Street <br> Boonton, NJ 07005, USA</p>
                </div>
            </div>
        </div>
    </div>
<div class="offcanvas-overlay"></div>
<!-- mobile-menu-end -->
<header> 
    <div class="hpt-header-2-area header-2-transparent sticky_header_2">
        <div class="hpt-header-2-wrap">
            <div class="container h1-container">
                <div class="hpt-header-2-content">
                    <a class="hpt-header-2-logo" href="{{ route('home') }}">
                        <img src="public/assets/img/logo/NEW_LOGO.png" alt="State-To-State-Auto-Transport-logo">
                    </a>
                    <nav class="hpt-header-2-menu" id="mobile_menu">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                                <a href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="{{ request()->routeIs('car.quote') ? 'active' : '' }}">
                                <a href="{{ route('car.quote') }}">Get Quote</a>
                            </li>
                            {{-- <li class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                                <a href="{{ route('blog') }}">Blog</a>
                            </li> --}}
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>