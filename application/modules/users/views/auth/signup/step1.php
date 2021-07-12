<?php /** Created by PhpStorm. User: JOHN Date: 5/16/2021 Time: 12:35 PM */?>

<div class="col-xs-12" style="margin-top:25px">
    <div class="login-wrap">


        <div class="row">
            <div class="col-sm-12 cas cas1" style="display: none;">
                <div class="col-xs-11">
                    <p class="text-left" style="text-align: left; color: black">
                        <b> Je suis membre d’une association Akyé reconnu par la CARAF – les frais d’adhésions a la CARAF sont offert. Une notification sera adressée au président de cette association   pour confirmer votre appartenance. Un délai maximum de 48 heures est a prévoir pour le traitement de votre demande d’inscription. Les cotisations sont de 5euro par mois</b>
                    </p>
                </div>
            </div>

            <div class="col-sm-12 cas cas2" style="margin-top:25px; display: none;">
                <div class="col-xs-11">
                    <p style="text-align: left; color: black" class="text-left"><b>Je n’appartiens a aucune association Akyé reconnu par la CARAF, je paye les frais d’adhésion de 30euro (payable qu’une seule fois). Ma demande d’inscription est active immédiatement. Les cotisations sont de 5€ par mois.
                        </b>
                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4"><input data-toggle="tooltip" data-placement="top" title="Votre Nom" type="text" id="first_name" name="first_name" class="form-control" placeholder="Nom" required></div>
            <div class="col-sm-4"><input data-toggle="tooltip" data-placement="top" title="Votre Prénoms" type="text" id="last_name" name="last_name" class="form-control" placeholder="Prenoms" required></div>
            <div class="col-sm-4">
                <select name="gender" id="gender" class="form-control" required data-toggle="tooltip" data-placement="top" title="Votre Sexe">
                    <option value="">Sexe</option>
                    <option value="1">Homme</option>
                    <option value="2">Femme</option>
                </select>
            </div>
        </div>

        <div class="row" style="margin-bottom:15px">
            <div class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Votre Association">
                <select name="association_id" id="association_id" class="select2">
                    <option value=" ">Selectionné une Association</option>
                    <option value="">Aucune</option>
                    <?php foreach($assocs as $country):?>
                        <option value="<?=$country->id;?>"><?=$country->village;?> <?php if(!empty($country->sigle)):;?>(<?=$country->sigle;?>)<?php endif;?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Votre Pays">
                <select name="country_id" id="country_id" class="select2" required>
                    <option value="">Selectionné un pays</option>
                    <option value="">Aucun</option>
                    <?php foreach($counties as $country):?>
                        <option value="<?=$country->country_id;?>"><?=$country->country_name_fr;?> <?php if(!empty($country->country_code)):;?>(<?=$country->country_code;?>)<?php endif;?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="col-sm-4">
                <input name="code_postaux_id" type="text" disabled class="form-control" id="code_postaux_id" aria-label="Rechercher" placeholder="Selectionnez un pays dabord" data-toggle="tooltip" data-placement="top" title="Votre Ville">
                <input type="hidden" name="codepos" id="codepos">
            </div>
        </div>

        <div class="row" style="margin-bottom:15px">
            <div class="col-sm-6"><input data-toggle="tooltip" data-placement="top" title="Votre Adresse Email" type="email" id="username" name="email" class="form-control" placeholder="Email" required><small class="feedback" id="username_message" style="color: red;font-weight: bold;"> </small></div>
            <div class="col-sm-6"><input data-toggle="tooltip" data-placement="top" title="Votre Numéro de téléphone" type="number" maxlength="10" id="phone" name="phone" class="form-control" placeholder="Téléphone" required></div>
        </div>


        <div class="row" style="margin-bottom:15px">
            <div class="col-sm-6"><input data-toggle="tooltip" data-placement="top" title="Votre Date de Naissance" type="text" id="bd" name="birth_date" data-date-format="dd mm yyyy" class="form-control datepicker-here" data-language='fr' autocomplete="off" placeholder="Date de naissance" required></div>
            <div class="col-sm-6"><input data-toggle="tooltip" data-placement="top" title="Votre Lieu de Naissance" type="text" id="bp" name="birth_place" class="form-control" placeholder="Lieu de naissance" required></div>
        </div>

        <div class="row">
            <div class="col-sm-6"><input data-toggle="tooltip" data-placement="top" title="Votre adresse" type="text" id="addr" name="addresse" class="form-control" placeholder="Adresse" required></div>
            <div class="col-sm-6"><input data-toggle="tooltip" data-placement="top" title="Votre Code Postal" type="text" readonly="readonly" id="cp" name="code_postal" class="form-control" placeholder="Code Postal"></div>
        </div>

        <div class="row">
            <div class="col-sm-4"><input type="hidden" id="ville" name="ville" class="form-control" placeholder="Vile" required></div>
            <div class="col-sm-4"><input type="hidden" id="fa" name="fait_a" autocomplete="off" class="form-control" placeholder="Fait à" required></div>
            <div class="col-sm-4"><input type="hidden" id="fl" name="fait_le" value="<?=date('m/d/Y' , time());?>"  class="form-control datepicker-here" lang="fr" autocomplete="off" placeholder="Fait le" required></div>
        </div>

        <div class="row">
            <div class="col-sm-6"><input min="8" data-toggle="tooltip" data-placement="top" title="Votre Mot de Passe" type="password" id="password" name="password" minlength="8" class="form-control" placeholder="Mot de passe " required></div>
            <div class="col-sm-6"><input min="8" data-toggle="tooltip" data-placement="top" title="Confirmé votre Mot de Passe" type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirmation de mot de passe" required></div>
            <input type="hidden" name="new_adhesion" value="new_adhesion">
        </div>

        <hr>

        <div class="row m-t-30">
            <div class="col-sm-12">
                <p style="text-align: left; color: black">
                    <b>Je déclare par la présente, souhaite devenir membre de l’association La CARAF. A ce titre, je déclare reconnaître l’objet de l’association, et en avoir accepté les statuts ainsi que le règlement intérieur qui sont mis à ma disposition, <span style="color: red;">dès la validation de mon inscription. Je dispose d’un délai de rétractation de 14 jours pour changer d’avis, et demander l’annulation de mon adhésion.</span> J’ai pris bonne note des droits et devoirs de l’association, et accepte de verser ma cotisation due pour l’année en cours. </b>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-warning">
                <b>Je fournis pour mon inscription les documents demandés suivants :</b>
            </div>
            <div class="col-sm-3">
                <div class="col-sm-12 custom-file-upload">
                    <label for="photocopie_piece_id" class="btn btn-block">
                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                            <div class="image-box" style="width: 250px;">
                                <div class="js--image-preview" style="background-image: url(<?=bs('public/siteweb/img/team/user.png');?>); background-color: #F5F5F5;"></div>
                                <div class="upload-options">
                                    <i class="mdi mdi-camera"></i>
                                    <i class="far fa-circle" id="ppid"></i>
                                    Photocopie d’une pièce d’identité
                                    <input required onchange="$('#ppid').removeClass('fa-circle'); $('#ppid').addClass('fa-check-circle')" id="photocopie_piece_id" style="visibility:hidden;" type="file" class="image-upload" name="ppid" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="col-sm-12 custom-file-upload">
                    <label for="justi_de_dom_en_fr" class="btn btn-block">
                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                            <div class="image-box" style="width: 250px;">
                                <div class="js--image-preview" id="jdef_holder" style="background-image: url(<?=bs('public/yafeca/assets/img/main-slider-overlay.png');?>); background-color: #F5F5F5;"></div>
                                <div class="upload-options">
                                    <i class="mdi mdi-camera"></i>
                                    <i class="far fa-circle" id="jdef"></i>
                                    Justificatif de domicile en France.
                                    <input required id="justi_de_dom_en_fr" style="visibility:hidden;" type="file" class="image-upload" name="jdef" accept=".pdf">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

            </div>
        </div>


        <button class="btn btn-primary nextBtn btn-lg pull-right" data-current-step="#step-1" type="button" onclick="go_to_step2()">Suivant</button>


        <div class="col-sm-12 text-center" style="display: none">
            <a href="<?= base_url(); ?>" class="btn btn-lg btn-login"
               style="background-color: #41cac0; box-shadow: 0 4px #37afa6;" type="button"><i
                    class="fa fa-home"></i></a>
            <button class="btn btn-lg btn-login" style="width: 80%;" type="submit">Suivant</button>
        </div>

        <div class="registration"> Déjà Membre ? <a class="" href="<?= bs('users') ?>"> Se Connecter </a> </div>
    </div>
</div>
