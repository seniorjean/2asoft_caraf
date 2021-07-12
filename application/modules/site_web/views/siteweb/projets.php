<section class="blog-home sec-padding blog-page">
    <div id="project_list" class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 pull-left pull-sm-none">
                <?php  foreach ($all_projets_durable as $projet): ?>
                    <div class="single-blog-post">
                        <div class="img-box">
                            <img src="<?=bs()?>uploads/<?php echo $projet->image ?>" alt="" width="780" height="400">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li><a href="##" class="show_details" data-id="<?= $projet->id ?>"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="inner" style="width:250px ">
                                    <div class="date">
                                        <!--                                        <b>24</b>-->
                                        <!--                                        apr-->
                                        <span><h4>Lieu: </h4> </span>
                                    </div>
                                    <div class="comment">
                                        <p> <b><a href="#"><h6><?php echo $projet->lieu ?> </h6></a></b></p>
                                        <!--                                        <i class="flaticon-interface-1"></i> 8-->
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <a href="##" class="show_details" data-id="<?= $projet->id ?>"><h3><?php echo $projet->title ?></h3></a>
                                <p><?php coupeCourt($projet->content,150,$marge=10,$projet->id);?></p>

                            </div>

                        </div>
                    </div>

                <?php endforeach ?>
            </div>

        </div>
    </div>
    
    <div id="project_details" class="container">
        <div class='col-xs-12 m-b-30'>
            <div class="bg-white">
                <h1 id="projet_title" class="modal-title dis-inline-block"></h1>
                <button style="font-size: 40px" type="button" class="close" onclick="show_projets_liste();" data-toggle="tooltip" data-placement="top" title="Fermer" aria-hidden="true">&times;</button>
            </div>
        </div>

        <div id="details_here">

        </div>
    </div>
</section>

<script>
    const project_list_tag = '#project_list';
    const project_details_tag = '#project_details';
    const details_tag = '#details_here';

    function show_projets_liste(){
        $(project_details_tag).hide('slow');
        $(project_list_tag).show('slow');
    }

    function show_projets_details(){
        $(project_list_tag).hide('slow');
        $(project_details_tag).show('slow');
    }

    $(document).on('click','.show_details',{passive:true},function () {
        const id = $(this).attr('data-id');
        $.post(base_url+'Site_web/detailsprojet/'+id+'',{},function (response) {
            response = $.parseJSON(response);
            $(details_tag).html(response.page);
            $('#projet_title').html(response.title);
            show_projets_details();
        });
    });
</script>