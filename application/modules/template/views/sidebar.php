<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="<?= base_url('users/Auth') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dashboard"></i>
                    <span>Mes Cotisations</span>
                </a>
                <ul class="sub">

                    <li><a href="<?= base_url('stripe/liste_user_cot') ?>">Cotisations Payées</a></li>
                    <li><a href="<?= base_url('stripe') ?>">Payer mes cotisations</a></li>
                    <li><a href="<?= base_url('site_config/twitter_config') ?>"> Cotisations En attentes</a></li>
                    <li><a href="<?= base_url('site_config/google_config') ?>">Toutes mes cotisations</a></li>
                </ul>

            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dashboard"></i>
                    <span>Mon agenda</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= base_url('calendar/') ?>">Calendrier</a></li>
                </ul>

            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span>Membres</span>
                </a>
                <ul class="sub">
                    <?php
                    $users = group_priviliges();
                    foreach ($users as $key => $value) :
                        $value;
                        ",";
                        $arr = explode(",", $value);
                        ?>
                    <?php if ($arr[0] == "View Users") : ?>

                    <li>
                        <a href="<?= base_url('users/Users') ?>">
                            <i class="ti ti-angle-right"></i> Liste des membres
                        </a>
                    </li>
                    <?php endif ?>
                    <?php endforeach ?>

                    <?php

                    $users = group_priviliges();

                    foreach ($users as $key => $value) :

                        $value;
                        ",";
                        $arr = explode(",", $value);
                        ?>
                    <?php if ($arr[0] == "Add Users") : ?>

                    <li>
                        <a href="<?= base_url('users/Users/create_user') ?>">
                            <i class="ti ti-angle-right"></i> Add Users
                        </a>
                    </li>

                    <?php endif ?>

                    <?php endforeach ?>

                </ul>
            </li>
            </li>
            <?php if ($this->session->userdata("group_id") == 1) : ?>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dashboard"></i>
                    <span>Gestion du site web</span>
                </a>
                <ul class="sub">

                    <li><a href="#">Article</a>
                        <ul class="sub">
                            <li><a href=" <?= base_url('users/article/add_article') ?>">Ajouter</a></li>
                            <li><a href=" <?= base_url('users/article/article_allby_cat/1') ?>">Education</a></li>
                            <li><a href=" <?= base_url('users/article/article_allby_cat/2') ?>">Alimentation</a></li>
                            <li><a href=" <?= base_url('users/article/article_allby_cat/4') ?>">Nécroloie</a></li>
                            <li><a href=" <?= base_url('users/article/article_allby_cat/4') ?>">Développement</a></li>
                            <li><a href=" <?= base_url('users/article/article_allby_cat/15') ?>">Activités</a></li>
                            <li><a href=" <?= base_url('users/article/alaune') ?>">A la une</a></li>

                        </ul>

                    </li>
                    <li><a href="#">Page</a>

                        <ul class="sub">
                            <li><a href="<?= base_url('users/article/page') ?>">Ajouter</a></li>
                            <li><a href="<?= base_url('users/article/t_page') ?>">Liste</a></li>

                            <li><a href="<?= base_url('users/article/t_projet_d') ?>">Durable</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Projets</a>
                        <ul class="sub">
                            <li><a href="<?= base_url('users/article/projet') ?>">Ajouter</a></li>
                            <li><a href="<?= base_url('users/article/t_projet_p') ?>">Petit</a></li>

                            <li><a href="<?= base_url('users/article/t_projet_d') ?>">Durable</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Roles & permissions</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= base_url('users/User_groups') ?>"> &nbsp;&nbsp;View Groups</a></li>
                    <?php
                    $users = group_priviliges();
                    foreach ($users as $key => $value) :
                        $value;
                        ",";
                        $arr = explode(",", $value);
                        ?>
                    <?php if ($arr[0] == "Create Groups") : ?>

                    <li>
                        <a href="<?= base_url('users/User_groups/create_group') ?>">
                            <i class="ti ti-angle-right"></i> Create Groups
                        </a>
                    </li>
                    <?php endif ?>
                    <?php endforeach ?>
                    <?php

                    $users = group_priviliges();

                    foreach ($users as $key => $value) :

                        $value;
                        ",";
                        $arr = explode(",", $value);
                        ?>
                    <?php if ($arr[0] == "Permissions") : ?>

                    <li>
                        <a href="<?= base_url('users/User_groups/permissions') ?>">
                            <i class="ti ti-angle-right"></i> Permissions
                        </a>
                    </li>

                    <?php endif ?>

                    <?php endforeach ?>
                </ul>
            </li>

				<li class="sub-menu">
					<a href="javascript:;">
						<i class="fa fa-group"></i>
						<span>Associations</span>
					</a>
					<ul class="sub">
						<li><a href="<?= base_url('assoc/communes') ?>">Communes</a></li>
						<li><a href="<?= base_url('assoc/villages') ?>">Village</a></li>
						<li><a href="<?= base_url('assoc') ?>">Associations</a></li>
					</ul>
				</li>
            <?php endif ?>
            <?php

            $users = group_priviliges();

            foreach ($users as $key => $value) :

                $value;
                ",";
                $arr = explode(",", $value);
                ?>
            <?php if ($arr[0] == "Site Configuration") : ?>

            <li>
                <a href="<?= base_url('site_config') ?>">
                    <i class="fa fa-wrench"></i><span>Site Configuration</span>
                </a>
            </li>
            <li><a href="<?= base_url('slide_builder') ?>"> <i class="far fa-newspaper fa"></i><span>Slide Builder</span> </a> </li>
            <li><a href="<?= base_url('slide_builder/slides') ?>"> <i class="far far fa-images"></i><span>Slides</span> </a> </li>
            <li><a href="<?= base_url('slide_builder/annonces') ?>"> <i class="mdi mdi-tag-text-outline"></i><span>Annonces</span> </a> </li>
            <?php endif ?>

            <?php endforeach ?>

            <?php

            $users = group_priviliges();

            foreach ($users as $key => $value) :

                $value;
                ",";
                $arr = explode(",", $value);
                ?>
            <?php if ($arr[0] == "Adminstrator") : ?>

            <li>
                <a href="<?= base_url('users/Profile') ?>">
                    <i class="fa fa-list"></i><span>Mon compte</span>
                </a>
            </li>

            <?php endif ?>

            <?php endforeach ?>


            <!--            <li class="sub-menu">-->
            <!--                <a href="javascript:;" >-->
            <!--                    <i class="fa fa-cog"></i>-->
            <!--                    <span>Social login config</span>-->
            <!--                </a>-->
            <!--                <ul class="sub">-->
            <!--                    <li><a  href="-->
            <? ?>
            <!--">Facebook Login</a></li>-->
            <!--                    <li><a  href="-->
            <? ?>
            <!--">Twitter Login</a></li>-->
            <!--                    <li><a  href="-->
            <? ?>
            <!--">Google Login</a></li>-->
            <!--                    <li><a  href="-->
            <? ?>
            <!--">Instagram Login</a></li>-->
            <!--                    <li><a  href="-->
            <? ?>
            <!--">Linkedin Login</a></li>-->
            <!--                </ul>-->
            <!--            </li>-->
            <?php

            $users = group_priviliges();

            foreach ($users as $key => $value) :

                $value;
                ",";
                $arr = explode(",", $value);
                ?>
            <?php if ($arr[0] == "Backup & Export Users") : ?>


            <li>
                <a href="<?= base_url('site_config/backup') ?>">
                    <i class="fa fa-database"></i><span>Backup & Export Users</span>
                </a>
            </li>

            <?php endif ?>

            <?php endforeach ?>
            <li>
                <a href="#" target="_blank"" >
                    <i class=" fa fa-book"></i>
                    <span>Documentation</span>
                </a>
            </li>
            <!--  <li>
                <h4>Extras</h4>
            </li>
            <li>
                <a href="<? ?>">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<? ?>" target="_blank"" >
                    <i class="fa fa-desktop"></i>
                    <span>Frontend</span>
                </a>
            </li> -->

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end---> 
