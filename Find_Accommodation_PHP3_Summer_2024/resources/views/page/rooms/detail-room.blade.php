@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <div class="background-content">
        <div class="row d-flex justify-content-center">

            <div class="col-6 p-0">
                <span class="item">
                    <a href="#" class="item-link text-decoration-none">Trang chủ</a>
                </span>
                <div class="hostel__detail">
                    <h1 class="box-title">{{ $room->title }}</h1>
                </div>
                <div class="hostel__detail--tags">
                    <a href="" class="item vip text-decoration-none">Tin vip</a>
                </div>
                <div class="hostel__detail--address">{{ $room->address }}
                </div>

            </div>
            <div class="col-3 p-0">
                <div class="div">
                    <div class="p-0 d-flex justify-content-end">
                        <p class="p-0">giá từ</p>
                    </div>
                    <div class="d-flex justify-content-end p-0">
                        <p class="fw-bold text-orange"><span class="fs-4">{{ $room->price }}</span>
                            VND/tháng</p>
                    </div>
                    <div class="d-flex justify-content-end p-0"> <a href="#" class="btn btn-orange p-3 text-light"><i
                                class="fa-solid fa-phone" style="color: #ffffff;"></i> 0985885475</a></div>
                </div>

            </div>
            <div class="row justify-content-center p-0 mt-3">
                <div class="col-9 p-0 "> <img class="img-fluid w-100 rounded"
                        src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                        alt=""></div>
            </div>
            <div class="row justify-content-center p-0 mt-4 ">
                <div class="col-9 bg-body rounded p-4">
                    <h3>Thông tin</h3>
                    <div class="row rounded-top background-content p-3">
                        <div class="col-3">Địa chỉ:</div>
                        <div class="col-9">{{ $room->address }}</div>
                    </div>
                    <div class="row p-3">
                        <div class="col-3">Giá:</div>
                        <div class="col-9">{{ $room->price }}</div>
                    </div>
                    <div class="row rounded-top background-content p-3">
                        <div class="col-3">Loại:</div>
                        <div class="col-9">Trọ</div>
                    </div>
                    <div class="row p-3">
                        <div class="col-3">Người đăng:</div>
                        <div class="col-9">{{ $room->user->username }}</div>
                    </div>
                    <div class="row rounded-top background-content p-3">
                        <div class="col-3">Số điện thoại:</div>
                        <div class="col-9">{{ $room->phone }}</div>
                    </div>
                    <div class="row p-3">
                        <div class="col-3">Ngày đăng:</div>
                        <div class="col-9">{{ $room->created_at }}</div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center p-0 mt-4 ">
                <div class="col-9 bg-body rounded p-4">
                    <h3>Giới thiệu</h3>
                    <p>
                        {{ $room->description }}
                    </p>
                </div>
            </div>

            <div class="row justify-content-center p-0 mt-4 margin-botton">
                <div class="col-9 bg-body rounded p-4">
                    <h3>Đường đi</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4672.916017875077!2d105.75542651411102!3d9.980603954525968!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1721110647679!5m2!1svi!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>


    </div>
@endsection

@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Ngôn ngữ tiếng Việt cho DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.11.4/i18n/Vietnamese.json"></script>
    <script src="{{ asset('assets\js\app-nht.js') }}"></script>
@endpush
