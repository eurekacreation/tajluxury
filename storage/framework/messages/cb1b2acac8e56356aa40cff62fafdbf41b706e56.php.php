<?php $__env->startSection('title', 'Site Officiel'); ?>

<?php $__env->startSection('content'); ?>

            <!-- SLIDER START
            ============================================= -->
            <section id="slider" class="flexslider-wrap fullscreen clearfix">
                <div class="flexslider clearfix">
                    <ul class="slides">
                        <li data-thumb="<?php echo e(asset('frontend/img/content/slider/slide-sm-1.jpg')); ?>">
                            <img src="<?php echo e(asset('frontend/img/content/slider/slide-lg-1.jpg')); ?>" alt="" />
                        </li>
                        <li data-thumb="<?php echo e(asset('frontend/img/content/slider/slide-sm-2.jpg')); ?>">
                            <img src="<?php echo e(asset('frontend/img/content/slider/slide-lg-2.jpg')); ?>" alt="" />
                        </li>
                        <li data-thumb="<?php echo e(asset('frontend/img/content/slider/slide-sm-3.jpg')); ?>">
                            <img src="<?php echo e(asset('frontend/img/content/slider/slide-lg-3.jpg')); ?>" alt="" />
                        </li>
                        <li data-thumb="<?php echo e(asset('frontend/img/content/slider/slide-sm-4.jpg')); ?>">
                            <img src="<?php echo e(asset('frontend/img/content/slider/slide-lg-4.jpg')); ?>" alt="" />
                        </li>
                        <li data-thumb="<?php echo e(asset('frontend/img/content/slider/slide-sm-5.jpg')); ?>">
                            <img src="<?php echo e(asset('frontend/img/content/slider/slide-lg-5.jpg')); ?>" alt="" />
                        </li>
                    </ul>
                </div>

                <div class="slider-text-wrap vertical-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="slider-text wow fadeIn" data-wow-delay="0.5s">
                                    <h2 class="wow fadeInLeft" data-wow-delay="0.5s">TAJ LUXURY VILLAS</h2>
                                    <p class="wow fadeIn" data-wow-delay="0.8s"><?php echo e(_i('Vous souhaite la bienvenue')); ?></p>
                                    <h3 class="wow fadeIn" data-wow-delay="1s"><?php echo e(_i('Trouvez la propriété de luxe de vos rêves')); ?></h3>
                                    
                                </div>
                            </div>
                            <div style="position: absolute;color: #ad946a;top: 35px;right:0;font-size: 21px;margin-right: 10px;">
                                <div style="margin: 50px 0;" class="prendre_rdv" onclick="slidericon()" data-toggle="tooltip" data-placement="left" title="<?php echo e(_i('Prendre un rendez vous')); ?>"><i style="color: #ad946a;"  class="fa fa-calendar-o"></i></div>
                                <div style="margin: 50px 0;" class="etre_rappler" onclick="slidericon2()" data-toggle="tooltip" data-placement="left" title="<?php echo e(_i('Demander d’être rappelé')); ?>"><i style="color: #ad946a;"  class="fa fa-phone-square"></i></div>
                                <div style="margin: 50px 0;" class="demande_brochure" onclick="slidericon3()" data-toggle="tooltip" data-placement="left" title="<?php echo e(_i('Demander Brochure')); ?>"><i style="color: #ad946a;"  class="fa fa-file-text-o"></i></div>
                            </div>
                            <div id="prendre_rdv" style="position: absolute;right: 92px;    top: 0;display:none" class="slider-form col-md-4 wow fadeIn text-center" data-wow-delay="0.5s">
                                <div class="form-wrap">
                                    <div class="form-appointment">
                                        <form method="post" action="">
                                            <input type="text" name="name" id="name" placeholder="<?php echo e(_i('Nom')); ?>" />
                                            <input type="text" name="email" id="email" placeholder="<?php echo e(_i('Email')); ?>" />
                                            <textarea name="message" id="message" cols="10" rows="2" placeholder="<?php echo e(_i('Message')); ?>"></textarea>
                                            <input type="text" id="datepicker" placeholder="<?php echo e(_i('Date')); ?>">
                                            <button class="button-normal yellow"><?php echo e(_i('Prendre rendez vous')); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="etre_rappler" style="position: absolute;right: 92px;    top: 0;display:none" class="slider-form col-md-4 wow fadeIn text-center" data-wow-delay="0.5s">
                                <div class="form-wrap">
                                    <div class="form-appointment">
                                        <form method="post" action="">
                                            <input type="text" name="name" id="name" placeholder="<?php echo e(_i('Nom')); ?>" />
                                            <input type="text" name="email" id="email" placeholder="<?php echo e(_i('Email')); ?>" />
                                            <input type="text" name="tel" id="tel" placeholder="<?php echo e(_i('Telephone')); ?>" />
                                            <textarea name="message" id="message" cols="10" rows="2" placeholder="<?php echo e(_i('Message')); ?>"></textarea>
                                            <button class="button-normal yellow"><?php echo e(_i('Être rappelé')); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="demande_brochure" style="position: absolute;right: 92px;    top: 0;display:none" class="slider-form col-md-4 wow fadeIn text-center" data-wow-delay="0.5s">
                                <div class="form-wrap">
                                    <div class="form-appointment">
                                        <form method="post" action="">
                                            <input type="text" name="name" id="name" placeholder="<?php echo e(_i('Nom')); ?>" />
                                            <input type="text" name="email" id="email" placeholder="<?php echo e(_i('Email')); ?>" />
                                            <textarea name="message" id="message" cols="10" rows="2" placeholder="<?php echo e(_i('Message')); ?>"></textarea>
                                            <button class="button-normal yellow"><?php echo e(_i('Télécharger')); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SLIDER END -->

            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="homepage clearfix">

                <!-- FACILITIES START
                ============================================= -->
                <div class="facilities clearfix" style="background-image:url('<?php echo e(asset('frontend/img/content/home/whymarrakech.jpg')); ?>');">

                    <div class="facilities-detail wrapper wow fadeIn" style="float: left!important;background-color: rgba(0, 0, 0, 0.88);">
                        <div class="title text-center">
                            <h2> <?php echo e(_i('Pourquoi')); ?> <span class="bold" style="color: #fff;">MARRAKECH</span></h2>
                        </div>

                        <div class="facilities-content">
                            <p class="intro" style="color: #e2e2e2;font-size: 14px;"><?php echo e(_i('Baptisée « La Perle du Sud », Marrakech vous offre un cadre dépaysant, à seulement quelques heures d’avion des principales capitales européennes. Par ses senteurs, ses couleurs et son ambiance, la ville ocre charme ses hôtes qui n’ont souvent qu’une envie en la quittant…y revenir.')); ?>

                            <br/> 
                            <?php echo e(_i('Fondée en 1962 par Youssef Ibn Tachfine, premier roi de la dynastie des Almoravides, Marrakech est la troisième plus grande ville du Maroc et possède le titre de ville impériale. Installée au pied des montagnes de l’Atlas et à un peu plus d’une heure de route de l’océan, la ville bénéficie d’un emplacement stratégique. La Perle du Sud possède de nombreux monuments célèbres, à travers le monde, comme La Koutoubia, la Place Jemaa El Fna inscrite, depuis 2001, au patrimoine culturel immatériel de l’humanité par l’UNESCO, ou encore le fameux quartier de la Palmeraie qui abrite les villas des plus grandes stars.')); ?>

                            </p>

                        </div>
                    </div>
                </div>
                <!-- FACILITIES END -->

                <!-- FACILITIES START
                ============================================= -->
                <div class="facilities clearfix" style="background-image:url('<?php echo e(asset('frontend/img/content/home/redidencetlv.jpg')); ?>');">

                    <div class="facilities-detail wrapper wow fadeIn">
                        <div class="title text-center">
                            <h2> <?php echo e(_i('RÉSIDENCE')); ?> <span class="bold">TAJ LUXURY</span></h2>
                        </div>

                        <div class="facilities-content">
                            <p class="intro" style="font-size: 14px;"> <?php echo e(_i('Le projet de résidences Taj Luxury villa transforme votre rêve en réalité! Bénéficiez d’une offre totale de 24 villas haut standing, dont la première tranche de 12 villas est actuellement en cours de commercialisation* .')); ?>

                            <br/><br/>
                            <?php echo e(_i('Nos villas sont très bien équipées avec toutes les commodités modernes. Elles assemblent des styles traditionnel et contemporain pour vous accueillir dans un cadre féerique loin de l’agitation du centre ville. Situé dans un magnifique domaine privé, à seulement 20 minutes du centre de la ville rouge et à quelques minutes de l’aéroport international de Marrakech, au sein d’un magnifique parc planté de fleurs et riche en végétation exotique')); ?>...</p>

                        </div>
                    </div>
                </div>
                <!-- FACILITIES END -->

                <!-- FACILITIES START
                ============================================= -->
                <div class="facilities clearfix" style="background-image:url('<?php echo e(asset('frontend/img/content/home/pointforte.jpg')); ?>');">

                    <div class="facilities-detail wrapper wow fadeIn" style="    position: relative;text-align: center;right: 25%;left: 25%;float: none;float: left!important;background-color: #daa50bde;padding: 50px;margin: 3%;">
                        <div class="title text-center" style="margin-bottom: 10px;">
                            <h2 style="color: #fff;"><?php echo e(_i('LES POINTS FORTS DU PROJET')); ?></h2>
                        </div>

                        <div class="facilities-content">
                            <p class="intro" style="color: #e2e2e2;font-size: 14px;">
                                - <?php echo e(_i('Une faible densité d’habitation')); ?> -<br/>
                                - <?php echo e(_i('Une situation géographique privilégiée')); ?> -<br/>
                                - <?php echo e(_i('Un soin particulier apporté aux finitions')); ?> -<br/>
                                - <?php echo e(_i('Services personnalisés sur place')); ?> -<br/>
                                - <?php echo e(_i('Un cadre idéal pour les familles')); ?> -<br/>
                                - <?php echo e(_i('Architecture authentique et raffinée')); ?> -<br/>
                                - <?php echo e(_i('Sécurité et discrétion garanties')); ?> -<br/>

                        </div>
                    </div>
                </div>
                <!-- FACILITIES END -->


                <!-- GALLERY START
                ============================================= -->
                <div class="gallery wrapper clearfix">
                    <div class="container">

                        <div class="title text-center wow fadeIn">
                            <p class="subtitle"><?php echo e(_i('VUE INTERIEURE/EXTERIEURE')); ?></p>
                            <h2> <?php echo e(_i('DÉCOUVREZ NOS')); ?> <span class="bold"><?php echo e(_i('VILLAS')); ?></span></h2>
                        </div>

                        <section id="grid" class="grid clearfix">
                        	<?php $__currentLoopData = $Rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(url('villa-detail')); ?>" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                                <figure>
                                	<?php $roomimage = substr_replace( $room->images, '-list', -4, -4);?>
									<img src="<?php echo e(asset('storage/').'/'.$roomimage); ?>"  alt="TajLuxury Villa - <?php echo e($room->title); ?>" />
                                    <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                                    <figcaption>
                                        <h2><?php echo e($room->title); ?></h2>
                                        <span><?php echo e(_i('Vue')); ?></span>
                                    </figcaption>
                                </figure>
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </section>
                    </div>
                </div>
                <!-- GALLERY END -->

            </section>
            <!-- CONTENT END -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
	        <script type="text/javascript">
	            $(function() {
	    
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


	            function slidericon() {
	                var x = document.getElementById("prendre_rdv");
	                var x2 = document.getElementById("demande_brochure");
	                var x3 = document.getElementById("etre_rappler");
	                if (x.style.display === "none") {
	                    x.style.display = "block";
	                    x2.style.display = "none";
	                    x3.style.display = "none";
	                } else {
	                    x.style.display = "none";
	                }

	            }
	            function slidericon2() {

	                var x = document.getElementById("etre_rappler");
	                var x2 = document.getElementById("demande_brochure");
	                var x3 = document.getElementById("prendre_rdv");
	                if (x.style.display === "none") {
	                    x.style.display = "block";
	                    x2.style.display = "none";
	                    x3.style.display = "none";
	                } else {
	                    x.style.display = "none";
	                }

	            }
	            function slidericon3() {

	                var x = document.getElementById("demande_brochure");
	                var x2 = document.getElementById("etre_rappler");
	                var x3 = document.getElementById("prendre_rdv");

	                if (x.style.display === "none") {
	                    x.style.display = "block";
	                    x2.style.display = "none";
	                    x3.style.display = "none";
	                } else {
	                    x.style.display = "none";
	                }
	            }
	        </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('TLVlayouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>