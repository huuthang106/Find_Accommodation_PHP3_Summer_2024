@extends('layouts.app')
@section('titleAdmin', 'Thông Báo | TRỌ NHANH')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3 text-center">ĐĂNG KÝ THÀNH VIÊN</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <form action="" class="p-2" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="username">Tên</label>
                            <input class="form-control" type="text" name="username" required="" placeholder="Văn A">
                            @error('username')
                                <small class="text-danger text-blod">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="emailaddress">Email</label>
                            <input class="form-control" type="email" name="email" id="emailaddress" required=""
                                placeholder="vana@gmail.com">
                            @error('email')
                                <small class="text-danger text-blod">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="role">Vai trò</label>
                            <select class="form-control" id="role" name="role">
                                <option value="0">Admin</option>
                                <option value="1">User</option>
                                <option value="2">Người quản trị web</option>
                                <option value="3">User có quyền đăng trọ</option>
                            </select>
                            @error('role')
                                <small class="text-danger text-blod">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input class="form-control" type="password" name="password" required="" id="password"
                                placeholder="Nhập mật khẩu">
                            @error('password')
                                <small class="text-danger text-blod">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="repassword">Nhập lại mật khẩu</label>
                            <input class="form-control" type="password" name="password_confirmation" required=""
                                id="password_confirmation" placeholder="Nhập lại mật khẩu">
                            @error('repassword')
                                <small class="text-danger text-blod">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-4 pb-3">
                            <div class="custom-control custom-checkbox checkbox-primary">
                                <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                <label class="custom-control-label" for="checkbox-signin">Tôi chấp nhận <a
                                        href="#">Các điều khoản và dịch vụ</a></label>
                            </div>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> ĐĂNG KÝ </button>
                        </div>
                    </form>
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
                        2024 &copy; Copyright by <a href="">TRỌ NHANH</a>
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
    <link rel="stylesheet" href="{{ asset('assets/css/style-nht.css') }}">
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
