<html>
<head>
 <meta name="viewport" content="width=device-width" />
 <title>LED Control</title> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{ font-family: Arial;  }
        .leftbox, .rightbox{ float: left; padding: 1%;}
        .leftbox{ margin-right: 0; width: 804px; padding-right: 0;}
        .rightbox{ width: 30%;  padding-left: 0; padding-top: 35px;}

        .gpiostatus{ width: 100%; border: 1px solid #000000; }
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
<?php
     $status = array(0);
     exec("gpio read 17", $status);
     print_r( $status );

    $pinnumber = $_GET['pin'];
    function togglee($pinnum){
        if(isset($_GET['pin'])=="17"){
            shell_exec("/usr/local/bin/gpio -g mode ".$pinnum." out");

            $gpio_on = shell_exec("/usr/local/bin/gpio -g read ".$pinnum);

            if ($gpio_on==0) {
                echo "0";
                shell_exec("/usr/local/bin/gpio -g write ".$pinnum." 1");
            }else{
                echo "1";
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


<div class="leftbox"><img src="images/gpio-pins-rpi3.png" alt="GPIO Pins RaspBerryPi3" /></div>

<div class="rightbox">
    <form method="get" action="gpio-status.php">
        <table class="gpiostatus" border="0" cellpadding="0" cellspacing="1">
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
</body>
</html>