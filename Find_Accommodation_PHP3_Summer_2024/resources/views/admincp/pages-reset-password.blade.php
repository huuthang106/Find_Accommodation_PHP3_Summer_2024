@extends('layouts.error')
@section('titleAdmin', 'Đổi Mật Khẩu | TRỌ NHANH')
@section('content')
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <a href="{{ route('home') }}">
                                    <span><img src="{{ asset('assets\images\logo3.png') }}" alt="" height="60"
                                            width="170"></span>
                                </a>
                            </div>
                            <form action="{{ route('admin.check-reset-password', ['token' => $token]) }}" method="POST"
                                role="form">
                                @csrf
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input class="form-control" type="password" name="password" required id="password"
                                        placeholder="Nhập mật khẩu">
                                    @error('password')
                                        <small class="text-danger text-bold">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                                    <input class="form-control" type="password" name="password_confirmation" required
                                        id="password_confirmation" placeholder="Nhập mật khẩu">
                                    @error('password_confirmation')
                                        <small class="text-danger text-bold">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">XÁC NHẬN</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted mb-0">Bạn đã có tài khoản? <a href="{{ route('admin.pages-login-admin') }}"
                                    class="text-dark ml-1"><b>ĐĂNG NHẬP</b></a>
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
