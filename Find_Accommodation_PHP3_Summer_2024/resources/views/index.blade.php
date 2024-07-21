@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <header>


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
                                                <p class="text-muted mb-0">Bạn chưa có tài khoản? <a href="#"
                                                        id="showRegisterModal" class="text-dark" data-bs-toggle="modal"
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
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <form action="" class="p-2">
                                    <div class="mb-3">
                                        <label for="registerEmail" class="form-label">Email</label>
                                        <input class="form-control" type="email" id="registerEmail" required
                                            placeholder="example@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerPassword" class="form-label">Mật khẩu</label>
                                        <input class="form-control" type="password" id="registerPassword" required
                                            placeholder="Nhập mật khẩu">
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
                        type="button" role="tab" aria-controls="contact" aria-selected="false">Nhà nguyên
                        căn,
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
                {{-- <div class="tab-pane fade" id="resort" role="tabpanel" aria-labelledby="resort">
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
                </div> --}}
            </div>
        </div>
    </header>
    <section class="sectionMain">
        <div class="container">
            <div class="main">
                <h4 class="textMain">Lựa Chọn Vip</h4>
                <div class="row mt-3 mainRoom">
                    @foreach ($rooms as $room)
                        <div class="col-3 mt-2">
                            <a href="{{route('get-room',['id'=> $room->id])}}" class="text-decoration-none">
                                <div class="card">
                                    <div class="bageVip">
                                        <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                            class="card-img-top rounded" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $room->title }}</h5>
                                        <h6 class="card-text mt-3">Từ <span class="cardPrice">{{ $room->price }}
                                                VNĐ</span></h6>
                                        <div class="d-flex mt-3">
                                            <div class="room">
                                                @if (isset($room->category_id))
                                                    <span>{{ $room->category->name }}</span>
                                                @endif
                                            </div>
                                            <div class="acreage">
                                                <span>12m2</span>
                                            </div>
                                        </div>
                                        <p class="mt-3"><i class='bx bxs-map'
                                                style='color:#0a0a0a'></i>{{ $room->address }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="buttonView">
                        <span>Xem tất cả </span>

                    </div>
                </div>
            </div>

            <section class="mt-5">
                <div class="bg bg-primary mainFull">
                    <h4 class="text-center textSectionTwo">TRẢI NGHIỆM CÙNG TRỌ MỚI</h4>
                    <div class="d-flex justify-content-center align-content-center">
                        <button class="btn btn-light me-3">Tất cả</button>
                        <button class="btn btn-light me-3">Cần Thơ</button>
                        <button class="btn btn-light me-3">Tp.Hồ Chí Minh</button>
                        <button class="btn btn-light me-3">Bình Dương</button>
                        <button class="btn btn-light">An Giang</button>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="p-2">
                                        <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                            Đường Tô Hiến Thành,....
                                        <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                                style='color:#018bf8'></i></h6>
                                        <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                                VNĐ</span></h6>
                                        <div class="d-flex mt-3">
                                            <div class="room">
                                                <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="p-2">
                                        <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                            Đường Tô Hiến Thành,....
                                        <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                                style='color:#018bf8'></i></h6>
                                        <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                                VNĐ</span></h6>
                                        <div class="d-flex mt-3">
                                            <div class="room">
                                                <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="p-2">
                                        <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                            Đường Tô Hiến Thành,....
                                        <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                                style='color:#018bf8'></i></h6>
                                        <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                                VNĐ</span></h6>
                                        <div class="d-flex mt-3">
                                            <div class="room">
                                                <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="p-2">
                                        <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                            Đường Tô Hiến Thành,....
                                        <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                                style='color:#018bf8'></i></h6>
                                        <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                                VNĐ</span></h6>
                                        <div class="d-flex mt-3">
                                            <div class="room">
                                                <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="main mt-5">
                <h4 class="textMain">Lựa chọn hot</h4>
                <div class="row mt-3 mainRoom">
                    @foreach ($rooms as $room)
                        <div class="col-3">
                            <div class="card">
                                <div class="bageVip">
                                    <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                        class="card-img-top rounded" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Nhà trọ số 166 đường Cao...</h5>
                                    <h6 class="card-text mt-3">Từ <span class="cardPrice">3.000.000
                                            VNĐ</span></h6>
                                    <div class="d-flex mt-3">
                                        <div class="room">
                                            <span>Phòng trọ</span>
                                        </div>
                                        <div class="acreage">
                                            <span>12m2</span>
                                        </div>
                                    </div>
                                    <p class="mt-3"><i class='bx bxs-map' style='color:#0a0a0a'></i>166 đường Cao
                                        Thắng,Phường..
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="buttonView">
                        <span>Xem tất cả </span>

                    </div>
                </div>
            </div>


            <div class="main  mt-5">
                <h4 class="textMain">Lựa chọn đơn giản</h4>
                <div class="row mt-3 mainRoom">
                    @foreach ($rooms as $room)
                        <div class="col-3">
                            <div class="card">
                                <div class="bageVip">
                                    <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                        class="card-img-top rounded" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Nhà trọ số 166 đường Cao...</h5>
                                    <h6 class="card-text mt-3">Từ <span class="cardPrice">3.000.000
                                            VNĐ</span></h6>
                                    <div class="d-flex mt-3">
                                        <div class="room">
                                            <span>Phòng trọ</span>
                                        </div>
                                        <div class="acreage">
                                            <span>12m2</span>
                                        </div>
                                    </div>
                                    <p class="mt-3"><i class='bx bxs-map' style='color:#0a0a0a'></i>166 đường Cao
                                        Thắng,Phường..
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="buttonView">
                            <span>Xem tất cả </span>

                        </div>
                    </div>
                </div>

                <section class="mt-4">
                    <h4 class="text-center text-uppercase evaluateTitle">Đánh giá của người sử dụng</h4>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-3">
                                <div class="card bg bg-body-secondary">
                                    <div class="cridImg">
                                        <img src="{{ asset('assets\images\avt.jpg') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Nguyễn Hữu Thắng</h5>
                                        <p class="card-text text-center">
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                        </p>
                                        <span class="text-center">Thấy trên đây đa dạng phòng, dễ tìm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg bg-body-secondary">
                                    <div class="cridImg">
                                        <img src="{{ asset('assets\images\avt.jpg') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Nguyễn Hữu Thắng</h5>
                                        <p class="card-text text-center">
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                        </p>
                                        <span class="text-center">Thấy trên đây đa dạng phòng, dễ tìm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg bg-body-secondary">
                                    <div class="cridImg">
                                        <img src="{{ asset('assets\images\avt.jpg') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Nguyễn Hữu Thắng</h5>
                                        <p class="card-text text-center">
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                        </p>
                                        <span class="text-center">Thấy trên đây đa dạng phòng, dễ tìm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg bg-body-secondary">
                                    <div class="cridImg">
                                        <img src="{{ asset('assets\images\avt.jpg') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Nguyễn Hữu Thắng</h5>
                                        <p class="card-text text-center">
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                            <i class='bx bxs-star' style='color:#e5e805'></i>
                                        </p>
                                        <span class="text-center">Thấy trên đây đa dạng phòng, dễ tìm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="newsTitle">Tin tức nổi bật</h4>
                            </div>
                            <div class="col-6">
                                <span class="seeMoreSpan">Xem thêm<i class='bx bx-right-arrow-alt'
                                        style='color:#011ea0'></i></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets\images\TM-24-01.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body bg bg-body-secondary">
                                        <div class="row">
                                            <p class="col-2 numberNews">01</p>
                                            <span class="col-10 despritionNews">Những kinh nghiệm ở trọ 1 mình bạn cần
                                                biết.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets\images\TM-24-01.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body bg bg-body-secondary">
                                        <div class="row">
                                            <p class="col-2 numberNews">01</p>
                                            <span class="col-10 despritionNews">Những kinh nghiệm ở trọ 1 mình bạn cần
                                                biết.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets\images\TM-24-01.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body bg bg-body-secondary">
                                        <div class="row">
                                            <p class="col-2 numberNews">01</p>
                                            <span class="col-10 despritionNews">Những kinh nghiệm ở trọ 1 mình bạn cần
                                                biết.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets\images\TM-24-01.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body bg bg-body-secondary">
                                        <div class="row">
                                            <p class="col-2 numberNews">01</p>
                                            <span class="col-10 despritionNews">Những kinh nghiệm ở trọ 1 mình bạn cần
                                                biết.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
    </section>
    <section class="mt-5">
        <div class="bg bg-primary mainFull">
            <h4 class="text-center textSectionTwo">TRẢI NGHIỆM CÙNG TRỌ MỚI</h4>
            <div class="d-flex justify-content-center align-content-center">
                <button class="btn btn-light me-3">Tất cả</button>
                <button class="btn btn-light me-3">Cần Thơ</button>
                <button class="btn btn-light me-3">Tp.Hồ Chí Minh</button>
                <button class="btn btn-light me-3">Bình Dương</button>
                <button class="btn btn-light">An Giang</button>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="p-2">
                                <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                    Đường Tô Hiến Thành,....
                                <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                        style='color:#018bf8'></i></h6>
                                <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                        VNĐ</span></h6>
                                <div class="d-flex mt-3">
                                    <div class="room">
                                        <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="p-2">
                                <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                    Đường Tô Hiến Thành,....
                                <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                        style='color:#018bf8'></i></h6>
                                <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                        VNĐ</span></h6>
                                <div class="d-flex mt-3">
                                    <div class="room">
                                        <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="p-2">
                                <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                    Đường Tô Hiến Thành,....
                                <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                        style='color:#018bf8'></i></h6>
                                <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                        VNĐ</span></h6>
                                <div class="d-flex mt-3">
                                    <div class="room">
                                        <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="p-2">
                                <img src="assets\images\home1.jpg" class="card-img-top rounded" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="textAddress"><i class='bx bxs-map' style='color:#0a0a0a'></i>451/36/26
                                    Đường Tô Hiến Thành,....
                                <h6 class="card-title">NHÀ TRỌ SỐ 74 ĐƯỜNG NGUY...<i class='bx bxs-check-circle'
                                        style='color:#018bf8'></i></h6>
                                <h6 class="card-text mt-3"><span class="cardPrice">5.500.000 - 9.000.000
                                        VNĐ</span></h6>
                                <div class="d-flex mt-3">
                                    <div class="room">
                                        <span><i class='bx bxs-star' style='color:#f87701'></i>4.3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
