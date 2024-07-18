@extends('layouts.error')
@section('titleAdmin', 'Đăng Nhập | TÌM TRỌ')
@section('content')
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <a href="index.html">
                                    <span><img src="{{ asset('assets\images\logo3.png') }}" alt="" height="60"
                                            width="170"></span>
                                </a>

                            </div>
                            <form action="" class="p-2" method="POST" role="form">
                                @csrf
                                <div class="form-group">
                                    <label for="emailaddress">Email</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress"
                                        required="" placeholder="example@gmail.com">
                                    @error('email')
                                        <small class="text-danger text-blod">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <a href="page-recoverpw.html" class="text-muted float-right">Quên mật khẩu?</a>
                                    <label for="password">Mật khẩu</label>
                                    <input class="form-control" type="password" name="password" required=""
                                        id="password" placeholder="Nhập mật khẩu">
                                    @error('password')
                                        <small class="text-danger text-bold">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-4 pb-3">
                                    <div class="custom-control custom-checkbox checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                        <label class="custom-control-label" for="checkbox-signin">Ghi nhớ tài khoản?</label>
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> ĐĂNG NHẬP </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted mb-0">Bạn chưa có tài khoản? <a
                                    href="{{ route('pages-register-admin') }}" class="text-dark ml-1"><b>ĐĂNG KÝ</b></a>
                            </p>
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
