<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<link href="<?=base_url('public/stripe/featherlight.min.css')?>" type="text/css" rel="stylesheet" />
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Mosaddek">
	<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link rel="shortcut icon" href="<?= bs('public/img/favicon/favicon.png') ?>">

	<title>Caraf Formulaire d'adhésion</title>

	<!-- Bootstrap core CSS -->
	<link href="<?= bs() ?>public/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= bs() ?>public/css/bootstrap-reset.css" rel="stylesheet">
	<link href="<?= bs() ?>public/css/jquery-ui.css" rel="stylesheet">
	<link href="<?= bs() ?>public/libs/perfect-scrollbar/perfect_scroll_bar.css" rel="stylesheet" type="text/css"/>
	<link href="<?= bs() ?>public/libs/datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= bs() ?>public/libs/select2/select2.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?=assets_url('libs/css/custom2.css')?>">
	<!--external css-->
<!--	<link href="--><?//= bs() ?><!--public/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>-->
	<link href="<?=bs()?>public/css/fontawesome-all.css" rel="stylesheet" type="text/css" />

	<!-- Custom styles for this template -->
	<link href="<?= bs() ?>public/css/style.css" rel="stylesheet">
	<link href="<?= bs() ?>public/css/style-responsive.css" rel="stylesheet"/>
	<script>
		var router_class = '<?=$this->router->fetch_class();?>';
		var router_method = '<?=$this->router->fetch_method();?>';
	</script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <?php include_once('signup/style.php'); ?>

</head>

<body class="login-body">
	<div class="container mtop20">
		<div class="alert alert-info" role="alert">
			<h4 class="alert-heading">Aide !</h4>
			<p>
				<ol>
					<li>Pour une nouvelle adhésion.</li>
					<ol>
						<li>Veillez s’il vous plait cliquer sur le bouton nouvelle adhésion</li>
						<li>Remplissez le formulaire puis cliquer sur suivant.</li>
						<li>Si vous recevez un message de confirmation, effectuez le paiement pour activer votre compte dans le cas contraire, corriger toute erreur puis réessayer</li>
					</ol>


					<li>Pour achever une adhésion</li>
					<ol>
						<li>veillez s’il vous plait cliquer sur le bouton achever adhésion</li>
						<li>Renseigner l’email dont vous vous être servis pour l’adhésion dans le champs email et cliquer sur valider.</li>
						<li>Si vous recevez un message de confirmation, effectuez le paiement pour activer votre compte dans le cas contraire, faite une nouvelle adhésion.</li>
					</ol>
				</ol>
			</p>

			<hr>

			<div class="container text-center" style="max-width: 40em">
				<a href="<?=base_url();?>" class="btn btn-primary action-btn" data-action="new"><i class="fa fa-home"></i> Accueil</a>
				<button class="btn btn-primary action-btn" data-action="new">Nouvelle adhésion</button>
				<button class="btn btn-primary action-btn" data-action="continue">Achever mon adhésion</button>
			</div>

		</div>
	</div>

	<div class="container" id="new_adhesion_form" style="display: none">
		<form enctype="multipart/form-data" class="form-signin ajax-form" onsubmit="ajax_submit_form_callback = after_create" action="<?= bs()?>users/Register/sign_up" id='signup_form' method="post" style="max-width:100%">
           <div class="card">
               <div class="card-body">
                   <div class="row">
                       <div class="col-sm-12">

                           <div class="stepwizard">
                               <div class="stepwizard-row setup-panel">
                                   <div class="stepwizard-step">
                                       <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                       <p>Information <br> Personnels</p>
                                   </div>
                                   <div class="stepwizard-step">
                                       <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                       <p>Période <br>à payer</p>
                                   </div>
                                   <div class="stepwizard-step">
                                       <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                       <p>Confirmation <br>de mes données</p>
                                   </div>
                                   <div class="stepwizard-step">
                                       <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                       <p>Paiement</p>
                                   </div>
                               </div>
                           </div>

                           <div class="setup-content" id="step-1">
                               <h3 class="text-center">Information Personnels</h3>
                               <?php include_once('signup/step1.php'); ?>
                           </div>

                           <div class="setup-content" id="step-2">
                               <h3 class="text-center"> Période à payer</h3>
                               <?php include_once('signup/step2.php'); ?>
                           </div>

                           <div class="setup-content" id="step-3">
                               <h3 class="text-center">Confirmation de mes données</h3>
                               <?php include_once('signup/step3.php'); ?>
                           </div>

                           <div class="row setup-content" id="step-4">
                               <h3 class="text-center"> Paiement</h3>
                               <?php include_once('signup/step4.php'); ?>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
		</form>
	</div>

	<div id="continue_adhesion_form" style="display: none">
		<form id="search_member_form">
			<div class="container text-center stripe_form">
					<div class="text-left" style="max-width: 40em;">
						<label for="continue_adhesion_email">Email</label>
						<div class="form-group" style="position: relative">
							<input style="max-width: 80%;" required type="email" class="form-control" name="email" id="continue_adhesion_email">
							<button type="button" class="btn btn-primary search-member" style="position: absolute;top:0px; right : 10px;"><span style="visibility: hidden">|</span><i class="fa fa-search"></i><span style="visibility: hidden">|</span></button>
						</div>
					</div>
			</div>
		</form>
	</div>

</body>
</html>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= bs() ?>public/js/jquery.js"></script>
<script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('public/js/bootstrap-notify.js') ?>"></script>
<script src="<?= bs() ?>public/libs/js/jquery-ui.min.js"></script>
<script src="<?= bs() ?>public/libs/custom/dp.min.js"></script>
<script src="<?= bs() ?>public/libs/sweetalert2/dist/sweetalert2.all.js"></script>
<script src="<?= bs() ?>public/libs/custom/swal.js"></script>
<script src="<?= bs() ?>public/libs/select2/select2.min.js"></script>
<script src="<?= bs() ?>public/libs/datepicker/js/datepicker.js"></script>
<script src="<?= bs() ?>public/libs/datepicker/js/datepicker.fr.js"></script>
<script src="<?= bs() ?>public/libs/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

<script src="<?= bs() ?>public/libs/js/is_mobile.js"></script>
<script>

    $(function () {
        enable_tooltip();
    });
    
    $(document).on('click','.nextBtn',{passive:true},function () {
        $($(this).attr('data-current-step')).find('[required]').keyup();
    });

    $(document).on('click','#save_user_information',{passive:true},function () {
        $('#signup_form').submit();
    });

	var base_url = '<?=base_url();?>';
	var active_action = '';
	var advance_cotisation_month = 0;
	const montant_adhesion = Number('<?=$offre_adhesion->montant;?>');
	const montant_cotisation = Number('<?=$offre_cotisation->montant;?>');
	active_active_country_id = '';

	function initImageUpload(box) {
		let uploadField = box.querySelector('.image-upload');

		uploadField.addEventListener('change', getFile);

		function getFile(e){
			let file = e.currentTarget.files[0];
			checkType(file);
		}

		function previewImage(file){
			let thumb = box.querySelector('.js--image-preview'),
					reader = new FileReader();
			reader.onload = function() {
				thumb.style.backgroundImage = 'url(' + reader.result + ')';
			}
			reader.readAsDataURL(file);
			thumb.className += ' js--no-default';
		}

		function checkType(file){
			let imageType = /image.*/;
			if (!file.type.match(imageType)) {
				throw 'Datei ist kein Bild';
			} else if (!file){
				throw 'Kein Bild gewählt';
			} else {
				previewImage(file);
			}
		}

	}
	function init_image_boxes() {
		var boxes = document.querySelectorAll('.image-box');

		if (boxes.length > 0) {
			for (let i = 0; i < boxes.length; i++) {
				let box = boxes[i];
				//initDropEffect(box);
				initImageUpload(box);
			}
		}

	}
	function after_create() {
		setTimeout(function () {
            //location.href = base_url;
		}, 1000);
	}

	function go_to_step2(){
        const data = get_form_input('signup_form');
        $('.cr-first_name').html(data.first_name);
        $('.cr-last_name').html(data.last_name);
        $('.cr-sexe').html(((data.gender == '1')?'Homme' : 'Femme'));
        $('.cr-birth_date').html(data.birth_place);
        $('.cr-birth_place').html(data.birth_place);
        $('.cr-addresse').html(data.addresse);
        $('.cr-phone').html(data.phone);
        $('.cr-email').html(data.email);
    }
    
    $(document).on('change , blur','#advance_cotisation',{passive:true},function () {
            const value = $(this).val();
            if(value.length > 0){
                $('.nextBtn').prop('disabled' , false);
            }
            else{
                $('.nextBtn').prop('disabled' , true);
            }
    });

	$(document).ready(function () {
		init_image_boxes();
		//This script is to check email validity
		$("#email").change(function () {
			var email = $("#email").val();
			$.ajax({
				url: '<?= base_url("users/Register/check_email") ?>',
				method: 'POST',
				dataType: 'TEXT',
				data: {myemail: email},
				success: function (result) {
					var msg = result.split("::");

					if (msg[0] == "ok") {
						$("#user_mail").fadeIn();
						$("#user_mail").text("Cet email est déjà pris par un autre utilisateur");
					} else {
						$("#user_mail").fadeIn();
						$("#user_mail").html("<span class='glyphicon glyphicon-ok text-success'>succès</span>");
						$("#user_mail").delay(3000).fadeOut();
					}
				},
				error: function (result) {
					// body...
					console.log(result);
				}
			})
		});

		//This script is to check Username validity
		$("#username").change(function () {
			var username = $("#username").val();
			$.ajax({
				url: '<?= base_url("users/Register/check_username") ?>',
				method: 'POST',
				dataType: 'HTML',
				data: {u_name: username},
				success: function (result) {
					var msg = result.split("::");

					if (msg[0] == "ok") {
						$("#username_message").fadeIn();
						$("#username_message").html('Ce email existe déjà. Veillez essayer un autre');
					} else {
						$("#username_message").fadeIn();
						$("#username_message").html("<span class='glyphicon glyphicon-ok text-success'>Success</span>");
						$("#username_message").delay(3000).fadeOut();
					}
				},
				error: function (result) {
					// body...
					console.log(result);
				}
			})
		});

		//make sure to allow date from next month only
		var d = new Date();
		d.setDate(32);
		//d.setMonth(new Date().getMonth() + 1);
		var option = {
			minDate: d,
			range: true,
			inline: false,
			autoClose: true,
			language: 'fr',
		};
		$('.multiple-months').datepicker(option);
	});
	$(document).on('click','.action-btn',{passive:true},function () {
		const action = $(this).attr('data-action');
		active_action = action;
	        if(action === 'new'){
				$('#payment_form').hide('slow');
	        	$('#continue_adhesion_form').hide('slow');
	        	$('#new_adhesion_form').show('slow');
			}
	        else{
				$('#payment_form').hide('slow');
				$('#new_adhesion_form').hide('slow');
				$('#continue_adhesion_form').show('slow');
			}
	});
	$(document).on('click','.search-member',{passive:true},function () {
		if(validate_form('search_member_form','Veillez saisie une adresse email correcte')){
			show_loader();
	        const email = $('#continue_adhesion_email').val();
			$.post(base_url+'users/register/check_pending_adhesion',{email:email},function (response) {
				hide_loader();
				response = $.parseJSON(response);
				if(response.status === false){
					show_message('error',response.message,6000)
				}
				else{
					show_message('success',response.message , 6000);
					$('#continue_fname').val(response.data.first_name);
					$('#continue_lname').val(response.data.last_name);
					$('#continue_adhesion_form').hide('slow');
					$('#payment_form').show('slow');
				}

			});
		}
	});
	$(document).on('blur','#advance_cotisation',{passive:true},function () {
		const tag = $(this);
		const val = this.value;
		setTimeout(function(){
			if(val.length > 3){
				if(val.length >11){
					const from_tag 	= $('.datepicker--cell-month.-range-from-.-selected-');
					const to_tag   	= $('.datepicker--cell-month.-range-to-.-selected-');
					const from 	= $(from_tag).attr('data-month');
					const to 	= $(to_tag).attr('data-month');
					advance_cotisation_month = (Number(to) - Number(from)) + 1;
					const advance_amount = montant_cotisation * advance_cotisation_month;
					$('.advance-month').html(advance_cotisation_month+' mois')
					$('.advance-amount').html(advance_amount+' Euro');

				}
				else{
					advance_cotisation_month =  1;
					const advance_amount = montant_cotisation * advance_cotisation_month;
					$('.advance-month').html(advance_cotisation_month+' mois')
					$('.advance-amount').html(advance_amount+' Euro');
				}
			}
			else{
				advance_cotisation_month = 0
				$('.advance-month').html('')
				$('.advance-amount').html('');
			}


		},300);
	});

// <!-- Notification Script -->
	<?php
	$success = $this->session->flashdata('success');
	$error = $this->session->flashdata('error');
	if (!empty($success))
	{
	?>
	$.notify({

				icon: 'glyphicon glyphicon-info-sign',
				title: '<b>Notification</b><br>',
				message: '<?php echo $success ?>',
			},
			{


				type: "success success-noty col-sm-3",
				allow_dismiss: true,
				placement: {
					from: "top",
					align: "right"
				},
				offset: 20,
				spacing: 10,
				z_index: 1431,
				delay: 5000,
				timer: 1000,
				animate: {
					enter: 'animated bounceInDown',
					exit: 'animated bounceOutUp'
				}
			});
	<?php

	}
	if (!empty($error))
	{
	?>
	$.notify({

		icon: 'glyphicon glyphicon-info-sign',
		title: '<b>Notification</b><br>',
		message: '<?php echo $error ?>',
	}, {
		type: "danger noty-color col-sm-3",
		allow_dismiss: true,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1431,
		delay: 5000,
		timer: 1000,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		}
	});
	<?php
	}
	?>

	<?php
		if (!empty($message))
	{
	?>
	$.notify({

		icon: 'glyphicon glyphicon-info-sign',
		title: '<b>Notification</b><br>',
		message: '<?php echo $message ?>',
	}, {


		type: "danger noty-color col-sm-3",
		allow_dismiss: true,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1431,
		delay: 5000,
		timer: 1000,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		}
	});
	<?php
	}
	?>

	const pdf_file_holder = 'data:image/png;base64,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';
	$(document).on('change','#justi_de_dom_en_fr',{passive:true},function () {
		$('#jdef').removeClass('fa-circle'); $('#jdef').addClass('fa-check-circle');
		$('#jdef_holder').attr('style','background-image:url('+pdf_file_holder+')');
	});

	const search_tag = '#code_postaux_id';
	$(document).ready(function () {
		$(document).on('change','#country_id',{passive:true},function () {
			const value = $(this).val();

			$.post(base_url+'users/register/count_code_postaux/' , {'country_id':value} , function (response) {
				show_loader();
				response = $.parseJSON(response);
				if(response.status === true){
					$(search_tag).prop('disabled',false);
					$(search_tag).attr('placeholder','Rechercher votre ville');
				}
				else{
					$(search_tag).val('');
					$('#ville').val('');
					$('#fa').val('');
					$(search_tag).prop('disabled',true);
					$(search_tag).attr('placeholder' , 'Selectionnez un pays dabord');
				}

				hide_loader();
			});
			
			
			$("#code_postaux_id").autocomplete({
				source: base_url+'users/register/get_code_postau/'+value+'/',
				minLength: 1,
				autoFocus: false,
				delay: 250,
				response: function (event, ui) {
					console.log(ui);
					if ($(this).val().length >= 16 && ui.content[0].id == 0) {
						$(this).removeClass('ui-autocomplete-loading');
						$(this).removeClass('ui-autocomplete-loading');
					}
					else if (ui.content.length == 1 && ui.content[0].id != 0) {
						ui.item = ui.content[0];
						$(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
						$(this).autocomplete('close');
						$(this).removeClass('ui-autocomplete-loading');
					}
					else if (ui.content.length == 1 && ui.content[0].id == 0) {
						$(this).removeClass('ui-autocomplete-loading');
					}
				},
				select: function (event, ui) {
					event.preventDefault();
					if (ui.item.codepos !== '') {
						$(search_tag).val(ui.item.label);
						$('#codepos').val(ui.item.codepos);
						$('#cp').val(ui.item.codepos);
						$('#ville').val(ui.item.commune);
						$('#fa').val(ui.item.commune);
					}
				}
			});
		});
	});

	$(document).on('change','#association_id',{passive:true},function () {
	    const val = $(this).val();
	    $('.cas').hide();
	    if(val.length > 0){
	        $('.cas1').show('slow');
	        
	        $.post(base_url+'users/register/get_assoc/'+val+'' , {} , function (data) {
	           data = $.parseJSON(data);
	           const assoc = data.assoc;
	           if(data.status === true){
	               $('.assoc_name').html(''+assoc.village+' ('+assoc.sigle+')');
	               $('.assoc_presi').html(''+assoc.president+'');
               }
	        });
        }
        else{
	        $('.cas2').show('slow');
        }
	});

</script>

<script type="text/javascript">
    $(document).ready(function () {
        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            console.log($target);

            if (!$item.hasClass('disabled') && !has_attr($item , 'disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error is-invalid");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error is-invalid");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
    
</script>

<?php include_once('stripe_payment_form.php'); ?>


</body>
</html>
