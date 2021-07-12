<div class="row">
    <div class="col-sm-9 col-xs-12">
        <?php foreach($rubriques as $rubrique):?>
            <div class="">
                <div class="custom-file-upload">
                    <div class="lbl" style="position:relative;">
                        <a href="<?=base_url('site_web/details/'.$rubrique->id.'/i2');?>" class="has-text i-content dis-block" data-scs-animation-in="fadeInUp"><?=nl2br($rubrique->i1_title);?></a>
                        <div class="bottom-mask" style="width: 94%;"></div>
                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                            <div class="image-box" style="width:100%;">
                                <img src="<?=base_url('public/siteweb/img/slides/'.$rubrique->i1_img);?>" width="100%" height="300px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>

    <div class="col-sm-3 dis-none" style="padding: 0px; margin-left: -9px;">
        <?php $itm = 0; foreach ($liste_alaune as $liste) : ?>
            <?php if($itm == 0):;?>
                <div class="welcome-project">
                    <div class="thumb">
                        <img src="   <?=bs()?>uploads/<?php echo $liste->image ?>" alt="" width="225" height="185">
                        <div class="overlay">
                            <!--										<a href="#">Je participe</a>-->
                            <a href="<?php echo base_url() ?>site_web/alaune/<?= $liste->cat ?>">En savoir plus</a>
                        </div>
                    </div>
                    <div class="caption">
                        <h4 class="title"><?php echo $liste->titre_cat ?></h4>
                        <p><?=limit_string($liste->content, 50);?></p>
                    </div>
                </div>
            <?php endif;?>
        <?php $itm++; endforeach ?>
    </div>
</div>
