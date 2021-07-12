<style>
    .input-group-prepend {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
    }
    .form-control{padding-left:4px;}
    .btn-white{
        color: #363636;
        background-color: white;
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
                        <i class="fa fa-cogs"></i> Configutation du site
                    </header>
                </section>

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 m-t-30">
<!--                        <a href="--><?php //echo base_url('site_config/notice_event/notice_event/noticeboard'); ?><!--" class="btn btn-dark btn-rounded btn-block">--><?php //echo get_phrase('noticeboard'); ?><!--</a>-->
<!--                        <a href="--><?php //echo base_url('site_config/notice_event/notice_event/events'); ?><!--" class="btn btn-dark btn-rounded btn-block">--><?php //echo get_phrase('events'); ?><!--</a>-->
                        <a href="<?php echo base_url('site_config'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('general_settings'); ?></a>
                        <a href="<?php echo base_url('site_config/system_settings'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('system_settings'); ?></a>
                        <a href="<?php echo base_url('site_config/gallery'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('gallery'); ?></a>
                        <a href="<?php echo base_url('site_config/about_us'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('about_us'); ?></a>
                        <a href="<?php echo base_url('site_config/le_pays'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('le_pays'); ?></a>
                        <a href="<?php echo base_url('site_config/terms_conditions'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('terms_and_conditions'); ?></a>
                        <a href="<?php echo base_url('site_config/privacy_policy'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('privacy_policy'); ?></a>
                        <a href="<?php echo base_url('site_config/homepage_slider'); ?>" class="btn btn-dark btn-rounded btn-block"><?php echo get_phrase('homepage_slider'); ?></a>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 page_content">
                        <div class="panel">
                            <div class="panel-body">
                                <h4 class="header-title"><?php echo get_phrase('general_settings') ;?></h4>
                                <form method="POST" class="col-12 ajax-form" action="<?php echo base_url('site_config/website_update/general_settings') ;?>" id="general_settings" onsubmit="ajax_submit_form_callback = after_update">
                                    <div class="row justify-content-left">
                                        <div class="">
                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for="website_title"> <?php echo get_phrase('website_title') ;?></label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="website_title" name="website_title" class="form-control"  value="<?php echo get_frontend_settings('website_title') ;?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for="social_links"> <?php echo get_phrase('social_links') ;?></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="facebook_link" value="<?php echo get_frontend_settings('facebook'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for=""></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="twitter_link" value="<?php echo get_frontend_settings('twitter'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for=""></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="linkedin_link" value="<?php echo get_frontend_settings('linkedin'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for=""></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text"><i class="mdi mdi-google"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="google_link" value="<?php echo get_frontend_settings('google'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for=""></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text"><i class="mdi mdi-youtube-play"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="youtube_link" value="<?php echo get_frontend_settings('youtube'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for=""></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="instagram_link" value="<?php echo get_frontend_settings('instagram'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for="homepage_note_title"> <?php echo get_phrase('homepage_note_title') ;?></label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="homepage_note_title" name="homepage_note_title" class="form-control"  value="<?php echo get_frontend_settings('homepage_note_title') ;?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for="homepage_note_description"> <?php echo get_phrase('homepage_note_description') ;?></label>
                                                <div class="col-sm-9">
                                                    <textarea style="height: auto" name="homepage_note_description" id="homepage_note_description" class="form-control" rows="6" cols="80"><?php echo get_frontend_settings('homepage_note_description'); ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for="copyright_text"> <?php echo get_phrase('copyright_text') ;?></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text"><i class="mdi mdi-copyright"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="copyright_text" value="<?php echo get_frontend_settings('copyright_text'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for="example-fileinput"><?php echo get_phrase('header_logo'); ?></label>
                                                <div class="col-sm-9 custom-file-upload">
                                                    <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                        <div class="image-box" style="width: 250px;">
                                                            <div class="js--image-preview" style="background-image: url(<?php echo $this->frontend_model->get_header_logo(); ?>); background-color: #F5F5F5;"></div>
                                                            <div class="upload-options">
                                                                <label for="header_logo" class="btn btn-block btn-white"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_header_logo'); ?> </label>
                                                                <input id="header_logo" style="visibility:hidden;" type="file" class="image-upload" name="header_logo" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <label class="col-sm-3 col-form-label" for="example-fileinput"><?php echo get_phrase('footer_logo'); ?></label>
                                                <div class="col-sm-9 custom-file-upload">
                                                    <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                        <div class="image-box" style="width: 250px;">
                                                            <div class="js--image-preview" style="background-image: url(<?php echo $this->frontend_model->get_footer_logo(); ?>); background-color: #F5F5F5;"></div>
                                                            <div class="upload-options">
                                                                <label for="footer_logo" class="btn btn-block btn-white"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_footer_logo'); ?> </label>
                                                                <input id="footer_logo" style="visibility:hidden;" type="file" class="image-upload" name="footer_logo" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix m-b-10">
                                                <div class="col-sm-3 col-form-label">LA CARAF TV Background</div>
                                                <div class="col-sm-9 custom-file-upload">
                                                    <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                        <div class="image-box" style="width: 250px;">
                                                            <div class="js--image-preview" style="background-image:url(<?=base_url('public/siteweb/img/resources/testi-bg.jpg')?>); background-color : #F5F5F5;"></div>
                                                            <div class="upload-options">
                                                                <label for="faculty_section_background" class="btn btn-block"> <i class="mdi mdi-camera"></i> upload image </label>
                                                                <input id="faculty_section_background" style="visibility:hidden;" type="file" class="image-upload" name="tv_bg" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-dark col-xl-4 col-lg-4 col-sm-12 col-sm-12"><?php echo get_phrase('update_settings') ;?></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

<script>
    function after_update(){
        show_loader();
        setTimeout(function(){
            refresh();
        },900);
    }
</script>