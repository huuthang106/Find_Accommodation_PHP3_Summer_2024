@extends('layouts.error')
@section('title','404 Error | Simple - Responsive Bootstrap 4 Admin Dashboard')
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
                            <img src="assets\images\cancel.svg" title="invite.svg" class="avatar-lg">
                            <h3 class="expired-title mb-4 mt-3 font-weight-normal">Page Not Found</h3>
                            <p class="text-muted mt-3"> It's looking like you may have taken a wrong turn. Don't
                                worry... it happens to the best of us. You might want to check your internet
                                connection. </p>
                        </div>

                        <div class="mb-3 mt-4 text-center">
                            <a href="{{route('home')}}" class="btn btn-primary btn-block">Back to Home</a>
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
@endsection
