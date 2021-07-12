<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <!--progress bar start-->
                <section class="">
                    <header class="panel-heading">
                        <i class="fa fa-dashboard"></i> Galleries
                    </header>
                    <div class="panel-body">
                        <div style="overflow: auto;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item m-t-5"><a href="#"> <span class="badge badge-primary"><?php echo $total_item ;?></span> Galleries</a></li>
                                <li class="breadcrumb-item"><button class="btn-link btn-flat btn-sm create_gallery" <?=($mobile==TRUE)?'data-toggle="tooltip" data-placement="top" title="Create a gallery"':'';?>><span class="fas fa-plus"></span> <?=($mobile==FALSE)?'Create a gallery':'';?></button></li>
                            </ol>
                        </div>

                        <div class="row">
                            <?php foreach($galleries as $gallery):
                                $images     = $this->db->limit(5)->get_where('gallery',['galleries_id'=>$gallery->id])->result();
                                $all_images = $this->db->get_where('gallery',['galleries_id'=>$gallery->id])->result();
                                $number_of_image = count($all_images);
                                ?>
                                <div class="col-sm-4" id="g_tag_<?=$gallery->id;?>">
                                    <div class="panel">
                                        <div class="panel-header panel-header-secondary text-center text-info m-t-5">
                                            <span class="fs-20"> <?=$gallery->title;?></span>
                                            <button class="btn-link pull-right delete_gallery" data-target="#g_tag_<?=$gallery->id;?>" data-id="<?=$gallery->id;?>" data-toggle="tooltip" data-placement="top" title="delete Gallery"><i class="fa fa-trash fs-15 text-danger"></i></button>
                                            <button class="btn-link pull-right edit_gallery" data-target="#g_tag_<?=$gallery->id;?>" data-id="<?=$gallery->id;?>" data-toggle="tooltip" data-placement="top" title="Edit Gallery"><i class="fa fa-pencil fs-15 "></i></button>
                                        </div>
                                        <div class="panel-body">
                                            <div class="">
                                                <a class="dis-block text-center align-items-end bg-img-hero gradient-overlay-half-dark-v1 transition-3d-hover height-450 rounded-pseudo" href="<?=base_url('site_config/gallery/gallery/'.$gallery->id);?>">
                                                    <img src="<?=base_url('uploads/gallery/'.$gallery->cover_picture);?>" alt="" height="165px" style="max-width: 100%">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div>
                                                <?php foreach($images as $image):?>
                                                    <div class="dis-inline-block m-r-10 m-b-10">
                                                        <a class="d-flex align-items-end bg-img-hero gradient-overlay-half-dark-v1 transition-3d-hover height-450 rounded-pseudo" href="<?=base_url('site_config/gallery/gallery/'.$gallery->id);?>">
                                                            <img src="<?=base_url('uploads/gallery/'.$image->picture_name);?>" width="50px" height="50px">
                                                        </a>
                                                    </div>
                                                <?php endforeach;?>
                                            </div>

                                            <div>
                                                <article class="w-100 text-center p-6">
                                                    <div class="mt-4" style="margin-top:0px !important;">
                                                        <label class="d-block">
                                                            <?php if($number_of_image > 5):;?>
                                                                <i class="mdi mdi-plus"></i><b><?=$number_of_image - 5;?> more</b>
                                                            <?php elseif ($number_of_image>0 && $number_of_image <=5) :; ?>
                                                                <b><?=$number_of_image;?> images</b>
                                                            <?php else :; ?>
                                                                no image found
                                                            <?php endif;?>
                                                        </label>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
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

    $(document).on('click','.delete_gallery',{passive:true},function () {
        const id = $(this).attr('data-id');
        const tag = $($(this).attr('data-target'));

        function delete_gallery(){
            $.post(base_url+'site_config/gallery/delete_gallery',{'id':id},function () {
                remove_tag(tag);
                show_message('success','Gallery successfully deleted');
            });
        }

        sweetConfirm('Are you sure ?' , {yes : delete_gallery});
    });
    
    $(document).on('click','.edit_gallery',{passive:true},function () {
        const id = $(this).attr('data-id');

        $.post(base_url+'site_config/gallery/edit_gallery',{id:id},function (response) {
            response = $.parseJSON(response);
            
            const html = '<div class="panel">'+
                '    <div class="panel-body">'+
                '        <form id="edit_gallery_form" action="'+base_url+'site_config/gallery/edit_gallery" enctype="multipart/form-data" class="ajax-form" onsubmit="ajax_submit_form_callback = after_create">'+
                '            <div class="row">'+
                '                <div class="col-sm-6">'+
                '                    <div class="form-group">'+
                '                        <label for="gallery_title" class="bmd-label-floating">Title</label>'+
                '                        <input type="text" name="title" value="'+response.title+'" class="form-control" id="gallery_title" required>'+
                '                    </div>'+
                '                </div>'+
                '                <div class="col-sm-6">'+
                '                    <div class="form-group">'+
                '                        <label for="gallery_description" class="bmd-label-floating">Description</label>'+
                '                        <input type="text" name="description" value="'+response.description+'" class="form-control" id="gallery_description" required>'+
                '                    </div>'+
                '                </div>'+
                '            </div>' +
                '<input type="hidden" name="gallery_id" value="'+response.id+'">'+
                '<input type="hidden" name="cover_picture_name" value="'+response.cover_picture+'">'+
                '            <div class="row">'+
                '                <div class="col-sm-12 text-center">'+
                '                    <div class="custom-file-upload text-center">'+
                '                        <div class="wrapper-image-preview" style="margin-left: -6px;">'+
                '                            <div class="image-box dis-inline-block" style="width: 250px;">'+
                '                                <div class="js--image-preview bg-size-contain" style="background-image: url('+base_url+'uploads/gallery/'+response.cover_picture+'); background-color: #F5F5F5;"></div>'+
                '                                <div class="upload-options">'+
                '                                    <label for="cover_picture" class="btn btn-block"> <i class="mdi mdi-camera"></i> Cover Picture </label>'+
                '                                    <input id="cover_picture" style="visibility:hidden;" type="file" class="image-upload" name="cover_picture" accept="image/*">'+
                '                                </div>'+
                '                            </div>'+
                '                        </div>'+
                '                    </div>' +
                '                     <button class="btn btn-dark" type="submit"><i class="fa fa-pencil"></i> Edit</button>  '+
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
    });
</script>