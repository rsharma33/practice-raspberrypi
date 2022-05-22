<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo $cfg['baseurl']; ?>">Raspberry Pi 3</a>
                <a class="navbar-brand hidden" href="<?php echo $cfg['baseurl']; ?>">Raspberry Pi 3</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo $cfg['baseurl']; ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-buttons.php">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-badges.php">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-tabs.php">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-social-buttons.php">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-cards.php">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="layouts/ui-alerts.php">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-progressbar.php">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-modals.php">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-switches.php">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-grids.php">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/ui-typgraphy.php">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/tables-basic.php">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/tables-data.php">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/forms-basic.php">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/forms-advanced.php">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/font-fontawesome.php">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/font-themify.php">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.php"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/charts-chartjs.php">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/charts-flot.php">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/charts-peity.php">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/maps-gmap.php">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/maps-vector.php">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/page-login.php">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/page-register.php">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo $cfg['baseurl']; ?>layouts/pages-forget.php">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>