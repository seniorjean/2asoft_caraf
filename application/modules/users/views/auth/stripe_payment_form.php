<script src="<?=base_url('public/stripe/featherlight.min.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="https://js.stripe.com/v2/"></script>

<script>

	var base_url = '<?=base_url();?>';

	$(document).ready(function () {

		var stripePublishableKey = '<?=$stripe_key?>';
		var amount = 0;
		var currency = 'eur';

		Stripe.setPublishableKey(stripePublishableKey);

		// Create Checkout's handler
		var handler = StripeCheckout.configure({
			key: stripePublishableKey,
			locale: 'auto',
			allowRememberMe: false,
			token: function(token) {
				stripe_token = token;
				// use Checkout's card token to create a card source
				Stripe.source.create({
					type: 'card',
					token: token.id
				}, stripeCardResponseHandler);

				displayProcessing();
			}
		});


		$(document).on('click','#StripePaymentButton',{passive:true},function (e) {
			function init_payment(montant){
				// Open Checkout with further options:
				amount = Number(montant) * 100;
				handler.open({
					name: 'CARAF',
					description: 'Confédération des Associations des Régions Akyé en France',
					amount: amount,
					currency: currency
				});
				e.preventDefault();
			}

			if(active_action === 'new'){
				if(validate_form('signup_form')){
					if(validate_form('stripe_form')){
						const montant = (montant_cotisation * advance_cotisation_month) + montant_adhesion + montant_cotisation;
						init_payment(montant);
					}
				}
				else{
					$('.stripe_form').hide('slow');
					$('#registration_form').show('slow');
				}
			}

			else if(active_action === 'continue'){
				const montant = (montant_cotisation * advance_cotisation_month) + montant_adhesion + montant_cotisation;
				init_payment(montant);
			}
		});


		// Close Checkout on page navigation:
		$(window).on('popstate', function() {
			handler.close();
		});

		function displayProcessing() {
			show_loader();
		}

		function displayResult(resultText) {
			hide_loader();
			show_message('info',resultText , 10000);
		}

		function stripeCardResponseHandler(status, response) {
			stripe_response = response;
			if (response.error) {
				var message = response.error.message;
				displayResult("Unexpected card source creation response status: " + status + ". Error: " + message);
				//show_error_message('Une erreur est survenue lors du paiement veillez réessayer');
				$('#registerButton').prop('disabled',true);
				return;
			}

			// check if the card supports 3DS
			if (response.card.three_d_secure == 'not_supported') {
				displayResult("This card does not support 3D Secure.");
				return;
			}

			// since we're going to use an iframe in this example, the
			// return URL will only be displayed briefly before the iframe
			// is closed. Set it to a static page on your site that says
			// something like "Please wait while your transaction is processed"
			var returnURL = "https://shop.example.com/static_page";

			// create the 3DS source from the card source
			Stripe.source.create({
				type: 'three_d_secure',
				amount: amount,
				currency: "eur",
				three_d_secure: {
					card: response.id
				},
				redirect: {
					return_url: returnURL
				}
			}, stripe3DSecureResponseHandler);
		}

		function stripe3DSecureResponseHandler(status, response) {
			stripe_response = response;
			if (response.error) {
				var message = response.error.message;
				displayResult('Statut de réponse de création de source 3DS inattendu:' + status + ". Error: " + message);
				show_error_message('Une erreur est survenue lors du paiement veillez réessayer');
				return;
			}

			// check the 3DS source's status
			if (response.status == 'chargeable') {
				displayResult("Cette carte ne prend pas en charge l'authentification 3D Secure, mais la responsabilité sera transférée à l'émetteur de la carte.");
				collect_data(stripe_token , stripe_response);
				return;
			} else if (response.status != 'pending') {
				displayResult("Statut 3D Secure inattendu:" + response.status);
				show_error_message('Une erreur est survenue lors du paiement veillez réessayer');
				//make sure registration button remains disabled
				$('#registerButton').prop('disabled',true);
				return;
			}

			// start polling the source (to detect the change from pending
			// to either chargeable or failed)
			Stripe.source.poll(
				response.id,
				response.client_secret,
				stripe3DSStatusChangedHandler
			);

			// open the redirect URL in an iframe
			// (in this example we're using Featherlight for convenience,
			// but this is of course not a requirement)
			$.featherlight({
				iframe: response.redirect.url,
				iframeWidth: '100%',
				iframeHeight: '100%'
			});

			console.log(response);
		}

		function stripe3DSStatusChangedHandler(status, source) {
			stripe_source_result = source;
			if (source.status == 'chargeable') {

				$.featherlight.current().close();
				var msg = '3D Secure authentication succeeded: ' + source.id + '. In a real app you would send this source ID to your backend to create the charge.';
				displayResult(msg);
				collect_data(stripe_token , stripe_response);

			}
			else if (source.status == 'failed') {
				$.featherlight.current().close();
				var msg = 'La vérification a échoué.';
				displayResult(msg);
			}
			else if (source.status != 'pending') {
				$.featherlight.current().close();
				var msg = "Unexpected 3D Secure status: " + source.status;
				//show_error_message('Une erreur est survenue lors du paiement veillez réessayer');
				displayResult(msg);
			}
		}

		function collect_data(stripe_token , stripe_response){
			var tok = stripe_token;

			//$('#exp_month').val(stripe_response.three_d_secure.exp_month);
			//$('#exp_year').val(stripe_response.three_d_secure.exp_year);


			if(active_action === 'new'){
				form_data = get_form_input('signup_form');
				form_data.card_holder = $('#stripe_card_holder').val();
			}
			else if(active_action === 'continue'){
				form_data = get_form_input('stripe_form');
				form_data.email = $('#continue_adhesion_email').val();
				//form_data.card_holder = $('#continue_stripe_card_holder').val();
			}

			var collected_data = {};

			collected_data.source           = stripe_response.id;
			collected_data.amount           = stripe_response.amount;
			collected_data.currency         = stripe_response.currency;
			collected_data.card_holder      = form_data.card_holder;
			collected_data.first_name		= form_data.first_name;
			collected_data.last_name		= form_data.last_name;
			collected_data.email			= form_data.email;
			collected_data.advance_cotisation_month_count = advance_cotisation_month;
			collected_data.advance_cotisation_month_string = $('#advance_cotisation').val();

			show_loader();

			$.post(base_url+'users/register/stripe_payment_process',collected_data,function () {
				hide_loader();
				Swal.fire('Info...','Votre paiement a été effectué avec succès.' ,'success')

				setTimeout(function () {
					location.href = '<?=base_url()?>';
				},10000);

			}).fail(function () {
				hide_loader();
				show_error_message('Désoler impossible d’effectuer le paiement avec cette carte. Veillez réessayer avec une autre, merci.');
			});
		}
	})

</script>
