<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-nav col-lg-3">
                <section class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="<?=bs()?>public/siteweb/img/clients/<?php echo $user_profile->ppid ?>" width="200" alt="">';
                        </a>
                        <h1><?php echo $user_profile->username ?></h1>
                        <p><?php echo $user_profile->email ?></p>
                    </div>

                    <ul class="nav nav-pills nav-stacked" style="display: none">
                        <li class="active"><a href="<?=bs()?>users/profile"> <i class="fa fa-user"></i> Profile</a></li>
                        <li>
                          <a href="<?=bs()?>users/edit_profile">
                            <i class="fa fa-edit"></i> Modifier le profile
                          </a>
                        </li>
                        <li>
                          <a href="<?=bs()?>users/change_avatar">
                            <i class="fa fa-user"></i> Changer Avatar
                          </a>
                        </li>
                      <li>
                        <a href="<?=bs()?>users/auth/change_password">
                          <i class="fa fa-unlock-alt"></i> Changer le mot de passe
                        </a>
                      </li>
                    </ul>

                </section>
            </aside>
            <aside class="profile-info col-lg-9">
<!--                <section class="panel">-->
<!--                    <form>-->
<!--                        <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>-->
<!--                    </form>-->
<!--                    <footer class="panel-footer">-->
<!--                        <button class="btn btn-danger pull-right">Post</button>-->
<!--                        <ul class="nav nav-pills">-->
<!--                            <li>-->
<!--                                <a href="#"><i class="fa fa-map-marker"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#"><i class="fa fa-camera"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#"><i class=" fa fa-film"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#"><i class="fa fa-microphone"></i></a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </footer>-->
<!--                </section>-->
                <section class="panel">
                    <div class="bio-graph-heading">
                        <i class="fa fa-user fa-2x"></i> <b> D??tails du compte</b>
                    </div>
                    <div class="panel-body bio-graph-info">
                        <div class="row">
                            <div class="bio-row"><p><span class="text-black">Nom: </span>: <?php echo $user_profile->first_name ?></p></div>
                            <div class="bio-row"><p><span class="text-black">Pr??noms</span>: <?php echo $user_profile->last_name ?></p></div>

                            <div class="bio-row"><p><span class="text-black">Email </span>: <?php echo $user_profile->email ?></p></div>
                            <div class="bio-row"><p><span class="text-black">T??l??phone</span>: <?php echo $user_profile->phone ?></p></div>

                            <div class="bio-row"><p><span class="text-black">Date d'adh??sion</span>: <?php echo $user_profile->date ?></p></div>
                            <div class="bio-row"><p><span class="text-black">Matricule</span>: <?php echo $user_profile->matricule ?></p></div>

                            <div class="bio-row"><p><span class="text-black">ville</span>: <?php echo $user_profile->ville ?></p></div>
							<div class="bio-row"><p><span class="text-black">Code postal</span>: <?php echo $user_profile->code_postal ?></p></div>

							<div class="bio-row"><p><span class="text-black">Association</span>: <?php echo $user_profile->sigle ?></p></div>
                            <div class="bio-row"><p><span class="text-black">President</span>: <?php echo $user_profile->president ?></p></div>

							<div class="bio-row"><p><span class="text-black">Village</span>: <?php echo $user_profile->village_name ?></p></div>
                            <div class="bio-row"><p><span class="text-black">Commune</span>: <?php echo ucfirst($user_profile->commune_name) ?></p></div>

							<div class="bio-row">
								<p><span class="text-black">Derni??re connexion</span>:
									<?php

									$datestring = '%D-%d-%y at <i class="fa fa-clock-o"></i> %h:%i %a';
									$time = $user_profile->last_login;
									echo mdate($datestring, $time);
									?>
								</p>
							</div>
							<div class="bio-row"><p><span class="text-black">Numero de membre</span>: <?php echo $user_profile->numadhe; ?></p></div>




                        </div>
                    </div>
                </section>
<!--                <section>-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="panel">-->
<!--                                <div class="panel-body">-->
<!--                                    <div class="bio-chart">-->
<!--                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#e06b7d" data-bgColor="#e8e8e8">-->
<!--                                    </div>-->
<!--                                    <div class="bio-desk">-->
<!--                                        <h4 class="red">Envato Website</h4>-->
<!--                                        <p>Started : 15 July</p>-->
<!--                                        <p>Deadline : 15 August</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="panel">-->
<!--                                <div class="panel-body">-->
<!--                                    <div class="bio-chart">-->
<!--                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="63" data-fgColor="#4CC5CD" data-bgColor="#e8e8e8">-->
<!--                                    </div>-->
<!--                                    <div class="bio-desk">-->
<!--                                        <h4 class="terques">ThemeForest CMS </h4>-->
<!--                                        <p>Started : 15 July</p>-->
<!--                                        <p>Deadline : 15 August</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="panel">-->
<!--                                <div class="panel-body">-->
<!--                                    <div class="bio-chart">-->
<!--                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="75" data-fgColor="#96be4b" data-bgColor="#e8e8e8">-->
<!--                                    </div>-->
<!--                                    <div class="bio-desk">-->
<!--                                        <h4 class="green">VectorLab Portfolio</h4>-->
<!--                                        <p>Started : 15 July</p>-->
<!--                                        <p>Deadline : 15 August</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="panel">-->
<!--                                <div class="panel-body">-->
<!--                                    <div class="bio-chart">-->
<!--                                        <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="50" data-fgColor="#cba4db" data-bgColor="#e8e8e8">-->
<!--                                    </div>-->
<!--                                    <div class="bio-desk">-->
<!--                                        <h4 class="purple">Adobe Muse Template</h4>-->
<!--                                        <p>Started : 15 July</p>-->
<!--                                        <p>Deadline : 15 August</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>
