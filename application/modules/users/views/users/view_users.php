<!-- Main content start -->
<link rel="stylesheet" href="<?=assets_url('libs/custom_switch/component-custom-switch.min.css');?>">

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
      		<section class="panel">
      			<header class="panel-heading">
          			<i class="fa fa-users"></i> Liste des membre de la caraf
			          <a href="<?= bs('users/print_with_dompdf') ?>">
<!--						 <i class="fa fa-print" style="padding-left: 1%;color: black"></i>-->
					  </a>
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
      			</header>
      		<div class="panel-body">
      			<div class="table-responsive">
			      <table class="display table table-bordered table-striped table-responsive" id="dynamic-table">
			      	<thead>
			          	<tr>
<!--			                <th>User Name</th>-->
							<th class="hidden-sm">Nom</th>
							<th data-visible="false">Prenoms</th>
							<th>Email</th>
							<th>Numéro adhérent</th>
							<th>Groupe</th>
							<?php if ($this->session->userdata("group_id") == 1): ?>
                            <th>Status</th>
							<th>Action</th>
							<?php endif ?>
			          	</tr>
			     	 </thead>
			      <tbody>
					<?php foreach ($users as $user):?>
					<tr id="row_<?=$user->id;?>">
			            <td class="hidden-sm"> <?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?> </td>
                        <td> <?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?> </td>
                        <td> <?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?> </td>
                        <td> <?php echo htmlspecialchars($user->numadhe,ENT_QUOTES,'UTF-8') ;?> </td>
					    <?php if ($this->session->userdata("group_id") == 1): ?>
						<td>
							<?php foreach ($user->groups as $group):?>
								<?php echo anchor("users/User_groups/edit_group/".$group->id,htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'),'class="label label-inverse"') ;?><br />
							<?php endforeach?>
						</td>
						<td>
                            <div class="custom-switch custom-switch-xs pl-0">
                                <input class="custom-switch-input rub" id="annonce_r<?=$user->id;?>" type="checkbox" <?=($user->active == '1')?'checked':null;?>>
                                <label data-id="<?=$user->id;?>" class="custom-switch-btn toggle_user" for="annonce_r<?=$user->id;?>"></label>
                            </div>
						 </td>
						<td>
                            <div style="min-width: 100px" class="text-center">
                                <a href="<?=base_url('users/users/edit_user/'.$user->id);?>" class="btn-link edit_user m-r-5" data-id="<?=$user->id;?>" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fa fa-pencil"></i></a>
                                <a href="<?=base_url('users/users/member_profile/'.$user->id);?>" class="btn-link edit_user m-r-5 m-l-9" data-id="<?=$user->id;?>" data-toggle="tooltip" data-placement="top" title="Voir les details"><i class="fa fa-eye"></i></a>
                                <button class="btn-link delete_user" data-target="#row_<?=$user->id;?>" data-id="<?=$user->id;?>" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fa fa-trash text-danger"></i></button>
                            </div>
						</td>
						
					<?php endif ?>	

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

<!-- Main Content Ends -->
<script>
    $(document).on('click','.toggle_user',function(){
        const id = $(this).attr('data-id');
//        'GET SWITCH STATE BEFORE IT CHANGES'
        var switch_init_state = $('#'+$(this).attr('for')).prop('checked');
//        THE SWITCH FINIAL STATE IS THE OPPOSITE OF IT INITIAL STATE ( A CHANGE AS OCCURRED)
        var switch_final_state = !switch_init_state;

        const new_value = (switch_final_state === true)?'1':'0';
        $('#'+$(this).attr('input-target')+'').val(new_value);
        $.post(base_url+'users/users/do_action/toggle_user',{'user_id':id,'active':new_value},function () {
            show_message('success',((new_value === '1')?'Utilisateur activé':'Utilisateur désactivé'));
        });
    });

    $(document).on('click','.delete_user',{passive:true},function () {
        const id = $(this).attr('data-id');
        const tag = $($(this).attr('data-target'));

        function delete_user(){
            $.post(base_url+'users/users/do_action/delete',{'user_id':id},function () {
                remove_tag(tag);
                show_message('success','Utilisateur supprimé avec succès');
            });
        }

        sweetConfirm('Etre vous certains de vouloir supprimer cet utilisateur ?' , {yes : delete_user});
    });
</script>
