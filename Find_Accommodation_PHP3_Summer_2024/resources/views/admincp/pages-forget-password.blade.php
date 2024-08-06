@extends('layouts.error')
@section('titleAdmin', 'Forget password | Simple - Responsive Bootstrap 4 Admin Dashboard')
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
                            <div class="text-center">
                                <p class="text-muted w-75 mx-auto"> Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn
                                    một email kèm theo hướng dẫn để đặt lại mật khẩu của bạn. </p>
                            </div>
                            <form action="{{ route('admin.check-forget-password') }}" method="POST" class="p-2">
                                @csrf
                                <div class="form-group">
                                    <label for="emailaddress">Email</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress"
                                        required="" placeholder="Địa chỉ email">
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> XÁC NHẬN </button>
                                </div>
                            </form>
                            @if (session('showAlert'))
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        setTimeout(function() {
                                            @if (session('success'))
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Thành công!',
                                                    text: "{{ session('success') }}",
                                                    timer: 5000,
                                                    timerProgressBar: true,
                                                    showConfirmButton: false
                                                });
                                            @endif

                                            @if (session('error'))
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Lỗi!',
                                                    text: "{{ session('error') }}",
                                                    timer: 5000,
                                                    timerProgressBar: true,
                                                    showConfirmButton: false
                                                });
                                            @endif
                                        }); // Delay 500ms trước khi hiển thị alert
                                    });
                                </script>
                            @endif
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted mb-0">Trở về <a href="{{ route('admin.pages-login-admin') }}"
                                    class="text-dark ml-1"><b>ĐĂNG NHẬP</b></a></p>
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
