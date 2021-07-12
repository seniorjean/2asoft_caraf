<style>
    .m-item .lbl{display: block !important; padding: 0px !important; margin: 0px !important; border: none !important;}
    .model1 .m-item .js--image-preview , .model2 .m-item .js--image-preview{border: none !important;background-color: white !important;}
    .m-item .wrapper-image-preview{margin: 0px !important;}
    .model1 .m-item , .model2 .m-item , .model3 .m-item.i1 , .model1 .i1 .js--image-preview  , .model2 .i1 .js--image-preview , .model2 .i2 .js--image-preview ,.model3 .i1 .js--image-preview, .two-item-container {height: 300px;background-size: cover; background-position: center center;}

    .model1{text-align: center}
    .model1 .image-box , .model2 .image-box , .model3 .image-box{position: absolute}
    .model1 .i1{width: 98%; position: relative; left:15px}
    .model1 .i2{position relative;display: none}
    .model1 .i3{position relative;display: none}
    .model1 .custom-file-upload{
        position: relative;
        width: 100%;
        text-align: center;
        height: 100%;
    }

    .model2{text-align: center}
    .model2 .i1{width: 49%; display: inline-block; vertical-align: middle; position: relative; left: 10px;}
    .model2 .two-item-container{width: 49%; display: inline-block; vertical-align: middle; position: relative; left: 7.29px}
    .model2 .i3{position relative;display: none}
    .model2 .custom-file-upload{
        position: relative;
        width: 100%;
        text-align: center;
        height: 100%;
    }

    .model3{text-align: center}
    .model3 .i1{width: 49%; display: inline-block; vertical-align: middle; position: relative; left:10px}
    .model3 .two-item-container{width: 49%; display: inline-block; vertical-align: middle; position: relative;left:7.3px;}
    .model3 .two-item-container .i2{position: relative; height: calc(300px / 2) !important; margin-bottom: 1.3px;}
    .model3 .two-item-container .i3{position: relative; height: calc(300px / 2) !important;}
    .model3 .two-item-container .image-box{height: calc(300px / 2) !important;}
    .model3 .two-item-container .js--image-preview{position: relative !important;height: 100% !important; background-position: center; background-size: cover}
    .model3 .custom-file-upload{
        position: relative;
        width: 100%;
        text-align: center;
        height: 100%;
    }

    .model3.type_b .two-item-container{left: 5px;}

    .has-text{
        padding: 3px;
        position: absolute;
        z-index: 2;
        border: none;
    }

    .bottom-mask {
        background: linear-gradient(0deg, #000000fa 15%, #00000096 72%);
        width: 100%;
        position: absolute;
        height: 25%;
        z-index: 1;
        bottom: 0px;
        box-shadow: #000000a6 -3px -7px 17px 4px;
    }
    /*.model2 .i1, .model3 .i1{left:-11px;}*/
    /*.model2 .i2, .two-item-container{right:-11px;}*/

    .model2 .i1 .bottom-mask , .model3 .i1 .bottom-mask{box-shadow: #000000a6 -8px -7px 17px 4px;}
    .model2 .i2 .bottom-mask,  .model3 .i2 .bottom-mask,.model3 .i3 .bottom-mask{box-shadow: #000000a6 8px -7px 17px 4px;}

    .has-text.i-category{
        left: 0px;
        top: 22px;
        background: orange;
        color: black;
        font-family: poppins;
        text-transform: uppercase;
    }

    .has-text.i-content::placeholder{color: white;}
    .has-text.i-content{
        text-align: left;
        text-decoration:underline !important;
        bottom: 50px;
        padding-left: 15px;
        width: 100%;
        margin: 0px;
        font-family:poppins , serif;
        font-size: small;
        background-color: transparent;
        color: white;
    }
    .model3 .i2 .has-text.i-content ,  .model3 .i3 .has-text.i-content{
        height: 40px !important;
        bottom:15px !important;
    }
    .model3.type_b .i1{float:right !important; left:3px;}

    .u-slick__pagination{width: 100% !important;}

    .u-slick__pagination li span {
        width: 0.9375rem !important;
        height: 0.9375rem !important;
        background-color: #ffffff;
    }
    .u-slick__pagination li.slick-active span {
        border-color: #fa5d1b !important;
    }
    .js-pagination{bottom: 5px !important;}

</style>

<?php
$slider = get_frontend_settings('slider_images');
$slider_images = json_decode($slider);
?>
<div class="row m-t-5">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding: 0px !important;">
        <div class="u-hero-v1">
            <!-- Slick carousal starts -->
            <div class="js-slick-carousel u-slick"
                 data-autoplay="true"
                 data-speed="10000"
                 data-autoplay-speed="10000"
                 data-infinite="true"
                 data-adaptive-height="true"
                 data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                 data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                 data-pagi-classes="u-slick__paging position-absolute position-absolute-bottom-0 text-center u-slick__pagination m-0"
                 data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4">

                <?php foreach ($slides as $slide) { ?>
                    <div class="js-slide bg-img-hero-center">
                        <div class="text-center">

                            <div id="model-container" class="<?=$slide->model;?>">
                                <div class="i1 m-item">
                                    <div class="custom-file-upload">
                                        <div class="lbl">
                                            <span class="has-text i-category"><?=$slide->i1_category;?></span>
                                            <a href="<?=base_url('site_web/details/'.$slide->id.'/i1');?>" class="has-text i-content dis-block" data-scs-animation-in="fadeInDown"><?=nl2br($slide->i1_title);?></a>
                                            <div class="bottom-mask"></div>
                                            <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                <div class="image-box" style="width: 100%;">
                                                    <div class="js--image-preview" style="background-image: url(<?=base_url('public/siteweb/img/slides/'.$slide->i1_img);?>);background-color: #F5F5F5;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if($slide->model != 'model1'):;?>
                                    <div class="two-item-container">
                                        <?php if($slide->model != 'model1'):;?>
                                            <div class="i2 m-item">
                                                <div class="custom-file-upload">
                                                    <div class="lbl">
                                                        <span class="has-text i-category"><?=$slide->i2_category;?></span>
                                                        <a href="<?=base_url('site_web/details/'.$slide->id.'/i2');?>" class="has-text i-content dis-block" data-scs-animation-in="fadeInUp"><?=nl2br($slide->i2_title);?></a>
                                                        <div class="bottom-mask"></div>
                                                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                            <div class="image-box" style="width:100%;">
                                                                <div class="js--image-preview" style="background-image: url(<?=base_url('public/siteweb/img/slides/'.$slide->i2_img);?>);background-color: #F5F5F5;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif;?>

                                        <?php if($slide->model != 'model2' and $slide->model != 'model1'):;?>
                                            <div class="i3 m-item">
                                                <div class="custom-file-upload">
                                                    <div class="lbl">
                                                        <span class="has-text i-category"><?=$slide->i3_category;?></span>
                                                        <a href="<?=base_url('site_web/details/'.$slide->id.'/i3');?>" class="has-text dis-block i-content" data-scs-animation-in="fadeInUp"><?=nl2br($slide->i3_title);?></a>
                                                        <div class="bottom-mask"></div>
                                                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                            <div class="image-box" style="width: 100%;">
                                                                <div class="js--image-preview" style="background-image: url(<?=base_url('public/siteweb/img/slides/'.$slide->i3_img);?>);background-color: #F5F5F5;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                <?php endif;?>


                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="text-center">
                <?php for($i = 0 ; $i<count($slides); $i++):?>
                    <!--            <span class="far fa-circle"></span>-->
                <?php endfor;?>
            </div>
            <!-- Slick carousal ends -->
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="<?=($mobile==FALSE)?'max-width: 49%!important;':'padding-right:0px; margin-top:5px';?>">
        <?php include_once('rubrique.php'); ?>
    </div>
</div>
