<link type="text/css" href="<?=assets_url('libs/ckeditor5/')?>sample/css/sample.css" rel="stylesheet" media="screen" />
<style>
    .tooltip-inner{
        min-width: 112px;
        position: absolute !important;
        left: -55px !important;
        font-size: .9em !important;
        line-height: 1.5 !important;
        color: white !important;
        padding: calc(0.6em*0.5) !important;
        background: #333 !important;
        border-radius: 0px !important;
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
                        <i class="fa fa-dashboard"></i> <?=$page_title;?>
                    </header>
                    <div class="panel-body">
                        <form action="<?=$form_action;?>" id="editor_form">
                            <?php if($upload_image == TRUE):;?>
                               <div class="container" style="max-width: 30em !important;">
                                   <div class="text-center">
                                       <div class="col-md-9 custom-file-upload">
                                           <div class="wrapper-image-preview" style="margin-left: -6px;">
                                               <div class="image-box" style="width: 250px;">
                                                   <div class="js--image-preview bg-size-cover" style="background-image: url(<?=$image_src;?>); background-color: #F5F5F5;"></div>
                                                   <div class="upload-options">
                                                       <label for="image_to_upload" class="btn btn-block btn-dark"><i class="mdi mdi-camera"></i> <?=$upload_btn_text;?></label>
                                                       <input id="image_to_upload" style="visibility:hidden;" type="file" class="image-upload" name="image_file" accept="image/*">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            <div class="clearfix"></div>
                            <?php endif;?>

                            <input type="hidden" value="<?=$image_src;?>" name="image_src">
                            <textarea name="text" required id="text_area" class="dis-none"></textarea>

                            <section class="content-content">
                                <div class="container" style="max-width: 70em;">
                                    <div class="document-editor">
                                        <div class="ck-toolbar-container"></div>
                                        <div class="content-container perfectScrollBar">
                                            <div id="editor">
                                                <?=$texte;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

<script src="<?=assets_url('libs/ckeditor5/')?>ckeditor.js"></script>
<!--<script src="--><?//=assets_url('ckeditor5/')?><!--translations/en.js"></script>-->
<script>

    const form_action = '<?=$form_action;?>';
    const action = '<?=$action;?>';
    const back_page = '<?=$back_page;?>';

    function start_ck(){
        DecoupledEditor
            .create( document.querySelector( '#editor' ), {
//                 toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ],
                // The UI will be english.
                language: {
                    // The UI will be french.
                    ui: 'en',

                    // But the content will be edited in French.
                    content: 'en'
                }
            } )
            .then( editor => {
                const toolbarContainer = document.querySelector( '.ck-toolbar-container' );

                toolbarContainer.prepend( editor.ui.view.toolbar.element );

                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    }

    //adding save button to ck5 toolbar
    $(function () {
        start_ck();
       setTimeout(function () {
           append_ck_custom_tools();
       },300)
    });

    function append_ck_custom_tools(){
        $('.ck.ck-toolbar.ck-reset_all').append('<span class="ck ck-toolbar__separator">' +
            '</span>' +
            '<button class="btn-link save_ck_document m-l-20" type="button" data-toggle="tooltip" data-placement="bottom" title="Save"><i class="fa-save fas fs-17" style="font-family:\'Font Awesome 5 Free\' !important;font-weight: 900; "></i></button>' +
            '<button class="btn-link clear_ck_document m-l-10" type="button" data-toggle="tooltip" data-placement="bottom" title="New Document"><i class="fas fa-file-alt fs-17" style="font-family:\'Font Awesome 5 Free\' !important;font-weight: 900; "></i></button>' +
            '<a class="btn-link close_editor m-l-10" href="'+back_page+'" data-toggle="tooltip" data-placement="bottom" title="Close Editor"><i class="fas fa-close fs-17" style="font-family:\'Font Awesome 5 Free\' !important;font-weight: 900; "></i></a>' +
            '');
    }

    $(document).on('click','.save_ck_document',{passive:true},function () {
        const text = editor.getData().trim();
        $('#text_area').val(text);
        function save_document(){
          $('#editor_form').submit();
        }
        swal_confirm('Attention!','Do you want to save the text ?',{yes : save_document})
    });

    $(document).on('click','.clear_ck_document',{passive:true},function () {
        create_new_ck_document('show_loader');
    });

    $(document).on('click','.close_editor',{passive:true},function () {
        show_loader();
    });

    function create_new_ck_document(show_load , content){
        if(typeof show_load !== 'undefined' && show_load === 'show_loader'){
            show_loader();
        }

        if(typeof content === 'undefined'){
            content = ''
        }

        setTimeout(function () {
            const tag = $('.document-editor');
            editor.destroy();
            $(tag).empty();
            $(tag).append('<div class="ck-toolbar-container"></div> <div class="content-container"> <div id="editor">'+content+'</div> </div>');

            start_ck();

            setTimeout(function () {
                append_ck_custom_tools();
                $('.tooltip.fade').remove();
                if(typeof show_load !== 'undefined' && show_load === 'show_loader'){
                    hide_loader();
                }
            },100);
        },300);
    }

    $(document).on('submit','#editor_form',{passive:true},function (e) {
        e.preventDefault();
        var data = get_form_data(e , $(this));
        if(validate_form('editor_form')){
            $.ajax({
                type: "POST",
                url: form_action,
                processData: false,
                contentType: false,
                data: data,
                success: function()
                {
                    show_message('success','Text successfully '+action+'d');
                }
            });
        }

    });
    
</script>


