@extends('layouts.app')
@section('titleAdmin', 'Thông Tin Tài Khoản | TÌM TRỌ')
@section('content')

    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- start  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="p-0 text-center">
                        <div class="member-card">
                            <div class="avatar-xxl member-thumb mb-2 center-page mx-auto">
                                <img src="{{ asset('assets\images\users\avatar-3.jpg') }}"
                                    class="rounded-circle img-thumbnail" alt="profile-image">
                                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                            </div>

                            <div class="">
                                <h5 class="mt-3">{{ $admin->username }}</h5>
                                {{-- Nếu role == 0 sẽ hiển thị Admin, các trường hợp khác thì chưa hiển thị viết sau... --}}
                                @if ($admin->role == 0)
                                    <div class="mb-4">
                                        <strong>Chức vụ</strong>
                                        <p class="text-muted">Admin</p>
                                    </div>
                                @endif
                            </div>
                            <p class="text-muted mt-2">
                                Xin chào tôi là {{ $admin->username }}.
                            </p>
                            <button type="button" class="btn btn-primary mt-2 mr-1">Theo dõi</button>
                            <button type="button" class="btn btn-teal mt-2">Nhắn tin</button>
                        </div>
                    </div>
                    <!-- end card-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end -->
            <div class="mt-5">
                <ul class="nav nav-tabs tabs-bordered">
                    <li class="nav-item">
                        <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            Thông tin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link">
                            Cài đặt
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home-b1">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel card panel-fill">
                                    <div class="card-header">
                                        <h5 class="font-16 m-1">Thông Tin Cá Nhân</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <strong>Số dư</strong>
                                            <br>
                                            <p class="text-muted mb-0">{{ number_format($admin->balance, 0, ',', '.') }}đ
                                            </p>
                                        </div>
                                        <div class="mb-4">
                                            <strong>Họ và Tên</strong>
                                            <br>
                                            <p class="text-muted">{{ $admin->username }}</p>
                                        </div>
                                        <div class="mb-4">
                                            <strong>Số điện thoại</strong>
                                            <br>
                                            <p class="text-muted">{{ $admin->phone }}</p>
                                        </div>
                                        <div class="mb-4">
                                            <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">{{ $admin->email }}</p>
                                        </div>
                                        <div class="mb-0">
                                            <strong>Địa chỉ</strong>
                                            <br>
                                            <p class="text-muted mb-0">{{ $admin->address }}</p>
                                        </div>
                                    </div>
                                    <div class="card-header mt-5">
                                        <h5 class="font-16 m-1">Mạng xã hội</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="social-links list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip"
                                                    class="tooltips" href="" data-original-title="Facebook"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip"
                                                    class="tooltips" href="" data-original-title="Twitter"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip"
                                                    class="tooltips" href="" data-original-title="Skype"><i
                                                        class="fab fa-skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                            <div class="col-lg-8">
                                <!-- Personal-Information -->
                                <div class="panel card panel-fill">
                                    <div class="card-header">
                                        <h5 class="font-16 m-1">Tiểu sử</h5>
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>

                                <!-- Personal-Information -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile-b1">
                        <!-- Personal-Information -->
                        <div class="panel card panel-fill">
                            <div class="card-header">
                                <h5 class="font-16 m-1">Chỉnh sửa hồ sơ</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.chinh-sua-ho-so', ['id' => $admin->id]) }}" method="POST"
                                    role="form">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="FullName">Họ và Tên</label>
                                        <input type="text" name="username" value="{{ $admin->username }}" id="FullName"
                                            class="form-control">
                                        @error('username')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" name="email" value="{{ $admin->email }}" id="Email"
                                            class="form-control">
                                        @error('email')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Phone" class="form-label">Số điện thoại</label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                            value="{{ $admin->phone }}">
                                        @error('phone')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $admin->address }}">
                                        @error('address')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Password" class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" id="Password" name="passsword"
                                            placeholder="6 - 15 Ký tự">
                                    </div>
                                    <div class="form-group">
                                        <label for="RePassword">Nhập lại mật khẩu</label>
                                        <input type="password" placeholder="6 - 15 Ký tự" name="password_confirmation"
                                            id="RePassword" class="form-control">
                                        @error('password_confirmation')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="AboutMe">Mô tả</label>
                                        <textarea style="height: 125px" id="AboutMe" class="form-control" placeholder="Nhập mô tả bản thân (Nếu có)."></textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light width-md"
                                        type="submit">Lưu</button>
                                </form>
                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- Footer Start -->
    <div class="col-lg-12">
        <footer class="footer mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2024 &copy; by <a href="">Tìm Trọ hhhhhhhhhhhx</a>
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
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet">
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
