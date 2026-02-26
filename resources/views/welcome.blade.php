<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techpark IT - Innovation with technology</title>
    <!-- favicons Icons - Add your favicon files to assets/images/favicons/ -->
    <link rel="icon" type="image/x-icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💼</text></svg>">
    <meta name="description" content="IT Solutions &amp; Technology Laravel Template ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}">
    <!-- Font Awesome from CDN (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
    <!-- Flaticon/Custom Icons - Requires font files in assets/fonts/ folder -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/twentytwenty.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/sliding-text.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/counter.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/process.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/brand.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/team.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/event.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/why-choose.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/page-header.css') }}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fixes.css') }}">
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <!--Start Preloader-->
    <div class="loader js-preloader" style="display: none;">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--End Preloader-->
    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="https://laravel-techguru.mnsithub.com/index#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="https://laravel-techguru.mnsithub.com/index"><img
                                        src="{{ asset('frontend/assets/images/logo-1.png') }}" alt=""></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore et magna aliqua. Ut enim ad minim veniam laboris.</p>
                            </div>
                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="https://laravel-techguru.mnsithub.com/assets/inc/sendemail.php"
                                    class="contact-form-validated" novalidate="novalidate">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required=""
                                            aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required=""
                                            aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="thm-btn form-inner__btn">Submit Now<span
                                                class="fas fa-arrow-right"></span></button>
                                    </div>
                                    <div class="result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar-widget content -->
    <div class="page-wrapper">

        <header class="main-header-two">
            <div class="main-menu-two__top">
                <div class="main-menu-two__top-inner">
                    
                    <ul class="list-unstyled main-menu-two__contact-list">
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <p>Mirpur-06, Dhaka, Bangladesh</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:techparkitsolutions@gmail.com">techparkitsolutions@gmail.com</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:+8801683392241">+8801683392241</a></p>
                            </div>
                        </li>
                    </ul>
                     <div class="main-menu-two__btn-box">
                                <a href="#contact" class="thm-btn">Get in
                                    Touch<span class="fas fa-arrow-right"></span></a>
                            </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                                <a href="#home"><img src="{{ asset('frontend/assets/images/logo_big.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-two__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="current">
                                    <a href="#home">Home</a>
                                </li>
                                <li>
                                    <a href="#about">About</a>
                                </li>
                                <li>
                                    <a href="#services">Services</a>
                                </li>
                                <li>
                                    <a href="#why-choose">Why Choose Us</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a href="#events">Events</a>
                                </li>
                                <li>
                                    <a href="#testimonial">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__search-box">
                                <a href="https://laravel-techguru.mnsithub.com/index#"
                                    class="main-menu-two__search searcher-toggler-box fas fa-search"></a>
                            </div>
                          
                            <div class="main-menu-two__nav-sidebar-icon">
                                <a class="navSidebar-button" href="#">
                                    <span class="icon-dots-menu-one"></span>
                                    <span class="icon-dots-menu-two"></span>
                                    <span class="icon-dots-menu-three"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content">
                <div class="main-menu-two__wrapper">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                                <a href="https://laravel-techguru.mnsithub.com/index"><img
                                        src="{{ asset('frontend/assets/images/logo-1.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-two__main-menu-box">
                            <a href="https://laravel-techguru.mnsithub.com/index#" class="mobile-nav__toggler"><i
                                    class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu  current ">
                                    <a href="https://laravel-techguru.mnsithub.com/index#">Home </a>
                                    <ul>
                                        <li>

                                            <section class="home-showcase">
                                                <div class="container">
                                                    <div class="home-showcase__inner">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="{{ asset('frontend/assets/images/home-showcase-1-1.jpg') }}"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="https://laravel-techguru.mnsithub.com/index"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span
                                                                                    class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="https://laravel-techguru.mnsithub.com/index-one-page"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span
                                                                                    class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        01</h3>
                                                                    <!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-4">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="{{ asset('frontend/assets/images/home-showcase-1-2.jpg') }}"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="https://laravel-techguru.mnsithub.com/index2"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span
                                                                                    class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="https://laravel-techguru.mnsithub.com/index2-one-page"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span
                                                                                    class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        02
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-4">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="{{ asset('frontend/assets/images/home-showcase-1-3.jpg') }}"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="https://laravel-techguru.mnsithub.com/index3"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span
                                                                                    class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="https://laravel-techguru.mnsithub.com/index3-one-page"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span
                                                                                    class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        03
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->


                                                        </div><!-- /.row -->
                                                    </div><!-- /.home-showcase__inner -->

                                                </div><!-- /.container -->
                                            </section>

                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://laravel-techguru.mnsithub.com/about">About</a>
                                </li>
                                <li class="dropdown ">
                                    <a href="https://laravel-techguru.mnsithub.com/index#">Pages</a>
                                    <ul class="shadow-box">
                                        <li><a href="https://laravel-techguru.mnsithub.com/team">Team</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/team-carousel">Team
                                                Carousel</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/team-details">Team
                                                Details</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/portfolio">Portfolio</a>
                                        </li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/portfolio-details">Portfolio
                                                Details</a></li>
                                        <li><a
                                                href="https://laravel-techguru.mnsithub.com/testimonials">Testimonials</a>
                                        </li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/testimonials-carousel">Testimonial
                                                Carousel</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/pricing">Pricing</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/gallery">Gallery</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/faq">FAQs</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/404">404 Error</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/coming-soon">Coming Soon</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a href="https://laravel-techguru.mnsithub.com/index#">Services</a>
                                    <ul class="shadow-box">
                                        <li><a href="https://laravel-techguru.mnsithub.com/services">Services</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/services-carousel">Services
                                                Carousel</a></li>
                                        <li><a
                                                href="https://laravel-techguru.mnsithub.com/threat-detection-prevention">Threat
                                                Detection</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/endpoint-device-security">Device
                                                Security</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/data-protection-privacy">Data
                                                Protection</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/backup-recovery">Backup
                                                &amp; Recovery</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/advanced-technology">Advanced
                                                Technology</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/cloud-managed-services">Cloud
                                                managed services</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a href="https://laravel-techguru.mnsithub.com/index#">Shop</a>
                                    <ul class="shadow-box">
                                        <li><a href="https://laravel-techguru.mnsithub.com/products">Products</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/product-details">Product
                                                Details</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/cart">Cart</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/checkout">Checkout</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/wishlist">Wishlist</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/sign-up">Sign Up</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/login">Login</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a href="https://laravel-techguru.mnsithub.com/index#">Blog</a>
                                    <ul class="shadow-box">
                                        <li><a href="https://laravel-techguru.mnsithub.com/blog">Blog</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/blog-carousel">Blog
                                                Carousel</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/blog-list">Blog List</a>
                                        </li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/blog-list-2">Blog List
                                                Two</a></li>
                                        <li><a href="https://laravel-techguru.mnsithub.com/blog-details">Blog
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://laravel-techguru.mnsithub.com/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__search-box">
                                <a href="https://laravel-techguru.mnsithub.com/index#"
                                    class="main-menu-two__search searcher-toggler-box fas fa-search"></a>
                            </div>
                            <div class="main-menu-two__btn-box">
                                <a href="https://laravel-techguru.mnsithub.com/contact" class="thm-btn">Get in
                                    Touch<span class="fas fa-arrow-right"></span></a>
                            </div>
                            <div class="main-menu-two__nav-sidebar-icon">
                                <a class="navSidebar-button" href="#">
                                    <span class="icon-dots-menu-one"></span>
                                    <span class="icon-dots-menu-two"></span>
                                    <span class="icon-dots-menu-three"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!-- /.stricky-header -->

        @php
        // Include Homepage Dynamic Content Data
        require resource_path('views/data/homepage-data.blade.php');
        @endphp

        <!--Main Slider Two Start-->
        <section id="home" class="main-slider-two">
            <div class="swiper-container thm-swiper__slider swiper-container-fade swiper-container-initialized swiper-container-horizontal"
                data-swiper-options="{&quot;slidesPerView&quot;: 1, &quot;loop&quot;: true,
                &quot;effect&quot;: &quot;fade&quot;,
                &quot;pagination&quot;: {
                &quot;el&quot;: &quot;#main-slider-pagination&quot;,
                &quot;type&quot;: &quot;bullets&quot;,
                &quot;clickable&quot;: true
                },
                &quot;navigation&quot;: {
                &quot;nextEl&quot;: &quot;#main-slider__swiper-button-next&quot;,
                &quot;prevEl&quot;: &quot;#main-slider__swiper-button-prev&quot;
                },
                &quot;autoplay&quot;: {
                    &quot;delay&quot;: 8000
                } 
            }">
                <div class="swiper-wrapper">
                    @foreach ($sliderData as $index => $slide)
                        <div class="swiper-slide" data-swiper-slide-index="{{ $index }}">
                            <div class="main-slider-two__bg"
                                style="background-image: url({{ asset($slide['background_image']) }});">
                            </div>
                            <ul class="list-unstyled main-slider-two__menu">
                                <li><a href="#about">Help</a></li>
                                <li><a href="#contact">Support</a></li>
                                <li><a href="#services">Services</a></li>
                            </ul>
                            <div class="main-slider-two__social-box">
                                <h4 class="main-slider-two__social-title">Follow Us:</h4>
                                <div class="main-slider-two__social-box-inner">
                                    <a href="https://facebook.com/techparkit" target="_blank"><span
                                            class="fab fa-facebook-f"></span></a>
                                    <a href="https://twitter.com/techparkit" target="_blank"><span
                                            class="fab fa-twitter"></span></a>
                                    <a href="https://linkedin.com/company/techparkit" target="_blank"><span
                                            class="fab fa-linkedin-in"></span></a>
                                </div>
                            </div>

                            <!--Brand Two Start -->
                            <div class="brand-two">
                                <div class="brand-two__wrapper">
                                    <div class="brand-two__inner">
                                        <div class="brand-two__left">
                                            <div class="main-slider__trustpilot-box">
                                                <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                    <li>
                                                        <div class="main-slider__trustpilot-img">
                                                            <img src="{{ asset('frontend/assets/images/main-slider-trustpilot-img-1.jpg') }}"
                                                                alt="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="main-slider__trustpilot-img">
                                                            <img src="{{ asset('frontend/assets/images/main-slider-trustpilot-img-2.jpg') }}"
                                                                alt="">
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="main-slider__trustpilot-content-box">
                                                    <div class="main-slider__trustpilot-logo">
                                                        <img src="{{ asset('frontend/assets/images/main-slider-trustpilot-logo.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="main-slider__trustpilot-rating-review">
                                                        <p class="main-slider__trustpilot-rating">5.0 Excellent</p>
                                                        <p class="main-slider__trustpilot-review">Reviews <span
                                                                class="odometer odometer-auto-theme"
                                                                data-count="250">250</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-two__right">
                                            <div class="brand-two__carousel owl-theme owl-carousel">
                                                <div class="item">
                                                    <div class="brand-two__single">
                                                        <div class="brand-two__img">
                                                            <img src="{{ asset('frontend/assets/images/brand-1-1.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="brand-two__single">
                                                        <div class="brand-two__img">
                                                            <img src="{{ asset('frontend/assets/images/brand-1-2.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="brand-two__single">
                                                        <div class="brand-two__img">
                                                            <img src="{{ asset('frontend/assets/images/brand-1-3.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="brand-two__single">
                                                        <div class="brand-two__img">
                                                            <img src="{{ asset('frontend/assets/images/brand-1-4.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="brand-two__single">
                                                        <div class="brand-two__img">
                                                            <img src="{{ asset('frontend/assets/images/brand-1-5.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Brand Two End -->

                            <div class="main-slider-two__shape-1"></div>
                            <div class="main-slider-two__shape-2 float-bob-x">
                                <img src="{{ asset('frontend/assets/images/main-slider-two-shape-2.png') }}"
                                    alt="">
                            </div>
                            <div class="main-slider-two__shape-3 float-bob-y">
                                <img src="{{ asset('frontend/assets/images/main-slider-two-shape-3.png') }}"
                                    alt="">
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-two__content">
                                            <div class="main-slider-two__sub-title-box">
                                                <div class="main-slider-two__sub-title-icon">
                                                    <img src="{{ asset('frontend/assets/images/main-slider-sub-title-icon.png') }}"
                                                        alt="">
                                                </div>
                                                <p class="main-slider-two__sub-title">{{ $slide['subtitle'] }}</p>
                                            </div>
                                            <h2 class="main-slider-two__title">{!! $slide['title'] !!}</h2>
                                            <p class="main-slider-two__text">{!! $slide['description'] !!}</p>
                                            <div class="main-slider-two__btns-box">
                                                <div class="main-slider-two__btn-box-1">
                                                    <a href="{{ $slide['btn_primary_link'] }}" class="thm-btn">
                                                        {{ $slide['btn_primary_text'] }}<span
                                                            class="fas fa-arrow-right"></span>
                                                    </a>
                                                </div>
                                                <div class="main-slider-two__btn-box-2">
                                                    <a href="{{ $slide['btn_secondary_link'] }}" class="thm-btn">
                                                        {{ $slide['btn_secondary_text'] }}<span
                                                            class="fas fa-arrow-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="main-slider-two__shield-check-icon">
                                                <img src="{{ asset('frontend/assets/images/main-slider-shield-check-icon.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>



                <!-- If we need navigation buttons -->
                <div class="main-slider-two__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next" tabindex="0"
                        role="button" aria-label="Next slide">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev" tabindex="0"
                        role="button" aria-label="Previous slide">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                </div>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </section>
        <!--Main Slider Two End-->

        <!--About Two Start -->
        <section id="about" class="about-two">
            <div class="about-two__shape-2"></div>
            <div class="about-two__shape-3">
                <img src="{{ asset('frontend/assets/images/about-two-shape-3.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="{{ asset('frontend/assets/images/about-two-img-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="about-two__img-2">
                                    <img src="{{ asset('frontend/assets/images/about-two-img-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="about-two__shape-1"></div>
                            </div>
                            <div class="about-two__client-box">
                                <ul class="about-two__client-img-list list-unstyled">
                                    <li>
                                        <div class="about-two__client-img">
                                            <img src="{{ asset('frontend/assets/images/about-two-client-img-1-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-two__client-img">
                                            <img src="{{ asset('frontend/assets/images/about-two-client-img-1-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-two__client-img">
                                            <img src="{{ asset('frontend/assets/images/about-two-client-img-1-3.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                class="fas fa-plus"></span></a>
                                    </li>
                                </ul>
                                <p class="about-two__client-text"><span class="odometer odometer-auto-theme"
                                        data-count="120">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">1</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">0</span></span></span></span></span>
                                        </div>
                                    </span><span>K</span> Satisfied Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">About Us</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                U</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                k</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                Y</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                B</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div> <span>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    P</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    e</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    n</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    a</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    l</div>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;"><span>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    w</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    h</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    O</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    u</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    r</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    b</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    e</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    s</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    C</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    u</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    n</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    g</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    -</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    E</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    d</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    g</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    e</div>
                                            </div>
                                        </span>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                I</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                T</div>
                                        </div>
                                    </div>
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                S</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                g</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                w</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <p class="about-two__text">Transform your business with our innovative IT solutions,
                                tailored to address your unique challenges and drive growth in today’s digital
                                landscape.</p>
                            <div class="about-two__points-box">
                                <ul class="about-two__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>
                                        <p>Customized Solutions for<br> Every Business</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>
                                        <p>Enhanced Security and Data<br> Protection</p>
                                    </li>
                                </ul>
                                <ul class="about-two__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>
                                        <p>Scalable Infrastructure for<br> Growth</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-check-circle"></span>
                                        </div>
                                        <p>Continuous system<br> monitoring and expert<br> support</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-two__experience-contact-and-btn">
                                <div class="about-two__experience-box">
                                    <div class="about-two__experience-count-box">
                                        <h3 class="odometer odometer-auto-theme" data-count="25">
                                            <div class="odometer-inside"><span class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span
                                                            class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">2</span></span></span></span></span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span
                                                            class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">5</span></span></span></span></span>
                                            </div>
                                        </h3>
                                        <span> </span>
                                    </div>
                                    <p class="about-two__experience-text">Years of
                                        <br> Experience
                                    </p>
                                </div>
                                <div class="about-two__call-box">
                                    <div class="about-two__call-icon">
                                        <span class="fas fa-headset"></span>
                                    </div>
                                    <div class="about-two__call-content">
                                        <span>call us for inquiry</span>
                                        <p><a href="tel:00123456767"> 00 (123) 456767</a></p>
                                    </div>
                                </div>
                                <div class="about-two__btn-box">
                                    <a href="https://laravel-techguru.mnsithub.com/about" class="thm-btn">Learn
                                        More<span class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End -->

        <!-- Counter Two Start -->
        <section class="counter-two">
            <div class="counter-two__bg-shape"
                style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/shapes/counter-two-bg-shape.png);">
            </div>
            <div class="container">
                <div class="row">
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="fas fa-trophy"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer odometer-auto-theme" data-count="120">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">1</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">0</span></span></span></span></span>
                                        </div>
                                    </h3>
                                    <span> </span>
                                </div>
                                <p class="counter-two__text">Creative Plus award</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer odometer-auto-theme" data-count="300">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">3</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">0</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">0</span></span></span></span></span>
                                        </div>
                                    </h3>
                                    <span> </span>
                                </div>
                                <p class="counter-two__text">Expert Team Members</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="fas fa-comment"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer odometer-auto-theme" data-count="20">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">0</span></span></span></span></span>
                                        </div>
                                    </h3>
                                    <span>M</span>
                                </div>
                                <p class="counter-two__text">Happy Clients Review</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="fas fa-folder"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer odometer-auto-theme" data-count="1.5">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">1</span></span></span></span></span><span
                                                class="odometer-formatting-mark odometer-radix-mark">.</span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span>
                                        </div>
                                    </h3>
                                    <span>K</span>
                                </div>
                                <p class="counter-two__text">Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                </div>
            </div>
        </section>
        <!-- Counter Two End -->

        <!-- Services Two Start -->
        <section id="services" class="services-two">
            <div class="services-two__shape-1"></div>
            <div class="container">
                <div class="services-two__top">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape-1"></div>
                            <span class="section-title__tagline">Our Services</span>
                            <div class="section-title__tagline-shape-2"></div>
                        </div>
                        <h2 class="section-title__title title-animation" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: start; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        Y</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        u</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        r</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        B</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        u</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        s</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        n</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        s</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        s</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        w</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        h</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        C</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        u</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        n</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        g</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        -</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        E</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        d</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        g</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        I</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        T</div>
                                </div>
                            </div>
                            <div class="split-line" style="display: block; text-align: start; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        S</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        l</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        u</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        n</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        s</div>
                                </div> <img src="{{ asset('frontend/assets/images/section-title-img.jpg') }}"
                                    alt=""><span>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            I</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            I</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            T</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            S</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                    </div>
                                </span>
                            </div>
                            <div class="split-line" style="display: block; text-align: start; position: relative;">
                                <span>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            T</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            l</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            d</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            f</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            Y</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            S</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                    </div>
                                </span>
                            </div>
                        </h2>
                    </div>
                    <a href="https://laravel-techguru.mnsithub.com/services" class="services-two__round-text-box">
                        <div class="services-two__round-text-box-outer">
                            <div class="services-two__round-text-box-inner">
                                <div class="services-two__curved-circle"
                                    style="position: absolute; height: 147.308px;"><span class="char1"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(-172.748deg); transform-origin: center 4.6em;">V</span><span
                                        class="char2"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(-164.141deg); transform-origin: center 4.6em;">i</span><span
                                        class="char3"
                                        style="position: absolute; left: 50%; margin-left: -0.28125em; transform: rotate(-156.149deg); transform-origin: center 4.6em;">e</span><span
                                        class="char4"
                                        style="position: absolute; left: 50%; margin-left: -0.40625em; transform: rotate(-142.01deg); transform-origin: center 4.6em;">w</span><span
                                        class="char5"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(-130.944deg); transform-origin: center 4.6em;">&nbsp;</span><span
                                        class="char6"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(-122.338deg); transform-origin: center 4.6em;">A</span><span
                                        class="char7"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(-110.657deg); transform-origin: center 4.6em;">l</span><span
                                        class="char8"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(-99.5914deg); transform-origin: center 4.6em;">l</span><span
                                        class="char9"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(-91.5995deg); transform-origin: center 4.6em;">&nbsp;</span><span
                                        class="char10"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(-82.9928deg); transform-origin: center 4.6em;">P</span><span
                                        class="char11"
                                        style="position: absolute; left: 50%; margin-left: -0.1875em; transform: rotate(-70.6976deg); transform-origin: center 4.6em;">r</span><span
                                        class="char12"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(-57.7876deg); transform-origin: center 4.6em;">o</span><span
                                        class="char13"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(-44.8776deg); transform-origin: center 4.6em;">j</span><span
                                        class="char14"
                                        style="position: absolute; left: 50%; margin-left: -0.28125em; transform: rotate(-33.1971deg); transform-origin: center 4.6em;">e</span><span
                                        class="char15"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(-21.5167deg); transform-origin: center 4.6em;">c</span><span
                                        class="char16"
                                        style="position: absolute; left: 50%; margin-left: -0.21875em; transform: rotate(-9.83619deg); transform-origin: center 4.6em;">t</span><span
                                        class="char17"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(-1.84428deg); transform-origin: center 4.6em;">&nbsp;</span><span
                                        class="char18"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(6.76238deg); transform-origin: center 4.6em;">V</span><span
                                        class="char19"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(15.369deg); transform-origin: center 4.6em;">i</span><span
                                        class="char20"
                                        style="position: absolute; left: 50%; margin-left: -0.28125em; transform: rotate(23.3609deg); transform-origin: center 4.6em;">e</span><span
                                        class="char21"
                                        style="position: absolute; left: 50%; margin-left: -0.40625em; transform: rotate(37.5005deg); transform-origin: center 4.6em;">w</span><span
                                        class="char22"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(48.5662deg); transform-origin: center 4.6em;">&nbsp;</span><span
                                        class="char23"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(57.1728deg); transform-origin: center 4.6em;">A</span><span
                                        class="char24"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(68.8533deg); transform-origin: center 4.6em;">l</span><span
                                        class="char25"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(79.919deg); transform-origin: center 4.6em;">l</span><span
                                        class="char26"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(87.9109deg); transform-origin: center 4.6em;">&nbsp;</span><span
                                        class="char27"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(96.5176deg); transform-origin: center 4.6em;">S</span><span
                                        class="char28"
                                        style="position: absolute; left: 50%; margin-left: -0.28125em; transform: rotate(108.198deg); transform-origin: center 4.6em;">e</span><span
                                        class="char29"
                                        style="position: absolute; left: 50%; margin-left: -0.1875em; transform: rotate(119.879deg); transform-origin: center 4.6em;">r</span><span
                                        class="char30"
                                        style="position: absolute; left: 50%; margin-left: -0.28125em; transform: rotate(132.174deg); transform-origin: center 4.6em;">v</span><span
                                        class="char31"
                                        style="position: absolute; left: 50%; margin-left: -0.125em; transform: rotate(140.78deg); transform-origin: center 4.6em;">i</span><span
                                        class="char32"
                                        style="position: absolute; left: 50%; margin-left: -0.3125em; transform: rotate(149.387deg); transform-origin: center 4.6em;">c</span><span
                                        class="char33"
                                        style="position: absolute; left: 50%; margin-left: -0.28125em; transform: rotate(161.068deg); transform-origin: center 4.6em;">e</span><span
                                        class="char34"
                                        style="position: absolute; left: 50%; margin-left: -0.25em; transform: rotate(172.748deg); transform-origin: center 4.6em;">s</span>
                                </div>
                                <div class="services-two__round-icon">
                                    <img src="{{ asset('frontend/assets/images/services-two-round-icon.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="services-two__bottom">
                    <div class="services-two__services-list">
                        <div class="services-two__services-list-single services-two__services-list-single-1">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a
                                        href="https://laravel-techguru.mnsithub.com/advanced-technology">Software
                                        Development
                                        <br> Solutions</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="fas fa-plus"></span>UI/UX Design</p>
                                        <p><span class="fas fa-plus"></span>Mobile Application</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Mobile Application</p>
                                        <p><span class="fas fa-plus"></span>Research</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Research</p>
                                        <p><span class="fas fa-plus"></span>UI/UX Design</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('frontend/assets/images/services-2-1.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a
                                        href="https://laravel-techguru.mnsithub.com/data-protection-privacy">Cybersecurity
                                        Risk
                                        <br> Management</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="fas fa-plus"></span>Security</p>
                                        <p><span class="fas fa-plus"></span>Performance</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Scalability</p>
                                        <p><span class="fas fa-plus"></span>Reliability</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Innovation</p>
                                        <p><span class="fas fa-plus"></span>Efficiency</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('frontend/assets/images/services-2-2.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a
                                        href="https://laravel-techguru.mnsithub.com/cloud-managed-services">Cloud
                                        Solutions
                                        <br> Provider</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="fas fa-plus"></span>Cloud Security</p>
                                        <p><span class="fas fa-plus"></span>Cloud Scalability</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Cloud Integration</p>
                                        <p><span class="fas fa-plus"></span>Cloud Performance</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Cloud Backup</p>
                                        <p><span class="fas fa-plus"></span>Cloud Optimization</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('frontend/assets/images/services-2-3.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a
                                        href="https://laravel-techguru.mnsithub.com/backup-recovery">Data Analytics
                                        <br> Consulting</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    <li>
                                        <p><span class="fas fa-plus"></span>Data Insights</p>
                                        <p><span class="fas fa-plus"></span>Predictive Analytics</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Big Data</p>
                                        <p><span class="fas fa-plus"></span>Business Intelligence</p>
                                    </li>
                                    <li>
                                        <p><span class="fas fa-plus"></span>Data Visualization</p>
                                        <p><span class="fas fa-plus"></span>Data Strategy</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset('frontend/assets/images/services-2-4.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Two End -->

        <!-- Why Choose One Start -->
        <section id="why-choose" class="why-choose-one">
            <div class="why-choose-one__shape-3 float-bob-y">
                <img src="{{ asset('frontend/assets/images/why-choose-one-shape-3.png') }}" alt="">
            </div>
            <div class="why-choose-one__shape-4"></div>
            <div class="why-choose-one__shape-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Why Chooses Us</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                E</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                v</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                G</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                w</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                h</div>
                                        </div> <span>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    w</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    h</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    O</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    u</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    r</div>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;"><span>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    C</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    u</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    n</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    g</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    -</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    E</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    d</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    g</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    e</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    I</div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    T</div>
                                            </div>
                                        </span>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                S</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                    </div>
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                f</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                S</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <p class="why-choose-one__text">Innovating and empowering businesses with tailored
                                solutions
                                for success and growth. Innovating and empowering </p>
                            <ul class="why-choose-one__progress-list list-unstyled">
                                <li>
                                    <div class="why-choose-one__progress">
                                        <h4 class="why-choose-one__progress-title">Camping Launches</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar counted" data-percent="86%"
                                                style="width: 86%;">
                                                <div class="count-text">86%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-one__progress">
                                        <h4 class="why-choose-one__progress-title">Innovation Design</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar counted" data-percent="76%"
                                                style="width: 76%;">
                                                <div class="count-text">76%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="why-choose-one__btn-and-client-info">
                                <div class="why-choose-one__btn-box">
                                    <a href="https://laravel-techguru.mnsithub.com/about" class="thm-btn">About
                                        Us<span class="fas fa-arrow-right"></span></a>
                                </div>
                                <div class="why-choose-one__client-box">
                                    <div class="why-choose-one__client-img">
                                        <img src="{{ asset('frontend/assets/images/why-choose-one-client-img.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="why-choose-one__client-content">
                                        <h3>Thomas Alison</h3>
                                        <span>Founder &amp; CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="why-choose-one__right wow slideInRight animated" data-wow-delay="100ms"
                            data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <div class="why-choose-one__img">
                                <img src="{{ asset('frontend/assets/images/why-choose-one-img-1.png') }}"
                                    alt="">
                            </div>
                            <div class="why-choose-one__shape-1 img-bounce">
                                <img src="{{ asset('frontend/assets/images/why-choose-one-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="why-choose-one__shape-2 float-bob-x">
                                <img src="{{ asset('frontend/assets/images/why-choose-one-shape-2.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose One End -->

        <!-- Sliding Text Three Start -->
        <section class="sliding-text-three">
            <div class="sliding-text-three__wrap">
                <ul class="sliding-text-three__list list-unstyled marquee_mode">
                    <div style="width: 100000px; transform: translateX(0px); animation: 31.2097s linear 0s infinite normal none running marqueeAnimation-9453500;"
                        class="js-marquee-wrapper">
                        <div class="js-marquee" style="margin-right: 0px; float: left;">
                            <li>
                                <h2 data-hover="UI/UX Design" class="sliding-text-three__title">UI/UX Design</h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Product Design" class="sliding-text-three__title">Product Design
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Web Development" class="sliding-text-three__title">Web Development
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="BRANDING" class="sliding-text-three__title">BRANDING</h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Cyber Security" class="sliding-text-three__title">Cyber Security
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Website design" class="sliding-text-three__title">Website design
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Digital Marketing" class="sliding-text-three__title">Digital
                                    Marketing</h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="UI/UX Design" class="sliding-text-three__title">UI/UX Design</h2>
                                <span class="fas fa-star"></span>
                            </li>
                        </div>
                        <div class="js-marquee" style="margin-right: 0px; float: left;">
                            <li>
                                <h2 data-hover="UI/UX Design" class="sliding-text-three__title">UI/UX Design</h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Product Design" class="sliding-text-three__title">Product Design
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Web Development" class="sliding-text-three__title">Web Development
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="BRANDING" class="sliding-text-three__title">BRANDING</h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Cyber Security" class="sliding-text-three__title">Cyber Security
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Website design" class="sliding-text-three__title">Website design
                                </h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="Digital Marketing" class="sliding-text-three__title">Digital
                                    Marketing</h2>
                                <span class="fas fa-star"></span>
                            </li>
                            <li>
                                <h2 data-hover="UI/UX Design" class="sliding-text-three__title">UI/UX Design</h2>
                                <span class="fas fa-star"></span>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </section>
        <!-- Sliding Text Three End -->

        <!-- Process Two Start -->
        <section class="process-two">
            <div class="process-two__bg"
                style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/backgrounds/process-two-bg.jpg);">
            </div>
            <div class="process-two__bg-shape float-bob-y"
                style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/shapes/process-two-bg-shape.png);">
            </div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Working Process</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation" style="perspective: 400px;">
                        <div class="split-line" style="display: block; text-align: center; position: relative;">
                            <div style="position:relative;display:inline-block;">
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    O</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    u</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    r</div>
                            </div>
                            <div style="position:relative;display:inline-block;">
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    S</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    e</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    a</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    m</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    l</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    e</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    s</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    s</div>
                            </div>
                            <div style="position:relative;display:inline-block;">
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    P</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    r</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    o</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    c</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    e</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    s</div>
                                <div
                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                    s</div>
                            </div>
                        </div>
                        <div class="split-line" style="display: block; text-align: center; position: relative;">
                            <span>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        F</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        r</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        m</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        C</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        n</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        c</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        p</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        C</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        r</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        a</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o</div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        n</div>
                                </div>
                            </span>
                        </div>
                    </h2>
                </div>
                <ul class="row list-unstyled">
                    <!--Process Two Single Start-->
                    <li class="col-xl-4 col-lg-4">
                        <div class="process-two__single">
                            <div class="process-two__count"></div>
                            <h3 class="process-two__title">Research &amp; Discovery</h3>
                            <p class="process-two__text">We begin by understanding your needs,<br> goals, and vision.
                                Through brainstorming<br> sessions and strategic planning,</p>
                        </div>
                    </li>
                    <!--Process Two Single End-->
                    <!--Process Two Single Start-->
                    <li class="col-xl-4 col-lg-4">
                        <div class="process-two__single">
                            <div class="process-two__shape-1 float-bob-x">
                                <img src="{{ asset('frontend/assets/images/process-two-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="process-two__shape-2 float-bob-x">
                                <img src="{{ asset('frontend/assets/images/process-two-shape-2.png') }}"
                                    alt="">
                            </div>
                            <div class="process-two__count"></div>
                            <h3 class="process-two__title">Design and Development</h3>
                            <p class="process-two__text">Once the strategy is in place, we move to<br> designing and
                                developing your vision. Our<br> team collaborates closely to bring your<br> ideas</p>
                        </div>
                    </li>
                    <!--Process Two Single End-->
                    <!--Process Two Single Start-->
                    <li class="col-xl-4 col-lg-4">
                        <div class="process-two__single">
                            <div class="process-two__count"></div>
                            <h3 class="process-two__title">Testing and Launch</h3>
                            <p class="process-two__text">Before going live, we rigorously test to<br> ensure optimal
                                functionality. After<br> thorough quality checks, we launch your<br> project </p>
                        </div>
                    </li>
                    <li>
                        <!--Process Two Single End-->
                    </li>
                </ul>
            </div>
        </section>
        <!-- Process Two End -->

        <!-- Portfolio Two Start -->
        <section id="portfolio" class="portfolio-two">
            <div class="portfolio-two__shape-1 float-bob-y">
                <img src="{{ asset('frontend/assets/images/portfolio-two-shape-1.png') }}" alt="">
            </div>
            <div class="portfolio-two__shape-2"></div>
            <div class="portfolio-two__shape-3"></div>
            <div class="portfolio-two__shape-4"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Portfolio</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Explore Our Creative <span>Journey</span><br>
                        Crafting Success Through</h2>
                </div>
                <div class="portfolio-two__carousel-container">
                    <div class="portfolio-two__carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <!--Portfolio Two Single Start-->

                        <!--Portfolio Two Single End-->
                        <!--Portfolio Two Single Start-->

                        <!--Portfolio Two Single End-->
                        <!--Portfolio Two Single Start-->

                        <!--Portfolio Two Single End-->
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-2640px, 0px, 0px); transition: 0.5s; width: 9240px;">
                                <div class="owl-item cloned" style="width: 1290px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="portfolio-two__single-box">
                                            <ul class="portfolio-two__box list-unstyled">
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                    Solutions,<br>
                                                                    Powerful
                                                                    Results</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                        Solutions,<br>
                                                                        Powerful
                                                                        Results</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                    Ideas Into<br>
                                                                    Digital
                                                                    Excellence</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                        Ideas Into
                                                                        Digital Excellence</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                    Success Through<br>
                                                                    Technology</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                        Success Through
                                                                        Technology</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                    Businesses<br> with
                                                                    Cutting-Edge IT</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                        Businesses
                                                                        with
                                                                        Cutting-Edge IT</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 1290px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="portfolio-two__single-box">
                                            <ul class="portfolio-two__box list-unstyled">
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                    Solutions,<br>
                                                                    Powerful
                                                                    Results</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                        Solutions,<br>
                                                                        Powerful
                                                                        Results</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                    Ideas Into<br>
                                                                    Digital
                                                                    Excellence</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                        Ideas Into
                                                                        Digital Excellence</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                    Success Through<br>
                                                                    Technology</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                        Success Through
                                                                        Technology</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                    Businesses<br> with
                                                                    Cutting-Edge IT</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                        Businesses
                                                                        with
                                                                        Cutting-Edge IT</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 1290px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="portfolio-two__single-box">
                                            <ul class="portfolio-two__box list-unstyled">
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                    Solutions,<br>
                                                                    Powerful
                                                                    Results</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                        Solutions,<br>
                                                                        Powerful
                                                                        Results</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                    Ideas Into<br>
                                                                    Digital
                                                                    Excellence</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                        Ideas Into
                                                                        Digital Excellence</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                    Success Through<br>
                                                                    Technology</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                        Success Through
                                                                        Technology</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                    Businesses<br> with
                                                                    Cutting-Edge IT</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                        Businesses with
                                                                        Cutting-Edge IT</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 1290px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="portfolio-two__single-box">
                                            <ul class="portfolio-two__box list-unstyled">
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                    Solutions,<br>
                                                                    Powerful
                                                                    Results</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                        Solutions,<br>
                                                                        Powerful
                                                                        Results</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                    Ideas Into<br>
                                                                    Digital
                                                                    Excellence</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                        Ideas Into
                                                                        Digital Excellence</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                    Success Through<br>
                                                                    Technology</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                        Success Through
                                                                        Technology</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                    Businesses<br> with
                                                                    Cutting-Edge IT</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                        Businesses
                                                                        with
                                                                        Cutting-Edge IT</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 1290px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="portfolio-two__single-box">
                                            <ul class="portfolio-two__box list-unstyled">
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                    Solutions,<br>
                                                                    Powerful
                                                                    Results</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                        Solutions,<br>
                                                                        Powerful
                                                                        Results</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                    Ideas Into<br>
                                                                    Digital
                                                                    Excellence</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                        Ideas Into
                                                                        Digital Excellence</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                    Success Through<br>
                                                                    Technology</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                        Success Through
                                                                        Technology</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                    Businesses<br> with
                                                                    Cutting-Edge IT</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                        Businesses
                                                                        with
                                                                        Cutting-Edge IT</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 1290px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="portfolio-two__single-box">
                                            <ul class="portfolio-two__box list-unstyled">
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                    Solutions,<br>
                                                                    Powerful
                                                                    Results</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                        Solutions,<br>
                                                                        Powerful
                                                                        Results</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                    Ideas Into<br>
                                                                    Digital
                                                                    Excellence</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                        Ideas Into
                                                                        Digital Excellence</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                    Success Through<br>
                                                                    Technology</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                        Success Through
                                                                        Technology</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                    Businesses<br> with
                                                                    Cutting-Edge IT</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                        Businesses with
                                                                        Cutting-Edge IT</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 1290px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="portfolio-two__single-box">
                                            <ul class="portfolio-two__box list-unstyled">
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                    Solutions,<br>
                                                                    Powerful
                                                                    Results</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-1.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Innovative
                                                                        Solutions,<br>
                                                                        Powerful
                                                                        Results</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                    Ideas Into<br>
                                                                    Digital
                                                                    Excellence</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-2.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Transforming
                                                                        Ideas Into
                                                                        Digital Excellence</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                    Success Through<br>
                                                                    Technology</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-3.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Driving
                                                                        Success Through
                                                                        Technology</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="portfolio-two__box-content">
                                                        <div class="single-portfolio-two__bg"
                                                            style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg);">
                                                        </div>
                                                        <div class="portfolio-two__title">
                                                            <h3><a
                                                                    href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                    Businesses<br> with
                                                                    Cutting-Edge IT</a></h3>
                                                        </div>
                                                        <div class="portfolio-two__content-box">
                                                            <div class="portfolio-two__icon">
                                                                <a href="https://laravel-techguru.mnsithub.com/assets/images/project/portfolio-2-4.jpg') }}"
                                                                    class="img-popup"><span
                                                                        class="fas fa-arrow-right-1"></span></a>
                                                            </div>
                                                            <div class="portfolio-two__title-box">
                                                                <h3 class="portfolio-two__title-2"><a
                                                                        href="https://laravel-techguru.mnsithub.com/portfolio-details">Empowering
                                                                        Businesses
                                                                        with
                                                                        Cutting-Edge IT</a></h3>
                                                                <p class="portfolio-two__text">Explore How We've
                                                                    Empowered
                                                                    Businesses with Innovative Tech Solutions</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                    class="fas fa-arrow-up"></span></button><button type="button"
                                role="presentation" class="owl-next"><span
                                    class="fas fa-arrow-up"></span></button></div>
                        <div class="owl-dots"><button role="button"
                                class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Two End -->
        <!-- Blog Two Start -->
        <section id="blog" class="blog-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="blog-two__left wow fadeInLeft" data-wow-delay="100ms"
                            style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                            <div class="section-title text-left sec-title-animation animation-style1">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Our Blogs</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Explore Our Latest <span>Blogs</span>
                                    for Expert Insights</h2>
                            </div>
                            <p class="blog-two-text">Dive into our collection of blogs where we share expert insights,
                                helpful tips, and the latest trends in the industry</p>
                            <div class="blog-two__top-btn-box">
                                <a href="https://laravel-techguru.mnsithub.com/blog-details" class="thm-btn">View
                                    All Blogs<span class="fas fa-arrow-right"></span></a>
                            </div>
                            <div class="blog-two__left-content-box">
                                <div class="blog-two__single">
                                    <div class="blog-two__img">
                                        <img src="{{ asset('frontend/assets/images/blog-2-1.jpg') }}"
                                            alt="">
                                        <div class="blog-two__tags">
                                            <span>Digital</span>
                                            <span>Technology</span>
                                        </div>
                                    </div>
                                    <div class="blog-two__content">
                                        <div class="blog-two__user">
                                            <div class="blog-two__user-img">
                                                <img src="{{ asset('frontend/assets/images/blog-two-user-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <p class="blog-two__user-title">Jordan Walk</p>
                                        </div>
                                        <ul class="blog-two__meta list-unstyled">
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                        class="far fa-calendar-alt"></span>April 5,
                                                    2025</a>
                                            </li>
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                        class="fal fa-comments"></span>80
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-two__title"><a
                                                href="https://laravel-techguru.mnsithub.com/blog-details">The Future
                                                is
                                                Now: A
                                                2025 Guide to Digital Transformation</a></h3>
                                        <p class="blog-two__text">Winning the Digital Race: The 2025 Transformation
                                            Roadmap. Next-Gen Digital Transformation</p>
                                        <div class="blog-two__btn-box">
                                            <a href="https://laravel-techguru.mnsithub.com/blog-details"
                                                class="thm-btn">Reed More<span
                                                    class="fas fa-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="blog-two__right">
                            <!-- Blog Two Single Two Start -->
                            <div class="blog-two__single-two wow fadeInLeft" data-wow-delay="100ms"
                                style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                                <div class="blog-two__img-two">
                                    <img src="{{ asset('frontend/assets/images/blog-2-2.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__content-two">
                                    <div class="blog-two__user-two">
                                        <div class="blog-two__user-two-img">
                                            <img src="{{ asset('frontend/assets/images/blog-two-user-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="blog-two__user-two-title">John Smith</p>
                                    </div>
                                    <div class="blog-two__tags-two">
                                        <span>Digital</span>
                                        <span>Technology</span>
                                    </div>
                                    <h3 class="blog-two__title-two"><a
                                            href="https://laravel-techguru.mnsithub.com/blog-details">5 Key Trends
                                            Shaping the
                                            Future of Technology</a></h3>
                                    <ul class="blog-two__meta-two list-unstyled">
                                        <li>
                                            <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                    class="far fa-calendar-alt"></span>Jan 13,
                                                2025</a>
                                        </li>
                                        <li>
                                            <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                    class="fal fa-comments"></span>12
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog-two__btn-box-two">
                                        <a href="https://laravel-techguru.mnsithub.com/blog-details"
                                            class="thm-btn">Reed More<span class="fas fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Two Single Two End -->
                            <!-- Blog Two Single Two Start -->
                            <div class="blog-two__single-two wow fadeInRight" data-wow-delay="200ms"
                                style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                                <div class="blog-two__img-two">
                                    <img src="{{ asset('frontend/assets/images/blog-2-3.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__content-two">
                                    <div class="blog-two__user-two">
                                        <div class="blog-two__user-two-img">
                                            <img src="{{ asset('frontend/assets/images/blog-two-user-3.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="blog-two__user-two-title">Alisa Olivia</p>
                                    </div>
                                    <div class="blog-two__tags-two">
                                        <span>Digital</span>
                                        <span>Technology</span>
                                    </div>
                                    <h3 class="blog-two__title-two"><a
                                            href="https://laravel-techguru.mnsithub.com/blog-details">How to Maximize
                                            Efficiency with Smart Business</a></h3>
                                    <ul class="blog-two__meta-two list-unstyled">
                                        <li>
                                            <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                    class="far fa-calendar-alt"></span>Jan 13,
                                                2025</a>
                                        </li>
                                        <li>
                                            <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                    class="fal fa-comments"></span>12
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog-two__btn-box-two">
                                        <a href="https://laravel-techguru.mnsithub.com/blog-details"
                                            class="thm-btn">Reed More<span class="fas fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Two Single Two End -->
                            <!-- Blog Two Single Two Start -->
                            <div class="blog-two__single-two wow fadeInLeft" data-wow-delay="300ms"
                                style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                                <div class="blog-two__img-two">
                                    <img src="{{ asset('frontend/assets/images/blog-2-4.jpg') }}" alt="">
                                </div>
                                <div class="blog-two__content-two">
                                    <div class="blog-two__user-two">
                                        <div class="blog-two__user-two-img">
                                            <img src="{{ asset('frontend/assets/images/blog-two-user-4.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="blog-two__user-two-title">Jordan Walk</p>
                                    </div>
                                    <div class="blog-two__tags-two">
                                        <span>Digital</span>
                                        <span>Technology</span>
                                    </div>
                                    <h3 class="blog-two__title-two"><a
                                            href="https://laravel-techguru.mnsithub.com/blog-details">The Ultimate
                                            Guide to
                                            Digital Transformation in 2025</a></h3>
                                    <ul class="blog-two__meta-two list-unstyled">
                                        <li>
                                            <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                    class="far fa-calendar-alt"></span>Jan 13,
                                                2025</a>
                                        </li>
                                        <li>
                                            <a href="https://laravel-techguru.mnsithub.com/blog-details"><span
                                                    class="fal fa-comments"></span>12
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog-two__btn-box-two">
                                        <a href="https://laravel-techguru.mnsithub.com/blog-details"
                                            class="thm-btn">Reed More<span class="fas fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Two Single Two End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Two End -->
        <!-- Pricing Two Start -->
        <section class="pricing-two d-none">
            <div class="pricing-two__sec-shape-1"></div>
            <div class="pricing-two__sec-shape-2"></div>
            <div class="pricing-two__sec-shape-3"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Pricing &amp; Plan</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Select the Perfect <span>Plan for Your Needs That
                            Fits You</span></h2>
                </div>
                <div class="pricing-two__main-tab-box tabs-box">
                    <ul class="tab-buttons list-unstyled">
                        <li data-tab="#monthly" class="tab-btn"><span>Monthly</span>
                        </li>
                        <li data-tab="#yearly" class="tab-btn active-btn"><span>Yearly</span></li>
                        <li data-tab="#packges" class="tab-btn"><span>Packges</span></li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab" id="monthly">
                            <div class="pricing-two__inner">
                                <div class="row">
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-1">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">PERSONAL</span>
                                            <h2 class="pricing-two__price">$5.60</h2>
                                            <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-2">
                                            <div class="pricing-two__single-shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Premium</span>
                                            <h2 class="pricing-two__price">$25.60</h2>
                                            <p class="pricing-two__text">Will get free 5 months solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Basic &amp; Technical SEO </p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                            <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-3">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Business</span>
                                            <h2 class="pricing-two__price">$120.60</h2>
                                            <p class="pricing-two__text">Will get free lifetime solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="yearly">
                            <div class="pricing-two__inner">
                                <div class="row">
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-1">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">PERSONAL</span>
                                            <h2 class="pricing-two__price">$5.60</h2>
                                            <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-2">
                                            <div class="pricing-two__single-shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Premium</span>
                                            <h2 class="pricing-two__price">$25.60</h2>
                                            <p class="pricing-two__text">Will get free 5 months solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Basic &amp; Technical SEO </p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                            <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-3">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Business</span>
                                            <h2 class="pricing-two__price">$120.60</h2>
                                            <p class="pricing-two__text">Will get free lifetime solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="packges">
                            <div class="pricing-two__inner">
                                <div class="row">
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-1">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">PERSONAL</span>
                                            <h2 class="pricing-two__price">$5.60</h2>
                                            <p class="pricing-two__text">Will get free 3 months solutions<br> support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-2">
                                            <div class="pricing-two__single-shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Premium</span>
                                            <h2 class="pricing-two__price">$25.60</h2>
                                            <p class="pricing-two__text">Will get free 5 months solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Basic &amp; Technical SEO </p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                            <p class="pricing-two__unlimited-offer"> ⚡ Unlimited Offer</p>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                    <!--Pricing Two Single Start-->
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="pricing-two__single pricing-two__single-3">
                                            <div class="pricing-two__single-shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-single-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-1">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-2">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="pricing-two__shape-3">
                                                <img src="{{ asset('frontend/assets/images/pricing-two-shape-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="pricing-two__sub-title">Business</span>
                                            <h2 class="pricing-two__price">$120.60</h2>
                                            <p class="pricing-two__text">Will get free lifetime solutions support
                                            </p>
                                            <div class="pricing-two__btn-box">
                                                <a href="https://laravel-techguru.mnsithub.com/pricing"
                                                    class="pricing-two__btn">Choose Plan<span
                                                        class="far fa-plus-circle"></span></a>
                                            </div>
                                            <h5 class="pricing-two__points-title">Feature Description</h5>
                                            <ul class="pricing-two__points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>Custom Website Design</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fas fa-check-circle"></span>
                                                    </div>
                                                    <p>website Design &amp; Development</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Social Media Graphics</p>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="far fa-plus-circle"></span>
                                                    </div>
                                                    <p>Brand Color Palette</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Pricing Two Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Two End -->



        <!-- Event One Start -->
        <section id="events" class="event-one">
            <div class="event-one__shape-1 float-bob-y">
                <img src="{{ asset('frontend/assets/images/event-one-shape-1.png') }}" alt="">
            </div>
            <div class="event-one__shape-2 float-bob-x">
                <img src="{{ asset('frontend/assets/images/event-one-shape-2.png') }}" alt="">
            </div>
            <div class="event-one__shape-3"></div>
            <div class="event-one__shape-4"></div>
            <div class="event-one__shape-2"></div>
            <div class="container">
                <div class="event-one__top">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape-1"></div>
                            <span class="section-title__tagline">Upcoming Events</span>
                            <div class="section-title__tagline-shape-2"></div>
                        </div>
                        <h2 class="section-title__title title-animation">Exciting Events on the <span>Horizon</span>
                        </h2>
                    </div>
                    <div class="event-one__top-btn-box">
                        <a href="https://laravel-techguru.mnsithub.com/contact" class="thm-btn">Contact Us<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="event-one__bottom">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="event-one__left wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms"
                                style="visibility: hidden; animation-duration: 2500ms; animation-delay: 100ms; animation-name: none;">
                                <div class="event-one__img">
                                    <img src="{{ asset('frontend/assets/images/event-one-img-1.jpg') }}"
                                        alt="">
                                    <div class="event-one__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="event-one__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="event-one__right">
                                <!-- Event One Single Start -->
                                <div class="event-one__single wow fadeInLeft" data-wow-delay="100ms"
                                    style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                                    <div class="event-one__title-and-countdown-box">
                                        <div class="event-one__title">
                                            <h5><a href="https://laravel-techguru.mnsithub.com/contact">Innovation
                                                    Meets</a></h5>
                                            <p>It is a long established fact that a reader will</p>
                                        </div>
                                        <div class="event-one__countdown-box">
                                            <div class="timer-box clearfix">
                                                <div class="countdown-timer">
                                                    <div class="default-coundown">
                                                        <div class="default-coundown-box">
                                                            <div class="countdown event-one-countdown"
                                                                data-countdown-time="2025/05/28">
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="days">00</span><span
                                                                            class="timeRef">days</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="hours">00</span><span
                                                                            class="timeRef clr-1">hrs</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="minutes">00</span><span
                                                                            class="timeRef clr-2">mins</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="seconds">00</span><span
                                                                            class="timeRef clr-3">secs</span></div>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__meta-and-btn-box">
                                        <ul class="event-one__meta list-unstyled">
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                        class="fas fa-map-marker-alt"></span>1629 N. Dixie
                                                    Avenue</a>
                                            </li>
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                        class="fas fa-calendar-alt"></span>March 18, 2025</a>
                                            </li>
                                        </ul>
                                        <div class="event-one__btn-box">
                                            <a href="https://laravel-techguru.mnsithub.com/contact"
                                                class="event-one__btn">Book Seat<span
                                                    class="fas fa-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Event One Single End -->
                                <!-- Event One Single Start -->
                                <div class="event-one__single wow fadeInRight" data-wow-delay="200ms"
                                    style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                                    <div class="event-one__title-and-countdown-box">
                                        <div class="event-one__title">
                                            <h5><a href="https://laravel-techguru.mnsithub.com/contact">Unlock Your
                                                    Potential</a></h5>
                                            <p>It is a long established fact that a reader will</p>
                                        </div>
                                        <div class="event-one__countdown-box">
                                            <div class="timer-box clearfix">
                                                <div class="countdown-timer">
                                                    <div class="default-coundown">
                                                        <div class="default-coundown-box">
                                                            <div class="countdown event-one-countdown"
                                                                data-countdown-time="2025/07/28">
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="days">00</span><span
                                                                            class="timeRef">days</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="hours">00</span><span
                                                                            class="timeRef clr-1">hrs</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="minutes">00</span><span
                                                                            class="timeRef clr-2">mins</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="seconds">00</span><span
                                                                            class="timeRef clr-3">secs</span></div>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__meta-and-btn-box">
                                        <ul class="event-one__meta list-unstyled">
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                        class="fas fa-map-marker-alt"></span>1629 N. Dixie
                                                    Avenue</a>
                                            </li>
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                        class="fas fa-calendar-alt"></span>March 25, 2025</a>
                                            </li>
                                        </ul>
                                        <div class="event-one__btn-box">
                                            <a href="https://laravel-techguru.mnsithub.com/contact"
                                                class="event-one__btn">Book Seat<span
                                                    class="fas fa-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Event One Single End -->
                                <!-- Event One Single Start -->
                                <div class="event-one__single wow fadeInLeft" data-wow-delay="300ms"
                                    style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                                    <div class="event-one__title-and-countdown-box">
                                        <div class="event-one__title">
                                            <h5><a href="https://laravel-techguru.mnsithub.com/contact">Tech Talks
                                                    Live</a></h5>
                                            <p>It is a long established fact that a reader will</p>
                                        </div>
                                        <div class="event-one__countdown-box">
                                            <div class="timer-box clearfix">
                                                <div class="countdown-timer">
                                                    <div class="default-coundown">
                                                        <div class="default-coundown-box">
                                                            <div class="countdown event-one-countdown"
                                                                data-countdown-time="2025/09/28">
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="days">00</span><span
                                                                            class="timeRef">days</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="hours">00</span><span
                                                                            class="timeRef clr-1">hrs</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="minutes">00</span><span
                                                                            class="timeRef clr-2">mins</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="box"><span
                                                                            class="seconds">00</span><span
                                                                            class="timeRef clr-3">secs</span></div>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-one__meta-and-btn-box">
                                        <ul class="event-one__meta list-unstyled">
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                        class="fas fa-map-marker-alt"></span>1629 N. Dixie
                                                    Avenue</a>
                                            </li>
                                            <li>
                                                <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                        class="fas fa-calendar-alt"></span>March 30, 2025</a>
                                            </li>
                                        </ul>
                                        <div class="event-one__btn-box">
                                            <a href="https://laravel-techguru.mnsithub.com/contact"
                                                class="event-one__btn">Book Seat<span
                                                    class="fas fa-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Event One Single End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event One End -->

        <!-- Testimonial Two Start -->
        <section id="testimonial" class="testimonial-two">
            <div class="testimonial-two__shape-1"></div>
            <div class="testimonial-two__shape-2"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Testimonials</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Customer Experiences <br>That <span>Speak
                            Volumes</span></h2>
                </div>
                <div class="testimonial-two__carousel owl-theme owl-carousel owl-loaded owl-drag">
                    <!-- Testimonial Two Single Start -->

                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->

                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->

                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->

                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->

                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->

                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->

                    <!-- Testimonial Two Single End -->
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-2200px, 0px, 0px); transition: 0.5s; width: 6600px;">
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Thomas
                                                        Alison</a></h4>
                                                <p class="testimonial-two__sub-title">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Sarah
                                                        Williams</a></h4>
                                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">James
                                                        Anderson</a></h4>
                                                <p class="testimonial-two__sub-title">Product Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Sarah
                                                        Williams</a></h4>
                                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Thomas
                                                        Alison</a></h4>
                                                <p class="testimonial-two__sub-title">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Sarah
                                                        Williams</a></h4>
                                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">James
                                                        Anderson</a></h4>
                                                <p class="testimonial-two__sub-title">Product Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Thomas
                                                        Alison</a></h4>
                                                <p class="testimonial-two__sub-title">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Sarah
                                                        Williams</a></h4>
                                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">James
                                                        Anderson</a></h4>
                                                <p class="testimonial-two__sub-title">Product Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Sarah
                                                        Williams</a></h4>
                                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Thomas
                                                        Alison</a></h4>
                                                <p class="testimonial-two__sub-title">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Sarah
                                                        Williams</a></h4>
                                                <p class="testimonial-two__sub-title">Marketing Manger</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">James
                                                        Anderson</a></h4>
                                                <p class="testimonial-two__sub-title">Product Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 410px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two__star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <p class="testimonial-two__text">Absolutely fantastic experience! The team
                                                exceeded our
                                                expectations and delivered a solution that perfectly met our needs.
                                                Their attention
                                                to
                                                detail and commitment to quality is unmatched.</p>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('frontend/assets/images/testimonial-2-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-two__client-content">
                                                <h4 class="testimonial-two__client-name"><a
                                                        href="https://laravel-techguru.mnsithub.com/testimonials">Thomas
                                                        Alison</a></h4>
                                                <p class="testimonial-two__sub-title">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="fas fa-quote-right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation"
                            class="owl-prev"><span class="fas fa-arrow-up"></span></button><button type="button"
                            role="presentation" class="owl-next"><span class="fas fa-arrow-up"></span></button>
                    </div>
                    <div class="owl-dots"><button role="button"
                            class="owl-dot active"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button></div>
                </div>
            </div>
        </section>
        <!-- Testimonial Two End -->




        <!-- Contact Two Start -->
        <section id="contact" class="contact-two">
            <ul class="contact-two__sliding-text-list list-unstyled marquee_mode-2">
                <div style="width: 100000px; transform: translateX(0px); animation: 39.7632s linear 0s infinite normal none running marqueeAnimation-3004318;"
                    class="js-marquee-wrapper">
                    <div class="js-marquee" style="margin-right: 0px; float: left;">
                        <li>
                            <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                        </li>
                        <li>
                            <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                        </li>
                        <li>
                            <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                        </li>
                    </div>
                    <div class="js-marquee" style="margin-right: 0px; float: left;">
                        <li>
                            <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                        </li>
                        <li>
                            <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                        </li>
                        <li>
                            <h2 data-hover="Branding" class="contact-two__sliding-text-title">GET IN TOUCH *</h2>
                        </li>
                    </div>
                </div>
            </ul>
            <div class="contact-two__bg"
                style="background-image: url(https://laravel-techguru.mnsithub.com/assets/images/backgrounds/contact-two-bg.jpg);">
            </div>
            <div class="contact-two__shape-1 float-bob-y">
                <img src="{{ asset('frontend/assets/images/contact-two-shape-1.png') }}" alt="">
            </div>
            <div class="contact-two__shape-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-two__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Get In Touch</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Conversation <span>–</span>
                                    Reach<br>Out Anytime</h2>
                            </div>
                            <p class="contact-two__text">We're here to listen! Whether you have<br> questions,
                                feedback,
                                or just want to say hello,<br> feel free to reach out. </p>
                            <ul class="contact-two__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="content">
                                        <span>Email Us</span>
                                        <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                    <div class="content">
                                        <span>Contact US</span>
                                        <p><a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <div class="content">
                                        <span>Our Address</span>
                                        <p>1629 N. Dixie Avenue, Kentucky, 42701</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-two__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms"
                            style="visibility: hidden; animation-duration: 2500ms; animation-delay: 100ms; animation-name: none;">
                            <form class="contact-form-validated contact-one__form"
                                action="https://laravel-techguru.mnsithub.com/assets/inc/sendemail.php"
                                method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Full Name</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="fas fa-user"></span>
                                            </div>
                                            <input type="text" name="name" placeholder="Thomas Alison"
                                                required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Email Address</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                            <input type="email" name="email" placeholder="thomas@domain.com"
                                                required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Phone Number</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="fas fa-phone-alt"></span>
                                            </div>
                                            <input type="text" name="Phone"
                                                placeholder=" 12 (00) 123 4567 890" required=""
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">Subject</h4>
                                        <div class="contact-one__input-box">
                                            <div class="select-box">
                                                <select class="selectmenu wide" style="display: none;">
                                                    <option selected="">Thomas Alison
                                                    </option>
                                                    <option>Type Of Service 01</option>
                                                    <option>Type Of Service 02</option>
                                                    <option>Type Of Service 03</option>
                                                    <option>Type Of Service 04</option>
                                                    <option>Type Of Service 05</option>
                                                </select>
                                                <div class="nice-select selectmenu wide" tabindex="0"><span
                                                        class="current">Thomas Alison
                                                    </span>
                                                    <ul class="list">
                                                        <li data-value="Thomas Alison" class="option selected">
                                                            Thomas Alison
                                                        </li>
                                                        <li data-value="Type Of Service 01" class="option">Type Of
                                                            Service 01</li>
                                                        <li data-value="Type Of Service 02" class="option">Type Of
                                                            Service 02</li>
                                                        <li data-value="Type Of Service 03" class="option">Type Of
                                                            Service 03</li>
                                                        <li data-value="Type Of Service 04" class="option">Type Of
                                                            Service 04</li>
                                                        <li data-value="Type Of Service 05" class="option">Type Of
                                                            Service 05</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4 class="contact-one__input-title">Inquiry about </h4>
                                    <div class="contact-one__input-box text-message-box">
                                        <div class="contact-one__input-icon">
                                            <span class="fas fa-edit"></span>
                                        </div>
                                        <textarea name="message" placeholder="Write your message"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn"><span>Submit
                                                Now</span><i class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Two End -->
        <!-- Newsletter Two Start -->
        <section class="newsletter-two">
            <div class="newsletter-two__shape-1">
                <img src="{{ asset('frontend/assets/images/newsletter-two-shape-1.png') }}" alt="">
            </div>
            <div class="newsletter-two__shape-2 float-bob-x">
                <img src="{{ asset('frontend/assets/images/newsletter-two-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="newsletter-two__inner">
                    <div class="newsletter-two__left">
                        <h2 class="newsletter-two__title">Subcribe to Our Newsletter</h2>
                        <p class="newsletter-two__text">Get the latest SEO tips and software insights straight to your
                            inbox.</p>
                    </div>
                    <div class="newsletter-two__right">
                        <form class="contact-form-validated newsletter-two__form"
                            action="https://laravel-techguru.mnsithub.com/assets/inc/sendemail.php" method="post"
                            novalidate="novalidate">
                            <div class="newsletter-two__input">
                                <input type="email" name="email" placeholder="Enter email address">
                            </div>
                            <button type="submit" class="thm-btn">Subscribe Now <span
                                    class="fas fa-arrow-right"></span>
                            </button>
                            <div class="checked-box">
                                <input type="checkbox" name="skipper1" id="skipper" checked="">
                                <label for="skipper"><span></span>by Subscribing. Your Accept Privacy
                                    policy</label>
                            </div>
                            <div class="result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Two End -->
        <!--Site Footer Two Start-->
        <footer class="site-footer-two">
            <div class="site-footer-two__shape-1"></div>
            <div class="site-footer-two__shape-2"></div>
            <div class="site-footer-two__shape-3"></div>
            <div class="site-footer-two__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms"
                            style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                            <div class="site-footer-two__about">
                                <div class="site-footer-two__logo">
                                    <a href="https://laravel-techguru.mnsithub.com/index"><img
                                            src="{{ asset('frontend/assets/images/footer-logo.png') }}"
                                            alt=""></a>
                                </div>
                                <ul class="list-unstyled site-footer-two__contact-list">
                                    <li>
                                        <div class="site-footer-two__contact-icon">
                                            <span class="fas fa-address-book"></span>
                                        </div>
                                        <div class="site-footer-two__contact-content">
                                            <h5 class="site-footer-two__contact-title">Contact Info</h5>
                                            <p class="site-footer-two__contact-info">
                                                <a href="mailto:info@domain.com"
                                                    class="site-footer-two__contact-mail">info@domain.com</a>
                                                <a href="tel:9900567780" class="site-footer-two__contact-phone">+99
                                                    (00)
                                                    567 780</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="site-footer-two__contact-icon">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <div class="site-footer-two__contact-content">
                                            <h5 class="site-footer-two__contact-title">Location</h5>
                                            <p class="site-footer-two__contact-info">
                                                123 Main Street, Apt 4BNew <br> York, NY 10001USA
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                            style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                            <div class="footer-widget-two__quick-links">
                                <h4 class="footer-widget-two__title">Pages</h4>
                                <ul class="footer-widget-two__quick-links-list list-unstyled">
                                    <li><a href="https://laravel-techguru.mnsithub.com/index"><span
                                                class="fas fa-arrow-right-2"></span>Home</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/about"><span
                                                class="fas fa-arrow-right-2"></span>About Us</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/pricing"><span
                                                class="fas fa-arrow-right-2"></span>Pricing</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/portfolio"><span
                                                class="fas fa-arrow-right-2"></span>Portfolio</a>
                                    </li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/blog"><span
                                                class="fas fa-arrow-right-2"></span>Blogs</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/contact"><span
                                                class="fas fa-arrow-right-2"></span>Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                            style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                            <div class="footer-widget-two__support">
                                <h4 class="footer-widget-two__title">Support</h4>
                                <ul class="footer-widget-two__quick-links-list list-unstyled">
                                    <li><a href="https://laravel-techguru.mnsithub.com/about"><span
                                                class="fas fa-arrow-right-2"></span>Terms &amp;
                                            Condition</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/faq"><span
                                                class="fas fa-arrow-right-2"></span>FAQs</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/contact"><span
                                                class="fas fa-arrow-right-2"></span>Contact Us</a>
                                    </li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/404"><span
                                                class="fas fa-arrow-right-2"></span>404 Page</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/contact"><span
                                                class="fas fa-arrow-right-2"></span>Live Chat</a>
                                    </li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/services"><span
                                                class="fas fa-arrow-right-2"></span>Our Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                            style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
                            <div class="footer-widget-two__services">
                                <h4 class="footer-widget-two__title">Our Services</h4>
                                <ul class="footer-widget-two__quick-links-list list-unstyled">
                                    <li><a href="https://laravel-techguru.mnsithub.com/services"><span
                                                class="fas fa-arrow-right-2"></span>UI/UX Design</a>
                                    </li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/about"><span
                                                class="fas fa-arrow-right-2"></span>Website Design</a>
                                    </li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/pricing"><span
                                                class="fas fa-arrow-right-2"></span>Web
                                            Development</a></li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/about"><span
                                                class="fas fa-arrow-right-2"></span>Product Design</a>
                                    </li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/blog"><span
                                                class="fas fa-arrow-right-2"></span>Online Branding</a>
                                    </li>
                                    <li><a href="https://laravel-techguru.mnsithub.com/contact"><span
                                                class="fas fa-arrow-right-2"></span>Personal
                                            Branding</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-two__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-two__bottom-inner">
                                <div class="site-footer-two__copyright">
                                    <p class="site-footer-two__copyright-text">
                                        ⓒ Copyright 2026 <a
                                            href="https://laravel-techguru.mnsithub.com/index#">techguru</a> All
                                        rights reserved
                                    </p>
                                </div>
                                <div class="site-footer-two__social-box">
                                    <h4 class="site-footer-two__social-title">Follow Us:</h4>
                                    <div class="site-footer-two__social-box-inner">
                                        <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                class="fab fa-facebook-f"></span></a>
                                        <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                class="fab fa-dribbble"></span></a>

                                        <a href="https://laravel-techguru.mnsithub.com/index#"><span
                                                class="fab fa-linkedin-in"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer Two End-->
    </div><!-- /.page-wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="#home" aria-label="logo image"><img
                        src="{{ asset('frontend/assets/images/logo-2.png') }}" width="150"
                        alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container">
                <ul class="main-menu__list">
                    <li class="current">
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#why-choose">Why Choose Us</a>
                    </li>
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#blog">Blog</a>
                    </li>
                    <li>
                        <a href="#events">Events</a>
                    </li>
                    <li>
                        <a href="#testimonial">Testimonials</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@techguru.com</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://laravel-techguru.mnsithub.com/index#" class="fab fa-twitter"></a>
                    <a href="https://laravel-techguru.mnsithub.com/index#" class="fab fa-facebook-square"></a>
                    <a href="https://laravel-techguru.mnsithub.com/index#" class="fab fa-pinterest-p"></a>
                    <a href="https://laravel-techguru.mnsithub.com/index#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper --> <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="far fa-times fa-fw"></span></button>
        <form method="post" action="https://laravel-techguru.mnsithub.com/blog">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here"
                    required="">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->
    <a href="https://laravel-techguru.mnsithub.com/index#" data-target="html"
        class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>
    <!--Start Preloader-->
    <div class="loader js-preloader" style="display: none;">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--End Preloader-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/twentytwenty.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/marquee.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-sidebar-content.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.min.js') }}"></script>


    <script src="{{ asset('frontend/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/SplitText.js') }}"></script>


    <!-- template js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <!-- Additional Scripts -->
    <script src="{{ asset('frontend/assets/js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/animation-fix.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/sidebar-fix.js') }}"></script>
