@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <style>
        /* Thiết lập kiểu checkbox */
        .checkbox-container {
            display: flex;
            /* Sử dụng flexbox để xếp các phần tử trên cùng một hàng */
            align-items: center;
            /* Căn các phần tử theo chiều dọc */
        }

        .checkbox-container input[type="checkbox"] {
            margin-right: 10px;
            /* Khoảng cách giữa checkbox và văn bản */
        }



        /* Tăng kích thước của checkbox */
        .custom-checkbox input[type="checkbox"] {
            width: 20px;
            /* Chiều rộng */
            height: 20px;
            /* Chiều cao */
            margin-right: 5px;
            /* Khoảng cách với nhãn */
        }

        /* Thiết lập kiểu của checkbox */
        .custom-checkbox input[type="checkbox"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: 1px solid #ccc;
            border-radius: 3px;
            outline: none;
            cursor: pointer;
        }

        /* Tạo kiểu khi checkbox được checked */
        .custom-checkbox input[type="checkbox"]:checked {
            background-color: #007bff;
            border-color: #007bff;
        }

        /* Ẩn checkbox mặc định và chỉnh sửa nhãn */
        .custom-checkbox input[type="checkbox"]+label {
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
            font-weight: normal;
            /* Cân chỉnh font-weight nếu cần */
        }
    </style>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Phòng trọ</li>
            </ol>
        </nav>
        <h2 class="fw-bold">NHÀ NGUYÊN CĂN, CHUNG CƯ</h2>
        <div class="container p-0">
            <div class="row">
                <div class="col-lg-9 p-0 rounded-5">
                    <div class="p-3 mb-2 bg-light text-dark">
                        <div class="d-flex justify-content-between">
                            <p class="pt-2 text-bold fs-5 fw-bold">Tổng 1396 kết quả</p>
                            <div class="p-0 d-flex justify-content-evenly">
                                <p class="pt-3 pe-3 fw-bold text-center">Sắp xếp theo</p>
                                <select class="p-0 form-select-sm border-0 bg-light text-dark" aria-label="">
                                    <option selected>Mặc định</option>
                                    <option value="1">Giá tăng dần</option>
                                    <option value="2">Giá giảm dần</option>
                                </select>
                            </div>
                        </div>
                        <table id="myTable" class=""
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="border-0">
                                <tr>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($rooms->isEmpty())
                                    <tr>
                                        <td colspan="10" class="text-center">Không có dữ liệu</td>
                                    </tr>
                                @else
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <th>
                                                <div class="card mb-3 bg-light text-dark">
                                                    <div class="div">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <a href="#">
                                                                    <img src="https://tromoi.com/uploads/members/hiephoang/thang%208/17_08/nhung-dieu-bat-buoc-phai-nho-khi-tim-phong-01.jpg"
                                                                        class="img-fluid rounded-2" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <a href="#"
                                                                        class="text-decoration-none custom-link">
                                                                        <p class="card-title fs-6 fw-bold">
                                                                            {{ $room->title }}</p>
                                                                    </a>
                                                                    <p class="card-text fw-bold" style="color: #ff5c00">Liên
                                                                        hệ lấy giá</p>
                                                                    <div class="container p-0">
                                                                        <a href="#">
                                                                            <button type="button"
                                                                                class="p-1 btn btn-secondary btn-sm">
                                                                                {{ $room->category->name }}
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                    <p class="card-text pt-3">
                                                                        <small class="text-muted">
                                                                            <i class="fa-solid fa-location-dot"></i>
                                                                            {{ $room->address }}
                                                                        </small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-2 bg-light text-dark">
                        <div class="p-1 fs-5 text-primary"><i class="fa-solid fa-filter"></i> Lọc kết quả </div>

                        <div class="accordion border-0" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Tiện nghi
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Gác lửng</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Wifi</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Vệ sinh trong</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Phòng tắm</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Bình nước nóng</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Môi trường xung quanh
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Chợ</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Siêu thị</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Bệnh viện</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Trường học</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Công viên</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        Đối tượng
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Đi học</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Đi làm</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Gia đình</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Cặp đôi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFour">
                                        Video Review
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingFour">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Có</label>
                                            </div>
                                            <div class="checkbox-container">
                                                <input type="checkbox" id="checkbox">
                                                <label for="checkbox">Không</label>
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Ngôn ngữ tiếng Việt cho DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.11.4/i18n/Vietnamese.json"></script>
    <script src="{{ asset('assets\js\app-nht.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    {{-- dropdow nut profile --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
