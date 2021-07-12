<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?= bs('public/img/favicon/favicon.png') ?>">
    <title>Login System</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= bs('public/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= bs('public/css/bootstrap-reset.css') ?>" rel="stylesheet">
    <link href="<?= bs('public/libs/sweetalert2/dist/sweetalert2.css');?>" rel="stylesheet" type="text/css"/>

    <!--external css-->
    <link href="<?= bs('public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') ?>" rel="stylesheet"
          type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?= bs('public/css/owl.carousel.css') ?>" type="text/css">
    <link href="<?=bs()?>public/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>public/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= bs() ?>public/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?=bs()?>public/libs/css/util.css" rel="stylesheet" type="text/css" />
    <!--right slidebar-->
    <link href="<?= bs('public/css/slidebars.css') ?>" rel="stylesheet">
    <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="<?= bs() ?>public/css/jquery.steps.css"/>
    <!-- Custom styles for this template -->
    <link href="<?= bs('public/css/style.css') ?>" rel="stylesheet">
    <link href="<?= bs('public/css/style-responsive.css') ?>" rel="stylesheet"/>

    <link href="<?=bs()?>public/libs/select2/select2.css" rel="stylesheet" type="text/css" media="screen" />

    <!--dynamic table-->
    <link href="<?= bs() ?>public/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet"/>
    <link href="<?= bs() ?>public/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet"/>
    <link href="<?= bs() ?>public/libs/perfect-scrollbar/perfect_scroll_bar.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?=assets_url('libs/tooltip/tooltip.css')?>">
    <link rel="stylesheet" href="<?= bs() ?>public/assets/data-tables/DT_bootstrap.css"/>
    <link rel="stylesheet" href="<?=assets_url('libs/css/custom2.css')?>">

    <script src="<?= bs('public/js/jquery.js') ?>"></script>

    <script>
        var base_url = '<?=base_url();?>';
        const router_class = 'admin/<?=$this->router->fetch_class();?>';
        const router_method = '<?=$this->router->fetch_method();?>';
    </script>

    <style>

        .perfecscollbar-wrapper {
            position: absolute;
            top: 0px;
            bottom: 0px;
            left: 0px;
            right: 0px;
            overflow: scroll;
        }
        .btn-dark {
            background-color: #3f3d3d;
            color: white;
        }
        .js--image-preview{
            border: solid 1px rgba(205, 205, 205, 0.22);
        }
        .btn-dark.focus, .btn-dark:focus, .btn-dark:hover {
            color: white;
            background-color: #0c0c0c;
        }
        .no-border{border:none !important;}
        .select2-container .select2-choice {
            border: 1px solid #e1e1e1 !important;
            background-color: white !important;
        }
        .select2-drop{z-index: 999999999}
        .select2-drop-active {
            border: 1px solid #e1e1e1 !important;
        }
        .select2-results .select2-highlighted {
            background: #1197ff;
            color: #fff;
        }
        textarea{
            margin:0px !important;
        }

        .modal-header{
            background-color: whitesmoke !important;}

        .swal2-popup.swal2-toast .swal2-title , .swal2-icon{font-size: 1.7em !important;}

    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        tr.odd td.sorting_1 {
            background-color: #f9f9f9;
        }

        .error {
            color: #ff6c60;
        }

        .noty-color {
            background-color: #ca5654;
            border: 0px;
            color: white;

        }

        .success-noty {
            background-color: #8abf46;
            color: white;
        }

        .error {
            color: #ca5654;
        }
    </style>

</head>

<body ng-app="this" ng-controller="admin">

<section id="container">
    <div class="perfecscollbar-wrapper">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <i class="fa fa-bars"></i>
            </div>
            <!--logo start-->
            <a href="<?= bs() ?>users/Auth" class="logo">LA <span> CARAF</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 6 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Iphone Development</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?= bs('public/img/avatar-mini.jpg') ?>"></span>
                                    <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                    <span class="message">
                                    Hello, this is an example msg.
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar"
                                                             src="<?= bs('public/img/avatar-mini2.jpg') ?>"></span>
                                    <span class="subject">
                                <span class="from">Jhon Doe</span>
                                <span class="time">10 mins</span>
                                </span>
                                    <span class="message">
                                 Hi, Jhon Doe Bhai how are you ?
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar"
                                                             src="<?= bs('public/img/avatar-mini3.jpg') ?>"></span>
                                    <span class="subject">
                                <span class="from">Jason Stathum</span>
                                <span class="time">3 hrs</span>
                                </span>
                                    <span class="message">
                                    This is awesome dashboard.
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar"
                                                             src="<?= bs('public/img/avatar-mini4.jpg') ?>"></span>
                                    <span class="subject">
                                <span class="from">Jondi Rose</span>
                                <span class="time">Just now</span>
                                </span>
                                    <span class="message">
                                    Hello, this is metrolab
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?= bs('public/img/avatar1_small.jpg') ?>">
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="<?= bs() ?>users/profile">
                                    <i class=" fa fa-suitcase"></i>Profile
                                </a>
                            </li>
                            <li>
                                <a href="<?= bs() ?>users/Auth/logout"><i class="fa fa-key"></i> Déconnexion</a>
                            </li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <!--            <li class="sb-toggle-right">-->
                    <!--                <i class="fa  fa-align-right"></i>-->
                    <!--            </li>-->
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->