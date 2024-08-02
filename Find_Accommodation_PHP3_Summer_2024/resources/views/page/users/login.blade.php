@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')

    <div class="container-fluid">
   <div class="row">
    <div class="col-lg-9 modal-dialog modal-dialog-centered"> <!-- Thêm class này -->
        <div class="modal-content">

            <div class="modal-body">
                <div class="account-pages my-3 pt-2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                       
                                        <form action="{{ route('login-users') }}" method="POST" class="p-2">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email</label>
                                                <input class="form-control" name="email" type="email"
                                                    id="emailaddress" required="" placeholder="example@gmail.com">
                                                @error('email')
                                                    <small class="text-danger text-blod">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Mật khẩu</label>
                                                <input class="form-control" name="password" type="password"
                                                    required="" id="password" placeholder="Nhập mật khẩu">
                                                @error('password')
                                                    <small class="text-danger text-bold">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3 pb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                <label class="form-check-label" for="checkbox-signin">Ghi
                                                    nhớ tài khoản?</label>
                                            </div>
                                            <div class="mb-3 text-center">
                                                <button class="btn btn-primary w-100" type="submit">ĐĂNG
                                                    NHẬP</button>
                                            </div>
                                            <a href="page-recoverpw.html"
                                                class="text-muted float-end text-decoration-none">Quên mật
                                                khẩu?</a>
                                        </form>
                                        <div class="mb-3 text-center">
                                            <hr>
                                            <button class="btn btn-danger w-100 mb-2" type="button">
                                                <i class="fab fa-google"></i> Đăng nhập bằng Google
                                            </button>
                                            <button class="btn btn-primary w-100" type="button">
                                                <i class="fab fa-facebook-f"></i> Đăng nhập bằng Facebook
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted mb-0">Bạn chưa có tài khoản? <a href="#"
                                                id="showRegisterModal" class="text-dark" data-bs-toggle="modal"
                                                data-bs-target="#registerModal"><b>ĐĂNG
                                                    KÝ</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    </div>

@endsection
@push('styles')
    <!-- DataTables CSS -->

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
