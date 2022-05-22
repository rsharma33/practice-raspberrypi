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
    <style>
        body{ font-family: Arial;  }
        .leftbox, .rightbox{ float: left; padding: 1%;}
        .leftbox{ margin-right: 0; width: 804px; padding-right: 0;}
        .rightbox{ width: 30%;  padding-left: 0; padding-top: 35px;}

        .gpiostatus{ width: 100%; border: 1px solid #ffffff; }
        .gpiostatus td{ color: #ffffff; font-weight: bold; text-align: center; text-shadow: 0px 0px 3px #000; font-size: 13px; padding: 5px 0px; position: relative;}
        .gpiostatus .lbl{  }
        .gpiostatus .num{ width: 20px; background: #808080; }
        .gpiostatus .num.on{ background: #03bf03;}
        .gpiostatus .num.off{ background: #808080; }

        .green{ background: #03bf03; }
        .yellow{ background: #ffd42a;}
        .orange{ background: #ff6600;}
        .red{ background: #dc0505;}
        .black{ background: #000000;}
        .blue{ background: #0bb4ce;}
        .pink{ background: #ed14fb;}
        .grey{ background: #808080;}

        .submitBtn{ padding: 5px; width: 20px; text-indent: -200px; border: 0px; background: none;  position: absolute; top: 0px; left: 0px; cursor: pointer; outline: none;}
    </style>
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
                <div class="card" >
                    <div class="card-header">
                        <h4>GPIO Status</h4>
                    </div>
                    <div class="card-body">
                        <?php
                             $status = array(0);
                             exec("gpio read 17", $status);
                             //print_r( $status );

                            $pinnumber = $_GET['pin'];
                            function togglee($pinnum){
                                if(isset($_GET['pin'])=="17"){
                                    shell_exec("/usr/local/bin/gpio -g mode ".$pinnum." out");
                                    $gpio_on = shell_exec("/usr/local/bin/gpio -g read ".$pinnum);
                                    if ($gpio_on==0) {
                                        //echo "0";
                                        shell_exec("/usr/local/bin/gpio -g write ".$pinnum." 1");
                                    }else{
                                        //echo "1";
                                        shell_exec("/usr/local/bin/gpio -g write ".$pinnum." 0"); 
                                    }
                                }
                            }
                            function gpiostatus($pin_num){
                                $gpio_on = shell_exec("/usr/local/bin/gpio -g read ".$pin_num);
                                if($gpio_on==1){
                                    echo "on";
                                }else{
                                    echo "off";
                                }
                            }

                            togglee($pinnumber);
                        ?>

                        <div class="col-md-6"><img src="<?php echo $cfg['imgurl']; ?>/gpio-pins-rpi3.png" alt="GPIO Pins RaspBerryPi3" /></div>

                        <div class="col-md-6">
                            <form method="get" action="gpio-status.php">
                                <table class="gpiostatus" border="1" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td class="lbl yellow">3.3v PWR</td>
                                    <td class="num">1</td>
                                    <td style="width: 15px;"></td>
                                    <td class="num">2</td>
                                    <td class="lbl red">5.5v PWR</td>
                                </tr>
                                <tr>
                                    <td class="lbl blue">I2C1 SDA</td>
                                    <td class="num">3</td>
                                    <td></td>
                                    <td class="num">4</td>
                                    <td class="lbl red">5.5v PWR</td>
                                </tr>
                                <tr>
                                    <td class="lbl blue">I2C1 SCL</td>
                                    <td class="num">5</td>
                                    <td></td>
                                    <td class="num">6</td>
                                    <td class="lbl black">GND</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 4</td>
                                    <td class="num <?php gpiostatus("4") ?>"><input type="submit" value="4" name="pin" class="submitBtn">7</td>
                                    <td></td>
                                    <td class="num">8</td>
                                    <td class="lbl green">UART0 TX</td>
                                </tr>
                                <tr>
                                    <td class="lbl black">GND</td>
                                    <td class="num">9</td>
                                    <td></td>
                                    <td class="num">10</td>
                                    <td class="lbl green">UART0 RX</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 17</td>
                                    <td class="num <?php gpiostatus("17"); ?>"><input type="submit" value="17" name="pin" class="submitBtn">11</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("18"); ?>"><input type="submit" value="18" name="pin" class="submitBtn">12</td>
                                    <td class="lbl orange">GPIO 18</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 27</td>
                                    <td class="num <?php gpiostatus("27") ?>"><input type="submit" value="27" name="pin" class="submitBtn">13</td>
                                    <td></td>
                                    <td class="num">14</td>
                                    <td class="lbl black">GND</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 22</td>
                                    <td class="num <?php gpiostatus("22") ?>"><input type="submit" value="22" name="pin" class="submitBtn">15</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("23") ?>"><input type="submit" value="23" name="pin" class="submitBtn">16</td>
                                    <td class="lbl orange">GPIO 23</td>
                                </tr>
                                <tr>
                                    <td class="lbl yellow">3.3v PWR</td>
                                    <td class="num">17</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("24") ?>"><input type="submit" value="24" name="pin" class="submitBtn">18</td>
                                    <td class="lbl orange">GPIO 24</td>
                                </tr>
                                <tr>
                                    <td class="lbl pink">SPI0 MOSI</td>
                                    <td class="num">19</td>
                                    <td></td>
                                    <td class="num">20</td>
                                    <td class="lbl black">GND</td>
                                </tr>
                                <tr>
                                    <td class="lbl pink">SPI0 MISO</td>
                                    <td class="num">21</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("25") ?>"><input type="submit" value="25" name="pin" class="submitBtn">22</td>
                                    <td class="lbl orange">GPIO 25</td>
                                </tr>
                                <tr>
                                    <td class="lbl pink">SPI0 SCLK</td>
                                    <td class="num">23</td>
                                    <td></td>
                                    <td class="num">24</td>
                                    <td class="lbl pink">SPI0 CS0</td>
                                </tr>
                                <tr>
                                    <td class="lbl black">GND</td>
                                    <td class="num">25</td>
                                    <td></td>
                                    <td class="num">26</td>
                                    <td class="lbl pink">SPI0 CS1</td>
                                </tr>
                                <tr>
                                    <td class="lbl grey">Reserved</td>
                                    <td class="num">27</td>
                                    <td></td>
                                    <td class="num">28</td>
                                    <td class="lbl grey">Reserved</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 5</td>
                                    <td class="num <?php gpiostatus("5") ?>"><input type="submit" value="5" name="pin" class="submitBtn">29</td>
                                    <td></td>
                                    <td class="num">30</td>
                                    <td class="lbl black">GND</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 6</td>
                                    <td class="num <?php gpiostatus("6") ?>"><input type="submit" value="6" name="pin" class="submitBtn">31</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("12") ?>"><input type="submit" value="12" name="pin" class="submitBtn">32</td>
                                    <td class="lbl orange">GPIO 12</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 13</td>
                                    <td class="num <?php gpiostatus("13") ?>"><input type="submit" value="13" name="pin" class="submitBtn">33</td>
                                    <td></td>
                                    <td class="num">34</td>
                                    <td class="lbl black">GND</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 19</td>
                                    <td class="num <?php gpiostatus("19") ?>"><input type="submit" value="19" name="pin" class="submitBtn">35</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("16") ?>"><input type="submit" value="16" name="pin" class="submitBtn">36</td>
                                    <td class="lbl orange">GPIO 16</td>
                                </tr>
                                <tr>
                                    <td class="lbl orange">GPIO 26</td>
                                    <td class="num <?php gpiostatus("26") ?>"><input type="submit" value="26" name="pin" class="submitBtn">37</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("20") ?>"><input type="submit" value="20" name="pin" class="submitBtn">38</td>
                                    <td class="lbl orange">GPIO 20</td>
                                </tr>
                                <tr>
                                    <td class="lbl black">GND</td>
                                    <td class="num">39</td>
                                    <td></td>
                                    <td class="num <?php gpiostatus("21") ?>"><input type="submit" value="21" name="pin" class="submitBtn">40</td>
                                    <td class="lbl orange">GPIO 21</td>
                                </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
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

</body>
</html>
