<?php
$header_logo = $this->frontend_model->get_header_logo();
$system_name = get_frontend_settings('website_title');
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
<nav class="mainmenu-area stricky">
	<div class="container">
		<div class="navigation pull-left">
			<div class="nav-header">
				<ul>
					<li class="dropdown"><a href="<?php echo base_url() ?>">Accueil</a></li>
					<li class="dropdown">
						<a href="##">La caraf</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url() ?>site_web/about">Présentation</a></li>
							<li><a href="<?php echo base_url() ?>site_web/lepays">Le pays Akyé</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="##">Projets & Activités</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url() ?>site_web/projets/durables">Projet durables</a></li>
							<li><a href="<?php echo base_url() ?>site_web/projets/petits">Petits Projet</a></li>
							<!-- <li><a href="#">Single Cause</a></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">Events & Actualités</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url() ?>site_web/msante">Santé</a></li>
							<li><a href="<?php echo base_url() ?>site_web/urbani">Urbanisation</a></li>
							<li><a href="<?php echo base_url() ?>site_web/necrolo">Nécrologie</a></li>
						</ul>
					</li>

					<li><a href="<?php echo base_url() ?>site_web/yafeca">YAFECA</a></li>
					<li><a href="<?php echo base_url() ?>site_web/contact">Contact</a></li>

					<?php $sess_id = $this->session->userdata('user_id'); if(!empty($sess_id)):;?>
						<li class="dropdown">
							<a href="##">Mon Espace Caraf</a>
							<ul class="submenu">
								<li>
									<a href="##">Mes cotisation</a>
									<ul class="submenu">
										<li><a href="<?= base_url('stripe_web/liste_user_cot') ?>">Cotisations Payées</a></li>
										<li><a href="<?= base_url('stripe_web') ?>">Payer mes cotisations</a></li>
										<li><a href="#"> Cotisations En attentes</a></li>
										<li><a href="#">Toutes mes cotisations</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('Site_web/monagenda') ?>">Mon Agenda</a></li>
								<li><a href="#">Mon Compte</a></li>
								<li><a href="<?= bs() ?>users/Auth/logout"><i class="fa fa-key"></i> Déconnexion</a>
								</li>
							</ul>
						</li>
					<?php else :; ?>
						<li class="dropdown">
							<a href="#">Espace membre</a>
							<ul class="submenu">
								<li><a href="<?= bs() ?>users/auth/login">Se Connecter</a></li>
								<li><a href="<?= bs() ?>users/register">Demande d’inscription</a></li>
							</ul>
						</li>
					<?php endif;?>

				</ul>
			</div>
			<div class="nav-footer">
				<button><i class="fa fa-bars"></i></button>
			</div>
		</div>
	</div>
</nav>
