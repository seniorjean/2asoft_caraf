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
                        <form action="<?=$form_action;?>" id="editor_form" class="ajax-form">

                            <div class="row">
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="content_idicator btn" data-content="i1_content" data-data-toggle="tooltip" data-placement="top" title="modifier le text">
                                            <img src="<?= base_url($image_dir . $i1_img); ?>" alt="i1_img" width="100%"  height="200px">
                                        </button>
                                    </div>

                                    <?php if(!empty($i2_img)):;?>
                                        <div class="col-md-4">
                                            <button type="button" class="content_idicator btn" data-content="i2_content" data-toggle="tooltip" data-placement="top" title="modifier le text">
                                                <img src="<?= base_url($image_dir . $i2_img); ?>" alt="i2_img" width="100%" height="200px">
                                            </button>
                                        </div>
                                    <?php endif;?>

                                    <?php if(!empty($i3_img)):;?>
                                        <div class="col-md-4">
                                            <button type="button" class="content_idicator btn" data-content="i3_content" data-toggle="tooltip" data-placement="top" title="modifier le text">
                                                <img src="<?= base_url($image_dir . $i3_img); ?>" alt="i3_img" width="100%" height="200px">
                                            </button>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <hr>

                            <textarea name="i1_content" id="i1_content" class="dis-none"><?=$i1_content;?></textarea>
                            <textarea name="i2_content" id="i2_content" class="dis-none"><?=$i2_content;?></textarea>
                            <textarea name="i3_content" id="i3_content" class="dis-none"><?=$i3_content;?></textarea>

                            <input type="hidden" name="slide_id" value="<?=$id;?>">

                            <section class="content-content">
                                <div class="container" style="max-width: 70em;">
                                    <div class="document-editor">
                                        <div class="ck-toolbar-container"></div>
                                        <div class="content-container perfectScrollBar">
                                            <div id="editor">
                                                <?=$i1_content;?>
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

<script>

    const form_action = '<?=$form_action;?>';
    const action = '<?=$action;?>';
    const back_page = '<?=$back_page;?>';
    var active_content = 'i1_content';

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
        $('#'+active_content+'').val(text);
        console.log(text);
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

    $(document).on('click','.content_idicator',{passive:true},function () {
       $('#'+active_content+'').val(editor.getData());
        const content  = $(this).attr('data-content');
        active_content = content;
        const text = $('#'+content+'').val();
        editor.setData(text);
        $('.content_idicator').removeClass('btn-info');
        $(this).addClass('btn-info');
    });
    
</script>


