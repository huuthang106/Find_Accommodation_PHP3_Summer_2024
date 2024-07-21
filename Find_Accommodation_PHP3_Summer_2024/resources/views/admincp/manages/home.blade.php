@extends('layouts.app')
@section('titleAdmin', 'Bảng Điều Khiển | TÌM TRỌ')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content">

        <!-- Start container-fluid -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Chào mừng !</h4>
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
                                        <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i>
                                            <b>8954</b>
                                        </h2>
                                        <p class="text-muted mb-0">Lifetime total sales</p>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6 widget-inline-box">
                                    <div class="text-center p-3">
                                        <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i>
                                            <b>7841</b>
                                        </h2>
                                        <p class="text-muted mb-0">Income amounts</p>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6 widget-inline-box">
                                    <div class="text-center p-3">
                                        <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i>
                                            <b>6521</b>
                                        </h2>
                                        <p class="text-muted mb-0">Total users</p>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
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
            </div>
            <!--end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="mt-0 font-14">Total Revenue</h5>
                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li class="list-inline-item">
                                    <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Series
                                        A</p>
                                </li>
                                <li class="list-inline-item">
                                    <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-muted"></i>Series B
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div id="dashboard-bar-stacked" class="morris-chart" dir="ltr" style="height: 300px;">
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="mt-0 font-14">Sales Analytics</h5>
                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li class="list-inline-item">
                                    <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-primary"></i>Mobiles
                                    </p>
                                </li>
                                <li class="list-inline-item">
                                    <p class="font-weight-semibold"><i class="fa fa-circle mr-2 text-info"></i>Tablets
                                    </p>
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
                        <h5 class="mt-0 font-14 mb-3">Liên Hệ</h5>
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-hover mails m-0 table table-actions-bar table-centered">
                                <thead>
                                    <tr>
                                        <th style="min-width: 95px;">

                                            <div class="checkbox checkbox-single checkbox-primary">
                                                <input type="checkbox" class="custom-control-input" id="action-checkbox">
                                                <label class="custom-control-label" for="action-checkbox">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Địa Chỉ</th>
                                        <th>Số Bài Đăng</th>
                                     
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary mr-2 float-left">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2"></label>
                                                </div>
                                                {{-- <img src="assets/images/users/avatar-2.jpg" alt="contact-img"
                                                     title="contact-img" class="rounded-circle avatar-sm">
                                            </td> --}}
                                            <td>{{ $item->id}}</td>
                                            <td>{{ $item->username }}</td>
                                            <td><a href="#" class="text-muted">{{ $item->email }}</a></td>
                                            <td>{{ $item->address }}</td>
                                            <td><b><a href="" class="text-dark"><b>{{ $item->post_count }}</b></a></b></td>
                                          
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->





    </div>
    <!-- end content -->

    </div>
    <!-- END content-page -->
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
