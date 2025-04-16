<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Haptic - Web And Agency HTML Template">
    <meta name="keywords" content="agency, app, business, company, corporate, designer, freelance, fullpage, modern, office, personal, portfolio, professional, web, web agency">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="public/assets/img/logo/f-icon.png" type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/fontawesome.css">
    <link rel="stylesheet" href="public/assets/css/flaticon_aina.css">
    <link rel="stylesheet" href="public/assets/css/animate.css">
    <link rel="stylesheet" href="public/assets/css/global.css">
    <link rel="stylesheet" href="public/assets/css/swiper.min.css">
    <link rel="stylesheet" href="public/assets/css/meanmenu.css">
    <link rel="stylesheet" href="public/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>

    <!-- Header Start -->
    @include('include.frontend.header')
    <!-- Header end -->
    <div id="main">
        <div id="smooth-content" >
    
            @yield('content')
            <!-- Banner-Slider Start -->
            
            <!-- footer Start -->
            @include('include.frontend.footer')
            <!-- footer End -->
        </div>
    </div>

    <div class="cart_sidebar">
        <div class="cart_sidebar_top">
            <h2 class="heading_title">Cart</h2>
            <button type="button" class="cart_close_btn tx-close"></button>
        </div>
        <div class="cart_items_list">
            <div class="cart_item">
                <div class="item_image">
                    <img src="public/assets/img/new_home/product-img/s_img1.jpg" alt="image_not_found">
                </div>
                <div class="item_content headline">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$19.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="public/assets/img/new_home/product-img/s_img2.jpg" alt="image_not_found">
                </div>
                <div class="item_content headline">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$22.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="public/assets/img/new_home/product-img/s_img3.jpg" alt="image_not_found">
                </div>
                <div class="item_content headline">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$43.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="public/assets/img/new_home/product-img/s_img4.jpg" alt="image_not_found">
                </div>
                <div class="item_content headline">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$14.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
        <div class="cart_sidebar_bottom">
            <div class="total_price">
                <span>Sub Total:</span>
                <span>$87.00</span>
            </div>
            <div class="cart_sidebar_button">
                <a href="#">View Cart</a>
                <a href="#">Checkout</a>
            </div>
        </div>
    </div>

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <i  class="icon-1 fal fa-long-arrow-up"></i>
            <i class="fal icon-2 fa-spinner fa-pulse"></i>
        </div>
    </div>
    <!-- JS here -->
    <script src="public/assets/js/jquery-3.6.0.min.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/swiper-bundle.min.js"></script>
    <script src="public/assets/js/appear.js"></script>
    <script src="public/assets/js/counter.js"></script>
    <script src="public/assets/js/gsap.min.js"></script>
    <script src="public/assets/js/knob.js"></script>
    <script src="public/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="public/assets/js/jquery.counterup.min.js"></script>
    <script src="public/assets/js/waypoints.min.js"></script>
    <script src="public/assets/js/parallax.min.js"></script>
    <script src="public/assets/js/ScrollTrigger.min.js"></script>
    <script src="public/assets/js/ScrollToPlugin.min.js"></script>
    <script src="public/assets/js/ScrollSmoother.min.js"></script>
    <script src="public/assets/js/SplitText.min.js"></script>
    <script src="public/assets/js/jquery.filterizr.js"></script>
    <script src="public/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="public/assets/js/hover-revel.js"></script>
    <script src="public/assets/js/split-type.min.js"></script>
    <script src="public/assets/js/parallax-scroll.js"></script>
    <script src="public/assets/js/jquery.marquee.min.js"></script>
    <script src="public/assets/js/wow.min.js"></script>
    <script src="public/assets/js/jquery.meanmenu.min.js"></script>
    <script src="public/assets/js/tilt.jquery.min.js"></script>
    <script src="public/assets/js/matter.min.js"></script>
    <script src="public/assets/js/script.js"></script>
    <script src="public/assets/js/home-6.js"></script>
</body>
</html>