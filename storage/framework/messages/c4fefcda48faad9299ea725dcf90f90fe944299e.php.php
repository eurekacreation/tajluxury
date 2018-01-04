<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="fr-FR"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="fr-FR"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="fr-FR"> <![endif]-->

<html dir="ltr" lang="fr-FR">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Taj Luxury Villas - <?php echo e(_i('Site officiel')); ?> " />
        <meta name="keywords" content="Taj Luxury Villas, Maroc, Marrakech, Location, villas, Lux, vente" />
        <meta name="author" content="eurekacreation-SaadMansouri">

        <!-- Google Fonts
        ============================================= -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 

        <!-- Stylesheets
        ============================================= -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/plugin.css')); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/fonts/flaticon2.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css')); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


        <!-- JavaScripts
        ============================================= -->
        <script type="text/javascript" src="<?php echo e(asset('frontend/js/jquery.js')); ?>"></script>

        <title>Taj Luxury Villa | <?php echo $__env->yieldContent('title'); ?> </title>

        <?php echo $__env->yieldContent('css'); ?>
    </head>

    <body>

        <!-- MAIN WRAPPER
        ============================================= -->
        <div id="main-wrapper" class="animsition clearfix">

            <!-- HEADER
            ============================================= -->
            <header id="header" class="site-header transparent-header clearfix">

                <div class="header-navigation">
                    <div class="container">
                        <div class="row">
                            <div class="logo wow fadeInDown col-md-3" data-wow-delay="0.5s">
                                <div class="logo-image">
                                    <a href="<?php echo e(url('accueil')); ?>"><img src="<?php echo e(asset('frontend/img/Tajluxutyvilla-logo.png')); ?>" style="width: 140px;margin-top: 0;" alt="Taj Luxury Villas"></a>
                                </div>
                            </div>

                            <!-- MOBILE MENU START
                            ============================================= -->
                            <div class="mobile-menu wow fadeInDown" data-wow-delay="0.5s">
                                <button id="slide-buttons" class="icon icon-navicon-round"></button>
                            </div>

                            <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                                <button class="c-menu__close icon icon-remove-delete"></button>
                                <ul class="menus-mobile">
                                    <li><a href="<?php echo e(url('accueil')); ?>"><?php echo e(_i('Accueil')); ?></a></li>
                                    <li><a href="<?php echo e(url('projet')); ?>"><?php echo e(_i('Le Projet')); ?></a></li>
                                    <li><a href="<?php echo e(url('villa-detail')); ?>"><?php echo e(_i('Villa')); ?></a></li>
                                    <li><a href="<?php echo e(url('contact')); ?>"><?php echo e(_i('Contact')); ?></a></li>
                                </ul>
                            </nav>
                            <div id="slide-overlay" class="slide-overlay"></div>
                            <!-- MOBILE MENU END -->

                            <div class="navigation wow fadeInDown col-md-9" data-wow-delay="1s">
                                <nav id="main-menu" class="menu">
                                    <ul id="menu-top-menu" class="menus">
                                        <li><a href="<?php echo e(url('accueil')); ?>"><?php echo e(_i('Accueil')); ?></a></li>
                                        <li><a href="<?php echo e(url('projet')); ?>"><?php echo e(_i('Le Projet')); ?></a></li>
                                        <li><a href="<?php echo e(url('villa-detail')); ?>"><?php echo e(_i('Villa')); ?></a></li>
                                        <li><a href="<?php echo e(url('contact')); ?>"><?php echo e(_i('Contact')); ?></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER END -->

            <?php echo $__env->yieldContent('content'); ?>

            <!-- FOOTER START
            ============================================= -->
            <footer id="footer" class="wrapper clearfix">
                <div class="footer-text wow fadeIn text-center">
                    <h1><?php echo e(_i('Vous voulez plus d’informations?')); ?></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="<?php echo e(url('contact')); ?>" class="button-normal yellow"><?php echo e(_i('Contactez nous')); ?></a>
                </div>

                <div class="footer-copyright wow fadeIn text-center">
                    <div class="container">
                        <div class="copyright">
                            <ul class="footer-social">
                                <li><a href="http://twitter.com/"><i class="icon icon-twitter"></i></a></li>
                                <li><a href="http://facebook.com/"><i class="icon icon-facebook"></i></a></li>
                                <li><a href="http://googleplus.com/"><i class="icon icon-googleplus"></i></a></li>
                                <li><a href="http://skype.com/"><i class="icon icon-skype"></i></a></li>
                                <li><a href="http://dribble.com/"><i class="icon icon-dribble"></i></a></li>
                            </ul>

                            <p>&copy; 2018 TajLUXURY Villa- <?php echo e(_i('Tous droits réservés. Réalisé par')); ?><a href="http://www.eureka-creation.ma/">Eureka Creation</a> </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->

        </div>
        <!-- MAIN WRAPPER END -->

        <!-- Footer Scripts
        ============================================= -->
        <!-- External -->
        <script type="text/javascript" src="<?php echo e(asset('frontend/js/plugin.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>

        <?php echo $__env->yieldContent('scripts'); ?>

    </body>

</html>