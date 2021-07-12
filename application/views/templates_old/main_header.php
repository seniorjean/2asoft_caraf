<section class="top-bar">
    <div class="container" style="width: 100% !important; max-width: 100% !important;">
        <?php
        $header_logo  = $this->frontend_model->get_header_logo();
        $system_name  = get_frontend_settings('website_title');
        ?>

        <div class="row">
            <div class="col-sm-2 col-xs-6">
                <div class="logo <?=($mobile==TRUE)?'text-left p-1':'text-center';?>">
                    <a href="./" class="dis-inline-block">
                        <img src="<?=$header_logo;?>" style="<?=($mobile==TRUE)?'width:50px;':'';?>" width="50px" height="50px" alt="Awesome Image"/>
                    </a>
                </div>
            </div>

            <div class="col-sm-7 col-xs-6 text-center">
                <?php include_once('radio.php'); ?>
            </div>

            <div class="col-sm-3">
                <div class="col-sm-12 text-center">
                    <a class="thm-btn m-t-3" data-toggle="modal" href="<?php echo base_url()?>site_web/contact">Faire un don</a>
                </div>
            </div>


        </div>
    </div>
</section>