<link rel="stylesheet" href="<?=assets_url('libs/custom_switch/component-custom-switch.min.css');?>">
<section id="main-content">
	<section class="wrapper">
		<!-- page start-->
		<div class="row">
			<div class="col-lg-12">
				<!--progress bar start-->
				<section class="">
					<header class="panel-heading">
						<i class="fas far fa-images"></i> Association /
						<button class="btn-link ajouter_annonce"> <i class="mdi mdi-plus"></i> Ajouter</button>
					</header>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="dynamic-table" class="table table-striped table-bordered text-center" cellspacing="0">
								<thead>
									<tr>
										<th class="text-center">Sigle</th>
										<th class="text-center">Village</th>
										<th class="text-center">President</th>
										<th class="text-center">Secretaire</th>
										<th class="text-center">Telephone</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($associations as $assoc):?>
									<tr>
										<td><?=$assoc->sigle;?></td>
										<td><?=$assoc->village_name;?></td>
										<td><?=$assoc->president;?></td>
										<td><?=$assoc->secretaire;?></td>
										<td><?=$assoc->telephone;?></td>
										<td>
											<button class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fa fa-pencil"></i></button>
											<button class="btn btn-link" data-toggle="tooltip" data-placement="top" title="supprimer"><i class="fa fa-trash"></i></button>
										</td>
									</tr>
								<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- page end-->
	</section>
</section>

<script>
	const add_form = '<form action="'+base_url+'assoc/associations/add" class="ajax-form" onsubmit="ajax_submit_form_callback = after_create">'+
		'    <div class="row">'+
		'        <div class="col-sm-4">'+
		'            <div class="form-group">'+
		'                <label for="sigle">Sigle</label>'+
		'                <input type="text" name="sigle" id="sigle" class="form-control" required>'+
		'            </div>'+
		'        </div>'+
		'        <div class="col-sm-4">'+
		'            <div class="form-group">'+
		'                <label for="president_name">Nom du president</label>'+
		'                <input type="text" name="president" id="president_name" class="form-control" required>'+
		'            </div>'+
		'        </div>' +
		'		<div class="col-sm-4">'+
		'            <div class="form-group">'+
		'                <label for="secretary_name">Nom du secretaire</label>'+
		'                <input type="text" name="secretaire" id="secretary_name" class="form-control" required>'+
		'            </div>'+
		'        </div>' +

		'		<div class="col-sm-6">'+
		'            <div class="form-group">'+
		'                <label for="telephone">Telephone</label>'+
		'                <input type="text" name="telephone" id="telephone" class="form-control" required>'+
		'            </div>'+
		'        </div>' +

		'<div class="col-sm-6">' +
		'<div class="form-group">' +
		'<label for="village_id">Village</label>' +
		'<select class="form-control" name="village_id" id="village_id" required>' +
		'<?php foreach($villages as $vlg):?> <option value="<?=$vlg->id;?>"><?=$vlg->name;?></option>   <?php endforeach;?>' +
		'</select>'+
		'</div>' +
		'</div>'+

		'       <div class="col-sm-12"><div class="text-right"><button type="submit" class="btn btn-primary">Ajouter</button></div></div>'+
		'    </div>'+
		'</form>';
	$(document).on('click','.edit_annonce',{passive:true},function () {
		const id = $(this).attr('data-id');
		const title = $(this).attr('data-title');
		const sub_title = $(this).attr('data-sub_title');

		html = '<form action="'+base_url+'slide_builder/annonces/edit" class="ajax-form" onsubmit="ajax_submit_form_callback = after_create">'+
			'    <div class="row">'+
			'        <div class="col-sm-4">'+
			'            <div class="form-group">'+
			'                <label for="title">Titre</label>'+
			'                <input type="text" name="title" value="'+title+'" id="title" class="form-control" required>'+
			'            </div>'+
			'        </div>'+
			'        <div class="col-sm-8">'+
			'            <div class="form-group">'+
			'                <label for="sub_title">Sous Titre</label>'+
			'                <input type="text" name="sub_title" value="'+sub_title+'" id="sub_title" class="form-control" required>' +
			'                <input type="hidden" name="annonce_id" value="'+id+'"> '+
			'            </div>'+
			'        </div>' +
			'       <div class="col-sm-12"><div class="text-right"><button type="submit" class="btn btn-success">Modifier</button></div></div>'+
			'    </div>'+
			'</form>';

		sweetModal({html:html});
	});

	$(document).on('click','.delete_annonce',{passive:true},function () {
		const id = $(this).attr('data-id');
		const tag = $($(this).attr('data-target'));

		function delete_annonce(){
			$.post(base_url+'slide_builder/annonces/delete',{'annonce_id':id},function () {
				remove_tag(tag);
				show_message('success','Annonce supprimé avec succès');
			});
		}

		sweetConfirm('Are you sure ?' , {yes : delete_annonce});
	});

	$(document).on('click','.change_visibility',function(){
		const id = $(this).attr('data-id');
//        'GET SWITCH STATE BEFORE IT CHANGES'
		var switch_init_state = $('#'+$(this).attr('for')).prop('checked');
//        THE SWITCH FINIAL STATE IS THE OPPOSITE OF IT INITIAL STATE ( A CHANGE AS OCCURRED)
		var switch_final_state = !switch_init_state;

		const new_value = (switch_final_state === true)?'1':'0';
		$('#'+$(this).attr('input-target')+'').val(new_value);
		$.post(base_url+'slide_builder/annonces/change_visibility',{'annonce_id':id,'visibility':new_value},function () {
			show_message('success',((new_value === '1')?'Visibilité activé':'Visibilité désactivé'));
		});
	});

	$(document).on('click','.ajouter_annonce',{passive:true},function () {
		sweetModal({html:add_form});
	});

	function after_create(){
		closeModal();
		setTimeout(function(){
			refresh();
		},900);
	}

</script>
