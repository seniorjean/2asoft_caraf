<section class="recent-causes sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h2>La CARAF en activités</h2>
            <p>Les Trois dernières activités</p>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="row causes-style">

            <?php

            // var_dump($art_activite);
            foreach ($art_activite as $activite) :



                ?>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="causes sm-col5-center">
                        <div class="thumb">
                            <img class="full-width" width="360" height="220" alt="" src="<?=bs()?>uploads/<?php echo $activite->image ?>">
                        </div>
                        <div class="causes-details clearfix">
                            <h4 class="title"><a href="#"><?php echo $activite->title ?></a></h4>
                            <p><?php coupeCourt($activite->content, 150, $marge = 10); ?></p>
                            <div class="pull-right">
                                <!--									<a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Je participe</a>-->
                                <a class="thm-btn inverse btn-xs" href="<?php echo base_url() ?>Site_web/details_article/<?= $activite->id ?>"><i class="fa fa-link text-theme-colored"></i> Détails</a>

                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach  ?>

        </div>
    </div>
</section>