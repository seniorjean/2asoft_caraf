<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>LA CARAF|| LE PAYS AKYE</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=bs()?>public/siteweb/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=bs()?>public/siteweb/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=bs()?>public/siteweb/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=bs()?>public/siteweb/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=bs()?>public/siteweb/img/favicon/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="theme-color" content="#ffffff">

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?=bs()?>public/siteweb/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?=bs()?>public/siteweb/css/responsive.css">



</head>
<body class="page-wrapper">


<section class="top-bar">
    <div class="container">

        <div class="left-text pull-left">
            <p><span>Support:</span> info@caraf.com</p>
        </div> <!-- /.left-text -->

        <div class="social-icons pull-right">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
            </ul>
        </div> <!-- /.social-icons -->
    </div>
</section> <!-- /.top-bar -->

<header class="header">
    <div class="container">
        <div class="logo pull-left">
            <a href="./">
                <img src="<?=bs()?>public/siteweb/img/resources/logo_caraf.png" alt="Awesome Image"/>
            </a>
        </div>
        <div class="header-right-info pull-right clearfix">
            <div class="single-header-info">
                <!-- <div class="icon-box">
                    <div class="inner-box">
                        <i class="flaticon-interface-2"></i>
                    </div>
                </div> -->
                <!-- <div class="content">
                    <h3>EMAIL</h3>
                    <p>companyname@mail.com</p>
                </div> -->
            </div>
            <div class="single-header-info">
                <div class="icon-box">
                    <div class="inner-box">
                        <i class="flaticon-telephone"></i>
                    </div>
                </div>
                <div class="content">
                    <h3>Appelez nous</h3>
                    <p><b>(+33) 6 52 29 07 71</b></p>
                </div>
            </div>
            <div class="single-header-info">
                <!-- Modal: Je participe Starts -->
                <a class="thm-btn" data-toggle="modal" href="#modal-donate-now">Faire un don</a>
                <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog style-one" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Make a Donation</h4>
                            </div>
                            <div class="modal-body">
                                <div class="donation-form-outer">
                                    <form action="#" method="post">

                                        <!--Form Portlet-->
                                        <div class="form-portlet">
                                            <h3>Donation Amount</h3>

                                            <div class="row clearfix">
                                                <div class="form-group col-xs-12 clearfix">

                                                    <div class="radio-select">
                                                        <input type="radio" id="amount-1" name="sel-amount">
                                                        <label for="amount-1">$10</label>
                                                    </div>

                                                    <div class="radio-select">
                                                        <input type="radio" checked="" id="amount-2" name="sel-amount">
                                                        <label for="amount-2">$25</label>
                                                    </div>

                                                    <div class="radio-select">
                                                        <input type="radio" id="amount-3" name="sel-amount">
                                                        <label for="amount-3">$50</label>
                                                    </div>

                                                    <div class="radio-select">
                                                        <input type="radio" id="amount-4" name="sel-amount">
                                                        <label for="amount-4">$100</label>
                                                    </div>

                                                    <div class="radio-select">
                                                        <input type="radio" id="amount-5" name="sel-amount">
                                                        <label for="amount-5">$150</label>
                                                    </div>

                                                    <div class="radio-select">
                                                        <input type="radio" id="amount-6" name="sel-amount">
                                                        <label for="amount-6">$200</label>
                                                    </div>

                                                    <div class="radio-select">
                                                        OR
                                                    </div>

                                                </div>

                                                <div class="form-group col-xs-12">

                                                    <input type="text" placeholder="Other Amount" value="" name="other-amount">

                                                </div>

                                            </div>
                                        </div>

                                        <hr>

                                        <!--Form Portlet-->
                                        <div class="form-portlet">
                                            <h3>Billing Information</h3>

                                            <div class="row clearfix">

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">Card Number <span class="required">*</span></div>
                                                    <input type="text" required="" placeholder="Card Number" value="" name="name">
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">Security Code (CVC) <span class="required">*</span></div>
                                                    <input type="text" required="" placeholder="Security Code" value="" name="name">
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">Name <span class="required">*</span></div>
                                                    <input type="text" required="" placeholder="First Name" value="" name="name">
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">Email <span class="required">*</span></div>
                                                    <input type="email" required="" placeholder="Email" value="" name="name">
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">Phone <span class="required">*</span></div>
                                                    <input type="text" required="" placeholder="Phone" value="" name="name">
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">Address <span class="required">*</span></div>
                                                    <input type="text" required="" placeholder="Address 1" value="" name="name">
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">City <span class="required">*</span></div>
                                                    <select>
                                                        <option>City</option>
                                                        <option>City Name</option>
                                                        <option>City Other</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                    <div class="field-label">Zip / Postal Code <span class="required">*</span></div>
                                                    <input type="text" required="" placeholder="Zip Code" value="" name="name">
                                                </div>

                                                <hr>

                                                <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Je participe</button></div>

                                            </div>
                                        </div>

                                        <hr>

                                        <!--Form Portlet-->
                                        <div class="form-portlet">
                                            <h3>Online Payment Information</h3>

                                            <div class="payment-option-logo"><img alt="" src="<?=bs()?>public/siteweb/img/resources/payment-logos.png" class="img-responsive"></div>
                                            <br>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal: Je participe Ends -->
            </div>
        </div>
    </div>
</header> <!-- /.header -->


<?php
 $this->load->view("site_web/siteweb/menu");
//include_once("menu.php") ;?> <!-- /.mainmenu-area -->
