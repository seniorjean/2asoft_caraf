<link rel="stylesheet" href="<?=assets_url('libs/custom_switch/component-custom-switch.min.css');?>">
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <!--progress bar start-->
                <section class="">
                    <header class="panel-heading">
                        <i class="fas far fa-images"></i> Slides /
                        <a href="<?=base_url('slide_builder');?>" class="btn-link"> <i class="mdi mdi-plus"></i> Ajouter</a>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered text-center" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="text-center">Images</th>
                                    <th class="text-center">Model</th>
                                    <th class="text-center">category</th>
                                    <th class="text-center">Titre</th>
                                    <th class="text-center">Rubrique</th>
                                    <th class="text-center">Visibilité</th>
                                    <th class="text-center">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($slides as $slide):?>
                                   <tr id="row_<?=$slide->id;?>">
                                       <td>
                                           <img class="preview" src="<?=assets_url('siteweb/img/slides/'.$slide->i1_img);?>" width="40px" height="40xp" alt="">
                                          <?php if(!empty($slide->i2_img)):;?>
                                              <img class="preview" src="<?=assets_url('siteweb/img/slides/'.$slide->i2_img);?>" width="40px" height="40xp" alt="">
                                          <?php endif;?>
                                           <?php if(!empty($slide->i3_img)):;?>
                                              <img class="preview" src="<?=assets_url('siteweb/img/slides/'.$slide->i3_img);?>" width="40px" height="40xp" alt="">
                                          <?php endif;?>
                                       </td>
                                       <td><?=$slide->model;?></td>
                                       <td><?=$slide->i1_category;?> , <?=$slide->i2_category;?> , <?=$slide->i3_category;?></td>
                                       <td><?=limit_string($slide->i1_title,10);?> , <?=limit_string(alternate_value($slide->i2_title),10);?> , <?=limit_string(alternate_value($slide->i3_title),10);?></td>
                                        <td>
                                            <div class="custom-switch custom-switch-xs pl-0">
                                                <input class="custom-switch-input rub" id="slide_r<?=$slide->id;?>" type="checkbox" <?=($slide->rubrique == '1')?'checked':null;?>>
                                                <label data-id="<?=$slide->id;?>" class="custom-switch-btn change_rubrique" for="slide_r<?=$slide->id;?>"></label>
                                            </div>
                                        </td>

                                       <td>
                                            <div class="custom-switch custom-switch-xs pl-0">
                                                <input class="custom-switch-input" id="slide_<?=$slide->id;?>" type="checkbox" <?=($slide->visible == '1')?'checked':null;?>>
                                                <label data-id="<?=$slide->id;?>" class="custom-switch-btn change_visibility" for="slide_<?=$slide->id;?>"></label>
                                            </div>
                                        </td>

                                       <td>
                                          <div style="min-width: 100px" class="text-center">
                                              <button class="btn-link delete_slide" data-target="#row_<?=$slide->id;?>" data-id="<?=$slide->id;?>" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fa fa-trash"></i></button>
                                              <a href="<?=base_url('slide_builder/edit/'.$slide->id);?>d" class="btn-link edit_slide m-r-5" data-id="<?=$slide->id;?>" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fa fa-pencil"></i></a>
                                              <a href="<?=base_url('slide_builder/edit_text/'.$slide->id);?>d" class="btn-link edit_slide" data-id="<?=$slide->id;?>" data-toggle="tooltip" data-placement="top" title="Modifier text"><i class="fas fa-list"></i></a>

                                          </div>
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
    $(document).on('click','.create_gallery',{passive:true},function () {
        const html = '<div class="panel">'+
            '    <div class="panel-body">'+
            '        <form id="create_gallery_form" action="'+base_url+'site_config/gallery/create_gallery" enctype="multipart/form-data" class="ajax-form" onsubmit="ajax_submit_form_callback = after_create">'+
            '            <div class="row">'+
            '                <div class="col-sm-6">'+
            '                    <div class="form-group">'+
            '                        <label for="gallery_title" class="bmd-label-floating">Title</label>'+
            '                        <input type="text" name="title" class="form-control" id="gallery_title" required>'+
            '                    </div>'+
            '                </div>'+
            '                <div class="col-sm-6">'+
            '                    <div class="form-group">'+
            '                        <label for="gallery_description" class="bmd-label-floating">Description</label>'+
            '                        <input type="text" name="description" class="form-control" id="gallery_description" required>'+
            '                    </div>'+
            '                </div>'+
            '            </div>'+
            '            <div class="row">'+
            '                <div class="col-sm-12 text-center">'+
            '                    <div class="custom-file-upload text-center">'+
            '                        <div class="wrapper-image-preview" style="margin-left: -6px;">'+
            '                            <div class="image-box dis-inline-block" style="width: 250px;">'+
            '                                <div class="js--image-preview bg-size-contain" style="background-image: url('+unknow_image+'); background-color: #F5F5F5;"></div>'+
            '                                <div class="upload-options">'+
            '                                    <label for="cover_picture" class="btn btn-block"> <i class="mdi mdi-camera"></i> Cover Picture </label>'+
            '                                    <input id="cover_picture" style="visibility:hidden;" type="file" class="image-upload" name="cover_picture" accept="image/*">'+
            '                                </div>'+
            '                            </div>'+
            '                        </div>'+
            '                    </div>' +
            '                     <button class="btn btn-dark" type="submit"><i class="mdi mdi-plus"></i> Create</button>  '+
            '                </div>'+
            '            </div>'+
            '        </form>'+
            '    </div>'+
            '</div>';

        sweetDialog(html , {title:'Create a Gallery'});
        setTimeout(function(){
            init_image_boxes();
        },300);
    });

    function after_create(){
        refresh();
    }

    $(document).on('click','.delete_slide',{passive:true},function () {
        const id = $(this).attr('data-id');
        const tag = $($(this).attr('data-target'));

        function delete_gallery(){
            $.post(base_url+'slide_builder/delete',{'slide_id':id},function () {
                remove_tag(tag);
                show_message('success','Slide successfully deleted');
            });
        }

        sweetConfirm('Are you sure ?' , {yes : delete_gallery});
    });

    $(document).on('click','.change_visibility',function(){
        const id = $(this).attr('data-id');
//        'GET SWITCH STATE BEFORE IT CHANGES'
        var switch_init_state = $('#'+$(this).attr('for')).prop('checked');
//        THE SWITCH FINIAL STATE IS THE OPPOSITE OF IT INITIAL STATE ( A CHANGE AS OCCURRED)
        var switch_final_state = !switch_init_state;

        const new_value = (switch_final_state === true)?'1':'0';
        $('#'+$(this).attr('input-target')+'').val(new_value);
        $.post(base_url+'slide_builder/change_visibility',{'slide_id':id,'visible':new_value},function () {
           show_message('success',((new_value === '1')?'Visibilité activé':'Visibilité désactivé'));
        });
    });

    $(document).on('click','.change_rubrique',function(){
        const id = $(this).attr('data-id');
        const inp = $('#'+$(this).attr('for'));
//        'GET SWITCH STATE BEFORE IT CHANGES'
        var switch_init_state = $(inp).prop('checked');
//        THE SWITCH FINIAL STATE IS THE OPPOSITE OF IT INITIAL STATE ( A CHANGE AS OCCURRED)
        var switch_final_state = !switch_init_state;

        const new_value = (switch_final_state === true)?'1':'0';
        $('#'+$(this).attr('input-target')+'').val(new_value);
        $.post(base_url+'slide_builder/change_rubrique',{'slide_id':id,'rubrique':new_value},function () {
           show_message('success',((new_value === '1')?'Rubrique activé':'Rubrique désactivé'));
           $('.rub').prop('checked',false);
            $(inp).prop('checked',true);
        });
    });

</script>