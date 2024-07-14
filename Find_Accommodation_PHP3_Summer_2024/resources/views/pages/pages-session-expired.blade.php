@extends('layouts.error')
@section('title','Session expired | Simple - Responsive Bootstrap 4 Admin Dashboard')
@section('content')
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-4 mt-3">
                                    <img src="assets\images\warming.svg" title="invite.svg" class="avatar-xl">
                                    <h3 class="font-weight-normal w-75 mx-auto mt-4">Phiên của bạn đã hết hạn do không hoạt động</h3>
                                </div>
                                <form action="mt-4" class="p-2">
                                    <div class="form-group">
                                        <label for="emailaddress">Địa chỉ email</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Đăng Nhập </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
@endsection