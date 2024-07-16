@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
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
                    <button class="nav-link active" id="all" data-bs-toggle="tab" data-bs-target="#all" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Tất cả</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="homestay" data-bs-toggle="tab" data-bs-target="#homestay" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Phòng
                        trọ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="resort" data-bs-toggle="tab" data-bs-target="#resort" type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Nhà nguyên
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
    <section class="sectionMain">
        <div class="container">
            <div class="main">
                <h4 class="textMain">Lựa Chọn Vip</h4>
                <div class="row mt-3 mainRoom">
                    @foreach ($rooms as $room)
                        <div class="col-3">
                            <a href="xem-phong/{{$room->id}}" class="text-decoration-none">
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
