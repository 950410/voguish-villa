<<<<<<< HEAD
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
=======

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Voguish-Villa</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('css/admin/bootstrap.css')?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('css/admin/font-awesome.css')?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/admin/zabuto_calendar.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/admin/jquery.gritter.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/admin/lineicons/style.css')?>">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('css/admin/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/admin/style-responsive.css')?>" rel="stylesheet">

    <script src="<?php echo base_url('js/admin/chart-master/Chart.js')?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Welcome to the ADMIN</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
<<<<<<< HEAD
                                        Hi mate, how is everything?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"></span>
=======
Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
<<<<<<< HEAD
                                     Hi, I need your help with this.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"></span>
=======
Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
<<<<<<< HEAD
                                        Love your new Dashboard.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"></span>
=======
Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
<<<<<<< HEAD
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
=======
Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Najma Mathema</h5>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-dashboard"></i>
                          <span>Products</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('admin/image/index')?>">View list of products</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Categories</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('admin/category/index')?>">View list of categories</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Orders</span>
                      </a>

                      <ul class="sub">
                          <li><a  href="php echo base_url('admin/orders')">View orders</a></li>
                          <li><a  href="login.html">View review</a></li>
                          <li><a  href="lock_screen.html">View orders from phone</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
