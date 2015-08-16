<html>
<head>

    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/zabuto_calendar.css') ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php /*echo base_url('css/gritter/css/jquery.gritter.css')*/ ?>"/>-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/lineicons/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('fancybox/jquery.fancybox.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('fancybox/helpers/jquery.fancybox-buttons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('fancybox/helpers/jquery.fancybox-thumbs.css') ?>">
    <!--external css-->
    <link rel="stylesheet" href="<?php echo base_url('css/admin_style.css') ?>">
    <link href="<?php echo base_url('css/style-responsive.css" rel="stylesheet') ?>">
    <!-- Custom styles for this template -->
    <script src="<?php echo base_url('ckeditor/ckeditor.js') ?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>

<section id="container">

    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>

        <a href="<?php echo base_url('admin/category_manager/index') ?>" class="logo"><b>ADMIN</b></a>

        <div class="nav notify-row" id="top_menu">
            <ul class="nav top-menu">

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">DashGum Admin Panel</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
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
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Product Development</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Payments Sent</div>
                                    <div class="percent">70%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (Important)</span>
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
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="#<?php /*echo base_url('admin/login_manager/logout') */ ?>">Logout</a></li>
            </ul>
        </div>
    </header>


    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="#"><!--<img src="img/ui-sam.jpg" class="img-circle" width="60">--></a>
                </p>
                <h5 class="centered"><?php echo strtoupper($name);?></h5>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('admin/category_manager/cat_table') ?>">Category_list</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bus"></i>
                        <span>Commercial Vehicles</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('admin/commercial_vehicles/product_category') ?>">Product
                                Category</a></li>
                        <li><a href="<?php echo base_url('admin/commercial_vehicles/') ?>">Product & Services</a></li>
                        <li><a href="<?php echo base_url('admin/commercial_vehicles/view_branch_list') ?>">Branch
                                Locations</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-globe"></i>
                        <span>Networks</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('admin/vehicle_network/branch_table') ?>">Branches</a></li>
                        <li><a href="<?php echo base_url('admin/vehicle_network/network_table') ?>">Available
                                Newtorks</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('admin/image_manager') ?>">Gallery</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Forms</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('admin/category_manager/add_form') ?>">ADD</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('admin/setting_manager/view_subscriber/') ?>">Subscribers</a>
                        </li>
                        <li><a href="<?php echo base_url('admin/setting_manager/view_setting') ?>">Settings</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
