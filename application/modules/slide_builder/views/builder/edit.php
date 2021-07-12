<style>
    .m-item label{display: block !important; padding: 0px !important; margin: 0px !important; border: none !important;}
    .model1 .m-item .js--image-preview , .model2 .m-item .js--image-preview{border: none !important;background-color: white !important;}
    .m-item .wrapper-image-preview{margin: 0px !important;}
    .model1 .m-item , .model2 .m-item , .model3 .m-item.i1 , .model1 .i1 .js--image-preview  , .model2 .i1 .js--image-preview , .model2 .i2 .js--image-preview ,.model3 .i1 .js--image-preview {height: 400px}

    .model1{text-align: center}
    .model1 .image-box , .model2 .image-box , .model3 .image-box{position: absolute}
    .model1 .i1{width: 100%; position: relative; }
    .model1 .i2{position relative;display: none}
    .model1 .i3{position relative;display: none}
    .model1 .custom-file-upload{
        position: relative;
        width: 100%;
        text-align: center;
        height: 100%;
    }

    .model2{text-align: center}
    .model2 .i1{width: 49%; display: inline-block; vertical-align: middle; position: relative; }
    .model2 .two-item-container{width: 49%; display: inline-block; vertical-align: middle; position relative;}
    .model2 .i3{position relative;display: none}
    .model2 .custom-file-upload{
        position: relative;
        width: 100%;
        text-align: center;
        height: 100%;
    }

    .model3{text-align: center}
    .model3 .i1{width: 49%; display: inline-block; vertical-align: middle; position: relative; }
    .model3 .two-item-container{width: 49%; display: inline-block; vertical-align: middle; position: relative;}
    .model3 .two-item-container .i2{position: relative; height: calc(400px / 2) !important; margin-bottom: 2px;}
    .model3 .two-item-container .i3{position: relative; height: calc(400px / 2) !important;}
    .model3 .two-item-container .image-box{height: calc(400px / 2) !important;}
    .model3 .two-item-container .js--image-preview{position: absolute !important;height: 100% !important;}
    .model3 .custom-file-upload{
        position: relative;
        width: 100%;
        text-align: center;
        height: 100%;
    }
    .has-text{
        -webkit-appearance:button;
        position: absolute;
        height: 34px;
        z-index: 2;
        border: none;
    }

    .bottom-mask{
        background: linear-gradient(0deg, #000000 52%, #00000096 118%);
        width: 100%;
        position: absolute;
        height: 25%;
        z-index: 1;
        bottom: 0px;
    }

    .has-text.i-category{
        left: 0px;
        top: 22px;
        background: orange;
        color: black;
        font-family: poppins;
        text-transform: uppercase;
        padding-left:10px;
    }



    .has-text.i-content::placeholder{color: white;}
    .has-text.i-content{
        -webkit-appearance: menulist;
        bottom: 42px;
        left: 25px;
        width: 484px;
        margin: 0px;
        height: 70px;
        font-family:poppins;
        font-size: large;
        background-color: transparent;
        color: white;
    }
    .model3 .i2 .has-text.i-content ,  .model3 .i3 .has-text.i-content{
        height: 40px !important;
        bottom:15px !important;
    }

    .model3.type_b .i1{float:right !important;}


</style>

<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <form enctype="multipart/form-data" action="<?=base_url('slide_builder/edit');?>" class="ajax-form" id="slide_builder_form" onsubmit="ajax_submit_form_callback = after_update();">
                    <!--progress bar start-->
                    <section class="panel">
                        <header class="panel-heading">
                            <i class="fa far fa-newspaper"></i> Slide Editor
                        </header>
                            <div class="panel-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4>Sélectionner un model</h4>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <button type="button" class="btn btn-secondary slide_model <?=($slide->model == 'model1')?'bg-primary':null;?>" data-model="model1">
                                                                    <img src="<?=assets_url('siteweb/img/slides/model1.png');?>" width="100%" height="70px" alt="">
                                                                </button>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <button type="button" class="btn btn-secondary slide_model <?=($slide->model == 'model2')?'bg-primary':null;?>" data-model="model2">
                                                                    <img src="<?=assets_url('siteweb/img/slides/model2.png');?>" width="100%" height="70px" alt="">
                                                                </button>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <button type="button" class="btn btn-secondary slide_model <?=($slide->model == 'model3')?'bg-primary':null;?>" data-model="model3">
                                                                    <img src="<?=assets_url('siteweb/img/slides/model3.png');?>" width="100%" height="70px" alt="">
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button type="button" class="btn btn-secondary slide_model <?=($slide->model == 'model3b')?'bg-primary':null;?>" data-model="model3 type_b">
                                                                    <img src="<?=assets_url('siteweb/img/slides/model3b.png');?>" width="100%" height="70px" alt="">
                                                                </button>
                                                            </div>
                                                            <input type="hidden" name="model" value="<?=$slide->model;?>" id="model"  required>
                                                            <input type="hidden" name="slide_id" value="<?=$slide->id;?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card body-->
                                        </div> <!-- end card -->
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section id="step2" class="panel">
                        <div class="panel-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4>Sélectionner des images</h4>
                                            <div id="model-container" class="<?=$slide->model;?>">
                                                <div class="i1 m-item">
                                                    <div class="custom-file-upload">
                                                        <label for="slider_image_1" class="btn">
                                                            <select name="i1_category" class="has-text i-category" style="left: 0px;" required>
                                                                <option <?=($slide->i1_category);?> value="">Catégorie</option>
                                                                <option <?=($slide->i1_category == 'Education')?'selected' : null;?> value="Education">Education</option>
                                                                <option <?=($slide->i1_category == 'Alimentation')?'selected' : null;?> value="Alimentation">Alimentation</option>
                                                                <option <?=($slide->i1_category == 'Nécroloie')?'selected' : null;?> value="Nécroloie">Nécroloie</option>
                                                                <option <?=($slide->i1_category == 'Développement')?'selected' : null;?> value="Développement">Développement</option>
                                                                <option <?=($slide->i1_category == 'Activités')?'selected' : null;?> value="Activités">Activités</option>
                                                            </select>
                                                            <textarea name="i1_title" class="has-text i-content" placeholder="Titre de l’article"><?=($slide->i1_title);?></textarea>
                                                            <div class="bottom-mask"></div>
                                                            <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                                <div class="image-box" style="width: 100%;">
                                                                    <div class="js--image-preview" style="background-image: url(<?=base_url('public/siteweb/img/slides/'.$slide->i1_img);?>);background-color: #F5F5F5;"></div>
                                                                    <div class="dis-none">
                                                                        <input id="slider_image_1" style="visibility:hidden;" type="file" class="image-upload" name="i1_img" accept="image/*">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="two-item-container">
                                                    <div class="i2 m-item">
                                                        <div class="custom-file-upload">
                                                            <label for="slider_image_2" class="btn">
                                                                <select name="i2_category" class="has-text i-category model2-field" style="left: 0px;">
                                                                    <option <?=($slide->i2_category);?> value="">Catégorie</option>
                                                                    <option <?=($slide->i2_category == 'Education')?'selected' : null;?> value="Education">Education</option>
                                                                    <option <?=($slide->i2_category == 'Alimentation')?'selected' : null;?> value="Alimentation">Alimentation</option>
                                                                    <option <?=($slide->i2_category == 'Nécroloie')?'selected' : null;?> value="Nécroloie">Nécroloie</option>
                                                                    <option <?=($slide->i2_category == 'Développement')?'selected' : null;?> value="Développement">Développement</option>
                                                                    <option <?=($slide->i2_category == 'Activités')?'selected' : null;?> value="Activités">Activités</option>
                                                                </select>
                                                                <textarea name="i2_title" class="has-text i-content model2-field" placeholder="Titre de l’article"><?=(!empty($slide->i2_title))?$slide->i2_title:null;?></textarea>
                                                                <div class="bottom-mask"></div>
                                                                <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                                    <div class="image-box" style="width:100%;">
                                                                        <div class="js--image-preview" style="background-image: url(<?=base_url((!empty($slide->i2_img)?'public/siteweb/img/slides/'.$slide->i2_img : 'public/yafeca/assets/img/main-slider-overlay.png'));?>);background-color: #F5F5F5;"></div>
                                                                        <div class="dis-none">
                                                                            <input id="slider_image_2" style="visibility:hidden;" type="file" class="image-upload model2-field" name="i2_img" accept="image/*">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="i3 m-item">
                                                        <div class="custom-file-upload">
                                                            <label for="slider_image_3" class="btn">
                                                                <select name="i3_category" class="has-text i-category model3-field" style="left: 0px;">
                                                                    <option <?=($slide->i3_category);?> value="">Catégorie</option>
                                                                    <option <?=($slide->i3_category == 'Education')?'selected' : null;?> value="Education">Education</option>
                                                                    <option <?=($slide->i3_category == 'Alimentation')?'selected' : null;?> value="Alimentation">Alimentation</option>
                                                                    <option <?=($slide->i3_category == 'Nécroloie')?'selected' : null;?> value="Nécroloie">Nécroloie</option>
                                                                    <option <?=($slide->i3_category == 'Développement')?'selected' : null;?> value="Développement">Développement</option>
                                                                    <option <?=($slide->i3_category == 'Activités')?'selected' : null;?> value="Activités">Activités</option>
                                                                </select>
                                                                <textarea name="i3_title" class="has-text i-content model3-field" placeholder="Titre de l’article"><?=(!empty($slide->i3_title))?$slide->i3_title:null;?></textarea>
                                                                <div class="bottom-mask"></div>
                                                                <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                                    <div class="image-box" style="width: 100%;">
                                                                        <div class="js--image-preview" style="background-image: url(<?=base_url((!empty($slide->i3_img)?'public/siteweb/img/slides/'.$slide->i3_img : 'public/yafeca/assets/img/main-slider-overlay.png'));?>);background-color: #F5F5F5;"></div>
                                                                        <div class="dis-none">
                                                                            <input id="slider_image_3" style="visibility:hidden;" type="file" class="image-upload model3-field" name="i3_img" accept="image/*">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end card body-->
                                    </div> <!-- end card -->
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="bnt btn btn-primary btn-block">Enregistrer</button>
                        </div>
                    </section>


                </form>
            </div>
        </div>
    </section>
</section>

<script>
    $(document).on('click','.slide_model',{passive:true},function () {
        const model = $(this).attr('data-model');
        $('#model').val(model);
        const model_container_tag = $('#model-container');
        $('.slide_model').removeClass('bg-primary');
        $(this).addClass('bg-primary');
        $('#step2').show('slow');
        $(model_container_tag).removeClass('model1 model2 model3 type_b');
        $(model_container_tag).addClass(''+model+'');

        $('.two-item-container .has-text').removeAttr('required');
        if(model === 'model2'){
            $('.model2-field').attr('required','required');
        }
        else if(model === 'model3'){
            $('.model2-field').attr('required','required');
            $('.model3-field').attr('required','required');
        }
        
        $('[type="file"]').removeAttrs('required');
    });

    $(document).on('change','[data-target]',{passive:true},function () {
       const target_tag = $(this).attr('data-target');
       $(target_tag).val(this.value);
       $(target_tag).change();
   });

    function after_update(){
//        show_loader();
//        setTimeout(function(){
//            refresh();
//        },900);
    }

</script>