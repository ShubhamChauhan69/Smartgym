<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gym managment - Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="image\logo.jpg">
    <link rel="shortcut icon" href="image\logo.jpg">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../image/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="image/logo.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="home.php"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="admin.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-themify-logo"></i>Admin</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="admin.php">View</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="admininsert.php">Insert</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="changepassword.php">Change Password</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="packageshow.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-themify-logo"></i>Package</a>
                        <ul class="sub-menu children active dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="packageshow.php">View</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="packageinsert.php">Insert</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="trainer.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-themify-logo"></i>Trainer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="trainer.php">View</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="trainerinsert.php">Insert</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="member.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-themify-logo"></i>Member</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="member.php">View</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="memberinsert.php">Insert</a></li>
                        </ul>
                    </li>

                

                    
                    <li class="menu-item-has-children dropdown">
                        <a href="product.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-themify-logo"></i>Product</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="product.php">View</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="productinsert.php">Insert</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="batch.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-themify-logo"></i>Batch</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="batch.php">View</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="batchinsert.php">Insert</a></li>
                            
                        </ul>
                    </li>

                    

                    <li class="menu-item-has-children dropdown">
                        <a href="Tips.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-themify-logo"></i>Tips</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="tips.php">View</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="tipsinsert.php">Insert</a></li>
                        </ul>
                    </li>
                    
                    <li class="active">
                        <a href="order.php" class="active"> <i class="menu-icon fa fa-tasks"></i>Order</a>
                    
                    </li>
                    <li class="active">
                        <a href="memberattendance.php" class="active"> <i class="menu-icon fa fa-tasks"></i>Member Attendance</a>
                    
                    </li>
                    <li class="active">
                        <a href="report.php" class="active"> <i class="menu-icon fa fa-tasks"></i>Report</a>
                    
                    </li>
                    <li class="active">
                        <a href="/prj/home.php" class="active"> <i class="menu-icon fa fa-tasks"></i>Logout</a>
                    
                    </li>

                <!--    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li> -->
                <!--    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                 <!--   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul> 
                    </li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="form-inline">
                        GYM
                        </div>

                        <div class="dropdown for-notification">
                            <div class="dropdown-menu" aria-labelledby="notification">
                            </a>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <div class="dropdown-menu" aria-labelledby="message">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                                            </div>

                    <div class="language-select dropdown" id="language-select">
                        
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

     <!--   <div class="breadcrumbs">
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
                            <li class="active">Buttons</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="content mt-3">
           