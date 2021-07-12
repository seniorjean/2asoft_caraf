<?php


function coupeCourt($texte,$long,$marge=10)
{
    $msg = stripslashes($texte);
    $msg = preg_replace("'<[^>]+>'U", "", trim(strip_tags($msg)));
    $taille = strlen($msg);
    if ($long < $taille) {
        $message = substr($msg, 0, $long);
        $i = $long;
        if ($i < $taille) {
            while ($msg[$i] != " " && isset($msg[$i]) && $i < ($long + $marge)) {
                $message .= $msg[$i];
                $i++;
            }
        }
        if ($i < $taille) {
            $message .= "";
        }
    } else {
        $message = $msg;
    }
    echo  $message;


}	 ?>
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
                            <i class="fa fa-users"></i><a href="#" class="">Liste des Article</a>
                            <a href="<?= bs('users/print_with_dompdf') ?>">
                                <!--						 <i class="fa fa-print" style="padding-left: 1%;color: black"></i>-->
                            </a>
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
                        </header>
                        <div class="panel-body">
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="th-sm">Date
                                    </th>
                                    <th class="th-sm">Titre
                                    </th>
                                    <th class="th-sm">Catégorie
                                    </th>
                                    <th class="th-sm">Resumé
                                    </th>

                                    <th class="th-sm">Image
                                    </th>
                                    <th class="th-sm">Action
                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($table_projets as $article):?>
                                <tr>
                                    <td><?php  echo $article->creation_date?></td>
                                    <td><?php  echo $article->title?></td>
                                    <td><?php  echo $article->cat?></td>
                                    <td><?php coupeCourt($article->content,50,$marge=10);?></td>
                                    <td><img src="<?=bs()?>uploads/<?php echo $article->image ?>" alt="" width="125" height="85"></td>
                                    <td>
                                        <a href="<?= base_url('users/article/edit_article_catego_by_id')?>/<?= $article->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>


</div></section>
                    </div></div></section></section>


    <style>

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }
    </style>

    <script>

        $(document).ready(function () {
            $('#dtBasicExample').DataTable({
                "searching": false // false to disable search (or any other option)
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>