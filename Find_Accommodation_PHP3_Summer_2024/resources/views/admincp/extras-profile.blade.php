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
                                <img src="assets\images\users\avatar-3.jpg" class="rounded-circle img-thumbnail"
                                    alt="profile-image">
                                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                            </div>

                            <div class="">
                                <h5 class="mt-3">Nguyễn Hủ Théng</h5>
                                <p class="text-muted">@webdesigner</p>
                            </div>

                            <p class="text-muted mt-2">
                                Xin chào tôi là Nguyễn Hủ Théng.
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
                                <!-- Personal-Information -->
                                <div class="panel card panel-fill">
                                    <div class="card-header">
                                        <h5 class="font-16 m-1">Thông Tin Cá Nhân</h5>
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
                                <div class="panel card panel-fill">
                                    <div class="card-header">
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
                                <!-- Social -->
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
                                <form>
                                    <div class="form-group">
                                        <label for="FullName">Họ và Tên</label>
                                        <input type="text" value="Nguyễn Hủ Théng" id="FullName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" value="nguyenhutheng@gmail.com" id="Email"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Mật khẩu</label>
                                        <input type="password" placeholder="6 - 15 Ký tự" id="Password"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="RePassword">Nhập lại mật khẩu</label>
                                        <input type="password" placeholder="6 - 15 Ký tự" id="RePassword"
                                            class="form-control">
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



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2024 &copy; by <a href="">Tìm Trọ</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
