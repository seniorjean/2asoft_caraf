<link rel="stylesheet" href="<?=assets_url('libs/css/custom2.css')?>">

<?php
$slider_images_json = get_frontend_settings('slider_images');
$slider_images = json_decode($slider_images_json);
?>
<style>
    textarea{
        margin-top: 20px;
    }
</style>


<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <!--progress bar start-->
                <section class="panel">
                    <header class="panel-heading">
                        <i class="fa fa-cogs"></i> <?php echo get_phrase('homepage_slider_settings') ;?>
                    </header>
                    <div class="panel-body">
                        <form method="POST" class="col-12 homepageSliderSettings ajax-form" onsubmit="ajax_submit_form_callback = scrollToTop" action="<?php echo base_url('site_config/homepage_slider/update') ;?>" id = "homepage_slider_settings" enctype="multipart/form-data">
                            <div class="row justify-content-left">
                                <?php for ($i = 0; $i <3; $i++): ?>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" for="title_<?php echo $i; ?>"> <?php echo get_phrase('slider_title') ;?> <?php echo $i+1; ?></label>
                                                    <input type="text" class="form-control" id="title_<?php echo $i; ?>" name = "title_<?php echo $i; ?>" value="<?php echo $slider_images[$i]->title;?>" required>
                                                </div>
                                                <div class="form-group m-b-3">
                                                    <label class="bmd-label-floating" for="description_<?php echo $i; ?>"> <?php echo get_phrase('description') ;?> <?php echo $i+1; ?></label>
                                                    <textarea name="description_<?php echo $i; ?>" id="description_<?php echo $i; ?>" class="form-control" rows="3"><?php echo $slider_images[$i]->description;?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="example-fileinput"><?php echo get_phrase('slider_image'); ?> <?php echo $i+1; ?></label>
                                                    <div class="custom-file-upload">
                                                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                            <div class="image-box" style="width: 250px;">
                                                                <div class="js--image-preview" style="background-image: url(<?php echo $this->frontend_model->get_slider_image($slider_images[$i]->image); ?>); background-color: #F5F5F5;"></div>
                                                                <div class="upload-options">
                                                                    <label for="slider_image_<?php echo $i; ?>" class="btn btn-white"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_slider'); ?> <?php echo $i+1; ?></label>
                                                                    <input id="slider_image_<?php echo $i; ?>" style="visibility:hidden;" type="file" class="image-upload" name="slider_image_<?php echo $i; ?>" accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block"><?php echo get_phrase('update_settings') ;?></button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

