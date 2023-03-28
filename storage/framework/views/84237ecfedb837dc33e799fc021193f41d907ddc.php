<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="Pronia">
    <title><?php echo e(config('app.name', 'Pronia')); ?></title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">


    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/Pe-icon-7-stroke.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ion.rangeSlider.min.css')); ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <?php echo e($slot); ?>

    </main>
    <!-- Begin Footer Area -->
    <div class="footer-area" data-bg-image="<?php echo e(asset('assets/img/footer/bg/1-1920x465.jpg')); ?>">
        <div class="footer-top section-space-top-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget-item">
                            <div class="footer-widget-logo">
                                <a href="<?php echo e(asset('/')); ?>">
                                    <img src="<?php echo e(asset('assets/img/dark.png')); ?>" alt="Logo">
                                </a>
                            </div>
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
                                        <a href="#" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>

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
                            <span class="copyright-text">© 2023 Pronia Made with <i class="fa fa-heart text-danger"></i>  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End Here -->
    <a class="scroll-to-top" href="">
        <i class="fa fa-angle-double-up"></i>
    </a>
</div>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="/assets/js/vendor/jquery.waypoints.js"></script>
<script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/assets/js/plugins/wow.min.js"></script>
<script src="/assets/js/plugins/swiper-bundle.min.js"></script>
<script src="/assets/js/plugins/jquery.nice-select.js"></script>
<script src="/assets/js/plugins/parallax.min.js"></script>
<script src="/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/plugins/tippy.min.js"></script>
<script src="/assets/js/plugins/ion.rangeSlider.min.js"></script>
<script src="/assets/js/plugins/mailchimp-ajax.js"></script>
<script src="/assets/js/plugins/jquery.counterup.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
<script src="/assets/js/mains.js"></script>
<script src="/assets/js/cookie_cart.js"></script>

</body>
</html>
<?php /**PATH C:\OSPanel\domains\shop\resources\views/layouts/guest.blade.php ENDPATH**/ ?>