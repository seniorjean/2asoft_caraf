<style>
    .m-item .lbl{display: block !important; padding: 0px !important; margin: 0px !important; border: none !important;}
    .model1 .m-item .js--image-preview , .model2 .m-item .js--image-preview{border: none !important;background-color: white !important;}
    .m-item .wrapper-image-preview{margin: 0px !important;}
    .model1 .m-item , .model2 .m-item , .model3 .m-item.i1 , .model1 .i1 .js--image-preview  , .model2 .i1 .js--image-preview , .model2 .i2 .js--image-preview ,.model3 .i1 .js--image-preview {height: 200px;background-size: cover; background-position: center}
    .model1{text-align: center}
    .model1 .image-box{height:200px;overflow: hidden}
    .model1 .i1{width: 100%; position: relative; }
    .model1 .i2{position relative;display: none}
    .model1 .i3{position relative;display: none}
    .model1 .custom-file-upload{
        position: relative;
        width: 100%;
        text-align: center;
        height: 100%;
    }

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
    .has-text.i-category{
        font-size: small;
        left: 0px;
        top: 22px;
        background: orange;
        color: black;
        font-family: poppins;
        text-transform: uppercase;
    }

    .has-text.i-content::placeholder{color: white;}
    .has-text.i-content {
        text-align: left;
        bottom:9px;
        left: 3px;
        margin: 0px;
        font-family: poppins;
        font-size: small;
        background-color: transparent;
        color: white;
    }

    .details h1,h2,h3,h4,h5,h6{margin:0px !important;padding: 0px !important;}
    .col-sm-3{padding: 5px;}
</style>
<section class="about-content full-sec m-t-10">
    <div class="container">
        <div class="full-sec-content">
            <div class="sec-title style-two">
                <h2><?=$annonce_title;?></h2>
                <span class="decor">
                    <span class="inner"></span>
                </span>
            </div>
            <br>
        </div>

        <div>
            <div class="container details">
                <img class="rounded" alt="About Us" style="float: left; margin-right: 10px; margin-bottom: 0px; max-width: 50%  " src="<?=base_url($img_dir.$image);?>">
                <?php

                echo htmlspecialchars_decode(stripslashes($content));
                ?>

            </div>
        </div>
    </div>
</section>
<div class="clrarfix"></div>
<hr>
<section>
    <div id="model-container" class="model1">
        <div class="row">
            <?php $counter = 1; foreach($others as $slide): $counter++;?>
                <?php if($counter<=8):;?>
                    <?php if(!empty($slide->i1_img)): $counter++;?>
                        <div class="col-sm-3 m-b-10">
                            <div class="m-item">
                                <div class="custom-file-upload">
                                    <div class="btn lbl">
                                        <span class="has-text i-category"><?=$slide->i1_category;?></span>
                                        <div class="has-text i-content" data-scs-animation-in="fadeInDown"><?=nl2br($slide->i1_title);?></div>
                                        <div class="bottom-mask"></div>
                                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                                            <a href="<?=base_url('site_web/details/'.$slide->id.'/i1');?>" class="image-box dis-block" style="width: 100%;">
                                                <img src="<?=base_url('public/siteweb/img/slides/'.$slide->i1_img);?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>

                    <?php if(!empty($slide->i2_img)): $counter++;?>
                        <div class="col-sm-3 m-b-10">
                            <div class="m-item">
                                <div class="custom-file-upload">
                                    <div class="btn lbl">
                                        <span class="has-text i-category"><?=$slide->i2_category;?></span>
                                        <div class="has-text i-content" data-scs-animation-in="fadeInDown"><?=nl2br($slide->i2_title);?></div>
                                        <div class="bottom-mask"></div>
                                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                                            <a href="<?=base_url('site_web/details/'.$slide->id.'/i2');?>" class="image-box dis-block" style="width: 100%;">
                                                <img src="<?=base_url('public/siteweb/img/slides/'.$slide->i2_img);?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>

                    <?php if(!empty($slide->i3_img)): $counter++;?>
                        <div class="col-sm-3 m-b-10">
                            <div class="m-item">
                                <div class="custom-file-upload">
                                    <div class="btn lbl">
                                        <span class="has-text i-category"><?=$slide->i3_category;?></span>
                                        <div class="has-text i-content" data-scs-animation-in="fadeInDown"><?=nl2br($slide->i3_title);?></div>
                                        <div class="bottom-mask"></div>
                                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                                            <a href="<?=base_url('site_web/details/'.$slide->id.'/i3');?>" class="image-box dis-block" style="width: 100%;">
                                                <img src="<?=base_url('public/siteweb/img/slides/'.$slide->i3_img);?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endif;?>

            <?php endforeach;?>
        </div>
        <div class="clearfix"></div>

    </div>
</section>
<div class="clearfix"></div>
<hr>



