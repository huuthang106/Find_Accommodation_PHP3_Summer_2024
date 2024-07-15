@extends('layouts.error')
@section('titleAdmin','Confirm mail | Simple - Responsive Bootstrap 4 Admin Dashboard')
@section('content')
<div class="account-pages my-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-4 mt-3">
                            <a href="index.html">
                                <span><img src="assets\images\logo-dark.png" alt="" height="30"></span>
                            </a>
                        </div>
                        <div class="mt-4 pt-3 text-center">
                            <img src="assets\images\success.svg" title="invite.svg" class="avatar-lg">
                            <p class="text-muted mt-4 pt-2"> Một email đã được gửi đến youremail@domain.com .
                                 Vui lòng kiểm tra email từ công ty bing và nhấp vào liên kết kèm theo để đặt lại mật khẩu của bạn. </p>
                        </div>
                        <div class="mb-3 mt-4 text-center">
                            <a href="{{route('home')}}" class="btn btn-primary btn-block">Quay về nhà</a>
                        </div>
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
