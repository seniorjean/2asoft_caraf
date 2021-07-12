<section class="contact-content sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknownto </p>-->
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2>Laisser un message</h2>
                <form action="<?php echo base_url() ; ?>Site_web/contact" class="contact-form row" id="contact-page-contact-form">
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" placeholder="Nom et prenoms">
                        <input type="text" name="email" id="email" placeholder="Email">
                        <input type="text" name="phone" id="phone" placeholder="Téléphone">

                    </div>
                    <div class="col-md-6">
                        <textarea name="message" placeholder="Message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-12"><button class="thm-btn" type="submit">Valider</button></div>
                </form>
            </div>
            <div class="col-md-4">
                <h2>Contacts</h2>
                <ul class="contact-info">
                    <li>
                        <div class="icon-box">
                            <div class="inner">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4>Addresse</h4>
                            <p>19, Rue de la Boulangerie  <br>93200  Saint Denis.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="inner">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4>Téléphone</h4>
                            <p>(+33) 06 17 38 77 61</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="inner">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4>Email</h4>
                            <p>info@caraf-france.com</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>