<section class="blog-home sec-padding blog-page blog-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 pull-left pull-sm-none">

                <?php //foreach ($projets_by_id as $projet): ?>
                <div class="single-blog-post">
                    <div class="img-box">
                        <img src="<?=bs()?>uploads/<?php echo $article_by_id->image ?>" alt="" width="780" height="400">
                    </div>
                    <div class="content-box">
                        <div class="date-box">
                            <!--                            <div class="inner">-->
                            <!--                                <div class="date">-->
                            <!--                                    <b>24</b>-->
                            <!--                                    apr-->
                            <!--                                </div>-->
                            <!--                                <div class="comment">-->
                            <!--                                    <i class="flaticon-interface-1"></i> 8-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        </div>
                        <div class="content">
                            <a href="#"><h3><?php echo $article_by_id->title ?></h3></a>
                            <p><?php echo $article_by_id->content ?></p>
                            <div class="bottom-box clearfix">
                                <!--                                <span class="pull-left">Tag: <a href="#">child, charity</a></span>-->
                                <ul class="pull-right share">
                                    <li><span>Share: </span></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php //endforeach ?>
                <!--                <div class="admin-info">-->
                <!--                    <div class="img-box">-->
                <!--                        <div class="inner-box">-->
                <!--                            <img src="img/blog-page/admin.jpg" alt="Awesome Image"/>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="content">-->
                <!--                        <h3>Rashed kabir</h3>-->
                <!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>-->
                <!--                        <ul class="social">-->
                <!--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                <!--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                <!--                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="comment-box">-->
                <!--                    <div class="title">-->
                <!--                        <h2>2 Comments</h2>-->
                <!--                    </div>-->
                <!--                    <div class="single-comment-box">-->
                <!--                        <div class="img-box">-->
                <!--                            <div class="inner-box">-->
                <!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="content-box">-->
                <!--                            <h3>Jhon Chena</h3>-->
                <!--                            <div class="meta-box clearfix">-->
                <!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
                <!--                                <a href="#" class="reply pull-right">Reply</a>-->
                <!--                            </div>-->
                <!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-comment-box">-->
                <!--                        <div class="img-box">-->
                <!--                            <div class="inner-box">-->
                <!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="content-box">-->
                <!--                            <h3>Jhon Chena</h3>-->
                <!--                            <div class="meta-box clearfix">-->
                <!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
                <!--                                <a href="#" class="reply pull-right">Reply</a>-->
                <!--                            </div>-->
                <!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-comment-box">-->
                <!--                        <div class="img-box">-->
                <!--                            <div class="inner-box">-->
                <!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="content-box">-->
                <!--                            <h3>Jhon Chena</h3>-->
                <!--                            <div class="meta-box clearfix">-->
                <!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
                <!--                                <a href="#" class="reply pull-right">Reply</a>-->
                <!--                            </div>-->
                <!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-comment-box">-->
                <!--                        <div class="img-box">-->
                <!--                            <div class="inner-box">-->
                <!--                                <img src="img/blog-page/comment1.jpg" alt="">-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="content-box">-->
                <!--                            <h3>Jhon Chena</h3>-->
                <!--                            <div class="meta-box clearfix">-->
                <!--                                <span class="pull-left">24 Feb, 2015 at 2:40pm</span>-->
                <!--                                <a href="#" class="reply pull-right">Reply</a>-->
                <!--                            </div>-->
                <!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore Ipsum has been the eloi industry's standard dummy text ever since the 1500s,</p>-->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="comment-form contact-content">-->
                <!--                    <h2>Leave a Comment</h2>-->
                <!--                    <form action="http://hasan.themexlab.com/new/lillah-fund-html/inc/sendemail.php" class="contact-form row" id="contact-page-contact-form">-->
                <!--                        <div class="col-md-6">-->
                <!--                            <input type="text" name="name" placeholder="Name">-->
                <!--                            <input type="text" name="email" placeholder="Email">-->
                <!--                            <input type="text" name="phone" placeholder="Phone">-->
                <!--                        </div>-->
                <!--                        <div class="col-md-6">-->
                <!--                            <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>-->
                <!--                        </div>-->
                <!--                        <div class="col-md-12">-->
                <!--                            <button class="thm-btn" type="submit">Send</button>-->
                <!--                        </div>-->
                <!--                    </form>-->
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
            <!--                    <div class="single-sidebar-widget popular-post">-->
            <!--                        <h3 class="title">Popular Posts</h3>-->
            <!--                        <ul>-->
            <!--                            <li>-->
            <!--                                <div class="img-box">-->
            <!--                                    <div class="inner-box">-->
            <!--                                        <img src="img/blog-page/s1.jpg" alt="">-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="content-box">-->
            <!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
            <!--                                    <span>17 jun, 2015</span>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                            <li>-->
            <!--                                <div class="img-box">-->
            <!--                                    <div class="inner-box">-->
            <!--                                        <img src="img/blog-page/s2.jpg" alt="">-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="content-box">-->
            <!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
            <!--                                    <span>17 jun, 2015</span>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                            <li>-->
            <!--                                <div class="img-box">-->
            <!--                                    <div class="inner-box">-->
            <!--                                        <img src="img/blog-page/s3.jpg" alt="">-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="content-box">-->
            <!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
            <!--                                    <span>17 jun, 2015</span>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                            <li>-->
            <!--                                <div class="img-box">-->
            <!--                                    <div class="inner-box">-->
            <!--                                        <img src="img/blog-page/s4.jpg" alt="">-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="content-box">-->
            <!--                                    <a href="#"><h4>Lorem Ipsum is simply dumm textand somthing more here</h4></a>-->
            <!--                                    <span>17 jun, 2015</span>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                    <div class="single-sidebar-widget archive">-->
            <!--                        <h3 class="title">Archive</h3>-->
            <!--                        <ul>-->
            <!--                            <li><a href="#">October 2015</a></li>-->
            <!--                            <li><a href="#">November 2015</a></li>-->
            <!--                            <li><a href="#">December 2015</a></li>-->
            <!--                            <li><a href="#">January 2016</a></li>-->
            <!--                            <li><a href="#">February 2016</a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                    <div class="single-sidebar-widget tags">-->
            <!--                        <h3 class="title">Keywords</h3>-->
            <!--                        <ul>-->
            <!--                            <li><a href="#">Child</a></li>-->
            <!--                            <li><a href="#">Charity</a></li>-->
            <!--                            <li><a href="#">Sponsorship</a></li>-->
            <!--                            <li><a href="#">Volunteers</a></li>-->
            <!--                            <li><a href="#">Feed</a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>