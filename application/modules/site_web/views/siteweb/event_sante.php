<section class="event-feature sec-padding bg-color-fa pb_60">
    <div class="container">
        <div class="row event-feature-inner">
            <?php foreach  ($all_article_sante as $sante): ?>
                <div class="col-sm-12">
                    <div class="event border-0px">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div class="event-thumb">
                                    <div class="thumb">
                                        <img class="full-width" src="<?=bs()?>uploads/<?php echo $sante->image ?>" alt="">
                                    </div>
                                    <!--                                <ul class="event-date">-->
                                    <!--                                    <li class="date">28</li>-->
                                    <!--                                    <li class="month">Aug</li>-->
                                    <!--                                </ul>-->
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="event-content">
                                    <h3 class="event-title "><a href="#"><?php echo $sante->title ?></a></h3>
                                    <ul class="event-held list-inline font-13">
                                        <!--                                    <li><i class="fa fa-clock-o"></i> 6.00 pm - 8.30 pm</li>-->
                                        <li> <i class="fa fa-map-marker"></i> <?php echo $sante->lieu ?></li>
                                    </ul>
                                    <p class="mb_20">
                                        <?php coupeCourt($sante->content,150,$marge=10,$sante->id);?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>



            <!--            <div class="col-sm-12">-->
            <!--                <!--Pagination-->
            <!--                <div class="pager-outer clearfix text-center mt_30 mb_0">-->
            <!--                    <ul class="pagination mb_0">-->
            <!--                        <li><a href="#">Prev</a></li>-->
            <!--                        <li><a href="#">1</a></li>-->
            <!--                        <li class="active"><a href="#">2</a></li>-->
            <!--                        <li><a href="#">3</a></li>-->
            <!--                        <li><a href="#">-</a></li>-->
            <!--                        <li><a href="#">4</a></li>-->
            <!--                        <li><a href="#">5</a></li>-->
            <!--                        <li><a href="#">Next</a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>
