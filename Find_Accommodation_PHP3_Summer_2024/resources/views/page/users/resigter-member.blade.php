@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <!-- start  -->
    <div class="container-fluid background-content">
        <div class="row d-flex justify-content-center ">
            <div class="col-10 bg-body  mt-2 rounded p-2">
                <div class="card-header text-center">
                    <h5 class="card-title bg">Đăng ký thành viên</h5>
                </div>
                <form action="{{ route('check-register-member') }}" id="ocr-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="tab-pane col-lg-6">
                            <!-- Personal-Information -->
                            <div class="card">
                                {{-- <div class="card-body">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            value="{{ old('fullname') }}">
                                        @error('fullname')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <textarea class="form-control" id="description" name="description" style="height: 125px;"
                                            placeholder="Nhập mô tả bản thân (Nếu có).">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="idenerregistra_number" class="form-label">Số căn cước</label>
                                        <input type="text" class="form-control" id="idenerregistra_number"
                                            name="idenerregistra_number" placeholder="Nhập giá"
                                            value="{{ old('idenerregistra_number') }}">
                                        @error('idenerregistra_number')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="6 - 15 Ký tự" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Giới tính</label>
                                        <select name="gender" class="form-control" id="gender">
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                            <option value="3">Khác</option>
                                        </select>
                                        @error('gender')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> --}}
                            </div>
                            <!-- Personal-Information -->
                        </div>
                        <div class="tab-pane col-lg-12">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="img-1" class="form-label">Mặt trước căn cước</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="file" class="form-control" name="images[]" id="img-1"
                                                    multiple onchange="previewImages(event, 'preview-img-1')">

                                                @if (session('response'))
                                                    @php
                                                        $response = session('response');
                                                    @endphp
                                                    @if ($response['data']['isMatch'] === false)
                                                        <div class="alert alert-danger mt-1">Sai thông tin</div>
                                                    @endif
                                                @endif
                                                @error('images')
                                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary" id="btnOpenCamera">Chụp
                                                    ảnh</button>
                                                <!-- The Modal -->
                                                <div id="cameraModal" class="modal">
                                                    <div class="modal-content">
                                                        <span class="close">&times;</span>
                                                        <video autoplay="" id="video"></video>
                                                        <div>
                                                            <button class="button" id="btnPause">Stop camera</button>
                                                            <button class="button" id="btnScreenshot">Chụp hình</button>
                                                            <button type="hidden" class="button" id="btnChangeCamera">Đổi
                                                                camera</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="img-2" class="form-label">Mặt sau căn cước</label>
                                        <input type="file" class="form-control" name="images[]" id="img-2" multiple
                                            onchange="previewImages(event, 'preview-img-2')">

                                        @error('images')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="img-3" class="form-label">Chân dung</label>
                                        <input type="file" class="form-control" name="images[]" id="img-3" multiple
                                            onchange="previewImages(event, 'preview-img-3')">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3">
                                                <div id="preview-img-1" class="preview-image card-img"></div>
                                            </div>
                                            <div class="col-3">
                                                <div id="preview-img-2" class="preview-image card-img"></div>
                                            </div>
                                            <div class="col-3">
                                                <div id="preview-img-3" class="preview-image card-img"></div>
                                            </div>
                                        </div>
                                        @error('images')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="video-screenshot">
                                    <div id="screenshotsContainer" class="screenshots-container">
                                        <canvas id="canvas" class="is-hidden"></canvas>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- Personal-Information -->
                        </div>
                    </div>
                    <button type="submit" class="btn form-control btn-primary">Lưu</button>
                </form>
                {{-- @if (session('showAlert'))
                    <script>
                        var showAlert = @json(session('showAlert'));
                        // Kiểm tra các thông báo
                        if (typeof showAlert !== 'undefined') {
                            console.log(showAlert); // Kiểm tra giá trị showAlert
                        }
                    </script>
                @endif --}}
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
    <style>
        #video {
            width: 100%;
        }

        .is-hidden {
            display: none;
        }

        .iconfont {
            font-size: 24px;
        }

        .btns {
            margin-bottom: 10px;
        }

        button {
            font-size: 22px;
            padding: 8px 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        .video-screenshot {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .screenshots-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            /* Adjust gap as needed */
            justify-content: center;
            /* Center align images */
        }

        .screenshots-container img {
            */ width: 9000px;
            /* Adjust the width as needed */
            height: auto;
            border-radius: 5px;
        }


        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@endpush

@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>


    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Ngôn ngữ tiếng Việt cho DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.11.4/i18n/Vietnamese.json"></script>
    <script src="{{ asset('assets/js/app-nht.js') }}"></script>
    <script src="{{ asset('assets/js/api-nht.js') }}"></script>
    {{-- dropdow nut profile --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js và Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Ngôn ngữ tiếng Việt cho DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.11.4/i18n/Vietnamese.json"></script>

    <!-- Tệp JavaScript tùy chỉnh của bạn -->
    <script src="{{ asset('assets/js/app-nht.js') }}"></script>
    <script src="{{ asset('assets/js/api-nht.js') }}"></script>
    <!-- Show Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets\js\show-alert.js') }}" text="text/javascript"></script>
@endpush
