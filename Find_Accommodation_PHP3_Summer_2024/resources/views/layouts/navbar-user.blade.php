<!doctype html>
<html lang="en">

<head>
    <title>@yield('titleUs')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet"> --}}
    <link href="{{ asset('assets\css\style-nht.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    {{-- cdn icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container-fluid ">
        <header>
            <div class="row justify-content-center">
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
                                                <a class="nav-link" aria-current="page" href="#">Phòng trọ</a>
                                            </li>
                                            <li class="nav-item pe-4">
                                                <a class="nav-link" href="#">Nhà nguyên căn</a>
                                            </li>
                                            <li class="nav-item pe-4">
                                                <a class="nav-link" href="#">Video review</a>
                                            </li>
                                            <li class="nav-item pe-4">
                                                <a class="nav-link" href="#">Blog</a>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
                                                    <form action="{{ route('home') }}" class="p-2">
                                                        <div class="mb-3">
                                                            <label for="emailaddress" class="form-label">Email</label>
                                                            <input class="form-control" type="email" id="emailaddress"
                                                                required="" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Mật khẩu</label>
                                                            <input class="form-control" type="password" required=""
                                                                id="password" placeholder="Nhập mật khẩu">
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
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-12 text-center">
                                                    <p class="text-muted mb-0">Bạn chưa có tài khoản? <a
                                                            href="#" id="showRegisterModal" class="text-dark"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#registerModal"><b>ĐĂNG KÝ</b></a></p>
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
                                    <span><img src="{{ asset('assets/images/logo3.png') }}" alt=""
                                            height="60" width="170"></span>
                                </a>
                            </div>
                            <div class="account-pages my-3 pt-2">
                                <div class="container">
                                    <form action="" class="p-2">
                                        <div class="mb-3">
                                            <label for="registerEmail" class="form-label">Email</label>
                                            <input class="form-control" type="email" id="registerEmail" required
                                                placeholder="example@gmail.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="registerPassword" class="form-label">Mật khẩu</label>
                                            <input class="form-control" type="password" id="registerPassword"
                                                required placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmPassword" class="form-label">Xác nhận mật khẩu</label>
                                            <input class="form-control" type="password" id="confirmPassword" required
                                                placeholder="Nhập lại mật khẩu">
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary w-100" type="submit">ĐĂNG KÝ</button>
                                        </div>
                                    </form>
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

        </header>
        {{-- start content --}}

        @yield('contentUs')

        {{-- end content --}}
        <footer class="mt-4">
            <div class="">
                <div class="row text-center">
                    <div class="col-3 text-center">
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
                <div class="row bg-primary p-3">
                    <span class="text-center text-wrap text-light">Copyright2024 TroNhanh</span>
                </div>
            </div>

        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Ngôn ngữ tiếng Việt cho DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.11.4/i18n/Vietnamese.json"></script>
    <script src="{{ asset('assets\js\app-nht.js') }}"></script>
</body>

</html>
