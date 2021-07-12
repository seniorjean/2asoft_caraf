<link href="<?=base_url('public/stripe/featherlight.min.css')?>" type="text/css" rel="stylesheet" />

<style>
	.jour_adhesion{
		position: absolute;
		top: -6px;
		left: -7px;
	}
	.main-title {
		display: block;
		padding: 3px 12px;
		margin: 14px 0px 10px;
		font-size: 13px;
		line-height: 1.42857143;
		color: #333;
		word-break: break-all;
		word-wrap: break-word;
		background-color: #f5f5f5;
		border: 1px solid #ccc;
		border-radius: 4px;
	}
</style>
<?php
$months = [
		'janvier'=>'01',
		'fevrier'=>'02',
		'mars'=>'03',
		'avril'=>'04',
		'mai'=>'05',
		'juin'=>'06',
		'juillet'=>'07',
		'aout'=>'08',
		'septembre'=>'09',
		'octobre'=>'10',
		'novembre'=>'11',
		'decembre'=>'12',
];

//$adhesion_year = date('Y',strtotime($user_adhesion_date));
$adhesion_year = date('Y');

function french_month($date = ''){
	$date = str_replace(ucfirst('feb') , ucfirst('fev') , $date);
	$date = str_replace(ucfirst('apr') , ucfirst('avr') , $date);
	$date = str_replace(ucfirst('may') , ucfirst('mai') , $date);
	$date = str_replace(ucfirst('aug') , ucfirst('aou') , $date);
	return $date;
	}
?>
<section id="main-content">
	<section class="page-content m-t-50">
		<div class="col-sm-12" style="padding-left:3%;padding-right:2%">
			<div class="card">
				<div class="card-header card-header-primary">Légende</div>
				<div class="card-body">
					<i class="fas fa-user-circle"></i> : Adhésion <i class="m-r-5 m-l-5">|</i>
					<i class="fas fa-hand-holding-usd m-l-5"></i> : Cotisation <i class="m-r-5 m-l-5">|</i>
					<i class="fas fa-circle m-l-5 text-secondary"></i> : Périodes exclus <i class="m-r-5 m-l-5">|</i>
					<i class="fas fa-circle m-l-5 text-info"></i> : période d’adhésion <i class="m-r-5 m-l-5">|</i>
					<i class="fas fa-circle m-l-5 text-success"></i> : Cotisation payé <i class="m-r-5 m-l-5">|</i>
					<i class="fas fa-circle m-l-5 text-danger"></i> : Cotisation impayé
				</div>
			</div>
		</div>
		<div class="row" style="padding-left:3%;padding-right:2%">
			<div class="col-md-4">
				<div class="card">
				    <div class="card-header card-header-primary">Détails des Transactions de l’année 
							<select class="form-control pull-right get_transaction_details" style="width: auto !important;display: inline-block !important;">
								<?php for($i = $adhesion_year; $i<= date('Y'); $i++):?>
									<option value="<?=$i;?>" <?=($i == date('Y'))?'selected':'';?>><?=$i;?></option>
								<?php endfor;?>
							</select>
					</div>
				    <div class="card-body">
						<table class="table table-bordered">
							<tbody class="y_<?=$adhesion_year;?>">
							<?php $i = 1;  foreach($months as $month=>$month_index):?>
								<?php if($i == 0):;?><tr><?php endif;?>
								<td class="cell_<?=$i;?>">
									<div class="position-relative">
										<small class="jour_adhesion badge jour_adh_<?=$i;?>"></small>
										<button  class="btn btn-block cotisation_item month_<?=$i;?> <?=($i < (int)date('m',strtotime($user_adhesion_date)))?'btn-secondary':'btn-danger';?>" data-year="<?=$adhesion_year;?>" data-month="<?=$month_index;?>"><?=$month;?></button>
										<button class="btn-link text-black type_<?=$i;?>"></button>
										<small class="btn-link text-black coti_<?=$i;?>"></small>
									</div>


								</td>
								<?php if(($i%3) == 0 and $i != 0):;?></tr><?php endif;?>
								<?php $i++; endforeach; ?>
							</tbody>
						</table>
				    </div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="card">
				    <div class="card-header card-header-primary">Tableau des cotisations-adhésion</div>
				    <div class="card-body">
						<div class="panel-body center">
							<div class="table-responsive" style="padding-left:3%;padding-right:3%">
								<table class="table table-bordered table-hover text-center" style="width:100%" id="dynamic-table">
									<thead class="text-center">
									<tr>
										<th>N°</th>
										<th>date</th>
										<th class="hidden-sm">Libellé</th>
										<th data-visible="false">Montant</th>
										<th>Date début</th>
										<th>Date fin</th>
										<?php if ($this->session->userdata("group_id") == 1):?>
										<th>Status</th>
										<th>Edit</th>
										<th>Delete</th>
										<?php endif; ?>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($cotis as $user): ?>
										<tr>
											<td><span class="badge badge-primary"><?php echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?></span></td>
											<td class="hidden-sm"><span><?=french_month(date('d M Y H:i', strtotime($user->date_stat)));?></span></td>
											<td><span class="label badge-danger"><?=$user->libelleoffre;?></span></td>
											<td><span class="label badge-primary"><?=$user->montantoffre;?></span></td>
											<td><span class="label badge-success"><?=french_month(date('d M Y H:i', strtotime($user->datedebut)));?></span></td>
											<td><span class="label badge-warning"><?=french_month(date('d M Y H:i', strtotime($user->datefin)));?></span></td>
											<?php if ($this->session->userdata("group_id") == 1): ?>
												<td>
													<?php echo ($user->active) ? anchor("users/auth/deactivate/" . $user->id, lang('index_active_link'), array('class' => 'btn btn-primary btn-sm')) : anchor("users/activate/" . $user->id, lang('index_inactive_link'), array('class' => 'btn btn-default btn-sm')); ?>
												</td>
												<td>
													<a class="btn btn-info btn-sm" href="<?= base_url('users/edit_user') ?>/<?= $user->id ?>"><i class="fa fa-pencil"></i></a>
												</td>
												<td>
													<a href="<?= base_url('users/delete_user') ?>/<?= $user->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
												</td>

											<?php endif ?>

										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</section>
</section>

<div class="m-t-90"></div>

<!-- Main Content Ends -->
<script type="text/javascript" language="javascript" src="<?= bs() ?>public/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

<script>
	var init_payment_process;

	$(document).ready(function () {
		$('#dynamic-table').DataTable({
			"searching": true ,// false to disable search (or any other option)
			"scrollX": true,
			"scrollY": false,
			"language":
					{
						"sProcessing":     "Traitement en cours...",
						"sSearch":         "<i class='fas fa-search'></i>",
						"sLengthMenu":     "<i class='mdi mdi-eye'></i> _MENU_",
						"sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
						"sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
						"sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
						"sInfoPostFix":    "",
						"sLoadingRecords": "Chargement en cours...",
						"sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
						"sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
						"oPaginate": {
							"sFirst":      "Premier",
							"sPrevious":   "Pr&eacute;c&eacute;dent",
							"sNext":       "Suivant",
							"sLast":       "Dernier"
						},
						"oAria": {
							"sSortAscending":  ": activer pour trier la colonne par ordre croissant",
							"sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
						},
						"select": {
							"rows": {
								_: "%d lignes séléctionnées",
								0: "Aucune ligne séléctionnée",
								1: "1 ligne séléctionnée"
							}
						}
					}

		});

		<?php foreach($cotis as $coti):?>
		    <?php if($coti->idoffre == '1'):;?>
				var jour = Number('<?=date('d',strtotime($coti->date_stat));?>');
				var mois = Number('<?=date('m',strtotime($coti->date_stat));?>');
				var anne = Number('<?=date('Y',strtotime($coti->date_stat));?>');

				$('.y_'+anne+' .jour_adh_'+mois+'').html(''+jour+'');
				$('.y_'+anne+' .type_'+mois+'').html('<i class="fas fa-user-circle"></i>');
				$('.y_'+anne+' .month_'+mois+'').removeClass('btn-danger');
				$('.y_'+anne+' .month_'+mois+'').addClass('btn-info');
				$('.y_'+anne+' .coti_'+mois+'').html('10€');
		    <?php endif;?>


		<?php if($coti->idoffre == '2'):;?>
				var anner 		= "<?=date('Y',strtotime($coti->date_stat));?>";
				var mois_debut 	= Number('<?=date('m',strtotime($coti->datedebut));?>');
				var mois_fin	= Number('<?= date('m',strtotime($coti->datefin));?>');
				var nombre_mois	= Number('<?=$coti->nombre_mois;?>');
				for(var i = mois_debut; i<=mois_fin; i++){
					$('.y_'+anner+' .month_'+i+'').removeClass('btn-danger');
					$('.y_'+anner+' .month_'+i+'').addClass('btn-success');
					$('.y_'+anner+' .type_'+i+'').html('<i class="fas fa-hand-holding-usd"></i>');
					$('.y_'+anner+' .coti_'+i+'').html('5€');

					console.log('<?=date('d m Y',strtotime($coti->datedebut));?>')
				}
		    <?php endif;?>
		<?php endforeach;?>

		setTimeout(function(){
			const unpaid_cotisation = $('.cotisation_item.btn-danger');
			$(unpaid_cotisation).attr('data-toggle','tooltip');
			$(unpaid_cotisation).attr('data-placement','top');
			$(unpaid_cotisation).attr('title','Payer pour ce mois');
			$(unpaid_cotisation).addClass('paythis_month');

			setTimeout(function(){
			   enable_tooltip();
			},200);
		},300);
	});

	$(document).on('click','.paythis_month',{passive:true},function () {
	    const year = $(this).attr('data-year');
	    const month = $(this).attr('data-month');
	    const day = '01';
	    sweetConfirm('Vous vous apprêter à affecter le paiement de votre cotisation. Cliquer sur oui pour continue .',{yes:make_payment});

	    function make_payment(){
	    	init_payment_process('01' ,month , year);
		}
	});
</script>

<?php include_once('stripe_payment_form.php'); ?>


