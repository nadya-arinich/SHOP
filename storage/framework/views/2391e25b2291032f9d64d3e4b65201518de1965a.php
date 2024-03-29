<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pronia</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Pronia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

    <!-- CSS
    ============================================ -->

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Pe-icon-7-stroke.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/ion.rangeSlider.min.css')); ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

</head>

<body>

<div class="main-wrapper">

    <!-- Begin Main Header Area -->
    <header class="main-header-area">
        <div class="header-top bg-pronia-primary d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="header-top-left">
                            <span class="pronia-offer"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle py-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-middle-wrap position-relative">
                            <div class="header-contact d-none d-lg-flex">
                                <i class="pe-7s-call"></i>
                                <a href="tel://+375 29 258 20 20">+375 29 258 20 20</a>
                            </div>

                            <a href="<?php echo e(asset('/')); ?>" class="header-logo">
                                <img src="<?php echo e(asset('images/logo/dark.png')); ?>" alt="Header Logo">
                            </a>

                            <div class="header-right">
                                <ul>
                                    <li class="dropdown d-none d-lg-block">
                                        <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                            <i class="pe-7s-users"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="settingButton">
                                            <li><a class="dropdown-item" href="my-account.html">Мой кабинет</a></li>
                                            <li><a class="dropdown-item" href="login-register.html">Войти</a>

                                            </li>
                                        </ul>
                                    </li>

                                    <li class="minicart-wrap me-3 me-lg-0">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="quantity">1</span>
                                        </a>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="pe-7s-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu position-relative">
                            <nav class="main-nav">
                                <ul>
                                    <li class="drop-holder">
                                        <a href="<?php echo e(asset('/')); ?>">Главная</a>
                                    </li>
                                    <li class="megamenu-holder">
                                        <a href="<?php echo e(asset('catalog')); ?>">Каталог</a>
                                    </li>
                                    <li class="drop-holder">
                                        <a href="blog.html">Блог</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(asset('about')); ?>">О нас</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky py-4 py-lg-0">
            <div class="container">
                <div class="header-nav position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-6">

                            <a href="<?php echo e(asset('/')); ?>" class="header-logo">
                                <img src="<?php echo e(asset('images/logo/dark.png')); ?>" alt="Header Logo">
                            </a>

                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="main-menu">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="drop-holder">
                                            <a href="<?php echo e(asset('/')); ?>">Главная</a>

                                        </li>
                                        <li class="megamenu-holder">
                                            <a href="<?php echo e(asset('catalog')); ?>">Каталог</a>

                                        </li>
                                        <li class="drop-holder">
                                            <a href="blog.html">Блог</a>

                                        </li>
                                        <li>
                                            <a href="<?php echo e(asset('about')); ?>">О нас</a>
                                        </li>

                                        <li>
                                            <a href="contact.html">Контакты</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="header-right">
                                <ul>
                                    <li class="dropdown d-none d-lg-block">
                                        <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="stickysettingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                            <i class="pe-7s-users"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="stickysettingButton">
                                            <li><a class="dropdown-item" href="my-account.html">Мой кабинет/a></li>
                                            <li><a class="dropdown-item" href="login-register.html">Войти</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="minicart-wrap me-3 me-lg-0">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="quantity">0</span>
                                        </a>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="pe-7s-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu_wrapper" id="mobileMenu">
            <div class="offcanvas-body">
                <div class="inner-body">
                    <div class="offcanvas-top">
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <div class="header-contact offcanvas-contact">
                        <i class="pe-7s-call"></i>
                        <a href="tel://+375 29 258 20 20">+375 29 258 20 20</a>
                    </div>

                    <div class="offcanvas-menu_area">
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="<?php echo e(asset('/')); ?>">
                                            <span class="mm-text">Главная
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                    </a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo e(asset('catalog')); ?>">
                                            <span class="mm-text">Каталог
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                    </a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Блог
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                    </a>

                                </li>
                                <li>
                                    <a href="<?php echo e(asset('about')); ?>">
                                        <span class="mm-text">О нас</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="contact.html">
                                        <span class="mm-text">Контакты</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-minicart_wrapper" id="miniCart">
            <div class="offcanvas-body">
                <div class="minicart-content">
                    <div class="minicart-heading">
                        <h4 class="mb-0">Shopping Cart</h4>
                        <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder"></i></a>
                    </div>
                    <ul class="minicart-list">
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i class="pe-7s-close" data-tippy="Remove"
                                                                       data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                                                                       data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                            <a href="single-product-variable.html" class="product-item_img">
                                <img class="img-full" src="<?php echo e(asset('images/product/small-size/2-1-70x78.png')); ?>" alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="single-product-variable.html">American Marigold</a>
                                <span class="product-item_quantity">1 x $23.45</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i class="pe-7s-close" data-tippy="Remove"
                                                                       data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                                                                       data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                            <a href="single-product-variable.html" class="product-item_img">
                                <img class="img-full" src="<?php echo e(asset('images/product/small-size/2-2-70x78.png')); ?>" alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="single-product-variable.html">Black Eyed Susan</a>
                                <span class="product-item_quantity">1 x $25.45</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#">
                                <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                   data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                   data-tippy-theme="sharpborder"></i>
                            </a>
                            <a href="single-product-variable.html" class="product-item_img">
                                <img class="img-full" src="<?php echo e(asset('images/product/small-size/2-3-70x78.png')); ?>" alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="single-product-variable.html">Bleeding Heart</a>
                                <span class="product-item_quantity">1 x $30.45</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-item_total">
                    <span>Subtotal</span>
                    <span class="ammount">$79.35</span>
                </div>
                <div class="group-btn_wrap d-grid gap-2">
                    <a href="cart.html" class="btn btn-dark">View Cart</a>
                    <a href="checkout.html" class="btn btn-dark">Checkout</a>
                </div>
            </div>
        </div>
        <div class="global-overlay"></div>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->

    <!-- Begin Footer Area -->
    <div class="footer-area" data-bg-image="<?php echo e(asset('images/footer/bg/1-1920x465.jpg')); ?>">
        <div class="footer-top section-space-top-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget-item">
                            <div class="footer-widget-logo">
                                <a href="<?php echo e(asset('/')); ?>">
                                    <img src="<?php echo e(asset('images/logo/dark.png')); ?>" alt="Logo">
                                </a>
                            </div>
                            <p class="footer-widget-desc">Lorem ipsum dolor sit amet, consec adipisl elit, sed do eiusmod
                                tempor
                                <br>
                                incidio ut labore et dolore magna.
                            </p>
                            <div class="social-link with-border">
                                <ul>
                                    <li>
                                        <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-40">
                        <div class="footer-widget-item">
                            <h3 class="footer-widget-title">Useful Links</h3>
                            <ul class="footer-widget-list-item">
                                <li>
                                    <a href="#">About Pronia</a>
                                </li>
                                <li>
                                    <a href="#">How to shop</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                                <li>
                                    <a href="#">Log in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-40">
                        <div class="footer-widget-item">
                            <h3 class="footer-widget-title">My Account</h3>
                            <ul class="footer-widget-list-item">
                                <li>
                                    <a href="#">Sign In</a>
                                </li>
                                <li>
                                    <a href="#">View Cart</a>
                                </li>
                                <li>
                                    <a href="#">My Wishlist</a>
                                </li>
                                <li>
                                    <a href="#">Track My Order</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-40">
                        <div class="footer-widget-item">
                            <h3 class="footer-widget-title">Our Service</h3>
                            <ul class="footer-widget-list-item">
                                <li>
                                    <a href="#">Payment Methods</a>
                                </li>
                                <li>
                                    <a href="#">Money Guarantee!</a>
                                </li>
                                <li>
                                    <a href="#">Returns</a>
                                </li>
                                <li>
                                    <a href="#">Shipping</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 pt-40">
                        <div class="footer-contact-info">
                            <h3 class="footer-widget-title">Got Question? Call Us</h3>
                            <a class="number" href="tel://123-456-789">123 456 789</a>
                            <div class="address">
                                <ul>
                                    <li>
                                        Your Address Goes Here
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-method">
                            <a href="#">
                                <img src="<?php echo e(asset('images/payment/1.png')); ?>" alt="Payment Method">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                                <span class="copyright-text">© 2021 Pronia Made with <i class="fa fa-heart text-danger"></i> by
                            <a href="https://hasthemes.com/" rel="noopener" target="_blank">HasThemes</a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End Here -->

    <!-- Begin Modal Area -->
    <div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrap row">
                        <div class="col-lg-6">
                            <div class="modal-img">
                                <div class="swiper-container modal-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full" src="<?php echo e(asset('images/product/large-size/1-1-570x633.jpg')); ?>" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full" src="<?php echo e(asset('images/product/large-size/1-2-570x633.jpg')); ?>" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full" src="<?php echo e(asset('images/product/large-size/1-3-570x633.jpg')); ?>" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full" src="<?php echo e(asset('images/product/large-size/1-4-570x633.jpg')); ?>" alt="Product Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title">American Marigold</h2>
                                <div class="price-box">
                                    <span class="new-price">$23.45</span>
                                </div>
                                <div class="rating-box-wrap">
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="review-status">
                                        <a href="#">( 1 Review )</a>
                                    </div>
                                </div>
                                <div class="selector-wrap color-option">
                                    <span class="selector-title border-bottom-0">Color</span>
                                    <select class="nice-select wide border-bottom-0 rounded-0">
                                        <option value="default">Black & White</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                        <option value="red">Red</option>
                                    </select>
                                </div>
                                <div class="selector-wrap size-option">
                                    <span class="selector-title">Size</span>
                                    <select class="nice-select wide rounded-0">
                                        <option value="medium">Medium Size & Poot</option>
                                        <option value="large">Large Size With Poot</option>
                                        <option value="small">Small Size With Poot</option>
                                    </select>
                                </div>
                                <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod
                                    tempo incid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor
                                    in reprehenderit in voluptate</p>
                                <ul class="quantity-with-btn">
                                    <li class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                        </div>
                                    </li>
                                    <li class="add-to-cart">
                                        <a class="btn btn-custom-size lg-size btn-pronia-primary" href="<?php echo e(asset('cart')); ?>">Add to
                                            cart</a>
                                    </li>
                                    <li class="wishlist-btn-wrap">
                                        <a class="custom-circle-btn" href="wishlist.html">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li class="compare-btn-wrap">
                                        <a class="custom-circle-btn" href="compare.html">
                                            <i class="pe-7s-refresh-2"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="service-item-wrap pb-0">
                                    <li class="service-item">
                                        <div class="service-img">
                                            <img src="<?php echo e(asset('images/shipping/icon/car.png')); ?>" alt="Shipping Icon">
                                        </div>
                                        <div class="service-content">
                                            <span class="title">Free <br> Shipping</span>
                                        </div>
                                    </li>
                                    <li class="service-item">
                                        <div class="service-img">
                                            <img src="<?php echo e(asset('images/shipping/icon/card.png')); ?>" alt="Shipping Icon">
                                        </div>
                                        <div class="service-content">
                                            <span class="title">Safe <br> Payment</span>
                                        </div>
                                    </li>
                                    <li class="service-item">
                                        <div class="service-img">
                                            <img src="<?php echo e(asset('images/shipping/icon/service.png')); ?>" alt="Shipping Icon">
                                        </div>
                                        <div class="service-content">
                                            <span class="title">Safe <br> Payment</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Area End Here -->

    <!-- Begin Scroll To Top -->
    <a class="scroll-to-top" href="">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!-- Scroll To Top End Here -->

</div>

<!-- Global Vendor, plugins JS -->

<!-- JS Files
============================================ -->

<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="js/vendor/jquery.waypoints.js"></script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins/wow.min.js"></script>
<script src="js/plugins/swiper-bundle.min.js"></script>
<script src="js/plugins/jquery.nice-select.js"></script>
<script src="js/plugins/parallax.min.js"></script>
<script src="js/plugins/jquery.magnific-popup.min.js"></script>
<script src="js/plugins/tippy.min.js"></script>
<script src="js/plugins/ion.rangeSlider.min.js"></script>
<script src="js/plugins/mailchimp-ajax.js"></script>
<script src="js/plugins/jquery.counterup.js"></script>

<!--Main JS (Common Activation Codes)-->
<script src="js/main.js"></script>

</body>

</html>

<?php /**PATH C:\OSPanel\domains\shop\resources\views/layouts/app.blade.php ENDPATH**/ ?>