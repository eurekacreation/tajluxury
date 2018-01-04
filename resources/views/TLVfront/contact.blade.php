@extends('TLVlayouts.master')

@section('title', 'Detail')

@section('css')
        <style type="text/css">
            #map {
                width: 100%;
                height: 500px;
            }
        </style>
@endsection

@section('class-page', 'contact-page')

@section('content')

            <!-- PAGE TITLE START
            ============================================= -->
            <div class="page-title wow fadeIn clearfix">
                <div class="title text-center wow fadeIn" data-wow-delay="1.5s">
                    <h2><span class="bold"> {{_i('Contact nous')}}</span></h2>
                </div>
            </div>
            <!-- PAGE TITLE END -->

            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="clearfix">
                <!-- FEATURES START
                ============================================= -->
                <div class="features wrapper clearfix" style="padding-bottom: 0;">
                    <div class="container">
                        <div class="row">
                            <div class="title text-center wow fadeIn">
                                <p class="subtitle">{{_i('Vous désirez nous contacter?')}}</p>
                                <h2><span class="bold">{{_i('CONTACTEZ')}}</span> {{_i('NOTRE AGENCE')}} </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FEATURES END -->


                <!-- AGENT DETAILS START
                ============================================= -->
                <div class="agent contact-form clearfix">

                    <div class="form wow fadeIn" style="padding-top: 0;">
                    	@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
                        <form name="contact_form" id="contact_form"  method="post" action="{{ url('contact/submit') }}" onSubmit="return true">
                        	{{ csrf_field() }}
                            <input type="text" name="contact_name" id="name" placeholder="{{_i('Nom et Prenom')}}" required="required" />
                            <input type="text" name="contact_phone" id="tel" placeholder="{{_i('Numéro de Telephone')}}" required="required" />
                            <input type="text" name="contact_email" id="email" placeholder="{{_i('Adresse Email')}}" required="required" />
                            <input type="text" name="contact_subject" id="subject" placeholder="{{_i('Object')}}" required="required" data-error="{{_i('Subject required')}}" />
                            <textarea name="contact_message" id="message" cols="45" rows="3" placeholder="{{_i('Message')}}" style="resize:vertical" required="required" ></textarea>
                            <input name="submit" type="submit" value="{{_i('Envoyer le Message')}}" class="button-normal yellow">
                        </form>
                    </div>
                    <div class="agent-detail wow fadeIn" data-wow-delay="0.5s" style="padding-top: 0;">
                        <div class="agent-title">
                            <h3 class="agent-name">Taj Luxury Villas</h3>
                            <p class="agent-position">Marrakech</p>
                        </div>
                        <div class="agent-desc">
                            <p class="desc">{{_i('Vous n’avez pas trouvé réponse à vos questions sur notre site ? ')}}<br>
                            {{_i('Vous avez une demande spécifique en lien avec votre réservation de location?')}}<br>
                            {{_i('Vous avez besoin d’aide pour choisir une villa ?')}}<br>
                            {{_i('Peu importe la raison, n’hésitez surtout pas à prendre contact directement avec nous via ce formulaire, ça sera plus simple !')}} </p>
                            <p>{{_i('Email')}} : contact@tajluxuryvillas.com</p>
                            <p>{{_i('Tel')}} : (212) 655 227 112</p>
                            <p>{{_i('Fax')}} : (212) 678 456 373</p>
                            <p>{{_i('Adresse')}} : BP 5412 - KM 10 route d’Amizmiz - MARRAKECH - MAROC</p>
                        </div>
                        <div class="agent-social">
                            <ul>
                                <li><a href="http://twitter.com/"><i class="icon icon-twitter"></i></a></li>
                                <li><a href="http://facebook.com/"><i class="icon icon-facebook"></i></a></li>
                                <li><a href="http://googleplus.com/"><i class="icon icon-googleplus"></i></a></li>
                                <li><a href="http://skype.com/"><i class="icon icon-skype"></i></a></li>
                                <li><a href="http://dribble.com/"><i class="icon icon-dribble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- AGENT DETAILS END -->

                <!-- CONTACT FORM START
                ============================================= -->
                <div class="contact-form clearfix" style="margin-top: 50px;border-bottom: 10px solid #ae956aa8;border-top: 10px solid #ae956aa8;">
                    <div id="map"></div>
                </div>
                <!-- CONTACT FORM END -->

            </section>
            <!-- CONTENT END -->

@endsection

@section('scripts')
        <script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js&key=AIzaSyARy5rNoOPm5PteDZ7-0xGbNoUG_t1mJoI">
        </script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 13,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(31.5422665,-8.0497391),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [   {       "featureType":"landscape",      "stylers":[         {               "hue":"#ad946a"         },          {               "saturation":20           },          {               "lightness":20           },          {               "gamma":1           }       ]   },  {       "featureType":"road.highway",       "stylers":[         {               "hue":"#ad946a"         },          {               "saturation":-19.8          },          {               "lightness":-1.8            },          {               "gamma":1           }       ]   },  {       "featureType":"road.arterial",      "stylers":[         {               "hue":"#ad946a"         },          {               "saturation":72.4           },          {               "lightness":-32.6           },          {               "gamma":1           }       ]   },  {       "featureType":"road.local",     "stylers":[         {               "hue":"#ad946a"         },          {               "saturation":74.4           },          {               "lightness":-18         },          {               "gamma":1           }       ]   },  {       "featureType":"water",      "stylers":[         {               "hue":"#ad946a"         },          {               "saturation":-63.2          },          {               "lightness":38          },          {               "gamma":1           }       ]   },  {       "featureType":"poi",        "stylers":[         {               "hue":"#ad946a"         },          {               "saturation":54.2           },          {               "lightness":-14.4           },          {               "gamma":1           }       ]   }]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(31.5422665, -8.0497391),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
@endsection