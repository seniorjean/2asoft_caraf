<?php /** Created by PhpStorm. User: JOHN Date: 5/16/2021 Time: 12:35 PM */?>

<div class="col-md-12">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-header card-title">Option supplémentaire de paiement des cotisations</h4>
                    <hr>
                    <div class="col-sm-12">
                        <div class="alert alert-success" role="alert">
                            <p>Vous avez la possibilité de payer vos cotisations en avance.</p>
                            <p>Sélectionnez le(s) mois pour lesquels vous souhaiter effectuer le paiement en avance …</p>
                        </div>

                        <div class="alert alert-danger" role="alert">
                            <p><b>NB:</b> Pour un seul mois, faite une sélection unique.</p>
                            <p>Pour plusieurs mois, sélectionnez le mois de début et le mois de fin.</p>
                        </div>

                        <div class="alert alert-warning" role="alert">
                            <p><b>NB:</b> Les frais d'adhésion (30£) sont offert si vous êtes déjà</p>
                            <p>membre d'une association reconnu par la CARAF</p>
                            <p>Lacotisation de 5£ du mois est obligatoire, pour valider votre inscription.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-header card-title">Choisissez une période de paiement</h4>
                    <hr>
                    <div class="col-sm-12">
                        <input required type="text" id="advance_cotisation" data-date-format="dd/mm/yyyy" name="birth_date" class="form-control multiple-months" data-multiple-dates-separator=" - " data-min-view="months" data-view="months" autocomplete="off" placeholder="Paiement en avance" data-autoclose="true" readonly style="background-color: transparent;">

                        <hr>
                        <p><b>Nombre de Mois payer en avance : </b> <span class=" badge badge-secondary advance-month"></span></p>
                        <p><b>Montant des cotisations : </b> <span class="badge badge-secondary advance-amount"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary nextBtn btn-lg pull-right" data-current-step="#step-2" type="button">Suivant</button>
</div>