<section class="m-t-30">
    <div style="max-width: 86.8%;">
        <?php $it = 1; foreach($annonces as $annonce):?>
            <div id="annonce_item_<?=$it;?>" class="col-sm-12 annonce-item m-b-5 p-l-50" style="<?=($it != 1)?'display:none;':'';?>">
                <span class="bar">|</span>
                <span class="annonce_title m-r-2"><b><?=$annonce->title;?></b></span>
                <span class="dot m-r-5"><b><i class="fas fa-circle"></i></b></span>
                <span class="annonce_sub_title text-black"><b><?=$annonce->sub_title;?></b></span>
            </div>
        <?php $it++; endforeach;?>
		<img class="annonce_img" src="<?=$this->frontend_model->get_header_logo();?>">
    </div>
</section>
