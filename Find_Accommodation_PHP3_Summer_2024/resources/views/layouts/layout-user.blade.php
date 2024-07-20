<!doctype html>
<html lang="en">

<head>
    <title>@yield('titleUs')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @stack('styles')

</head>

<body>

    <div class="page-home">
        <div class="container">
            <div class="row headerTop">
                <div class="col-3">
                    <div class="logo">
                        <img class="img-fluid logo-img" src="{{ asset('assets\images\logo3.png') }}" alt="...">
                    </div>
                </div>
                <div class="col-9">
                    <div class="header-right">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
                                        <li class="nav-item pe-4">
                                            <a class="nav-link" aria-current="page"
                                                href="{{ route('category-motel') }}">Phòng
                                                trọ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Loại trọ
                                            </a>
                                            <ul class="dropdown-menu">
                                            @foreach ($categories as $category)
                                            
                                                    <li><a class="dropdown-item"
                                                            href="#">{{ $category->name }}</a></li>
                                              
                                            @endforeach
                                        </ul>
                                        </li>
                                        <li class="nav-item pe-4">
                                            <a class="nav-link" href="#">Video review</a>
                                        </li>
                                        <li class="nav-item pe-4">
                                            <a class="nav-link" href="#">Diễn đàn</a>
                                        </li>
                                        <li class="nav-item pe-4">
                                            <a class="nav-link" href="{{ route('posting-room') }}">Đăng bài</a>
                                        </li>
                                    </ul>

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">
                                        Đăng nhập/Đăng ký
                                    </button>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"> <!-- Thêm class này -->
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="account-pages my-3 pt-2">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <a href="index.html">
                                                        <span><img src="{{ asset('assets/images/logo3.png') }}"
                                                                alt="" height="60" width="170"></span>
                                                    </a>
                                                </div>
                                                <form action="{{ route('login-users') }}" method="POST" class="p-2">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="emailaddress" class="form-label">Email</label>
                                                        <input class="form-control" name="email" type="email"
                                                            id="emailaddress" required=""
                                                            placeholder="example@gmail.com">
                                                        @error('email')
                                                            <small class="text-danger text-blod">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Mật khẩu</label>
                                                        <input class="form-control" name="password" type="password"
                                                            required="" id="password" placeholder="Nhập mật khẩu">
                                                        @error('password')
                                                            <small
                                                                class="text-danger text-bold">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 pb-3 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="checkbox-signin">
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
                                                        id="showRegisterModal" class="text-dark"
                                                        data-bs-toggle="modal" data-bs-target="#registerModal"><b>ĐĂNG
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
        <!-- Modal Đăng Ký -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <a href="index.html">
                                <span><img src="{{ asset('assets/images/logo3.png') }}" alt="" height="60"
                                        width="170"></span>
                            </a>
                        </div>
                        <div class="account-pages my-3 pt-2">
                            <div class="container">
                                <form action="" method="POST" class="p-2">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="registerEmail" class="form-label">Tên</label>
                                        <input class="form-control" name="username" type="text" id=""
                                            required placeholder="example@gmail.com">
                                        @error('username')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="registerEmail" class="form-label">Email</label>
                                        <input class="form-control" name="email" type="email" id=""
                                            required placeholder="example@gmail.com">
                                        @error('username')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="registerPassword" class="form-label">Mật khẩu</label>
                                        <input class="form-control" name="password" type="password"
                                            id="registerPassword" required placeholder="Nhập mật khẩu">
                                        @error('password')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Xác nhận mật khẩu</label>
                                        <input class="form-control" name="password_confirmation" type="password"
                                            id="confirmPassword" required placeholder="Nhập lại mật khẩu">
                                        @error('repassword')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary w-100" type="submit">ĐĂNG KÝ</button>
                                    </div>
                                </form>
                                <div class="mb-3 text-center">
                                    <hr>
                                    <button class="btn btn-danger w-100 mb-2" type="button">
                                        <i class="fab fa-google"></i> Đăng ký bằng Google
                                    </button>
                                    <button class="btn btn-primary w-100" type="button">
                                        <i class="fab fa-facebook-f"></i> Đăng ký bằng Facebook
                                    </button>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted mb-0">Bạn đã có tài khoản? <a href="#"
                                                id="showLoginModal" class="text-dark" data-bs-toggle="modal"
                                                data-bs-target="#loginModal"><b>ĐĂNG NHẬP</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- start content --}}
        @yield('contentUs')
        {{-- end content --}}
        <footer class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid" src="{{ asset('assets\images\logo.png') }}" alt="">
                        <span class="titleFooter">Tìm trọ nhanh,dễ tìm</span>
                    </div>
                    <div class="col-3 mt-5 newsFooter">
                        <h4>THÔNG TIN</h4>
                        <p>Điều khoản & Cam kết</p>
                        <p>Quy chế hoạt động</p>
                        <p>Giải quyết khiếu nại</p>
                        <p>Chính sách bảo mật</p>
                    </div>
                    <div class="col-3 mt-5 newsFooter">
                        <h4>HỆ THỐNG</h4>
                        <p>Bảng phí</p>
                        <p>Phương thức thanh toán</p>
                        <p>Liên hệ</p>
                        <p>Hướng dẫn</p>
                    </div>
                    <div class="col-3 mt-5 newsFooter">
                        <h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
                        <p><i class='bx bxs-phone' style='color:#030299'></i> 045.342.4324</p>
                        <p><i class='bx bxl-facebook-circle' style='color:#0404a0'></i> tronhanhtoanquoc</p>
                    </div>
                </div>
            </div>
            <div class="col-12 endBarFooter">
                <span class="text-center">Copyright2024 TroNhanh</span>
            </div>
        </footer>
    </div>
    @stack('scripts')
</body>



</html>
