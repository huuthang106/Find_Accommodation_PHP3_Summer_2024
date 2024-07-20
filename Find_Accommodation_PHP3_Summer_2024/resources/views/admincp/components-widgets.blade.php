@extends('layouts.app')
@section('content')
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
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                aria-valuemax="100" style="width: 77%;">
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
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                aria-valuemax="100" style="width: 77%;">
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
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                aria-valuemax="100" style="width: 77%;">
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
                        <i class="fa fa-info-circle text-muted float-right inform" data-toggle="tooltip"
                            data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                        <h6 class="mt-0 text-dark">Income status</h6>
                        <h2 class="text-primary text-center mt-4 mb-4">$<span>31570</span></h2>
                        <p class="text-muted mb-0">Total income: $22506 <span class="float-right"><i
                                    class="fa fa-caret-up text-primary mr-1"></i>10.25%</span></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box">
                        <i class="fa fa-info-circle text-muted float-right inform" data-toggle="tooltip"
                            data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                        <h6 class="mt-0 text-dark">Sales status</h6>
                        <h2 class="text-pink text-center mt-4 mb-4"><span>683</span></h2>
                        <p class="mb-0 text-muted">Total sales: 2398 <span class="float-right"><i
                                    class="fa fa-caret-down text-danger mr-1"></i>7.85%</span></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box">
                        <i class="fa fa-info-circle text-muted float-right inform" data-toggle="tooltip"
                            data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                        <h6 class="mt-0 text-dark">Income status</h6>
                        <h2 class="text-success text-center mt-4 mb-4">$<span>3652</span></h2>
                        <p class="mb-0 text-muted">Total income: $22506 <span class="float-right"><i
                                    class="fa fa-caret-up text-primary mr-1"></i>10.25%</span></p>
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
                                    <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i>
                                        <b>8954</b>
                                    </h2>
                                    <p class="text-muted mb-0">Lifetime total sales</p>
                                </div>
                            </div>

                            <div class="col-md-6  col-xl-3 widget-inline-box">
                                <div class="text-center p-3">
                                    <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i>
                                        <b>7841</b>
                                    </h2>
                                    <p class="text-muted mb-0">Income amounts</p>
                                </div>
                            </div>

                            <div class="col-md-6  col-xl-3 widget-inline-box">
                                <div class="text-center p-3">
                                    <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i>
                                        <b>6521</b>
                                    </h2>
                                    <p class="text-muted mb-0">Total users</p>
                                </div>
                            </div>

                            <div class="col-md-6  col-xl-3">
                                <div class="text-center p-3">
                                    <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i>
                                        <b>325</b>
                                    </h2>
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
                            <img src="assets\images\users\avatar-3.jpg" class="rounded-circle avatar-xxl img-thumbnail"
                                alt="user-img">
                            <h5 class="mb-1 mt-2">Oscar Harris</h5>
                            <p class="text-muted mb-3"><i>Web Designer</i></p>
                        </div>
                        <p class="text-muted">In nec rhoncus eros Vestibulum an mattis viverra sometimes magna
                            nec pulvinar. Maecenas pellentesque porta auguesa consectetur facilisis diam poritor
                            purus... <a href="" class="text-primary"><b>Read More</b></a> </p>

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
                                            <h3 class="text-white font-weight-normal font-15">Contrary to
                                                popular belief, Lorem Ipsum is not simply random text piece of
                                                classical Latin...</h3>
                                            <span class="font-13 text-white"><small>10 March,
                                                    2017</small></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="mt-4">
                                            <h3 class="text-white font-weight-normal font-15">Latin literature
                                                from 45 BC,making it over 2000 years old. Contrary to popular
                                                belief...</h3>
                                            <span class="font-13 text-white"><small>6 March,
                                                    2017</small></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="mt-4">
                                            <h3 class="text-white font-weight-normal font-15">Lorem Ipsum is
                                                not simply random text. It has roots in a piece of classical
                                                Latin lit...</h3>
                                            <span class="font-13 text-white"><small>6 March,
                                                    2017</small></span>
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
                                            <h3 class="text-white font-weight-normal font-15">Contrary to
                                                popular belief, Lorem Ipsum is not simply random text piece of
                                                classical Latin...</h3>
                                            <span class="font-13 text-white"><small>10 March,
                                                    2017</small></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="mt-4">
                                            <h3 class="text-white font-weight-normal font-15">Latin literature
                                                from 45 BC,making it over 2000 years old. Contrary to popular
                                                belief...</h3>
                                            <span class="font-13 text-white"><small>6 March,
                                                    2017</small></span>
                                        </div>
                                    </div>
                                    <div class="carousel-item active">
                                        <div class="mt-4">
                                            <h3 class="text-white font-weight-normal font-15">Lorem Ipsum is
                                                not simply random text. It has roots in a piece of classical
                                                Latin lit...</h3>
                                            <span class="font-13 text-white"><small>6 March,
                                                    2017</small></span>
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
                            <img src="assets\images\users\avatar-4.jpg"
                                class="avatar-xxl center-page img-thumbnail rounded-circle" alt="">
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
@endsection
@push('styles')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo3.png') }}">
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }} "rel="stylesheet" type="text/css">
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-admin.css') }}" type="text/css" id='styleadmin-stylesheet'>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
@endpush

@push('scripts')
    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('assets/js/pages/morris.init.js') }}"></script>

    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.axislabels.js') }}"></script>

    <!-- KNOB JS -->
    <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/flot.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('assets\js\pages\datatables.init.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets\libs\datatables\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets\libs\datatables\dataTables.bootstrap4.min.js') }}"></script>
@endpush
