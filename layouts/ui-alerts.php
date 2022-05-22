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
                            <li><a href="#">UI Elements</a></li>
                            <li class="active">Alerts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                    <div class="alerts">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Alerts</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-primary" role="alert">
                                            This is a primary alert—check it out!
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            This is a secondary alert—check it out!
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            This is a success alert—check it out!
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            This is a danger alert—check it out!
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            This is a warning alert—check it out!
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            This is a info alert—check it out!
                                        </div>
                                        <div class="alert alert-light" role="alert">
                                            This is a light alert—check it out!
                                        </div>
                                        <div class="alert alert-dark" role="alert">
                                            This is a dark alert—check it out!
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Link Color Alerts</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-primary" role="alert">
                                            This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-light" role="alert">
                                            This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-dark" role="alert">
                                            This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="col-md-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Dismissing Alerts</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                            <span class="badge badge-pill badge-primary">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                                            <span class="badge badge-pill badge-secondary">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                            <span class="badge badge-pill badge-danger">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                                            <span class="badge badge-pill badge-warning">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                                            <span class="badge badge-pill badge-info">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="sufee-alert alert with-close alert-light alert-dismissible fade show">
                                            <span class="badge badge-pill badge-light">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="sufee-alert alert with-close alert-dark alert-dismissible fade show">
                                            <span class="badge badge-pill badge-dark">Success</span>
                                                You successfully read this important alert.
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Contents</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                            <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                        </div>

                                        <div class="alert alert-warning" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                            <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                        </div>

                                        <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                            <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div> <!-- .alerts -->


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo $cfg['baseurl']; ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/popper.min.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/plugins.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/main.js"></script>


</body>
</html>
