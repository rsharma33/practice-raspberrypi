<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php include('config.php'); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Raspberry Pi 3 - Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo $cfg['baseurl']; ?>apple-icon.png">
    <link rel="shortcut icon" href="<?php echo $cfg['baseurl']; ?>favicon.ico">

    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo $cfg['baseurl']; ?>assets/scss/style.css">
    <link href="<?php echo $cfg['baseurl']; ?>assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
</head>
<body>
    <!-- Left Panel -->
    <?php include('common/leftpanel.php'); ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include('common/header.php'); ?><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-xl-12">
                <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">SoC temperature is</div>
                                        <div class="stat-digit">
                                            <?php
                                             $f = fopen("/sys/class/thermal/thermal_zone0/temp","r");
                                             $temp = fgets($f);
                                             echo round($temp/1000)."°C";
                                             fclose($f);
                                            ?>
                                            <?php
                                                $gpio6 = fopen("/sys/class/gpio/gpio139/value", "rb");
                                                $outval = fgets($gpio6);
                                                echo 'test: '.$outval;
                                                fclose($gpio6);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">UPTIME</div>
                                        <div class="stat-digit">
                                            <?php
                                                echo shell_exec("uptime");
                                                // help URL below
                                                // https://helloacm.com/use-php-script-to-monitor-temperature-and-uptime-for-raspberry-pi-in-the-browser/
                                            ?>
                                            
                                            <?php
                                                echo "Confirming which user apache is running as: ".exec('whoami');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo $cfg['baseurl']; ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/plugins.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/main.js"></script>


    <script src="<?php echo $cfg['baseurl']; ?>assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/dashboard.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/widgets.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo $cfg['baseurl']; ?>assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";
            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    <style>
        .navbar a.navbar-brand:link, a:link{ background: none !important; }
    </style>
</body>
</html>
