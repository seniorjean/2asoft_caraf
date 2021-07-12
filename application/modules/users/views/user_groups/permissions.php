<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
          <div class="col-lg-12">
              <!--progress bar start-->
              <section class="panel">
                  <header class="panel-heading">
                      <i class="fa fa-plus-circle"></i> Add Permissions
                  </header>
                  <div class="panel-body">
	                <div class="row">
						<div class="col-md-6">
						  <form class="form-inline" action="<?= base_url('users/User_groups/permissions') ?>" method="post" role="form">
							<div class="form-group">
								<label> <font color="#8bc34a">Permission Name </font>&nbsp;</label>
								<input type="text" name="perm" class="form-control" placeholder="Permission Name">
							</div>
							<button type="submit" class="btn btn-default add"><i class="fa fa-plus"></i> Add</button>
							<br>
										<!-- <span id="err_msg" style="color: red;margin-left:22%"></span> -->
						  </form>
						</div>									
					</div>
					<div class="row" style="padding-top: 3%">	
						<div class="col-md-12">
							<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Perm Id</th>
										<th>Permission Name</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>

								<?php foreach ($perm as $key => $value): ?>

									<tr>
										<td><?php echo $value->perm_id ?></td>
										<td><?php echo $value->perm_name ?></td>
										<td>
											<button class="btn btn-info btn-sm update" edit="<?= $value->perm_id ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit</button>
										</td>
										<td>
											<button class="btn btn-danger btn-sm" id_del="<?= $value->perm_id ?>" id="delete"><i class="fa fa-trash"></i> Delete</button>
										</td>
									</tr>
								</tbody>

								<?php endforeach ?>

							</table>
						</div>
					</div>
                  </div>
              </section>
          </div>
      </div>
      <!-- page end-->
  </section>
</section>

<!-- Main Content Ends -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Permission</h4>
      </div>
      <div class="modal-body">
        <form class="form-inline" action="<?= base_url('users/User_groups/update_perm') ?>" method="post" role="form">
			<div class="form-group">
				<label> <font color="#8bc34a">Permission Name </font>&nbsp;</label>
				<input type="text" name="perm" id="perm" class="form-control" placeholder="Permission Name">
				<input type="hidden" id="edit" name="edit">
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	
	</form>

    </div>
  </div>
</div>


<script>
$(document).ready(function() 
{
	//This script will delete record
    $("body").on('click', '#delete', function(event) 
    {
    	event.preventDefault();
    	/* Act on the event */
        var del = $(this).attr('id_del');

        //ajax request
    	$.ajax({

    		url : '<?=bs('users/User_groups/delete_perm') ?>/'+del,
    		success: function(result) 
    		{
    			location.reload(); 
            }
    	});
    });

    $("body").on('click','.update',function(event) 
    {
        event.preventDefault();
        // body...
        var id = $(this).attr('edit');


        $.ajax({

            url : "<?=bs('users/User_groups/get_perm') ?>/"+id,

            success :function (success) 
            {
                var obj = $.parseJSON(success);
                $("#perm").val(obj.perm_name);
                $("#edit").val(obj.perm_id);
            }

        })
    })
});
</script>