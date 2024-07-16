<!doctype html>
<html lang="en">

<head>
    <title>@yield('titleUs')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="assets\css\style-nht.css" rel="stylesheet" type="text/css" id="app-stylesheet">
    {{-- cdn icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container-fluid ">
        <header>
            <div class="row justify-content-center">
                <div class="header">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="col-3">
                            <img class="img-fluid logo-img" src="{{ asset('assets\images\logo3.png') }}" alt="...">
                        </div>
                        <div class="col-9 ">
                            <div class="justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold ">
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
                                    <li class="nav-item pe-4">
                                        <a type="button" class="btn btn-primary button-login fw-semibold"
                                            style="color: aliceblue" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Đăng nhập/Đăng ký
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </nav>


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
</body>

</html>
