<?php ob_start(); ?>
<header class="site-header">
    <div class="container-fluid">
        <a href="https://pi-bi.io/pwi/dashboard" class="site-logo" style="">
            <span style="font-size: 27px;color:#fff;font-weight: bold;"><span style=""><?php echo ($user_data['access_type'] > 8) ? 'PI-BI Admin':'PI-BI';?></span>  <small style="font-size: 19px;"><sub><small>v.1.6</small></sub></small></span>
        </a>


        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>



        <div class="site-header-content">


            <div class="site-header-content-in " style="margin-top:-32px;">


                <div class="site-header-shown">


                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://pi-bi.io/img/avatar-1-64.png" alt=""><span style="color: #fff;"> <strong><?php echo $user_data['name'];?></strong></span>

                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="settings.php"><span class="font-icon glyphicon glyphicon-user"></span>Account Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                        </div>
                    </div>

                    <button type="button" class="burger-right">
                        <i class="font-icon-menu-addl"></i>
                    </button>
                </div><!--.site-header-shown-->

                <div class="mobile-menu-right-overlay"></div>
                <!--.site-header-collapsed-->
            </div><!--site-header-content-in-->
        </div><!--.site-header-content-->
    </div><!--.container-fluid-->
</header><!--.site-header-->

<style>

    .active_menu{

        background-color:#22252C; border-left:5px solid #8bdc03;
    }

    .active_menu_sub{
        background-color: #616675; border-left:5px solid #8BAEBD;color:#fff!important;
    }
    .active_menu_sub a{
        background-color: #616675; border-left:5px solid white;color:#fff!important;
    }

    .side-menu-list li:hover .fa{
        color:#4d407c!important;
    }
    .opened .fa{
        color:red!important;

    }


    .drop li{
        color: #6C6C6C;
    }


    .drop li a{
        color: #304B58; font-weight: 500;
    }


</style>