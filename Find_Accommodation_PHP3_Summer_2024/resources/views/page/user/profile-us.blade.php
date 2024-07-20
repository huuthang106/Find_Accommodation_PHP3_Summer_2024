@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <!-- start  -->
    <div class="row">
        <div class="col-md-12">
            <div class="p-0 text-center">
                <div class="member-card">
                    <div class="avatar-xxl member-thumb mb-2 center-page mx-auto">
                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h5 class="mt-3">Nguyễn Hủ Théng</h5>
                        <p class="text-muted">@webdesigner</p>
                    </div>

                    <p class="text-muted mt-2">
                        Xin chào tôi là Nguyễn Hủ Théng.
                    </p>



                </div>

            </div>
            <!-- end card-box -->

        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <!-- end -->
    <div class="mt-5 p-3">
        <ul class="nav nav-tabs tabs-bordered">
            <li class="nav-item">
                <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                    Thông tin
                </a>
            </li>

            <li class="nav-item">
                <a href="#profile-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                    Cài đặt
                </a>
            </li>
        </ul>
        <div class="tab-content bg-body">
            <div class="tab-pane fade show active" id="home-b1">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Personal-Information -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Thông Tin Cá Nhân</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <strong>Số dư</strong>
                                    <br>
                                    <p class="text-muted mb-0">1.000.000đ</p>
                                </div>
                                <div class="mb-4">
                                    <strong>Họ và Tên</strong>
                                    <br>
                                    <p class="text-muted">Nguyễn Hủ Théng</p>
                                </div>
                                <div class="mb-4">
                                    <strong>Số điện thoại</strong>
                                    <br>
                                    <p class="text-muted">0123456789</p>
                                </div>
                                <div class="mb-4">
                                    <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">nguyenhutheng@gmail.com</p>
                                </div>
                                <div class="mb-0">
                                    <strong>Địa chỉ</strong>
                                    <br>
                                    <p class="text-muted mb-0">Việt Nam</p>
                                </div>
                            </div>
                        </div>
                        <!-- Personal-Information -->

                        <!-- Social -->
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title">Mạng xã hội</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-3">
                                        <a title="Facebook" data-bs-toggle="tooltip" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <a title="Twitter" data-bs-toggle="tooltip" href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="Skype" data-bs-toggle="tooltip" href="#">
                                            <i class="fab fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Social -->
                    </div>
                    <div class="col-lg-8">
                        <!-- Personal-Information -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Bài viết đã đăng</h5>
                            </div>
                            <div class="card-body">
                                <!-- Nội dung tiểu sử -->
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Tất cả <input type="checkbox"></th>
                                                <th>Xem chi tiết</th>
                                                <th>Chỉnh sửa</th>
                                                <th>STT</th>
                                                <th>Tên người đăng</th>
                                                <th>Tiêu đề</th>
                                                <th>Số điện thoại</th>
                                                <th>Giá</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td><a href="" class="btn btn-primary ">Xem chi tiết</a></td>
                                                <td><a href="" class="btn btn-primary ">Chỉnh sửa</a></td>
                                                <td></td>
                                                <td></td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>



                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>


                </div>
            </div>

            <div class="tab-pane fade" id="profile-b1">
                <!-- Personal-Information -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Chỉnh sửa hồ sơ</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="FullName" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control" id="FullName" value="Nguyễn Hủ Théng">
                            </div>
                            <div class="mb-3">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="Email" value="nguyenhutheng@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="Password" placeholder="6 - 15 Ký tự">
                            </div>
                            <div class="mb-3">
                                <label for="RePassword" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" id="RePassword" placeholder="6 - 15 Ký tự">
                            </div>
                            <div class="mb-3">
                                <label for="AboutMe" class="form-label">Mô tả</label>
                                <textarea class="form-control" id="AboutMe" style="height: 125px;" placeholder="Nhập mô tả bản thân (Nếu có)."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
                <!-- Personal-Information -->
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link href="{{ asset('assets\css\style-nht.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    {{-- cdn icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Ngôn ngữ tiếng Việt cho DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.11.4/i18n/Vietnamese.json"></script>
    <script src="{{ asset('assets\js\app-nht.js') }}"></script>
@endpush
