@extends('TLVlayouts.master')

@section('title', 'Projet')

@section('css')
    <style type="text/css">
        #example10 li {position:relative;}
        #example10 div.slider-bg {background:#000;top:300px;height:102px;width:600px;left:0;position:absolute;z-index:10;opacity:.5;}
        #example10 div.slider-info {top:300px;height:72px;left:0;position:absolute;width: 150px;z-index:15;padding:15px;}
        #example10 div.slider-info strong {font-size:18px;color:#fff;margin-bottom:5px;}
        #example10 div.slider-info p {display:none;font-size:12px;line-height:14px;color:#fff;margin:0 !important;}
        #example10 li.slider-open div.slider-info {width:570px;}
        #example10 li.slider-open div.slider-info strong {font-size:22px;}
        #example10 li.slider-open div.slider-info p {display:block;}
    </style>
@endsection

@section('class-page', 'room-detail-page')

@section('content')
            <!-- PAGE TITLE START
            ============================================= -->
            <div class="page-title wow fadeIn clearfix">
                <div class="title text-center wow fadeIn" data-wow-delay="1.5s">
                    <p class="subtitle">{{_i('Présentation de')}}</p>
                    <h2>{{_i('Notre')}}<span class="bold"> {{_i('Projet')}}</span></h2>
                </div>
            </div>
            <!-- PAGE TITLE END -->

            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="homepage clearfix">

                <!-- ROOM DETAIL START
                ============================================= -->
                <div class="room-detail-wrap wrapper clearfix" style="padding-top: 0">
                    <div class="container">
                        <div class="row">
                        
                            <div class="room-detail widget col-md-8">
                                <h3 class="widget-title">{{_i('RÉSIDENCE TAJ LUXURY VILLA')}}</h3>
                            <p class="intro" style="font-size: 14px;">{{_i('Le projet de résidences Taj Luxury villa transforme votre rêve en réalité! Bénéficiez d’une offre totale de 24 villas haut standing, dont la première tranche de 12 villas est actuellement en cours de commercialisation* .')}}
                            <br/><br/>
                            {{_i('Nos villas sont très bien équipées avec toutes les commodités modernes. Elles assemblent des styles traditionnel et contemporain pour vous accueillir dans un cadre féerique loin de l’agitation du centre ville. Situé dans un magnifique domaine privé, à seulement 20 minutes du centre de la ville rouge et à quelques minutes de l’aéroport international de Marrakech, au sein d’un magnifique parc planté de fleurs et riche en végétation exotique')}} <br/> <br/>
                            {{_i('Que vous cherchiez une villa de luxe moderne, une maison «intelligente» dotée d’une technologie de dernier cri ou que vous préfériez une maison écologique, les villas haut standing du projet Taj Luxury sont réalisées sur des parcelles d’une surface terrain variant entre 1100 m2 et 1500m2 avec une surface couverte de 400m2.')}}
                             <br/>
                            {{_i('Toutes les suites donnent sur de larges terrasses sur les trois façades de la villa afin de profiter au maximum de la vue privilégiée sur les montagnes de latlas que vous offre le site.')}}
                             <br/> <br/>
                             {{_i('* la deuxième tranche du projet sera commercialisée d’ici fin 2018.')}}
                            </p>
                            </div>

                            <div class="room-detail widget col-md-4">
                                <h3 class="widget-title">{{_i('INFORMATIONS LÉGALES')}}</h3>
                                <p>{{_i('Taj Luxury Villa est immatriculé à la conservation foncière de Marrakech sous les références TF n 04/224659 et 04/224658.')}}</p>
                                <p>{{_i('Une autorisation de construire a été délivrée à Taj Luxury Villa Marrakech SA par Monsieur le Président de la commune tasoultante, en date du 03 novembre 2017 sous le Numéro d’autorisation 73/2017.')}}</p>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ROOM DETAIL END -->

                <!-- FACILITIES START
                ============================================= -->
                <div class="facilities clearfix" style="background-image:url('{{ asset('frontend/img/content/plan/plan-de-masse.jpg') }}');">

                    <div class="facilities-detail wrapper wow fadeIn">
                        <div class="title text-center">
                            <h2><span class="bold">TAJ</span> Luxury Villas</h2>
                        </div>

                        <div class="facilities-content">
                            <p class="intro">{{_i('Des mises à niveau étendues et un entretien minutieux ont maintenu ce projet dans un état de premier ordre. Les planchers de bois franc et les nouveaux tapis créent un espace de vie très confortable!')}}</p>

                            <div class="facilities-item">
                                <h3>{{_i('Des vues imprenables')}}</h3>
                                <p>{{_i(' on a veillé à vous offrir des vues uniques et sensationnelles avec les montagnes de l’Atlas comme arrière-plan pour vivre une expérience Resort de luxe vraiment exclusive.')}}</p>
                            </div>

                            <div class="facilities-item">
                                <h3>{{_i('Espaces verts')}}</h3>
                                <p>{{_i('une décoration zen avec des espaces de vie confortables et innovants conçus dans le souci de vous satisfaire et bénéficiant d’un environnement écologique grâce à de nombreux espaces verts fondus dans le respect total de la nature.')}}</p>
                            </div>

                            <div class="facilities-item">
                                <h3>{{_i('Faible densité')}}</h3>
                                <p>{{_i('Projet résidentiel à faible densité avec une conception favorisant l’épanouissement de communautés de vie. Des villas privées garantissant une masse de population affaiblie pour une demeure souveraine et une discrétion garantie !')}}</p>
                            </div>

                            <div class="facilities-item">
                                <h3>{{_i('Piscine')}}</h3>
                                <p>{{_i('Qui n’a jamais rêvé d’un petit-déjeuner au bord de la piscine? Se détendre dans une chaise longue avec un bon livre, se reposer au soleil, ou simplement se relaxer et ne rien faire. Nos villas de Luxe avec piscine privée vous permettent d’obtenir ce que vous désirez !')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FACILITIES END -->


            </section>
            <!-- CONTENT END -->

            <!-- PLANS START
            ============================================= -->
            <section class="homepage clearfix"> 
                <div class="facilities-detail wrapper wow fadeIn" style="width: 100%;">
                        <div class="title text-center">
                            <h2>Nos<span class="bold"> Plans</span> </h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul id="example10">
                                    	@foreach ($Plans as $plan)
                                        <li>
                                        	<?php $planimage = substr_replace( $plan->image, '-slider', -4, -4);?>
											<img src="{{ asset('storage/').'/'.$planimage }}" width="600" height="400" alt="TajLuxury Villa - {{ $plan->title }}" />
                                            <div class="slider-bg"></div>
                                            <div class="slider-info">
                                                <strong>{{ $plan->title }}</strong>
                                                
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>                
                </div>
                
            </section>
            <!-- PLANS END -->

@endsection

@section('scripts')
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.zaccordion.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.zaccordion.min.js') }}"></script>
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

            $(document).ready(function() {
                $("#example10").zAccordion({
                    width: 1200,
                    speed: 600,
                    slideClass: "slider",
                    slideWidth: 600,
                    height: 400
                });
            });
        </script>
@endsection