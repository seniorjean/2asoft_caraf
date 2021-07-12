<?php /** Created by PhpStorm. User: JOHN Date: 5/16/2021 Time: 1:05 PM */?>
<div class="container" style="max-width: 51em;">
    <div class="card">
        <div class="card-body">
            <div class="card-title card-header">
                <div class="alert alert-info" role="alert">
                    Frais d’adhésions + cotisation du mois actuel + cotisation en avance
                </div>
            </div>
            <hr>
            <div id="stripe_form">
                <div class="">
                    <div class="col-sm-12 bg-primary" style="padding:12px"><i class=" fas fa-lock fs-18 text-white"></i> Plateforme de paiement 100% sécurisé</div>
                    <div class="col-sm-12">
                        <img class="" src="http://i76.imgup.net/accepted_c22e0.png">
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <label for="card_holder">Propriétaire de la carte</label>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" name="card_holder" data-title="Propriétaire de la carte" id="stripe_card_holder" required class="form-control string-only">
                            <input type="hidden" name="first_name" id="continue_fname">
                            <input type="hidden" name="last_name" id="continue_lname">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group m-t-30">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="StripePaymentButton" style="font-family: poppins;">
                                <i class="fas fa-check"></i> Payé
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

