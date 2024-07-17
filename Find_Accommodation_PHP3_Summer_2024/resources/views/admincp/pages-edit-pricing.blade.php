@extends('layouts.error')
@section('titleAdmin', 'Đăng Ký | TÌM TRỌ')
@section('content')
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-center text-primary">CHỈNH SỬA GÓI TIN</h4>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets\images\layouts\mainlogo.jpg" width="60%" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <form action="{{ route('home') }}" class="p-2">
                                        <div class="form-group">
                                            <label for="username">Tên</label>
                                            <input class="form-control" type="text" id="username" required=""
                                                placeholder="Văn A">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailaddress">Email</label>
                                            <input class="form-control" type="email" id="emailaddress" required=""
                                                placeholder="vana@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mật khẩu</label>
                                            <input class="form-control" type="password" required="" id="password"
                                                placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="form-group mb-4 pb-3">
                                            <div class="custom-control custom-checkbox checkbox-primary">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                                <label class="custom-control-label" for="checkbox-signin">Tôi chấp nhận <a
                                                        href="#">Các điều khoản và dịch vụ</a></label>
                                            </div>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary btn-block" type="submit">Chỉnh sửa</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <a href="{{ route('pages-login') }}" class="btn btn-secondary"><b>Quay về</b></a>
                        </div>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
@endsection
