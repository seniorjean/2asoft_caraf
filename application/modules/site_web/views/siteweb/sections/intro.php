<section class="welcome-section bg-color-f7 sec-padding77">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php
                foreach ($alaune as $ala) : ?>
                    <div class="welcome-content">


                        <h2 class="welcome-title"><?php echo $ala->title ?></h2>
                        <p><?php coupeCourt($ala->content, 100, $marge = 10); ?></p>
                        <!--						<a class="thm-btn btn-xs" href="#">Voir Plus <i class="fa fa-chevron-circle-right"></i></a>-->
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-9 welcome-projects">
                <div class="row">

                    <?php foreach ($liste_alaune as $liste) : ?>
                        <div class="col-sm-6 col-md-3 inner">
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
                                    <p><?php coupeCourt($liste->content, 100, $marge = 10); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>