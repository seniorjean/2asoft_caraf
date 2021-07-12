<link href="<?php bs() ?>public/siteweb/web_radio/css/styles.css" rel="stylesheet" type="text/css" />
<style>
    .annonce-item{box-shadow:  black 0px 2px 5px -3px ;position: relative; }
    .annonce_title{text-transform: uppercase; color:#4dc2eb;}
    .dot{color:#4dc2eb; font-size: 4px}
    .annonce-item, .annonce_title , .annonce_sub_title, .dot, .annonce_img , .bar{ height: 50px; vertical-align: middle; }
    .annonce_img{position: absolute; display: inline-block; left: 0px}
    .bar{display:inline-block; visibility: hidden}
</style>
<?php include_once('sections/slider.php'); ?>

<?php include_once('sections/annonces.php'); ?>

<?php // include_once('sections/intro.php'); ?>

<?php include_once('sections/activities.php'); ?>

<?php include_once('sections/youtube_player.php'); ?>


<?php //include_once('sections/statistiques.php'); ?>

<?php //include_once('sections/gallery.php'); ?>

<script>
    const total_annonce = Number('<?=count($annonces);?>');
    var showing_annonce_id = 1;
    $(document).ready(function () {
        var annonce_interval = setInterval(function () {
            showing_annonce_id++;
            // $('.annonce-item').slideUp('slow');
            // $('#annonce_item_'+showing_annonce_id+'').slideDown('slow');


            $('.annonce-item').hide();
            $('#annonce_item_'+showing_annonce_id+'').show('slide',{direction:'left'},900);

            if(showing_annonce_id === total_annonce){showing_annonce_id = 0;}
        },6900);
    });
</script>

