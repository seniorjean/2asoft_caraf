
<section class="footer-bottom">
    <div class="container text-center">
        <p>Created By <a href="#" target="_blank"> 2asoft Technologies </a> Soluion Provider</p>
    </div>
</section>


<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>
<script src="<?=bs()?>public/siteweb/js/bootstrap.min.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery.bxslider.min.js"></script>
<script src="<?=bs()?>public/siteweb/js/owl.carousel.min.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery-parallax.js"></script>
<script src="<?=bs()?>public/siteweb/js/validate.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery.mixitup.min.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery.fancybox.pack.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery.easing.min.js"></script>
<script src="<?=bs()?>public/siteweb/js/circle-progress.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery.appear.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery.countTo.js"></script>
<script src="<?=bs()?>public/siteweb/js/isotope.pkgd.min.js"></script>
<script src="<?=bs()?>public/siteweb/js/jquery-ui-1.11.4/jquery-ui.js"></script>
<script src="<?=assets_url('frontend/vendor/jquery-migrate/dist/jquery-migrate.min.js');?>"></script>

<script src="<?=assets_url('frontend/vendor/slick-carousel/slick/slick.js');?>"></script>
<script src="<?=assets_url('frontend/js/hs.core.js');?>"></script>
<script src="<?=assets_url('frontend/js/components/hs.slick-carousel.js');?>"></script>

<script src="<?=assets_url('libs/tooltip/custom.min.js') ;?>"></script>
<script src="<?=assets_url('libs/tooltip/popper.min.js') ;?>"></script>
<script src="<?= bs() ?>public/libs/js/is_mobile.js"></script>
<script src="<?= bs() ?>public/libs/sweetalert2/dist/sweetalert2.all.js"></script>
<script src="<?= bs() ?>public/libs/custom/dp.min.js"></script>
<script src="<?= bs() ?>public/libs/custom/swal.js"></script>
<script src="<?= bs() ?>public/libs/datepicker/js/datepicker.js"></script>



<script src="<?=bs()?>public/siteweb/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=bs()?>public/siteweb/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.video.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>public/siteweb/youtube-video-player/packages/perfect-scrollbar/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/siteweb/youtube-video-player/packages/perfect-scrollbar/perfect-scrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/siteweb/youtube-video-player/js/youtube-video-player.jquery.js"></script>



<script src="<?=bs()?>public/siteweb/js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">



<script>


$(document).ready(function() {
	<?php if(!$mobile):;?>
		//$('.perfecscollbar-wrapper , .portfolio-modal').perfectScrollbar();
	<?php endif;?>
    $('#dynamic-coti').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    } );
} );
    var stickyHeader;
    $(document).on('ready', function () {
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');
        $('.svg-preloader').removeClass('svg-preloader');

        $(".color").click(function(e) {
            e.preventDefault();
            $(".color").parent().removeClass('active');
            $(this).parent().addClass('active');
            var color = $(this).attr('data-color');
            set_player_color(color);
        });

        $('a[data-target]').on('click', function(event) {
            event.preventDefault();
            var target = "#" + $(this).data('target');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 600);
        });

        $("#playlist").youtube_video({
            playlist: 'PLAf8j1Zkdt_aYINjqNinDvgXKyODPTDya',
            max_results: 10,
            colors: {
                controls_bg: 		'rgba(0,0,0,.9)'
            }
        });

        if (window.top !== window.self) {
            document.write = "";
            window.top.location = window.self.location;
            setTimeout(function(){
                document.body.innerHTML='';
            },0);

            window.self.onload=function(evt) {
                document.body.innerHTML='';
            };
        }

        function set_player_color(color_name) {
            var $s = $("#player_style"),
                id = "playlist";

            if($s.length === 0) {
                $s = $('<style id="player_style" />').appendTo('body');
            }




        }

        setTimeout(function(){
            stickyHeader = function () {
                if ($('.stricky').length) {
                    var strickyScrollPos = $('.stricky').next().offset().top;
                    if($(window).scrollTop() > strickyScrollPos) {
                        $('.stricky').removeClass('fadeIn animated');
                        $('.stricky').addClass('stricky-fixed fadeInDown animated');
                    }
                    else if($(this).scrollTop() <= strickyScrollPos) {
                        $('.stricky').removeClass('stricky-fixed fadeInDown animated');
                        $('.stricky').addClass('slideIn animated');
                    }
                };
            }
        },600);
    });

    $(document).ready(function() {
        $(".color").click(function(e) {
            e.preventDefault();

            $(".color").parent().removeClass('active');

            $(this).parent().addClass('active');

            var color = $(this).attr('data-color');

            set_player_color(color);

        });

        $('a[data-target]').on('click', function(event) {

            event.preventDefault();

            var target = "#" + $(this).data('target');

            $('html, body').animate({

                scrollTop: $(target).offset().top

            }, 600);

        });

        $("#playlist").youtube_video({

            playlist: 'PLAf8j1Zkdt_aYINjqNinDvgXKyODPTDya',

            max_results: 10,

            colors: {

                controls_bg: 		'rgba(0,0,0,.9)'

            }

        });

        if (window.top !== window.self) {
            document.write = "";
            window.top.location = window.self.location;
            setTimeout(function(){

                document.body.innerHTML='';

            },0);
            window.self.onload=function(evt) {

                document.body.innerHTML='';

            };
        }

        function set_player_color(color_name) {

            var $s = $("#player_style"),

                id = "playlist";



            if($s.length === 0) {

                $s = $('<style id="player_style" />').appendTo('body');

            }


        }
    });
    // inner variables
    var song;
    var tracker = $('.tracker');
    var volume = $('.volume');
    function initAudio(elem) {

        var url = elem.attr('audiourl');

        var title = elem.text();

        var cover = elem.attr('cover');

        var artist = elem.attr('artist');



        $('.player .title').text(title);

        $('.player .artist').text(artist);

        $('.player .cover').css('background-image','url(<?=base_url()?>public/siteweb/web_radio/data/' + cover+')');

        song = new Audio('<?=bs() ?>public/siteweb/web_radio/data/' + url);



        // timeupdate event listener

        song.addEventListener('timeupdate',function (){

            var curtime = parseInt(song.currentTime, 10);

            tracker.slider('value', curtime);

        });



        $('.playlist li').removeClass('active');

        elem.addClass('active');

    }
    function playAudio() {

        song.play();

        tracker.slider("option", "max", song.duration);

        $('.play').addClass('hidden');

        $('.pause').addClass('visible');

    }
    function stopAudio() {
        song.pause();

        $('.play').removeClass('hidden');
        $('.pause').removeClass('visible');

    }
    // play click
    $('.play').click(function (e) {

        e.preventDefault();

        playAudio();

    });
    // pause click
    $('.pause').click(function (e) {

        e.preventDefault();



        stopAudio();

    });
    // forward click
    $('.fwd').click(function (e) {

        e.preventDefault();



        stopAudio();



        var next = $('.playlist li.active').next();

        if (next.length == 0) {

            next = $('.playlist li:first-child');

        }

        initAudio(next);

    });
    // rewind click
    $('.rew').click(function (e) {

        e.preventDefault();



        stopAudio();



        var prev = $('.playlist li.active').prev();

        if (prev.length == 0) {

            prev = $('.playlist li:last-child');

        }

        initAudio(prev);

    });
    // show playlist
    $('.pl').click(function (e) {

        e.preventDefault();



        $('.playlist').fadeIn(300);

    });
    // playlist elements - click
    $('.playlist li').click(function () {

        stopAudio();

        initAudio($(this));

    });


    $(document).on('click','.controls .rew , .controls .fwd',function(){
        setTimeout(function(){
            $('.controls .play').click();
        },500)
    });

    // initialization - first element in playlist
    initAudio($('.playlist li:first-child'));
    // set volume
    song.volume = 0.8;
    // initialize the volume slider
    volume.slider({

        range: 'min',

        min: 1,

        max: 100,

        value: 80,

        start: function(event,ui) {},

        slide: function(event, ui) {

            song.volume = ui.value / 100;

        },

        stop: function(event,ui) {},

    });
    // empty tracker slider
    tracker.slider({

        range: 'min',

        min: 0, max: 10,

        start: function(event,ui) {},

        slide: function(event, ui) {

            song.currentTime = ui.value;

        },

        stop: function(event,ui) {}

    });
</script>


</body>
</html>
