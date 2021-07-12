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



</head>

<body id="home" class="wide">



<!-- Preloader -->

<div id="preloader">

    <div id="status"><i class="fa fa-cog fa-spin"></i></div>

</div>



<!-- Wrap all content -->

<div class="wrapper">



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

                    <li><a href="#about">Présentation</a></li>

                    <li><a href="#schedule">Agenda Yafeca</a></li>

                    <li><a href="#contact">Contact</a></li>

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

                                    <a class="btn btn-theme btn-theme-primary slide-btn" data-toggle="modal" href="<?php echo base_url()?>site_web/formulaire">S'inscrire maintenant</a>

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

                                        <a class="btn btn-theme btn-theme-primary slide-btn" data-toggle="modal" data-target="#myModal" href="#">S'inscrire maintenant</a>

                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>

                </div>



            </div>

        </section>

        <!-- /Main Slider -->



        <!-- Feature -->

        <section class="page-section" id="about">

            <div class="container">

                <h3 class="section-title text-center" data-animation="fadeInUp" data-animation-delay="0">

                    PRESENTATION

                    <small></small>

                </h3>



                <!-- <hr class="page-divider half"/> -->

                <div class="row">



                    <div class="col-sm-6 col-md-3 feature">

                        <div class="media" data-animation="fadeInUp" data-animation-delay="100">

                            <div class="media-object fa fa-calendar"></div>

                            <div class="media-body">

                                 <h4 class="media-heading"><?=$presentation[0]['titre']?></h4>

                                <p id="description0">

                                    <?php

                                        $nbre_mots = 20;

                                        $phrase = $presentation[0]['description'];

                                        $tab= explode(' ', $phrase, $nbre_mots+1);

                                        unset($tab[$nbre_mots]);

                                        echo implode(' ', $tab).'...';

                                    ?>

                                   <a class="btn btn-theme" href="#" id="ok0">Plus de détails</a>

                                </p>  

                                <p id="description00" style="display:none">

                                    <?=$presentation[0]['description']?>

                                   <a class="btn btn-theme" href="#" id="ok00">Moins de détails</a>

                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-3 feature">

                        <div class="media" data-animation="fadeInUp" data-animation-delay="300">

                            <div class="media-object fa fa-map-marker"></div>

                            <div class="media-body">

                                <h4 class="media-heading"><?=$presentation[1]['titre']?></h4>

                                <p id="description1">

                                    <?php

                                        $nbre_mots = 20;

                                        $phrase = $presentation[1]['description'];

                                        $tab= explode(' ', $phrase, $nbre_mots+1);

                                        unset($tab[$nbre_mots]);

                                        echo implode(' ', $tab).'...';

                                    ?>

                                   <a class="btn btn-theme" href="#" id="ok1">Plus de détails</a>

                                </p>  

                                <p id="description11" style="display:none">

                                    <?=$presentation[0]['description']?>

                                   <a class="btn btn-theme" href="#" id="ok11">Moins de détails</a>

                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-3 feature">

                        <div class="media" data-animation="fadeInUp" data-animation-delay="500">

                            <div class="media-object fa fa-microphone"></div>

                            <div class="media-body">

                                <h4 class="media-heading"><?=$presentation[2]['titre']?></h4>

                                <p id="description2">

                                    <?php

                                        $nbre_mots = 20;

                                        $phrase = $presentation[2]['description'];

                                        $tab= explode(' ', $phrase, $nbre_mots+1);

                                        unset($tab[$nbre_mots]);

                                        echo implode(' ', $tab).'...';

                                    ?>

                                   <a class="btn btn-theme" href="#" id="ok2">Plus de détails</a>

                                </p>  

                                <p id="description22" style="display:none">

                                    <?=$presentation[0]['description']?>

                                   <a class="btn btn-theme" href="#" id="ok22">Moins de détails</a>

                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-3 feature">

                        <div class="media" data-animation="fadeInUp" data-animation-delay="500">

                            <div class="media-object fa fa-glass"></div>

                            <div class="media-body">

                                <h4 class="media-heading"><?=$presentation[3]['titre']?></h4>

                                <p id="description3">

                                    <?php

                                        $nbre_mots = 20;

                                        $phrase = $presentation[3]['description'];

                                        $tab= explode(' ', $phrase, $nbre_mots+1);

                                        unset($tab[$nbre_mots]);

                                        echo implode(' ', $tab).'...';

                                    ?>

                                   <a class="btn btn-theme" href="#" id="ok3">Plus de détails</a>

                                </p>  

                                <p id="description33" style="display:none">

                                    <?=$presentation[0]['description']?>

                                   <a class="btn btn-theme" href="#" id="ok33">Moins de détails</a>

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </section>

        <!-- /Feature -->



        <!-- Timeline -->

        <section class="page-section light" id="schedule">

            <div class="container">

                <h3 class="section-title text-center" data-animation="fadeInUp" data-animation-delay="0">

                    AGENDA YAFECA

                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper tellus sit amet nibh fringilla.</small>

                </h3>



                <div class="row clearfix timeline-tabs" data-animation="fadeInUp" data-animation-delay="100">

                    <div class="col-sm-12 col-md-10 col-md-offset-1">

                        <ul id="tabs" class="nav nav-pills nav-justified">

                            <li class="active"><a href="#tab-first" data-toggle="tab">Programe</a></li>

                        </ul>

                    </div>

                </div>



                <div class="tab-content">

                <div class="tab-pane fade in active" id="tab-first">



                <div id="timeline" class="row timeline no-transition">

                    <?php

                        foreach($agendayafeca->result_array() as $row)

                        {

                            echo '<div class="item col-sm-6">

                            <span class="dot"></span>

                            <article class="post-wrap thumbnail">

                                <div class="post-media">

                                    <div class="thumbnail no-border do-hover">

                                        <img class="img-responsive" src="'.$row["image"].'" height="100" width="50" alt="Image Agenda">

                                        <div class="caption">

                                            <div class="caption-wrapper div-table">

                                                <div class="caption-inner div-cell">

                                                    <p class="caption-buttons">

                                                        <a href="#" class="btn caption-social facebook"><i class="fa fa-facebook"></i></a>

                                                        <a href="#" class="btn caption-social twitter"><i class="fa fa-twitter"></i></a>

                                                        <a href="#" class="btn caption-social google-plus"><i class="fa fa-google-plus"></i></a>

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="post-header">

                                    <h4 class="post-title"><a href="#">'.$row["titre"].'</a></h4>

                                    <span class="post-author">Par <a href="#">'.$row["auteur"].'</a></span>

                                </div>

                                <div class="post-body">

                                    <div class="post-excerpt">'.$row["description"].'</div>

                                </div>

                            </article>

                        </div>';

                        }

                    ?>

                </div>



                </div>



                </div>



            </div>

        </section>

        <!-- /Timeline -->



        <!-- Get ın touch -->

        <section class="page-section get-in-touch" id="contact">

            <div class="container">

                <div class="text-center">

                    <h3 class="section-title small-bottom">Contactez-Nous <small></small></h3>

                    <p class="text-center"> Laissez nous un message, pour plus d'informations ou tout autre besoins </p>

                    <hr class="page-divider small"/>



                    <!-- form -->

                    <form method="post" action="<?php echo base_url()?>site_web/yafeca">



                        <div class="col-sm-6 pull-left">


                            <div class="af-outer af-required">
                                <div class="form-group af-inner">
                                    <label class="radio-inline">ENTREPRISE <input type="radio" id="ent" name="optradio" checked></label>
                                    <label class="radio-inline">PARTICULER <input type="radio" id="part" name="optradio" ></label></br>
                                    <label class="error" for="name" id="name_error">Veuillez sélectionner votre identité </label>
                                </div>  
                            </div>
                            <div class="af-outer af-required"  id="particulier"  style="display:none">
                                <div class="form-group af-inner">
                                    <input type="text" name="name" id="name" size="30" value="" placeholder="Nom & Prénoms *" class="form-control placeholder" />
                                    <label class="error" for="name" id="name_error">Veuillez saisir votre nom et prénoms</label>
                                </div>
                            </div>
                            <div class="af-outer af-required"  id="entreprise">
                                <div class="form-group af-inner">
                                    <input type="text" name="name" id="name" size="30" value="" placeholder="Dénomination de l'entreprise *" class="form-control placeholder" />
                                    <label class="error" for="name" id="name_error">Veuillez saisir le nom de l'entreprise</label>
                                </div>
                            </div>



                            <div class="af-outer af-required">

                                <div class="form-group af-inner">

                                    <input type="text" name="email" id="email" size="30" value="" placeholder="Email *" class="form-control placeholder" />

                                    <label class="error" for="email" id="email_error">Laisser nous votre email</label>

                                </div>

                            </div>



                            <div class="af-outer af-required">

                                <div class="form-group af-inner">

                                    <input type="text" name="phone" id="subject" size="30" value="" placeholder="N° Téléphone *" class="form-control placeholder" />

                                    <label class="error" for="subject" id="subject_error">Laisser nous votre contact</label>

                                </div>

                            </div>

                        </div>



                        <div class="col-sm-6 pull-right">



                            <div class="af-outer af-required">

                                <div class="form-group af-inner">

                                    <input type="text" name="objet" id="subject" size="30" value="" placeholder="Objet *" class="form-control placeholder" required/>

                                    <label class="error" for="subject" id="subject_error">Objet de votre message </label>

                                </div>

                            </div>



                            <div class="af-outer af-required">

                                <div class="form-group af-inner">

                                    <textarea name="message" id="input-message" cols="30" rows="7" placeholder="Message *" class="form-control placeholder"></textarea>

                                    <label class="error" for="input-message" id="message_error">votre message</label>

                                </div>

                            </div>

                        </div>



                        <div class="col-sm-12 af-outer af-required">

                            <div class="form-group af-inner">

                                <input type="submit" name="submit" class="btn btn-block btn-theme btn-theme-invert form-button" value="Valider"/>

                            </div>

                        </div>



                    </form>

                    <!-- /form -->



                </div>

            </div>

        </section>

        <!-- /get ın touch -->



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


	$('#part').click(function() {
        $('#particulier').show();
        $('#entreprise').hide();
    });

	$('#ent').click(function() {
        $('#entreprise').show();
        $('#particulier').hide();
    });


	$('#ok0').click(function() {

        $('#description00').show();

        $('#description0').hide();

    });

    $('#ok00').click(function() {

        $('#description0').show();

        $('#description00').hide();

        // $('#description11').hide();

        // $('#description22').hide();

        // $('#description33').hide();

    });



    $('#ok1').click(function() {

        $('#description11').show();

        $('#description1').hide();

    });

    $('#ok11').click(function() {

        $('#description1').show();

        $('#description11').hide();

    });



    $('#ok2').click(function() {

        $('#description22').show();

        $('#description2').hide();

    });

    $('#ok22').click(function() {

        $('#description2').show();

        $('#description22').hide();

    });



    $('#ok3').click(function() {

        $('#description33').show();

        $('#description3').hide();

    });

    $('#ok33').click(function() {

        $('#description3').show();

        $('#description33').hide();

    });

</script>







</body>

</html>

