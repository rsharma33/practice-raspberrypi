<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php include('../config.php'); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/scss/widgets.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->
    <?php include('../common/leftpanel_layouts.php'); ?><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include('../common/header_layouts.php'); ?><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Widgets</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">


                    <div class="col-md-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">10468</span>
                                </h4>
                                <p class="text-light">Members online</p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                                    <canvas id="widgetChart1"></canvas>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card text-white bg-flat-color-2">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">10468</span>
                                </h4>
                                <p class="text-light">Members online</p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                                    <canvas id="widgetChart2"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card text-white bg-flat-color-3">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">10468</span>
                                </h4>
                                <p class="text-light">Members online</p>

                            </div>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                                    <canvas id="widgetChart3"></canvas>
                                </div>
                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card text-white bg-flat-color-4">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">10468</span>
                                </h4>
                                <p class="text-light">Members online</p>

                                <div class="chart-wrapper px-3" style="height:70px;" height="70"/>
                                    <canvas id="widgetChart4"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/.col-->


                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Projects</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Referrals</div>
                                        <div class="stat-digit">2,781</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-server text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Database</div>
                                            <div class="stat-text">Total: 765</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-user text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Users</div>
                                            <div class="stat-text">Total: 24720</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-stats-up text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Daily Sales</div>
                                            <div class="stat-text">Total: $76,58,714</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-pulse text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Bandwidth</div>
                                            <div class="stat-text">Total: 4TB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-flat-color-1 text-light">
                            <div class="card-body">
                                <div class="h4 m-0">89.9%</div>
                                <div>Lorem ipsum...</div>
                                <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
                            </div>
                        </div>
                    </div><!--/.col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-flat-color-3 text-light">
                            <div class="card-body">
                                <div class="h4 m-0">12.124</div>
                                <div>Lorem ipsum...</div>
                                <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
                            </div>
                        </div>
                    </div><!--/.col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-flat-color-4 text-light">
                            <div class="card-body">
                                <div class="h4 m-0">$98.111,00</div>
                                <div>Lorem ipsum...</div>
                                <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
                            </div>
                        </div>
                    </div><!--/.col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-flat-color-2 text-light">
                            <div class="card-body">
                                <div class="h4 m-0">$98.111,00</div>
                                <div>Lorem ipsum...</div>
                                <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <small class="text-light">Lorem ipsum dolor sit amet enim.</small>
                            </div>
                        </div>
                    </div><!--/.col-->




                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-bell bg-danger p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                                <div class="b-b-1 pt-3"></div>
                                <hr>
                                <div class="more-info pt-2" style="margin-bottom:-10px;">
                                    <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                                <div class="b-b-1 pt-3"></div>
                                <hr>
                                <div class="more-info pt-2" style="margin-bottom:-10px;">
                                    <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                                <div class="b-b-1 pt-3"></div>
                                <hr>
                                <div class="more-info pt-2" style="margin-bottom:-10px;">
                                    <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <i class="fa fa-bell bg-danger p-3 font-2xl mr-3 float-left text-light"></i>
                                    <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                                </div>
                                <div class="b-b-1 pt-3"></div>
                                <hr>
                                <div class="more-info pt-2" style="margin-bottom:-10px;">
                                    <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->





                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="p-0 clearfix">
                                <i class="fa fa-cogs bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-primary mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-0 clearfix">
                                <i class="fa fa-laptop bg-info p-4 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-info mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="p-0 clearfix">
                                <i class="fa fa-moon-o bg-warning p-4 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-warning mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="p-0 clearfix">
                                <i class="fa fa-bell bg-danger p-4 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-danger mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="p-0 clearfix">
                                <i class="fa fa-cogs bg-primary p-4 px-5 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-primary mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="p-0 clearfix">
                                <i class="fa fa-laptop bg-info p-4 px-5 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-info mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="p-0 clearfix">
                                <i class="fa fa-moon-o bg-warning p-4 px-5 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-warning mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="p-0 clearfix">
                                <i class="fa fa-bell bg-danger p-4 px-5 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-danger mb-0 pt-3">$1.999,50</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->




                    <div class="col-lg-3 col-md-6">
                        <div class="social-box facebook">
                            <i class="fa fa-facebook"></i>
                            <ul>
                                <li>
                                    <sctrong><span class="count">40</span> k</strong>
                                    <span>friends</span>
                                </li>
                                <li>
                                    <sctrong><span class="count">450</span></strong>
                                    <span>feeds</span>
                                </li>
                            </ul>
                        </div>
                        <!--/social-box-->
                    </div><!--/.col-->


                    <div class="col-lg-3 col-md-6">
                        <div class="social-box twitter">
                            <i class="fa fa-twitter"></i>
                            <ul>
                                <li>
                                    <sctrong><span class="count">30</span> k</strong>
                                    <span>friends</span>
                                </li>
                                <li>
                                    <sctrong><span class="count">450</span></strong>
                                    <span>tweets</span>
                                </li>
                            </ul>
                        </div>
                        <!--/social-box-->
                    </div><!--/.col-->


                    <div class="col-lg-3 col-md-6">
                        <div class="social-box linkedin">
                            <i class="fa fa-linkedin"></i>
                            <ul>
                                <li>
                                    <sctrong><span class="count">40</span> +</strong>
                                    <span>contacts</span>
                                </li>
                                <li>
                                    <sctrong><span class="count">250</span></strong>
                                    <span>feeds</span>
                                </li>
                            </ul>
                        </div>
                        <!--/social-box-->
                    </div><!--/.col-->


                    <div class="col-lg-3 col-md-6">
                        <div class="social-box google-plus">
                            <i class="fa fa-google-plus"></i>
                            <ul>
                                <li>
                                    <sctrong><span class="count">894</span> k</strong>
                                    <span>followers</span>
                                </li>
                                <li>
                                    <sctrong><span class="count">92</span></strong>
                                    <span>circles</span>
                                </li>
                            </ul>
                        </div>
                        <!--/social-box-->
                    </div><!--/.col-->


                    <div class="col-sm-12 mb-4">
                        <div class="card-group">
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-users"></i>
                                    </div>

                                    <div class="h4 mb-0">
                                        <span class="count">87500</span>
                                    </div>

                                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">385</span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-cart-plus"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">1238</span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">28</span>%
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="h4 mb-0">5:34:11</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">972</span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 mb-4">
                        <div class="card-group">
                            <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-users text-light"></i>
                                    </div>

                                    <div class="h4 mb-0 text-light">
                                        <span class="count">87500</span>
                                    </div>
                                    <small class="text-uppercase font-weight-bold text-light">Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-2">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-user-plus text-light"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="count">385</span>
                                    </div>
                                    <small class="text-uppercase font-weight-bold text-light">New Clients</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-3">
                                    <div class="h1 text-right mb-4">
                                        <i class="fa fa-cart-plus text-light"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="count">1238</span>
                                    </div>
                                    <small class="text-light text-uppercase font-weight-bold">Products sold</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-5">
                                    <div class="h1 text-right text-light mb-4">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="count">28</span>%
                                    </div>
                                    <small class="text-uppercase font-weight-bold text-light">Returning Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-4">
                                    <div class="h1 text-light text-right mb-4">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">5:34:11</div>
                                    <small class="text-light text-uppercase font-weight-bold">Avg. Time</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-1">
                                    <div class="h1 text-light text-right mb-4">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <div class="h4 mb-0 text-light">
                                        <span class="count">972</span>
                                    </div>
                                    <small class="text-light text-uppercase font-weight-bold">COMMENTS</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-4 col-md-6">
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="<?php echo $cfg['imgurl']; ?>/admin.jpg">
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6">Jim Doe</h2>
                                            <p>Project Manager</p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-cog"></i> Settings</a>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo $cfg['imgurl']; ?>/admin.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> California, United States</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <section class="card">
                            <div class="twt-feed blue-bg">
                                <div class="corner-ribon black-ribon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="fa fa-twitter wtt-mark"></div>

                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="<?php echo $cfg['imgurl']; ?>/admin.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-white display-6">Jim Doe</h2>
                                        <p class="text-light">Project Manager</p>
                                    </div>
                                </div>



                            </div>
                            <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        <h5>750</h5>
                                        Tweets
                                    </li>
                                    <li>
                                        <h5>865</h5>
                                        Following
                                    </li>
                                    <li>
                                        <h5>3645</h5>
                                        Followers
                                    </li>
                                </ul>
                            </div>
                            <div class="twt-write col-sm-12">
                                <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                            </div>
                            <footer class="twt-footer">
                                <a href="#"><i class="fa fa-camera"></i></a>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                                New Castle, UK
                                <span class="pull-right">
                                    32
                                </span>
                            </footer>
                        </section>
                    </div>





                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->




    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo $cfg['baseurl']; ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/popper.min.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/plugins.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/widgets.js"></script>

</body>
</html>
