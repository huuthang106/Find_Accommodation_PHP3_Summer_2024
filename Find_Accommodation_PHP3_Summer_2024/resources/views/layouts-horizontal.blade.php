<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Horizontal | Simple - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body data-layout="horizontal">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            <header id="topnav">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets\images\flags\us.jpg" alt="user-image" height="12"> <span class="align-middle d-none d-xl-inline-block ml-2">English <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets\images\flags\spain.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets\images\flags\italy.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets\images\flags\french.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">French</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets\images\flags\russia.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
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
                                    <a href="javascript:void(0);" class="dropdown-item text-primary text-center notify-item notify-all">
                                                    View all
                                                    <i class="fi-arrow-right"></i>
                                                </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets\images\users\avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name d-none d-xl-inline-block ml-2">
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
                            <a href="index.html" class="logo text-center">
                                <span class="logo-lg">
                                        <img src="assets\images\logo-light.png" alt="" height="26">
                                        <!-- <span class="logo-lg-text-light">Simple</span> -->
                                </span>
                                <span class="logo-sm">
                                        <!-- <span class="logo-sm-text-dark">S</span> -->
                                <img src="assets\images\logo-sm.png" alt="" height="22">
                                </span>
                            </a>
                        </div>

                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="index.html">
                                        <i class="ti-home"></i>Dashboard
                                    </a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="ti-files"></i>Pages</a>
                                    <ul class="submenu">
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-forget-password.html">Forget Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                                        <li><a href="pages-blank.html">Blank page</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                        <li><a href="pages-session-expired.html">Session Expired</a></li>

                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="ti-spray"></i>Other </a>
                                    <ul class="submenu">
                                        <li><a href="ui-elements.html">UI Elements</a></li>
                                        <li class="has-submenu">
                                            <a href="#">Components <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="components-range-slider.html">Range Slider</a></li>
                                                <li><a href="components-alerts.html">Alerts</a></li>
                                                <li><a href="components-icons.html">Icons</a></li>
                                                <li><a href="components-widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="typography.html">Typography </a></li>

                                        <li class="has-submenu">
                                            <a href="#">Forms <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="forms-general.html">General Elements</a></li>
                                                <li><a href="forms-advanced.html">Advanced Form</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="#">Tables <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                                <li><a href="tables-advanced.html">Advanced Tables</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="charts.html">Charts </a></li>
                                        <li><a href="maps.html"> Maps </a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="ti-widget"></i>Extra Pages </a>
                                    <ul class="submenu">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-calendar.html">Calendar</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-contacts.html">Contacts</a></li>

                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="mdi mdi-flip-horizontal"></i>Layouts</a>
                                    <ul class="submenu">
                                        <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                        <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                                        <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End navigation menu -->

                            <div class="clearfix"></div>
                        </div>
                        <!-- end #navigation -->

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->
            </header>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Welcome !</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="card-box widget-inline">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6 widget-inline-box">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i> <b>8954</b></h2>
                                                    <p class="text-muted mb-0">Lifetime total sales</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-sm-6 widget-inline-box">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>7841</b></h2>
                                                    <p class="text-muted mb-0">Income amounts</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-sm-6 widget-inline-box">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i> <b>6521</b></h2>
                                                    <p class="text-muted mb-0">Total users</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-sm-6">
                                                <div class="text-center p-3">
                                                    <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i> <b>325</b></h2>
                                                    <p class="text-muted mb-0">Total visits</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h5 class="mt-0 font-14">Total Revenue</h5>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Series A</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-muted"></i>Series B</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-bar-stacked" class="morris-chart" dir="ltr" style="height: 300px;"></div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h5 class="mt-0 font-14">Sales Analytics</h5>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Mobiles</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-info"></i>Tablets</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-line-chart" class="morris-chart" dir="ltr" style="height: 300px;"></div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h5 class="mt-0 font-14 mb-3">Contacts</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 95px;">

                                                        <div class="checkbox checkbox-single checkbox-primary">
                                                            <input type="checkbox" class="custom-control-input" id="action-checkbox">
                                                            <label class="custom-control-label" for="action-checkbox">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Products</th>
                                                    <th>Start Date</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary mr-2 float-left">
                                                            <input id="checkbox2" type="checkbox">
                                                            <label for="checkbox2"></label>
                                                        </div>

                                                        <img src="assets\images\users\avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                                    </td>

                                                    <td>
                                                        Tomaslau
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">tomaslau@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>356</b></a>
                                                        </b>
                                                    </td>

                                                    <td>
                                                        01/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary mr-2 float-left">
                                                            <input id="checkbox1" type="checkbox">
                                                            <label for="checkbox1"></label>
                                                        </div>

                                                        <img src="assets\images\users\avatar-1.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                                    </td>

                                                    <td>
                                                        Chadengle
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">chadengle@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>568</b></a>
                                                        </b>
                                                    </td>

                                                    <td>
                                                        01/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary mr-2 float-left">
                                                            <input id="checkbox3" type="checkbox">
                                                            <label for="checkbox3"></label>
                                                        </div>

                                                        <img src="assets\images\users\avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                                    </td>

                                                    <td>
                                                        Stillnotdavid
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">stillnotdavid@dummy.com</a>
                                                    </td>
                                                    <td>
                                                        <b><a href="" class="text-dark"><b>201</b></a>
                                                        </b>
                                                    </td>

                                                    <td>
                                                        12/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary mr-2 float-left">
                                                            <input id="checkbox4" type="checkbox">
                                                            <label for="checkbox4"></label>
                                                        </div>

                                                        <img src="assets\images\users\avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                                    </td>

                                                    <td>
                                                        Kurafire
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">kurafire@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>56</b></a>
                                                        </b>
                                                    </td>

                                                    <td>
                                                        14/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary mr-2 float-left">
                                                            <input id="checkbox5" type="checkbox">
                                                            <label for="checkbox5"></label>
                                                        </div>

                                                        <img src="assets\images\users\avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                                    </td>

                                                    <td>
                                                        Shahedk
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">shahedk@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>356</b></a>
                                                        </b>
                                                    </td>

                                                    <td>
                                                        20/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary mr-2 float-left">
                                                            <input id="checkbox6" type="checkbox">
                                                            <label for="checkbox6"></label>
                                                        </div>

                                                        <img src="assets\images\users\avatar-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                                                    </td>

                                                    <td>
                                                        Adhamdannaway
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">adhamdannaway@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>956</b></a>
                                                        </b>
                                                    </td>

                                                    <td>
                                                        24/11/2003
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
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
                        <img src="assets\images\layouts\light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets\images\layouts\dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets\images\layouts\rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
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
        <script src="assets\js\vendor.min.js"></script>

        <script src="assets\libs\morris-js\morris.min.js"></script>
        <script src="assets\libs\raphael\raphael.min.js"></script>

        <script src="assets\js\pages\dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>

    </body>
</html>