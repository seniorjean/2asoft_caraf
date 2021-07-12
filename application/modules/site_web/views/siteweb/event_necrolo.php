
<section class="blog-home sec-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 pull-left pull-sm-none">
                <div class="row">
                    <?php foreach  ($all_article_necro as $necrolo): ?>
                        <div class="col-sm-6">
                            <div class="single-blog-post">
                                <div class="img-box">
                                    <img class="full-width" src="<?=bs()?>uploads/<?php echo $necrolo->image ?>" alt="">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <ul>
                                                    <li><a href="<?php echo base_url()?>Site_web/details_article/<?= $necrolo->id ?>"><i class="fa fa-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="date-box">
                                        <!--<div class="inner">
                                            <div class="date">-->
                                        <!--                                            <b>24</b>-->
                                        <!--                                            apr-->
                                        <!--                                        </div>-->
                                        <!--  <div class="comment">
    <!--                                            <i class="flaticon-interface-1"></i> 8-->
                                        <!-- </div>
                                     </div>-->
                                    </div>
                                    <div class="content">
                                        <h3 class="event-title "><a href="<?php echo base_url()?>Site_web/details_article/<?= $necrolo->id ?>"><?php echo $necrolo->title ?></a></h3>
                                        <?php coupeCourt($necrolo->content,150,$marge=10,$necrolo->id);?>
                                        <!--                                    <span>Tag: <a href="blog-details.html">child, charity</a></span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <!--Pagination-->
                <!--                <div class="pager-outer clearfix mb_0">-->
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
            </div>
            <!--            <div class="col-md-4 col-sm-12 sidebar-inner pull-right pull-sm-none">-->
            <!--                <div class="side-bar-widget">-->
            <!--                    <div class="single-sidebar-widget search">-->
            <!--                        <form action="#">-->
            <!--                            <input type="text" placeholder="Search">-->
            <!--                            <button type="submit"><i class="fa fa-search"></i></button>-->
            <!--                        </form>-->
            <!--                    </div>-->
            <!--                    <div class="single-sidebar-widget category">-->
            <!--                        <h3 class="title">Catagories</h3>-->
            <!--                        <ul>-->
            <!--                            <li><a href="#">Child</a></li>-->
            <!--                            <li><a href="#">Charity</a></li>-->
            <!--                            <li><a href="#">Sponsorship</a></li>-->
            <!--                            <li><a href="#">Volunteers</a></li>-->
            <!--                            <li><a href="#">Feed</a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!---->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>
<!--<section class="inner-header">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 sec-title colored text-center">-->
<!--                <h2>CARAF NECROLOGIE</h2>-->
<!--                <ul class="breadcumb">-->
<!--                    <li><a href="--><?php //echo base_url()?><!--">Accueil</a></li>-->
<!--                    <li><i class="fa fa-angle-right"></i></li>-->
<!--                    <li><span>CARAF ->>NECROLOGIE</span></li>-->
<!--                </ul>-->
<!--                <span class="decor"><span class="inner"></span></span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
