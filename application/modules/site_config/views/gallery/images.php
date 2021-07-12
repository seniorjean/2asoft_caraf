<link rel="stylesheet" href="<?php echo assets_url('libs/upload_file_preview/css/main.css') ;?>">
<link rel="stylesheet" href="<?php echo assets_url('libs/hes_gallery/css/hes-style.css') ;?>">
<link rel="stylesheet" href="<?php echo assets_url('libs/hes_gallery/css/hes-gallery.css') ;?>">
<style>
    .popup{ position:absolute; top: -8px; left: -20px; width: 40px; height: 40px; background-color: white; border-radius: 35em; text-align: center; border: solid thin #00a65ac7; } .popup .popup-content , .popup2 .popup-content, .popup3 .popup-content , .popup4 .popup-content, .popup5 .popup-content{ position: relative; top: 24%; color: #00a65a; } .popup-container:hover .popup{ display: block!important;} .popup{ display: none; }
    .popup2{ position:absolute; top: 39px; left: -20px; width: 40px; height: 40px; background-color: white; border-radius: 35em; text-align: center; border: solid thin #00a65ac7; } .popup-container:hover .popup2{ display: block!important;} .popup2{ display: none; }
    .popup3{ position:absolute; top: 90px; left: -20px; width: 40px; height: 40px; background-color: white; border-radius: 35em; text-align: center; border: solid thin #00a65ac7; } .popup-container:hover .popup3{ display: block!important;} .popup3{ display: none; }
    .popup4{ position:absolute; top: 142px; left: -20px; width: 40px; height: 40px; background-color: white; border-radius: 35em; text-align: center; border: solid thin #00a65ac7; } .popup-container:hover .popup4{ display: block!important;} .popup4{ display: none; }
    .popup5{ position:absolute; top: 190px; left: -20px; width: 40px; height: 40px; background-color: white; border-radius: 35em; text-align: center; border: solid thin #00a65ac7; } .popup-container:hover .popup5{ display: block!important;} .popup5{ display: none; }

    .hes-gallery{<?=($mobile==TRUE)?'padding: 4px':'';?>}

    .custom-file-input ~ .custom-file-label {
        border-color: #597ea2;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
        background-color: white;
    }

    label.custom-file-label {
        position: relative;
        top: -49px;
        width: 100%;
        padding-left: 20px;
    }

    label.custom-file-label:hover{cursor: pointer;}

    .custom-file-label::after {
        padding-top: 12px !important;
        position: absolute;
        top: 0;
        width:90px;
        text-align: center;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        line-height: 1.5;
        color: #7b8a8b;
        content: "Browse";
        background-color: #ecf0f1;
        border-left: 1px solid #ced4da;
        border-radius: 0 0.25rem 0.25rem 0;
    }

    .custom-file-label{
        height: 46px;
        padding-top: 12px;
    }

    .custom-file-container__image-preview{
        background-color: transparent; !important;
        background-image:none !important;
    }

    .col-sm-12{
    <?=($mobile==TRUE)?'padding:0px !important;':'';?>
    }

    .visible{
        border-bottom:solid 5px #04afd9;
    }

    .popup-container{
        border-radius: 5px;
    }

    .active-don-img{
        background-color:#f39c12 !important;
        color:white !important;
    }
</style>


<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <!--progress bar start-->
                <section class="panel">
                    <header class="panel-heading">
                        <i class="fa fa-dashboard"></i> Gallery
                    </header>
                    <div class="panel-body">
                        <div style="overflow: auto;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> <span class="badge badge-primary"><?php echo $total_item ;?></span> images</a></li>
                                <li class="breadcrumb-item m-t-5"><a href="<?=base_url('site_config/gallery');?>" class="btn-link btn-flat btn-sm" <?=($mobile==TRUE)?'data-toggle="tooltip" data-placement="top" title="go to gallery"':'';?>><span class="mdi mdi-keyboard-backspace"></span> <?=($mobile==FALSE)?'Galleries':'';?></a></li>
                                <li class="breadcrumb-item"><button class="btn-link btn-flat btn-sm" <?=($mobile==TRUE)?'data-toggle="tooltip" data-placement="top" title="Add images to gallery"':'';?> onclick="upload.selectImage()"><span class="fas fa-plus"></span> <?=($mobile==FALSE)?'Add images to gallery':'';?></button></li>
                                <li class="breadcrumb-item"><button class="btn-link btn-flat btn-sm" <?=($mobile==TRUE)?'data-toggle="tooltip" data-placement="top" title="Empty gallery"':'';?> onclick="empty_gallery()"><span class="fas fa-trash"></span> <?=($mobile==FALSE)?'Empty gallery':'';?></button></li>
                            </ol>
                        </div>



                        <div class="<?=($mobile==FALSE)?'col-sm-12':'';?>">

                            <form action="<?php echo base_url("site_config/gallery/load_multiple_file");?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="galleries_id" value="<?=$galleries_id;?>">
                                <div class="demo-upload-container no-padding" role=main>
                                    <div class=custom-file-container data-upload-id=gallery_files>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="custom-file-container__custom-file" style="height: 52px;">
                                                    <input name="user_file[]" id="inputGroupFile02" type="file" multiple="multiple" required="required" class="custom-file-input form-control ignore_error" onchange="$('#preview_area').show('slow')" style="height: 100%;">
                                                    <label class="custom-file-label" for="inputGroupFile02">Select images</label>
                                                    <input type=hidden name="MAX_FILE_SIZE" value="185760"><span class="custom-file-container__custom-file__custom-file-control"></span>
                                                    <input type="file" id="file_obj" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="col-md-3 no-padding" style="margin-top:8px">
                                                <div class="btn-group">
                                                    <button class="btn btn-dark" type="submit" data-toggle="tooltip" data-placement="top" title="upload"><span class="fas fa-upload"></span></button>
                                                    <a href=javascript:void(0) class="custom-file-container__image-clear btn btn-danger" data-toggle="tooltip" data-placement="top" title="clear"><i class="fas fa-times"></i></a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-sm-12" style="position: relative">
                                                <div class="custom-file-container__image-preview" id="preview_area" style="display: none;width:100%; max-height: 267px;"></div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>

                            <div class="col-lg-12">
                                <hr class="bg-secondary">
                            </div>

                            <div class="col-md-12 <?=($mobile==TRUE)?'p-l-0 p-r-0':'';?>">
                                <div class="hes-gallery" data-wrap="true" data-img-count="false">
                                    <?php $tem_id = 0; foreach($gallery_items as $gallery_item):?>
                                        <div id="img_<?=$gallery_item->g_item_id;?>" style="position: relative" class="popup-container bg-white">
                                            <img src="<?php echo base_url('uploads/gallery/'.$gallery_item->picture_name)?>" height="160px" alt="image<?php echo $tem_id;?>" data-subtext="<?=$gallery_item->posted_at;?>" data-alt="gallery image">
                                            <span class="popup">
                                <a class="delete_gallery_item_btn popup-content" href="##" data-target="#img_<?=$gallery_item->g_item_id;?>" data-image_name="<?=$gallery_item->picture_name;?>" data-image_id="<?=$gallery_item->g_item_id?>"><i class="fas fa-trash"></i></a>
                            </span>
                                        </div>
                                        <?php $tem_id++; endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

<!--HES GALLERY JS FILES-->
<script src="<?php echo assets_url('libs/hes_gallery/js/hes-gallery.js') ;?>"></script>
<!--FILE UPLOAD WITH PREVIEW JS FILES-->
<script src="<?php echo assets_url('libs/upload_file_preview/js/vendor.js') ;?>"></script>
<script src="<?php echo assets_url('libs/upload_file_preview/js/file-upload-with-preview.min.js') ;?>"></script>
<script> //simulate click that will submit the form and load the image

    //INITIALIZE HES-GALLERY
    HesGallery.setOptions({
        disableScrolling: false,
        hostedStyles: false,
        animations: true,
        minResolution: 1000,
        showImageCount: true,
        wrapAround: true
    });

    //INITIALIZE FILE-UPLOAD-PREVIEW
    var upload = new FileUploadWithPreview(
        'gallery_files',
        {
            showDeleteButtonOnImages: true,
            text: {chooseFile: 'Choose your files',
                browse: 'Browse'
            }
        });

    //hide the image preview pane when the number of image in the preview pane is equal to 0
    $(document).click(function(){if(upload.selectedFilesCount == 0){$('#preview_area').hide('slow')}});
    function click_load_image(){
        $(document).ready(
            function(){
                $('#load_image').click();
            }
        );
    };

    function empty_gallery () {

        sweetConfirm('This will delete all images in the gallery . Are you sure want to continue ?',{yes:empty_gallery});

        function empty_gallery(){
            if(prompt('Please enter super Admin password') === '124875369'){
                location.href = base_url+'site_config/gallery/delete_all_images_now';
            }
            else{
                sweetAlertTwo('Invalid Password',{type:'danger',confirm_btn_text:'Close'})
            }
        }

    };

    $(document).on('click','.delete_gallery_item_btn',{passive:true},function () {
        const img_name = $(this).attr('data-image_name');
        const img_id = $(this).attr('data-image_id');
        const img_tag = $($(this).attr('data-target'));

        function delete_image(){
            $.post(base_url+'site_config/gallery/del_gallery_item',{'gallery_item_id':img_id , 'picture_name':img_name},function () {
                $(img_tag).hide('slow');
                setTimeout(function () {
                    $(img_tag).remove();
                    show_message('success', 'Image successfully deleted !');
                },600);
            });
        }

        sweetConfirm("Are you sure ?", {yes : delete_image});

    });
</script>
