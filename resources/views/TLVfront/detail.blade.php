@extends('TLVlayouts.master')

@section('title', 'Detail')

@section('css')
        <link rel="stylesheet" href="{{ asset('frontend/css/jssor.css') }}" type="text/css" />
@endsection

@section('class-page', 'room-detail-page')

@section('content')

            <!-- PAGE TITLE START
            ============================================= -->
            <div class="page-title wow fadeIn clearfix">
                <div class="title text-center wow fadeIn" data-wow-delay="1.5s">
                    <p class="subtitle">{{_i('A propos de')}}</p>
                    <h2>{{_i('Notre')}} <span class="bold">{{_i('Villa')}}</span></h2>
                </div>
            </div>
            <!-- PAGE TITLE END -->

            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="clearfix" >

                <!-- FEATURES START
                ============================================= -->
                <div class="features wrapper clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="title text-center wow fadeIn">
                                <h2><span class="bold"> {{_i('DÉTAILS')}}</span> {{_i('DE LA PROPRIÉTÉ')}}</h2>
                            </div>

                            <div class="features-list">
                                <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.3s">
                                    <i class="icon icon-ruler"></i>
                                    <h4>{{_i('Surface couverte')}}</h4>
                                    <p>400 m²</p>
                                </div>

                                <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.6s">
                                    <i class="icon icon-bed"></i>
                                    <h4>{{_i('Chambres')}}</h4>
                                    <p>4</p>
                                </div>

                                <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.9s">
                                    <i class="icon icon-bath"></i>
                                    <h4>{{_i('Les salles de bain')}}</h4>
                                    <p>5</p>
                                </div>

                                <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="1.2s">
                                    <i class="icon icon-calendar"></i>
                                    <h4>{{_i('Année de construction')}}</h4>
                                    <p>2018</p>
                                </div>

                                <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="1.5s">
                                    <i class="icon icon-car"></i>
                                    <h4>Parking</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FEATURES END -->

            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                	@foreach ($Rooms as $room)
                    <div data-p="170.00">
                    	<?php $roomimage = substr_replace( $room->images, '-slider', -4, -4);?>
						<img src="{{ asset('storage/').'/'.$roomimage }}" alt="TajLuxury Villa - {{ $room->title }}" />
                        <div data-u="thumb">
                            <span class="d">{{  $room->getTranslatedAttribute('title')  }}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort121" style="position:absolute;left:0px;top:0px;width:115px;height:380px;overflow:hidden;cursor:default;" data-autocenter="2" data-scale-left="0.75">
                    <div data-u="slides">
                        <div data-u="prototype" class="p" style="width:115px;height:68px;">
                            <div data-u="thumbnailtemplate" class="t"></div>
                        </div>
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5">
                    <div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
                            <circle class="b" cx="8000" cy="8000" r="3000"></circle>
                        </svg>
                        <div data-u="numbertemplate" class="n"></div>
                    </div>
                </div>
            </div>

                <!-- ROOM DETAIL START
                ============================================= -->
                <div class="room-detail-wrap wrapper clearfix">
                    <div class="container">
                        <div class="row">
                        
                            <div class="room-detail widget col-md-6">
                                <h3 class="widget-title">{{_i('ÉQUIPEMENTS')}}</h3>

                                <div class="col-lg-12  col-xs-12">
                                    <ul class="room-service">
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-air-conditioner"></i>{{_i('Climatisation')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-bars"></i>{{_i('Balcons')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-people-2"></i>{{_i('Piscine')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-monitor"></i>{{_i('Salon de télévision')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-wifi"></i>{{_i('Wifi')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-transport"></i>{{_i('Parking')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-bed"></i>{{_i('lit doublé')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-old-telephone-ringing"></i>{{_i('Telephone')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-clock"></i>{{_i('Alarm')}}
                                        </li></div>
                                        <div class="col-lg-6  col-xs-12"><li>
                                            <i class="flaticon2-vehicle"></i>{{_i('Garage')}}
                                        </li></div>
                                    </ul>
                                </div>

                            </div> 

                            <div class="room-detail widget col-md-6">
                                <h3 class="widget-title">{{_i('Chambres luxueusement confortables dans un style ultramoderne !')}}</h3>
                                <p>{{_i('Imprégnez-vous de l’atmosphère orientale et de la décoration élégante de nos villas Deluxe. Les chambres sont joliment décorées avec des couleurs profondes qui s’harmonisent avec le bois et l’habillage chic du couloir, créant ainsi un contraste élégant avec la lumière.')}}<br/>
                                {{_i('Chacune des villas offre un confort et un intérieur somptueux, avec des couleurs riches, des tissus épais et des meubles élégants. Cela se combine pour créer un équilibre harmonieux et une atmosphère agréablement chaleureuse. Imaginez-vous confortablement assis sur votre terrasse ou votre balcon en admirant la magnifique vue sur les montagnes de l’Atlas, un spectacle à couper le souffle !')}}</p>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ROOM DETAIL END -->

                <!-- GALLERY START
                ============================================= -->
                <div class="gallery wrapper clearfix">
                    <div class="container">

                        <div class="title text-center wow fadeIn">
                            <p class="subtitle">{{_i('VUE INTERIEURE/EXTERIEURE')}}</p>
                            <h2> {{_i('NOTRE')}} <span class="bold">{{_i('GALERIE')}}</span></h2>
                        </div>

                        <section id="grid" class="grid clearfix">
                        	@foreach ($Rooms as $room)
                            <a href="{{ url('villa-detail') }}" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                                <figure>
                                	<?php 
                                	$roomimage = substr_replace( $room->images, '-list', -4, -4);
                                	?>
									<img src="{{ asset('storage/').'/'.$roomimage }}"  alt="TajLuxury Villa - {{ $room->title }}" />
                                    <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                                    <figcaption>
                                        <h2>{{  $room->getTranslatedAttribute('title')  }}</h2>
                                        <span>{{_i('Voir')}}</span>
                                    </figcaption>
                                </figure>
                            </a>
                            @endforeach
                        </section>
                    </div>
                </div>
                <!-- GALLERY END -->

            </section>
            <!-- CONTENT END -->
@endsection

@section('scripts')
        <script src="{{ asset('frontend/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/js/jssor.slider-26.7.0.min.js') }}" type="text/javascript"></script>
        <script>
            (function() {
    
                function init() {
                    var speed = 300,
                        easing = mina.backout;

                    [].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
                        var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
                            pathConfig = {
                                from : path.attr( 'd' ),
                                to : el.getAttribute( 'data-path-hover' )
                            };

                        el.addEventListener( 'mouseenter', function() {
                            path.animate( { 'path' : pathConfig.to }, speed, easing );
                        } );

                        el.addEventListener( 'mouseleave', function() {
                            path.animate( { 'path' : pathConfig.from }, speed, easing );
                        } );
                    } );
                }

                init();

            })();
        </script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 6,
                $Orientation: 2,
                $Align: 156
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1150;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
@endsection