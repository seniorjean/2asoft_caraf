<link href="<?=base_url('public/stripe/featherlight.min.css')?>" type="text/css" rel="stylesheet" />

<div class="container">
	<div style="margin: 10%; margin-top: 10%;">
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default credit-card-box">
				<div class="panel-heading display-table">
					<div class="row text-center display-tr">
						<div class="col-sm-12">
							<div class="col-sm-12 bg-primary" style="padding:12px"><i class=" fas fa-lock fs-18 text-white"></i> Plateforme de paiement 100% sécurisé</div>
							<div class="col-sm-12">
								<img class="" src="http://i76.imgup.net/accepted_c22e0.png">
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<form id="stripe_form">
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-sm-12">
								<label for="card_holder">Montant</label>
								<div class="form-group">
									<input type="text" value="5" name="montant" data-title="montant" id="montant" required class="form-control num-only">
								</div>
							</div>

							<div class="col-sm-12">
								<label for="card_holder">Propriétaire de la carte</label>
								<div class="form-group">
									<input type="text" name="card_holder" data-title="Propriétaire de la carte" id="stripe_card_holder" required class="form-control string-only">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group m-t-30">
									<button style="font-family: poppins;" id="StripePaymentButton" class="btn btn-primary btn-lg btn-block" type="button">Payer (<span id="montant-ind">5</span>€)</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
	$(document).on('keyup','.num-only',function () {
		var input_value = $(this).val();
		const input_name = $(this).attr('name');


		for(var i = 0 ; i<input_value.length ; i++)
			if((isNaN(input_value[i])) || input_value[i] == ' ')
			{
				$('#error_'+input_name+'_msg').remove();
				$(this).removeClass('is-valid');
				$(this).addClass('is-invalid');

				const warning_message = '<small id="error_'+input_name+'_msg" class="text-danger">Veillez saisie que des chiffres <br></small>';
				$(this).after(warning_message);
				break;
			}
			else
			{
				$('#error_'+input_name+'_msg').remove();
				$(this).removeClass('is-invalid');
				$(this).addClass('is-valid');
			}
	});
	$(document).on('keyup blur','#montant',{passive:true},function () {
		const tag = $(this);
		const value = $(this).val();
		setTimeout(function(){
			if(!$(this).hasClass('is-invalid')){
				$('#montant-ind').html(''+value+'')
			}
		},300);
	});
</script>

<?php include_once('stripe_payment_form.php'); ?>
