<section class="sec-padding about-content full-sec">
    <hr>
    <div class="container">
        <div class="full-sec-content">
            <div class="sec-title style-two">
                <h2>LE PAYS AKYE</h2>
                <span class="decor">
                    <span class="inner"></span>
                </span>
            </div>
            <br>
        </div>

        <div>
            <div class="container space-2 space-md-2">
                <img class="rounded" alt="About Us" style="float: left; margin-right: 10px; margin-bottom: 0px;max-width: 50%" src="<?php echo $this->frontend_model->get_le_pays_image(); ?>">
                <?php
                $about_us_text  = get_frontend_settings('le_pays');
                echo htmlspecialchars_decode(stripslashes($about_us_text));
                ?>

            </div>
        </div>
    </div>
</section>