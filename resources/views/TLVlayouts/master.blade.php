<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="fr-FR"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="fr-FR"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="fr-FR"> <![endif]-->

<html dir="ltr" lang="fr-FR">

    <head>
        <meta name="description" content="Le projet de résidences Taj Luxury villa transforme votre rêve en réalité! Bénéficiez d’une offre totale de 24 villas haut standing, dont la première tranche de 12 villas est actuellement en cours de commercialisation " />
        <meta name="keywords" content="Taj Luxury Villas, Maroc, Marrakech, vente, villas, Luxe, vente villa" />
        <meta name="author" content="eurekacreation-SaadMansouri">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Google Fonts
        ============================================= -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 

        <!-- Stylesheets
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/plugin.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/flaticon2.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css') }}">
        <link rel="shortcut icon" href="{{ asset('frontend/img/tlv-logo-y.jpg') }}">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


        <title>Taj Luxury Villas | @yield('title') </title>


        @yield('css')
    </head>

    <body>

        <!-- MAIN WRAPPER
        ============================================= -->
        <div id="main-wrapper" class="@yield('class-page') animsition clearfix">

            <!-- HEADER
            ============================================= -->
            <header id="header" class="site-header transparent-header clearfix">

                <div class="header-navigation">
                    <div class="container">
                        <div class="row">
                            <div class="logo wow fadeInDown col-md-3" data-wow-delay="0.5s">
                                <div class="logo-image">
                                    <a href="{{ url('accueil')}}"><img src="{{ asset('frontend/img/Tajluxutyvilla-logo.png') }}" style="width: 140px;margin-top: 0;" alt="Taj Luxury Villas"></a>
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
                                    <li><a href="{{ url('accueil') }}">{{_i('Accueil')}}</a></li>
                                    <li><a href="{{ url('projet')}}">{{_i('Le Projet')}}</a></li>
                                    <li><a href="{{ url('villa-detail')}}">{{_i('Villas')}}</a></li>
                                    <li><a href="{{ url('contact')}}">{{_i('Contact')}}</a></li>
                                        @foreach(Config::get('laravel-gettext.supported-locales') as $locale)
                                            @if((LaravelGettext::getLocale()))
                                                @if(LaravelGettext::getLocale()==$locale)
                                                <li class="has-child" style="">
                                                    <a href="{{route('lang',['locale'=>$locale])}}" style="color: #fff;">
                                                        @if ($locale == 'fr_FR')
                                                            <span>FR</span>
                                                        @else
                                                            <span>EN</span>
                                                        @endif
                                                    </a>
                                                    <ul class="child wow fadeInDown"  style="width: 5em;top: 42px;left: -18px;">
                                                        @foreach(Config::get('laravel-gettext.supported-locales') as $locale)
                                                            @if(LaravelGettext::getLocale()!=$locale)
                                                            <li><a href="{{route('lang',['locale'=>$locale])}}">
                                                                    @if ($locale == 'fr_FR')
                                                                        <span>FR</span>
                                                                    @else
                                                                        <span>EN</span>
                                                                    @endif
                                                                </a>
                                                            </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @break
                                                @endif
                                            @else
                                            <li>
                                                <a href="{{route('lang',['locale'=>$locale])}}">
                                                    @if ($locale == 'fr_FR')
                                                        <span>FR</span>
                                                    @else
                                                        <span>EN</span>
                                                    @endif
                                                </a>
                                            </li>
                                            @endif
                                        @endforeach

                                </ul>
                            </nav>
                            <div id="slide-overlay" class="slide-overlay"></div>
                            <!-- MOBILE MENU END -->

                            <div class="navigation wow fadeInDown col-md-9" data-wow-delay="1s">
                                <nav id="main-menu" class="menu">
                                    <ul id="menu-top-menu" class="menus">
                                        <li><a href="{{ url('accueil') }}">{{_i('Accueil')}}</a></li>
                                        <li><a href="{{ url('projet')}}">{{_i('Le Projet')}}</a></li>
                                        <li><a href="{{ url('villa-detail')}}">{{_i('Villa')}}</a></li>
                                        <li><a href="{{ url('contact')}}">{{_i('Contact')}}</a></li>
                                        @foreach(Config::get('laravel-gettext.supported-locales') as $locale)
                                            @if((LaravelGettext::getLocale()))
                                                @if(LaravelGettext::getLocale()==$locale)
                                                <li class="has-child" style="text-align: center;">
                                                    <a href="{{route('lang',['locale'=>$locale])}}" style="color: #ad946a;">
                                                        @if ($locale == 'fr_FR')
                                                            <span>FR</span>
                                                        @else
                                                            <span>EN</span>
                                                        @endif
                                                    </a>
                                                    <ul class="child wow fadeInDown"  style="width: 5em;top: 42px;left: -18px;text-align: center;">
                                                        @foreach(Config::get('laravel-gettext.supported-locales') as $locale)
                                                            @if(LaravelGettext::getLocale()!=$locale)
                                                            <li><a href="{{route('lang',['locale'=>$locale])}}">
                                                                    @if ($locale == 'fr_FR')
                                                                        <span>FR</span>
                                                                    @else
                                                                        <span>EN</span>
                                                                    @endif
                                                                </a>
                                                            </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @break
                                                @endif
                                            @else
                                            <li>
                                                <a href="{{route('lang',['locale'=>$locale])}}">
                                                    @if ($locale == 'fr_FR')
                                                        <span>FR</span>
                                                    @else
                                                        <span>EN</span>
                                                    @endif
                                                </a>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER END -->

            @yield('content')

            <!-- FOOTER START
            ============================================= -->
            <footer id="footer" class="wrapper clearfix">
                <div class="footer-text wow fadeIn text-center">
                    <h1>{{_i('Vous voulez plus d’informations?')}}</h1>
                    <p>{{_i('Peu importe raison, n’hésitez surtout pas à prendre contact directement avec nous via ce formulaire, ça sera plus simple !')}}</p>
                    <a href="{{ url('contact')}}" class="button-normal yellow">{{_i('Contactez nous')}}</a>
                </div>

                <div class="footer-copyright wow fadeIn text-center">
                    <div class="container">
                        <div class="copyright">
                            <ul class="footer-social">
                                <li><a href="https://www.instagram.com/tajluxuryvillas/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/Tajluxuryvillas/"><i class="fa fa-facebook"></i></a></li>

                            </ul>

                            <p>&copy; 2018 - TAJ Luxury Villas - {{_i('Tous droits réservés. Réalisé par ')}}<a href="http://www.eureka-creation.ma/">Eureka Creation</a> </p>
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

        <!-- JavaScripts
        ============================================= -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('frontend/js/plugin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>

        @yield('scripts')

    </body>

</html>