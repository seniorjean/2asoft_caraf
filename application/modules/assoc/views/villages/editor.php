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
                            <input type="hidden" name="annonce_id" value="<?=$id;?>">
                            <textarea name="content" id="content" class="dis-none"></textarea>

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
        $('#content').val(text);

        function save_document(){
            $('#editor_form').submit();
        }
        swal_confirm('Attention!','Voulez-vous enregistrer le texte ?',{yes : save_document})
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
</script>


