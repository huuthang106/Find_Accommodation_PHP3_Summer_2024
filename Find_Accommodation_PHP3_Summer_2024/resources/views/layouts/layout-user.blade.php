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
    <link href="assets\css\style.css" rel="stylesheet" type="text/css" id="app-stylesheet">
</head>

<body>
    <div class="page-home">
        <header>
            <div class="container">
                <div class="row headerTop">
                    <div class="col-3">
                        <div class="logo">
                            <img class="img-fluid" src="{{ asset('assets\images\logo.png') }}" alt="...">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="header-right">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container-fluid">
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
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headerBottom">
                <div class="container">
                    <h1 class="col-4 headerTitle">TÌM NHANH, KIẾM DỄ
                        TRỌ MỚI TOÀN QUỐC</h1>
                    <span class="col-4 headerSpan">Trang thông tin và cho thuê phòng trọ nhanh chóng, hiệu quả với hơn
                        500
                        tin
                        đăng mới và 30.000 lượt xem mỗi ngày</span>
                </div>
                <img class="img-fluid" src="{{ asset('assets\images\43e7a13d3d2d9e73c73c.jpg') }}" alt="">
            </div>
            <div class="container searchHeader">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all" data-bs-toggle="tab" data-bs-target="#all"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Tất cả</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="homestay" data-bs-toggle="tab" data-bs-target="#homestay"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Phòng
                            trọ</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="resort" data-bs-toggle="tab" data-bs-target="#resort"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Nhà nguyên căn,
                            chung cư</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bxs-map' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Địa điểm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bx-dollar' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Giá</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bxs-filter-alt' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Diện tích</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="buttonSearch">
                                        <span class="textSearch">Tìm kiếm</span>
                                        <i class='bx bx-search' style='color:#fdf9f9'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="homestay" role="tabpanel" aria-labelledby="homestay">
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bxs-map' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Địa điểm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bx-dollar' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Giá</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bxs-filter-alt' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Diện tích</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="buttonSearch">
                                        <span class="textSearch">Tìm kiếm</span>
                                        <i class='bx bx-search' style='color:#fdf9f9'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="resort" role="tabpanel" aria-labelledby="resort">
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bxs-map' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Địa điểm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bx-dollar' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Giá</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class='bx bxs-filter-alt' style='color:#06b2ee'></i>
                                    </div>
                                    <select class="form-select" name="" id="">
                                        <option value="" accesskey="">Diện tích</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="buttonSearch">
                                        <span class="textSearch">Tìm kiếm</span>
                                        <i class='bx bx-search' style='color:#fdf9f9'></i>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
