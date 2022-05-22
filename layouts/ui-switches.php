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
                            <li class="active">Switches</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">



                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="mr-2 fa fa-check-square-o"></i>
                            <strong class="card-title">3d Switch</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-3d switch-secondary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-3d switch-success mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-3d switch-warning mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-3d switch-info mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-3d switch-danger mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                        </div>
                    </div>
                </div><!--/.col-->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch Default</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-default switch-primary mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-default switch-secondary mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-default switch-success mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-default switch-warning mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-default switch-info mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            <label class="switch switch-default switch-danger mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                        </div>
                    </div>
                </div><!--/.col-->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch Default - Pills</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-default switch-pill switch-primary mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-pill switch-secondary mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-pill switch-success mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-pill switch-warning mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-pill switch-info mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-pill switch-danger mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                        </div>
                    </div>
                </div><!--/.col-->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch Outline</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-default switch-primary-outline mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-secondary-outline mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-success-outline mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-warning-outline mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-info-outline mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-danger-outline mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                        </div>
                    </div>
                </div><!--/.col-->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch Outline - Pills</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-default switch-primary-outline switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-secondary-outline switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-success-outline switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-warning-outline switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-info-outline switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-danger-outline switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                        </div>
                    </div>
                </div><!--/.col-->




                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch Outline Alternative</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-default switch-primary-outline-alt mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-secondary-outline-alt mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-success-outline-alt mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-warning-outline-alt mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-info-outline-alt mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-danger-outline-alt mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                        </div>
                    </div>
                </div><!--/.col-->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch Outline Alternative - Pills</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-default switch-primary-outline-alt switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-secondary-outline-alt switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-success-outline-alt switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-warning-outline-alt switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-info-outline-alt switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-default switch-danger-outline-alt switch-pill mr-2"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                        </div>
                    </div>
                </div><!--/.col-->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch with Text</strong>
                        </div>
                        <div class="card-body">
                            <label class="switch switch-text switch-primary"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-secondary"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-success"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-warning"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-info"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-danger"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                        </div>
                    </div>
                </div><!--/.col-->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Switch with Text - Pills</strong>
                        </div>
                        <div class="card-body">

                            <label class="switch switch-text switch-primary switch-pill"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-secondary switch-pill"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-success switch-pill"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-warning switch-pill"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-info switch-pill"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                            <label class="switch switch-text switch-danger switch-pill"><input type="checkbox" class="switch-input" checked="true"> <span data-on="On" data-off="Off" class="switch-label"></span> <span class="switch-handle"></span></label>

                        </div>
                    </div>
                </div><!--/.col-->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title" v-if="headerText">Sizes</strong>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover table-striped table-align-middle mb-0">
                                <thead>
                                    <th>Size</th>
                                    <th>Example</th>
                                    <th>CSS Class</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <basix-switch type="3d" variant="primary" size="lg" :checked="true"/>
                                        </td>
                                        <td>
                                            Add following code <code>size="lg"</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Default
                                        </td>
                                        <td>
                                            <basix-switch type="3d" variant="primary" :checked="true"/>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Small
                                        </td>
                                        <td>
                                            <basix-switch type="3d" variant="primary" size="sm" :checked="true"/>
                                        </td>
                                        <td>
                                            Add following code <code>size="sm"</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Extra small
                                        </td>
                                        <td>
                                            <basix-switch type="3d" variant="primary" size="xs" :checked="true"/>
                                        </td>
                                        <td>
                                            Add following code <code>size="xs"</code>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--/.col-->



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
