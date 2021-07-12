<link rel="stylesheet" href="<?=assets_url('libs/custom_switch/component-custom-switch.min.css');?>">
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <!--progress bar start-->
                <section class="">
                    <header class="panel-heading">
                        <i class="fas far fa-images"></i> Annonces /
                        <button class="btn-link ajouter_annonce"> <i class="mdi mdi-plus"></i> Ajouter</button>
                    </header>
                    <div class="panel-body">





                        <div class="table-responsive">
                            <table id="dynamic-table" class="table table-striped table-bordered text-center" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="text-center">Titre</th>
                                    <th class="text-center">Sous Titre</th>
                                    <th class="text-center">Visibilité</th>
                                    <th class="text-center">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($annonces as $annonce):?>
                                   <tr id="row_<?=$annonce->id;?>">
                                       <td><?=$annonce->title;?></td>
                                       <td><?=limit_string($annonce->sub_title, 40);?></td>
                                       <td>
                                            <div class="custom-switch custom-switch-xs pl-0">
                                                <input class="custom-switch-input rub" id="annonce_r<?=$annonce->id;?>" type="checkbox" <?=($annonce->visibility == '1')?'checked':null;?>>
                                                <label data-id="<?=$annonce->id;?>" class="custom-switch-btn change_visibility" for="annonce_r<?=$annonce->id;?>"></label>
                                            </div>
                                        </td>
                                       <td>
                                          <div style="min-width: 100px" class="text-center">
                                              <button class="btn-link delete_annonce" data-target="#row_<?=$annonce->id;?>" data-id="<?=$annonce->id;?>" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="fa fa-trash text-danger"></i></button>
                                              <button class="btn-link edit_annonce m-r-5" data-id="<?=$annonce->id;?>" data-title="<?=$annonce->title;?>" data-sub_title="<?=$annonce->sub_title;?>" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fa fa-pencil"></i></button>
                                              <a href="<?=base_url('slide_builder/edit_annonce_text/'.$annonce->id);?>" class="btn-link edit_slide" data-id="<?=$annonce->id;?>" data-toggle="tooltip" data-placement="top" title="Modifier Contenue"><i class="fas fa-list"></i></a>

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
    const new_annonce_form = '<form action="'+base_url+'slide_builder/annonces/add" class="ajax-form" onsubmit="ajax_submit_form_callback = after_create">'+
        '    <div class="row">'+
        '        <div class="col-sm-4">'+
        '            <div class="form-group">'+
        '                <label for="title">Titre</label>'+
        '                <input type="text" name="title" id="title" class="form-control" required>'+
        '            </div>'+
        '        </div>'+
        '        <div class="col-sm-8">'+
        '            <div class="form-group">'+
        '                <label for="sub_title">Sous Titre</label>'+
        '                <input type="text" name="sub_title" id="sub_title" class="form-control" required>'+
        '            </div>'+
        '        </div>' +
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
        sweetModal({html:new_annonce_form});
    });

    function after_create(){
        closeModal();
       setTimeout(function(){
           refresh();
       },900);
    }

</script>