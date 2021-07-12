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



	<?php include_once("menu.php"); ?>
<!-- /.mainmenu-area -->


	<section class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<li data-transition="parallaxvertical">
					<img src="<?=bs()?>public/siteweb/img/slides/2_1.jpg"  alt=""  width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg" 
				        data-x="left" data-hoffset="-120" 
				        data-y="top" data-voffset="249" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						Ensemble Batissons 
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg" 
				        data-x="left" data-hoffset="-120" 
				        data-y="top" data-voffset="318" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1000">
						Le pays Akyé
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3" 
				        data-x="left" data-hoffset="-120" 
				        data-y="top" data-voffset="386" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1500">
						Pour Un Avenir Meilleur
				    </div>
					<div class="tp-caption sfl tp-resizeme" 
				        data-x="left" data-hoffset="-100" 
				        data-y="top" data-voffset="450" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2300">
						<a href="#" class="thm-btn">Je participe</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme" 
				        data-x="left" data-hoffset="155" 
				        data-y="top" data-voffset="450" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2600">
						<a href="#" class="thm-btn inverse">En savoir plus</a>
				    </div>
				</li>
				<li data-transition="parallaxvertical">
					<img src="<?=bs()?>public/siteweb/img/slides/1_1.jpg"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
					<!-- <div class="tp-caption sfl tp-resizeme thm-banner-h1" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="225" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						To feed and educate!
				    </div> -->
				<!-- 	<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="290" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1000">
						We need your support
				    </div> -->
					<!-- <div class="tp-caption sfb tp-resizeme thm-banner-h3" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="368" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1500">
						Became a part to change the world
				    </div> -->
					<!-- <div class="tp-caption sfb tp-resizeme thm-banner-p" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="430" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2000">
						Our Company has a long tradition of charitable giving and <br> philanthropy. Lorem ipsum dolor sit amet.
				    </div> -->
					<!-- <div class="tp-caption sfl tp-resizeme" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="505" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2300">
						<a href="#" class="thm-btn">Je participe</a>
				    </div> -->
					<!-- <div class="tp-caption sfr tp-resizeme" 
				        data-x="left" data-hoffset="185" 
				        data-y="top" data-voffset="505" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Learn More</a>
				    </div> -->
				</li>
			</ul>
		</div>
	</section>


	<section class="welcome-section bg-color-f7 sec-padding77">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="welcome-content">
						<h2 class="welcome-title">A la une</h2>
						<p>Here are ways you can help. Some of the projects your donate can support</p>
						<a class="thm-btn btn-xs" href="#">Voir Plus <i class="fa fa-chevron-circle-right"></i></a>
					</div>
				</div>
				<div class="col-md-9 welcome-projects">
					<div class="row">
						<div class="col-sm-6 col-md-3 inner">
							<div class="welcome-project">
								<div class="thumb">
									<img src="<?=bs()?>public/siteweb/img/projects/n1_1.jpg" alt="">
									<div class="overlay">
										<a href="#">Je participe</a>
										<a href="#">En savoir plus</a>
									</div>
								</div>
								<div class="caption">
									<h4 class="title">Education</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 inner">
							<div class="welcome-project">
								<div class="thumb">
									<img src="<?=bs()?>public/siteweb/img/projects/n2_1.jpg" alt="">
									<div class="overlay">
										<a href="#">Je participe</a>
										<a href="#">En savoir plus</a>
									</div>
								</div>
								<div class="caption">
									<h4 class="title">Alimentation</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 inner">
							<div class="welcome-project">
								<div class="thumb">
									<img src="<?=bs()?>public/siteweb/img/projects/n3_1.jpg" alt="">
									<div class="overlay">
										<a href="#">Je participe</a>
										<a href="#">En savoir plus</a>
									</div>
								</div>
								<div class="caption">
									<h4 class="title">Développement</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 inner">
							<div class="welcome-project">
								<div class="thumb">
									<img src="<?=bs()?>public/siteweb/img/projects/n4_1.jpg" alt="">
									<div class="overlay">
										<a href="#">Je participe</a>
										<a href="#">En savoir plus</a>
									</div>
								</div>
								<div class="caption">
									<h4 class="title">Négroloie</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="recent-causes sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>La CARAF en activités</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
			<div class="row causes-style">
	          <div class="col-sm-12 col-md-4 col-lg-4">
	            <div class="causes sm-col5-center">
	              <div class="thumb">
	                <img class="full-width" alt="" src="<?=bs()?>public/siteweb/img/causes/n1.jpg">
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Activités 1</a></h4>
	                <p>Lorem ipsum dolor sit amet, consectetur ambo elit. Numquam repellendus est rerum sed, read aliquid atup inventore, voluptate, eveniet, soluta nostrum sint.</p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Je participe</a>
	                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart text-theme-colored"></i> 25 Donateurs</a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-12 col-md-4 col-lg-4">
	            <div class="causes sm-col5-center">
	              <div class="thumb">
	                <img class="full-width" alt="" src="<?=bs()?>public/siteweb/img/causes/n2.jpg">
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Activités 2</a></h4>
	                <p>Lorem ipsum dolor sit amet, consectetur ambo elit. Numquam repellendus est rerum sed, read aliquid atup inventore, voluptate, eveniet, soluta nostrum sint.</p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Je participe</a>
	                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart text-theme-colored"></i> 25 Donateurs</a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-12 col-md-4 col-lg-4">
	            <div class="causes sm-col5-center">
	              <div class="thumb">
	                <img class="full-width" alt="" src="<?=bs()?>public/siteweb/img/causes/n3.jpg">
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Activités 3</a></h4>
	                <p>Lorem ipsum dolor sit amet, consectetur ambo elit. Numquam repellendus est rerum sed, read aliquid atup inventore, voluptate, eveniet, soluta nostrum sint.</p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Je participe</a>
	                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart text-theme-colored"></i> 25 Donateurs</a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
		</div>
	</section>


	<section class="overlay-white sec-padding parallax-section sec-padding89">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 promote-project style-inner text-center">
					<h3>Sauvez les enfants du pays Akyé du manque d'éducation</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>EST DEVENU UNE LUTTE CONTINUE</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
					<a href="#" class="thm-btn">Je participe</a>
                    <a href="#" class="thm-btn inverse">En savoir plus</a>
				</div>
			</div>
		</div>
	</section>


	<section class="home-serivce sec-padding sec-padding74">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Notre Mission</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
			<div class="row single-service-style">
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-gesture-1"></i> Education</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-people-1"></i> Orphans</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-hand"></i> Water</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-people-1"></i> Health</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-hand"></i> Hunger</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-gesture-1"></i> Emergencies</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-hand"></i> Humanity</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-gesture-1"></i> Clothes</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a class="btn-details" href="#">En savoir plus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="fact-counter-wrapper sec-padding parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 fact-inner">
					<h2>Des statistique qui parles <b></h2>
					<a href="#" class="thm-btn inverse">Nous réjoindre</a>
				</div>
				<div class="col-lg-6 col-md-12 md-text-center">
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-shapes-2"></i>
						</div>
						<span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>
						<p>Total Awards</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-people-3"></i>
						</div>
						<span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>
						<p>Total Volunteer</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-hands"></i>
						</div>
						<span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200</span>
						<p>Total Projects</p>
					</div>
				</div>
			</div>
		</div>
	</section>


    <section class="gallery-section full-width pb_2">
    	<div class="auto-container">

			<div class="sec-title text-center">
				<h2>La CARAF en image</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
            
            <!--Filter-->
            <div class="filters">
            	<ul class="filter-tabs style-one clearfix anim-3-all">
                    <li class="filter" data-role="button" data-filter="all">Générale</li>
                    <li class="filter" data-role="button" data-filter=".child">Education</li>
                    <li class="filter" data-role="button" data-filter=".charity">Alimentation</li>
                    <li class="filter" data-role="button" data-filter=".sponsorship">Développement</li>
                    <li class="filter" data-role="button" data-filter=".volunteering">Sport</li>
                </ul>
            </div>
            
        </div>
        
        <div class="images-container">
            <div class="filter-list clearfix">
                
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?=bs()?>public/siteweb/img/gallery/n1.jpg" class="lightbox-image">
                        <img src="<?=bs()?>public/siteweb/img/gallery/n1.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n1.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/n2.jpg" class="lightbox-image">
                        <img src="<?=bs()?>public/siteweb/img/gallery/n2.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n2.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                        <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="<?=bs()?>public/siteweb/img/gallery/n3.jpg" class="lightbox-image">
                        <img src="<?=bs()?>public/siteweb/img/gallery/n3.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n3.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                        <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship">
                    <div class="inner-box">
                        <figure class="image"><a href="<?=bs()?>public/siteweb/img/gallery/n4.jpg" class="lightbox-image">
                        <img src="<?=bs()?>public/siteweb/img/gallery/n4.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n4.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                        <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?=bs()?>public/siteweb/img/gallery/n5.jpg" class="lightbox-image">
                        <img src="<?=bs()?>public/siteweb/img/gallery/n5.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n5.jpg" class="lightbox-image btn-zoom" title="Image Title Here">
                        <span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="<?=bs()?>public/siteweb/img/gallery/n6.jpg" class="lightbox-image">
                        <img src="<?=bs()?>public/siteweb/img/gallery/n6.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n6.jpg"
                         class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?=bs()?>public/siteweb/img/gallery/n7.jpg" class="lightbox-image">
                        <img src="<?=bs()?>public/siteweb/img/gallery/n7.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n7.jpg" class="lightbox-image btn-zoom"
                         title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="<?=bs()?>public/siteweb/img/gallery/n8.jpg"
                         class="lightbox-image"><img src="<?=bs()?>public/siteweb/img/gallery/n8.jpg" alt=""></a></figure>
                        <a href="<?=bs()?>public/siteweb/img/gallery/n8.jpg"
                        class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


	<!-- <section class="overlay-white sec-padding parallax-section sec-padding89">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 promote-project style-inner text-center">
					<h3>Save Children From Hunger</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>Became a part of the world lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
					<a href="#" class="thm-btn">Je participe</a>
                    <a href="#" class="thm-btn inverse">En savoir plus</a>
				</div>
			</div>
		</div>
	</section> -->


	<section class="upcoming-event sec-padding bg-pattern bg-color-thm sec-padding75">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sec-title text-center">
						<h2 class="text-white">Activités futurs</h2>
						<p class="text-white">Parlons des projets et activités avenir</p>
						<span class="decor"><span class="inner"></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="event-post">
						<div class="thumb">
							<img src="<?=bs()?>public/siteweb/img/event/actf.jpg" alt="">
							<div class="overlay">
								<a href="#">Nous réjoindre</a>
								<a href="#">Je participe</a>
							</div>
						</div>
						<div class="caption">
							<h3 class="title"><a href="#">Construction d'un centre Hospilatié</a></h3>
							<i class="fa fa-map-marker"></i>
							<p class="event-time"><span>16-25</span> June <span>2016</span></p>
							<p class="event-location">United Kingdom</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="event-post">
						<div class="thumb">
							<img src="<?=bs()?>public/siteweb/img/event/actf.jpg" alt="">
							<div class="overlay">
								<a href="#">Nous réjoindre</a>
								<a href="#">Je participe</a>
							</div>
						</div>
						<div class="caption">
							<h3 class="title"><a href="#">Réhabilitation urbaine</a></h3>
							<i class="fa fa-map-marker"></i>
							<p class="event-time"><span>16-25</span> June <span>2016</span></p>
							<p class="event-location">United Kingdom</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="event-post">
						<div class="thumb">
							<img src="<?=bs()?>public/siteweb/img/event/actf.jpg" alt="">
							<div class="overlay">
								<a href="#">Nous réjoindre</a>
								<a href="#">Je participe</a>
							</div>
						</div>
						<div class="caption">
							<h3 class="title"><a href="#">Construction d'un Complexe sportif</a></h3>
							<i class="fa fa-map-marker"></i>
							<p class="event-time"><span>16-25</span> June <span>2016</span></p>
							<p class="event-location">United Kingdom</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="sec-padding meet-Volunteer">
		<div class="container">
			<div class="row">
				<div class="col-xs-10">
					<div class="sec-title text-left">
						<h2>Disons Merci</h2>
						<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
						<span class="decor"><span class="inner"></span></span>
					</div>
				</div>
			</div>
			<div class="clearfix">
				<div class="team-carousel owl-carousel owl-theme">
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/team/1_1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="#" class="thm-btn">View Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="sec-padding testimonials-wrapper parallax-section sec-padding77">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>Témoignage</h2>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="testimonaials-carousel owl-carousel owl-theme">
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="blog-home sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Espace Events</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12 blogs-inner">
					<div class="single-blog-post">
						<div class="img-box">
							<img class="full-width" src="<?=bs()?>public/siteweb/img/blog/1.jpg" alt="">
							<div class="overlay">
								<div class="box">
									<div class="content">
										<ul>
											<li><a href="#"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="#"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="#">En savoir plus</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 blogs-inner">
					<div class="single-blog-post">
						<div class="img-box">
							<img class="full-width" src="<?=bs()?>public/siteweb/img/blog/1.jpg" alt="">
							<div class="overlay">
								<div class="box">
									<div class="content">
										<ul>
											<li><a href="#"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="#"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="#">En savoir plus</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 blogs-inner">
					<div class="single-blog-post">
						<div class="img-box">
							<img class="full-width" src="<?=bs()?>public/siteweb/img/blog/1.jpg" alt="">
							<div class="overlay">
								<div class="box">
									<div class="content">
										<ul>
											<li><a href="#"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="#"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="#">En savoir plus</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="bg-color-thm p_35">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel owl-carousel owl-theme">
						<div class="item">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-1.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-2.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-3.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-4.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-5.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-1.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="<?=bs()?>public/siteweb/img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-2.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="<?=bs()?>public/siteweb/img/clients/logo-3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<footer class="footer sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="#">
							<img src="<?=bs()?>public/siteweb/img/resources/logo_caraf.png" alt="Awesome Image"/>
						</a>
						<p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
						<ul class="contact">
							<li><i class="fa fa-map-marker"></i> <span>60 Grant Ave. Carteret NJ 0708</span></li>
							<li><i class="fa fa-phone"></i> <span>(880) 1723801729</span></li>
							<li><i class="fa fa-envelope-o"></i> <span>example@gmail.com</span></li>
						</ul>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="footer-widget quick-links">
						<h3 class="title">Pages</h3>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Causes</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Archives</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 latest-post col-sm-6">
					<div class="footer-widget latest-post">
						<h3 class="title">Latest News</h3>
						<ul>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="#">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="#">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="#">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget contact-widget">
						<h3 class="title">Contact Form</h3>
						<form action="http://hasan.themexlab.com/new/lillah-fund-html/inc/sendemail.php" class="contact-form" id="footer-cf">
							<input type="text" name="name"  placeholder="Full Name">
							<input type="text" name="email" placeholder="Email Address" >
							<textarea name="message" placeholder="Your Message"></textarea>
							<button type="submit">Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<section class="footer-bottom">
		<div class="container text-center">
			<p>Created By <a href="http://www.sweet-comm.com" target="_blank"> Sweet-Comm </a> Soluion Provider</p>
		</div>
	</section>

	<!--Scroll to top-->
	<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


	<!-- main jQuery -->
	<script src="<?=bs()?>public/siteweb/js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=bs()?>public/siteweb/js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script src="<?=bs()?>public/siteweb/js/jquery.bxslider.min.js"></script>
	<!-- owl carousel -->
	<script src="<?=bs()?>public/siteweb/js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="<?=bs()?>public/siteweb/js/jquery-parallax.js"></script>
	<!-- validate -->
	<script src="<?=bs()?>public/siteweb/js/validate.js"></script>
	<!-- mixit up -->
	<script src="<?=bs()?>public/siteweb/js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="<?=bs()?>public/siteweb/js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="<?=bs()?>public/siteweb/js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script src="<?=bs()?>public/siteweb/js/circle-progress.js"></script>
	<!-- appear js -->
	<script src="<?=bs()?>public/siteweb/js/jquery.appear.js"></script>
	<!-- count to -->
	<script src="<?=bs()?>public/siteweb/js/jquery.countTo.js"></script>

	<!-- isotope script -->
	<script src="<?=bs()?>public/siteweb/js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="<?=bs()?>public/siteweb/js/jquery-ui-1.11.4/jquery-ui.js"></script>
	
	<!-- revolution scripts -->

	<script src="<?=bs()?>public/siteweb/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?=bs()?>public/siteweb/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?=bs()?>public/siteweb/revolution/js/extensions/revolution.extension.video.min.js"></script>


	<!-- thm custom script -->
	<script src="<?=bs()?>public/siteweb/js/custom.js"></script>
</body>
</html>