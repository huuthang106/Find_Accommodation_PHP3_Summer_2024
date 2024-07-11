<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Widgets | Simple - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="..\..\public\assets\images\favicon.ico">
        <!-- App css -->
        <link href="..\..\public\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="..\..\public\assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="..\..\public\assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="..\..\public\assets\images\flags\us.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="..\..\public\assets\images\flags\spain.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                             </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="..\..\public\assets\images\flags\italy.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                             </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="..\..\public\assets\images\flags\french.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">French</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="..\..\public\assets\images\flags\russia.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-primary text-center notify-item notify-all ">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="..\..\public\assets\images\users\avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                    Maxine K  <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="..\..\public\assets\images\logo-dark.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-dark">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">S</span> -->
                            <img src="..\..\public\assets\images\logo-sm.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="..\..\public\assets\images\logo-light.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-light">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                            <img src="..\..\public\assets\images\logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">


                <div class="user-box">
                        <div class="float-left">
                            <img src="..\..\public\assets\images\users\avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="user-info">
                            <a href="#">Stanley Jones</a>
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
    
            <!--- Sidemenu -->
            <div id="sidebar-menu">
    
                <ul class="metismenu" id="side-menu">
    
                    <li class="menu-title">Navigation</li>
    
                    <li>
                        <a href="index.html">
                            <i class="ti-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
    
                 
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-light-bulb"></i>
                            <span> Components </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            
                            <li><a href="components-widgets.html">Widgets</a></li>
                        </ul>
                    </li>
    
             
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-menu-alt"></i>
                            <span>  Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-advanced.html">Advanced Tables</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="charts.html">
                            <i class="ti-pie-chart"></i>
                            <span>  Charts  </span>
                            <span class="badge badge-primary float-right">5</span>
                        </a>
                    </li>
    
                 
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-files"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-forget-password.html">Forget Password</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="pages-session-expired.html">Session Expired</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-widget"></i>
                            <span> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-contacts.html">Contacts</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-layout"></i>
                            <span> Layouts </span>
                            <span class="badge badge-danger badge-pill float-right">New</span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                            <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                            <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                        </ul>
                    </li>
    
                   
                </ul>
    
            </div>
            <!-- End Sidebar -->
    
            <div class="clearfix"></div>

    
    </div>
    <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Widgets</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- row start -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-primary float-right">View</a>
                                    <h6 class="text-muted font-13 mt-0 text-uppercase">Product Sold</h6>
                                    <h2 class="mb-3 mt-2"><span>1,890</span></h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-primary float-right">View</a>
                                    <h6 class="text-muted font-13 mt-0 text-uppercase">Average Price</h6>
                                    <h2 class="mb-3 mt-2">$<span>22.56</span></h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-primary float-right">View</a>
                                    <h6 class="text-muted mt-0 font-13 text-uppercase">Orders</h6>
                                    <h2 class="mb-3">9,254</h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                    <h6 class="mt-0 text-dark">Income status</h6>
                                    <h2 class="text-primary text-center mt-4 mb-4">$<span>31570</span></h2>
                                    <p class="text-muted mb-0">Total income: $22506 <span class="float-right"><i class="fa fa-caret-up text-primary mr-1"></i>10.25%</span></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                    <h6 class="mt-0 text-dark">Sales status</h6>
                                    <h2 class="text-pink text-center mt-4 mb-4"><span>683</span></h2>
                                    <p class="mb-0 text-muted">Total sales: 2398 <span class="float-right"><i class="fa fa-caret-down text-danger mr-1"></i>7.85%</span></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-box">
                                    <i class="fa fa-info-circle text-muted float-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                    <h6 class="mt-0 text-dark">Income status</h6>
                                    <h2 class="text-success text-center mt-4 mb-4">$<span>3652</span></h2>
                                    <p class="mb-0 text-muted">Total income: $22506 <span class="float-right"><i class="fa fa-caret-up text-primary mr-1"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">
                                        <div class="col-md-6  col-xl-3 widget-inline-box">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i> <b>8954</b></h2>
                                                <p class="text-muted mb-0">Lifetime total sales</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6  col-xl-3 widget-inline-box">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>7841</b></h2>
                                                <p class="text-muted mb-0">Income amounts</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6  col-xl-3 widget-inline-box">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i> <b>6521</b></h2>
                                                <p class="text-muted mb-0">Total users</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6  col-xl-3">
                                            <div class="text-center p-3">
                                                <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i> <b>325</b></h2>
                                                <p class="text-muted mb-0">Total visits</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="..\..\public\assets\images\users\avatar-3.jpg" class="rounded-circle avatar-xxl img-thumbnail" alt="user-img">
                                        <h5 class="mb-1 mt-2">Oscar Harris</h5>
                                        <p class="text-muted mb-3"><i>Web Designer</i></p>
                                    </div>
                                    <p class="text-muted">In nec rhoncus eros Vestibulum an mattis viverra sometimes magna nec pulvinar. Maecenas pellentesque porta auguesa consectetur facilisis diam poritor purus... <a href="" class="text-primary"><b>Read More</b></a> </p>

                                    <div class="row text-center mt-4">
                                        <div class="col-4">
                                            <h4 class="text-success mb-1">1,507</h4>
                                            <p class="text-muted mb-0">Total Sales</p>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-danger mb-1">916</h4>
                                            <p class="text-muted mb-0">Open Compaign</p>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-warning mb-1">22</h4>
                                            <p class="text-muted mb-0">Daily Sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-info social-feed-box">
                                    <div class="card-body">
                                        <div class="">
                                            <span class="text-uppercase float-right text-white"><b>Latest Tweets</b></span>
                                            <i class="fab fa-twitter fa-2x text-white"></i>
                                        </div>

                                        <div id="twitter-slider" class="carousel slide social-feed-slider" data-ride="carousel">
                                            <ol class="carousel-indicators mb-0">
                                                <li data-target="#twitter-slider" data-slide-to="0" class="active"></li>
                                                <li data-target="#twitter-slider" data-slide-to="1" class=""></li>
                                                <li data-target="#twitter-slider" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="mt-4">
                                                        <h3 class="text-white font-weight-normal font-15">Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin...</h3>
                                                        <span class="font-13 text-white"><small>10 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <h3 class="text-white font-weight-normal font-15">Latin literature from 45 BC,making it over 2000 years old. Contrary to popular belief...</h3>
                                                        <span class="font-13 text-white"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <h3 class="text-white font-weight-normal font-15">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin lit...</h3>
                                                        <span class="font-13 text-white"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="crad bg-primary social-feed-box">
                                    <div class="card-body">
                                        <div class="">
                                            <span class="text-uppercase float-right text-white"><b>Facebook Feed</b></span>
                                            <i class="fab fa-facebook-f fa-2x text-white"></i>
                                        </div>

                                        <div id="facebook-slider" class="carousel slide social-feed-slider" data-ride="carousel">
                                            <ol class="carousel-indicators mb-0">
                                                <li data-target="#facebook-slider" data-slide-to="0" class=""></li>
                                                <li data-target="#facebook-slider" data-slide-to="1" class=""></li>
                                                <li data-target="#facebook-slider" data-slide-to="2" class="active"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <h3 class="text-white font-weight-normal font-15">Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin...</h3>
                                                        <span class="font-13 text-white"><small>10 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <h3 class="text-white font-weight-normal font-15">Latin literature from 45 BC,making it over 2000 years old. Contrary to popular belief...</h3>
                                                        <span class="font-13 text-white"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="carousel-item active">
                                                    <div class="mt-4">
                                                        <h3 class="text-white font-weight-normal font-15">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin lit...</h3>
                                                        <span class="font-13 text-white"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--- end col -->

                            <div class="col-md-4">
                                <div class="card-box pb-0">
                                    <a href="javascript:;" class="mx-auto text-center text-dark" style="display: block;">
                                        <img src="..\..\public\assets\images\users\avatar-4.jpg" class="avatar-xxl center-page img-thumbnail rounded-circle" alt="">
                                        <div class="h5 m-b-0"><strong>Arashas Smith</strong></div>
                                    </a>
                                    <div class="bg-teal pull-in-card p-3 widget-box-two mb-0 mt-4 list-inline text-center row">
                                        <div class="col-4">
                                            <h5 class="text-white m-0">782</h5>
                                            <p class="text-white mb-0">Followers</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0">834</h5>
                                            <p class="text-white mb-0">Following</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0">2907</h5>
                                            <p class="text-white mb-0">Likes</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card panel-default hover-effect">
                                    <div class="card-heading p-0">
                                        <div class="pro-widget-img"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="clearfix col-lg-6 col-md-6 col-sm-6">
                                                <h6 class="mt-0 mb-1">Adhamdannaway</h6>
                                                <p class="text-muted f-16 align-center mb-0">Photographer</p>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="text-center">
                                                            <i class="mdi mdi-comment-processing"></i>
                                                        </div>
                                                        <div class="text-center">
                                                            1568
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-center">
                                                            <i class="mdi mdi-thumb-up text-success"></i>
                                                        </div>
                                                        <div class="text-center">
                                                            866
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="text-center">
                                                            <i class="mdi mdi-heart text-danger"></i>
                                                        </div>
                                                        <div class="text-center">
                                                            254
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                    

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    2017 - 2020 &copy; Simple theme by <a href="">Coderthemes</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div>
                <!-- end content -->

            </div>
            <!-- END content-page -->

        </div>
        <!-- END wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="..\..\public\assets\images\layouts\light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="..\..\public\assets\images\layouts\dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="..\..\public\assets/css/bootstrap-dark.min.css" data-appstyle="..\..\public\assets/css/app-dark.min.css">
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="..\..\public\assets\images\layouts\rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="..\..\public\assets/css/app-rtl.min.css">
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
        </a>

        <!-- Vendor js -->
        <script src="..\..\public\assets\js\vendor.min.js"></script>

        <!-- App js -->
        <script src="..\..\public\assets\js\app.min.js"></script>

    </body>

</html>