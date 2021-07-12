<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->

<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->

<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->





<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



    <title>YAFECA DE LA CARAF</title>



    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ;?>public/yafeca/assets/ico/apple-touch-icon-144-precomposed.png">

    <link rel="shortcut icon" href="assets/ico/favicon.ico">



    <!-- CSS Global -->

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/superfish/css/superfish.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/prettyPhoto/css/prettyPhoto.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/animate.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/isotope/jquery.isotope.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="<?php echo base_url() ;?>public/yafeca/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">



    <link href="<?php echo base_url() ;?>public/yafeca/assets/css/theme.css" rel="stylesheet">





    <!--[if lt IE 9]>

    <script src="assets/plugins/html5shiv.js"></script>

    <script src="assets/plugins/respond.min.js"></script>

    <![endif]-->



</head>

<body id="home" class="wide">



<!-- Preloader -->

<div id="preloader">

    <div id="status"><i class="fa fa-cog fa-spin"></i></div>

</div>



<!-- Wrap all content -->

<div class="wrapper">

<!-- Modal -->





    <!-- Header -->

    <header class="header">

        <div class="container">



            <!-- Logo -->

            <div class="logo">

                <a href="#home" class="scroll-to"><img src="<?php echo base_url() ;?>public/yafeca/assets/img/logo-yafeca.png" alt="YAFECA"/></a>

            </div>

            <!-- /Logo -->



            <!-- Navigation -->

            <div id="mobile-menu"></div>

            <nav class="navigation clearfix">

                <ul class="sf-menu nav">

                 <!--    <li class="active"><a href="#home">Accueil</a></li> -->

                    <li class=""><a href="../">La CARAF</a></li>

                    <li><a href="<?php echo base_url()?>site_web/yafeca">Accueil Yafeca</a></li>

                </ul>

            </nav>

            <!-- /Navigation -->



        </div>

    </header>

    <!-- /Header -->



    <!-- Content area-->

    <div class="content-area content">



        <!-- Main Slider -->

        <section class="page-section slider">

            <div class="container">



                <div class="main-slider">



                    <div id="event-slider" class="clearfix">



                        <div class="item slide slide1 full-width-slide div-table">

                            <div class="slide-image"></div>

                            <div class="slide-caption div-cell">

                                <div class="slide-caption-inner">

                                    <h1 class="slide-title">YAFECA</h1>

                                    <h3 class="slide-subtitle">MARS 20-22, <?=date("Y")?></h3>

                                    <div class="countdown-wrapper">

                                        <div id="defaultCountdown" class="defaultCountdown clearfix"></div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="item slide slide2 alternate div-table">

                            <div class="slide-image"></div>

                            <div class="slide-caption div-cell">

                                <div class="container">

                                    <div class="slide-caption-inner">

                                        <h1 class="slide-title">YAFECA</h1>

                                        <h3 class="slide-subtitle">MARS 20-27, <?=date("Y")?></h3>

                                        <div class="countdown-wrapper">

                                            <div id="defaultCountdown2" class="defaultCountdown clearfix"></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>

                </div>



            </div>

        </section>



        <section class="page-section" id="about">

            <div class="container">

                <h3 class="section-title text-center" data-animation="fadeInUp" data-animation-delay="0">

                FORMULAIRE D'INSCRIPTION à YAFECA <?=date("Y")?>

                    <small></small>

                </h3>



                <!-- <hr class="page-divider half"/> -->

                <div class="row">  

                    



                    <!-- form -->

                    <form method="post" action="<?php echo base_url()?>site_web/formulaire">

                   



                        <div class="col-sm-6 pull-left">

                            <div class="af-outer af-required">
                                <div class="form-group af-inner">
                                    <label class="radio-inline">Entreprise <input type="radio" id="ent" value="1" name="identite" checked></label>
                                    <label class="radio-inline">Particulier <input type="radio" id="part" value="0" name="identite" ></label></br>
                                </div>  
                            </div>


                            <div class="af-outer af-required ">
                                <div class="form-group af-inner">
                                    <input type="text" name="name" id="affiche" size="30" class="form-control" />
                                </div>
                            </div>

                            <div class="af-outer af-required entreprise">

                                <div class="form-group af-inner">

                                    <input type="text" name="nbrempl" size="30" value="" placeholder="Nombre d'employé de l'entreprise *" class="form-control placeholder" />

                                </div>

                            </div>



                            <div class="af-outer af-required">

                                <div class="form-group af-inner">

                                    <input type="text" name="email" id="email" size="30" value="" placeholder="Email *" class="form-control " />

                                </div>

                            </div>

                        </div>


                        <div class="col-sm-6 pull-right">

                            <div class="af-outer af-required">

                                <div class="form-group af-inner">

                                    <input type="text" name="phone" id="phone" size="30" value="" placeholder="N° de Téléphone *" class="form-control " />

                                </div>

                            </div>

                        </div>


                        <div class="col-sm-6 ">
                            <div class="af-outer af-required">
                                <div class="form-group af-inner">
                                    <input type="text" name="domaine" id="domaine" size="30" value="" placeholder="Domaine d'activité *" class="form-control placeholder" />
                                </div>
                            </div>
                        </div>

            
                        <div class="col-sm-6 ">
                            <div class="af-outer af-required">
                                <div class="form-group af-inner">
                                    <input type="text" name="typeproduit" id="typeproduit" size="30" value="" placeholder="Produit vendu *" class="form-control placeholder" />
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-12">

                            <div class="af-outer af-required">

                                <div class="form-group af-inner">

                                    <textarea name="message" id="input-message" cols="30" rows="10" placeholder="Donné votre point de vue concernant les activités de YAFACA *" class="form-control "></textarea>

                                </div>

                            </div>

                        </div>


                        <div class="col-sm-12">

                            <div class="col-sm-2 af-outer af-required form-group af-inner">

                                <input type="submit" name="submit" class="btn btn-block btn-theme btn-theme-invert form-button" value="Valider"/>

                            </div>

                        </div>



                    </form>

                    <!-- /form -->

                </div>

            </div>



        </section>



        <section class="page-section slider">

            <div class="container">



            </div>

        </section>

     

    </div>

    <!-- /Content area -->



    <!-- Footer -->

    <footer class="footer">



        <div class="container">

            <div class="row">



                 </div>

        </div>



    </footer>

    <!-- /Footer -->



    <div class="totop"><i class="fa fa-angle-up"></i></div>



</div>

<!-- /wrapper -->

<!-- JS Global -->

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery-migrate.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/modernizr.custom.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/superfish/js/superfish.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/prettyPhoto/js/jquery.prettyPhoto.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/placeholdem.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/ajax-mail.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/countdown/jquery.plugin.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/countdown/jquery.countdown.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/isotope/jquery.isotope.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/waypoints.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery.easing.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery.smoothscroll.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery.stellar.min.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery.ajaxchimp.js"></script>

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery.ajaxchimp.langs.min.js"></script>



<script src="<?php echo base_url() ;?>public/yafeca/assets/js/theme.js"></script>



<!--[if (gte IE 9)|!(IE)]><!-->

<script src="<?php echo base_url() ;?>public/yafeca/assets/plugins/jquery.cookie.js"></script>



<!--<![endif]-->



<script type="text/javascript">

    jQuery(document).ready(function () {

        theme.init();

        theme.initEventSlider();

        theme.initIsotope();

        theme.initTestimonials();

        theme.initPartnerSlider();

        theme.initLastTweet();

        theme.initAnimation();

    });

    jQuery(window).load(function () {

        jQuery('body').scrollspy({

            offset: 100,

            target: '.navigation'

        });

        jQuery(window).stellar({

            horizontalScrolling: false

        });

    });

</script>


<script type="text/javascript">

	$(document).ready(function(){
		$("#affiche").attr("placeholder", "Dénomination de l'entreprise *").placeholder();
	});

	$('#part').click(function() {
        $('.particulier').show();
        $('.entreprise').hide();
 	$("#affiche").attr("placeholder", "Nom & Prénoms *").placeholder();

    });

	$('#ent').click(function() {
        $('.entreprise').show();
        $('.particulier').hide();
 	$("#affiche").attr("placeholder", "Dénomination de l'entreprise *").placeholder();
    });

</script>


</body>

</html>

