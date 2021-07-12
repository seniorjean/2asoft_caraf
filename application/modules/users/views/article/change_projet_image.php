
<script src="//cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script>

<style>
    h3{
        font-family: Verdana;
        font-size: 18pt;
        font-style: normal;
        font-weight: bold;
        color:red;
        text-align: center;
    }
    table{
        font-family: Verdana;
        color:black;
        font-size: 12pt;
        font-style: normal;
        font-weight: bold;
        text-align:left;
        border-collapse: collapse;
    }
    .error{
        color:red;
        font-size: 11px;
    }
</style>



<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-nav col-lg-3">
                <section class="panel">
                    <div class="">
                        <a href="#">
                            <img src="<?=bs()?>uploads/<?php echo $page_details->image ?>" width="390" alt="">
                        </a>
                        <h1><?php echo $page_details->name ?></h1>
                        <p><?php echo $page_details->title ?></p>
                    </div>

                    <!--                        <ul class="nav nav-pills nav-stacked">-->
                    <!--                            <li><a href="--><?php //bs() ?><!--users/profile"> <i class="fa fa-user"></i> Profile</a></li>-->
                    <!--                            <li  class="active">-->
                    <!--                                <a href="--><?php //bs() ?><!--users/edit_profile">-->
                    <!--                                    <i class="fa fa-edit"></i> Edit profile-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
<!--                    <a href="--><?php //bs() ?><!--users/article/update_image_page/--><?php //echo $page_details->id ?><!--" class="btn btn-primary">-->
<!--                        Changer l'image-->
<!--                    </a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="--><?php //bs() ?><!--users/auth/change_password">-->
                    <!--                                    <i class="fa fa-unlock-alt"></i> Change Password-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->

                </section>
            </aside>
            <aside class="profile-info col-lg-9">
                <section class="panel">
                    <div class="bio-graph-heading">
                        <i class="fa fa-pencil-square" aria-hidden="true"></i> <b>Modification d'image projet</b>
                    </div>
                    <div class="panel-body bio-graph-info">
                            <!--                                <div class="form-group">-->
                            <!--                                    <label for="exampleInputPassword1">Titre 2</label>-->
                            <!--                                    <input type="text" class="form-control" name="title_1" value="--><?php //echo $page_details->title_1 ?><!--">-->
                            <!--                                </div>-->
                            <!--                                <div class="form-group">-->
                            <!--                                    <label for="exampleInputPassword1">Email</label>-->
                            <!--                                    <input type="email" class="form-control" name="email" value="--><?php //echo $page_details->creation_date ?><!--">-->
                            <!--                                </div>-->
                            <aside class="profile-info col-lg-9">
                                <section class="panel">

                                    <div class="panel-body bio-graph-info">
                                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=bs()?>users/article/update_image_projet/<?php echo $page_details->id ?>" role="form">

                                            <div class="row">
                                                <input id="art_id" name="art_id" value="<?php echo $page_details->id ?>" type="hidden">
                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    <?php
                                                    if (empty($page_details->image))
                                                    {
                                                        echo '<img src="<?=bs()?>public/img/user_default.png" width="200" alt="">';
                                                    }
                                                    else {
                                                        ?>
                                                        <img src="<?=bs()?>uploads/<?php echo $page_details->image ?>" width="390" alt="">
                                                        <?php
                                                    }

                                                    ?>
                                                    <br><br>

                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col-md-6 pull-left">
                                                    <input type="file" name="projet_image">
                                                </div>

                                                <div class="form-group  col col-md-6  pull-right">
                                                    <div class="col-lg-10">
                                                        <button type="submit" class="btn btn-success">Changer</button>
                                                        <button type="button" class="btn btn-danger">Annuler</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </section>
                            </aside>


                    </div>
                </section>
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>
