<?php $__env->startSection('title', 'Detail'); ?>

<?php $__env->startSection('css'); ?>
        <style type="text/css">
            #map {
                width: 100%;
                height: 500px;
            }
        </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('class-page', 'contact-page'); ?>

<?php $__env->startSection('content'); ?>

            <!-- PAGE TITLE START
            ============================================= -->
            <div class="page-title wow fadeIn clearfix">
                <div class="title text-center wow fadeIn" data-wow-delay="1.5s">
                    <h2><span class="bold"> <?php echo e(_i('Contact nous')); ?></span></h2>
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
                                <p class="subtitle"><?php echo e(_i('Vous désirez nous contacter?')); ?></p>
                                <h2><span class="bold"><?php echo e(_i('CONTACTEZ')); ?></span> <?php echo e(_i('NOTRE AGENCE')); ?> </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FEATURES END -->


                <!-- AGENT DETAILS START
                ============================================= -->
                <div class="agent contact-form clearfix">

                    <div class="form wow fadeIn" style="padding-top: 0;">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form name="contact_form" id="contact_form"  method="post" action="<?php echo e(url('contact/submit')); ?>" onSubmit="return true">
                            <?php echo e(csrf_field()); ?>

                            <input type="text" name="contact_name" id="name" placeholder="<?php echo e(_i('Nom et Prenom')); ?>" required="required" />
                            <input type="text" name="contact_phone" id="tel" placeholder="<?php echo e(_i('Numéro de Telephone')); ?>" required="required" />
                            <input type="text" name="contact_email" id="email" placeholder="<?php echo e(_i('Adresse Email')); ?>" required="required" />
                            <input type="text" name="contact_subject" id="subject" placeholder="<?php echo e(_i('Object')); ?>" required="required" data-error="<?php echo e(_i('Subject required')); ?>" />
                            <textarea name="contact_message" id="message" cols="45" rows="3" placeholder="<?php echo e(_i('Message')); ?>" style="resize:vertical" required="required" ></textarea>
                            <input name="submit" type="submit" value="<?php echo e(_i('Envoyer le Message')); ?>" class="button-normal yellow">
                        </form>
                    </div>
                    <div class="agent-detail wow fadeIn" data-wow-delay="0.5s" style="padding-top: 0;">
                        <div class="agent-title">
                            <h3 class="agent-name">Taj Luxury Villas</h3>
                            <p class="agent-position">Marrakech</p>
                        </div>
                        <div class="agent-desc">
                            <p class="desc"><?php echo e(_i('Vous n’avez pas trouvé réponse à vos questions sur notre site ? ')); ?><br>
                            <?php echo e(_i('Vous avez une demande spécifique en lien avec votre réservation de location?')); ?><br>
                            <?php echo e(_i('Vous avez besoin d’aide pour choisir une villa ?')); ?><br>
                            <?php echo e(_i('Peu importe raison, n’hésitez surtout pas à prendre contact directement avec nous via ce formulaire, ça sera plus simple !')); ?> </p>
                            <p><?php echo e(_i('Email')); ?> : contact@tajluxuryvillas.com</p>
                            <p><?php echo e(_i('Tel')); ?> : (212) 666 91 95 99</p>
                            <p><?php echo e(_i('Adresse')); ?> : KM 10 route d’Amizmiz - MARRAKECH - MAROC</p>
                        </div>
                        <div class="agent-social">
                            <ul>
                                <li><a href="http://twitter.com/" style="pointer-events: none;cursor: default"><i class="icon icon-twitter"></i></a></li>
                                <li><a href="http://facebook.com/" style="pointer-events: none;cursor: default"><i class="icon icon-facebook"></i></a></li>
                                <li><a href="http://googleplus.com/" style="pointer-events: none;cursor: default"><i class="icon icon-googleplus"></i></a></li>
                                <li><a href="http://skype.com/" style="pointer-events: none;cursor: default"><i class="icon icon-skype"></i></a></li>
                                <li><a href="http://dribble.com/" style="pointer-events: none;cursor: default"><i class="icon icon-dribble"></i></a></li>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
        <script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARy5rNoOPm5PteDZ7-0xGbNoUG_t1mJoI">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('TLVlayouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>