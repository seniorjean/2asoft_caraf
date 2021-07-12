<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>LA CARAF|| LE PAYS AKYE</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=bs()?>public/siteweb/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=bs()?>public/siteweb/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=bs()?>public/siteweb/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=bs()?>public/siteweb/img/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="<?php echo assets_url('css/materialdesignicons.min.css') ;?>">
    <link rel="stylesheet" href="<?php echo assets_url('css/fontawesome-all.css') ;?>">
    <link rel="stylesheet" href="<?=assets_url('frontend/vendor/slick-carousel/slick/slick.css')?>">
    <link rel="stylesheet" href="<?=assets_url('frontend/css/theme.min.css')?>">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?=bs()?>public/siteweb/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?=bs()?>public/siteweb/css/responsive.css">
	<script>
		var base_url = '<?=base_url();?>';
		var router_class = '<?=$this->router->fetch_class();?>';
		var router_method = '<?=$this->router->fetch_method();?>';
	</script>

    <script src="<?=assets_url('frontend/js/jquery.min.js');?>"></script>
    <div id="fb-root"></div>
    <script>

        (function(d, s, id) {

            var js, fjs = d.getElementsByTagName(s)[0];

            if (d.getElementById(id)) return;

            js = d.createElement(s);

            js.id = id;

            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=<APP_ID>&autoLogAppEvents=1';

            fjs.parentNode.insertBefore(js, fjs);

        }(document, 'script', 'facebook-jssdk'));

    </script>
    <link href="<?=bs();?>public/libs/css/util.css" rel="stylesheet" type="text/css" />
    <link href="<?=assets_url('siteweb/web_radio/css/styles.css');?>" rel="stylesheet" type="text/css" />

	<?php include_once('style.php'); ?>

</head>
<body class="page-wrapper">
<div class="perfecscollbar-wrapper">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>

<?php include_once('main_header.php'); ?>

<?php include_once('menu.php'); ?>

<?php if(!empty($title)):;?>
    <section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center">
                    <h2>CARAF <?=strtoupper($title);?></h2>
                    <ul class="breadcumb">
                        <li><a href="<?php echo base_url()?>">Accueil</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><span>CARAF</span></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="text-up"><?=strtoupper($title);?></li>
                    </ul>
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

