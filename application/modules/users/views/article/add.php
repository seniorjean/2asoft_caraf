
    <script src="//cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script>

<style>
    h3{
        font-family: Verdana;
        font-size: 18pt;
        font-style: normal;
        font-weight: bold;
        color:red;
        text-align: center;
    }
    table{
        font-family: Verdana;
        color:black;
        font-size: 12pt;
        font-style: normal;
        font-weight: bold;
        text-align:left;
        border-collapse: collapse;
    }
    .error{
        color:red;
        font-size: 11px;
    }
</style>


    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <i class="fa fa-users"></i><a href="<?= bs() ?>users/article/t_article" class="">Liste des Article</a>
<!--                            <a href="--><?//= bs('users/print_with_dompdf') ?><!--">-->
                                <!--						 <i class="fa fa-print" style="padding-left: 1%;color: black"></i>-->
                            </a>
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
                        </header>
                        <div class="panel-body">



                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=bs()?>users/article/add_article" role="form">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Catégorie</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="cat" name="cat">
                                            <option selected>Choisir...</option>
                                            <option value="1">Education</option>
                                            <option value="10">Activité</option>
                                            <option value="3">Alimentation</option>
                                            <option value="4">Développement</option>
                                            <option value="5">Négroloie</option>
                                            <option value="11">Santé</option>
                                            <option value="12">Urbanisation</option>
                                            <option value="13">Nécrologie</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image_page" id="image_page" placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Titre</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title"  class="form-control form-control-lg" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Contenu du texte</label>
                                    <div class="col-sm-10">
                                        <table align="" >

                                            <tr>
                                                <td><textarea name="content" id="content" class="form-control"></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'content', {
                                                            toolbar: [
                                                                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
                                                                { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                                                                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                                                                { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
                                                                '/',
                                                                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
                                                                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                                                                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                                                                { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                                                                '/',
                                                                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                                                                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                                                                { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                                                                { name: 'others', items: [ '-' ] },
                                                            ]
                                                        });
                                                    </script></td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="valider" class="btn btn-primary">VALIDER</button>
                                    </div>
                                </div>
                            </form>


</div></section>
                    </div></div></section></section>