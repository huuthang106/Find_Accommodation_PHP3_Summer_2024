@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <!-- start  -->
    <div class="container-fluid background-content">
        <div class="row d-flex justify-content-center ">
            <div class="col-10 bg-body  mt-2 rounded p-2">
                <div class="card-header text-center">
                    <h5 class="card-title bg">Xác nhận thông tin</h5>
                </div>
                <form action="{{ route('confirm') }}" id="ocr-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="tab-pane col-lg-12">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            value="{{ $frontIDRecognition['data'][0]['name'] ?? old('fullname') }}">
                                        @error('fullname')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <textarea class="form-control" id="description" name="description" style="height: 125px;"
                                            placeholder="Nhập mô tả bản thân (Nếu có).">{{ $description ?? old('description') }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="idenerregistra_number" class="form-label">Số căn cước</label>
                                        <input type="text" class="form-control" id="idenerregistra_number"
                                            name="idenerregistra_number" placeholder="Nhập giá"
                                            value="{{ $frontIDRecognition['data'][0]['id'] ?? old('idenerregistra_number') }}">
                                        @error('idenerregistra_number')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="6 - 15 Ký tự" value="{{ $phone ?? old('phone') }}">
                                        @error('phone')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Giới tính</label>
                                        <select name="gender" class="form-control" id="gender">
                                            <option value="1" {{ ($frontIDRecognition['data'][0]['sex'] ?? '') == 'NAM' ? 'selected' : '' }}>Nam</option>
                                            <option value="2" {{ ($frontIDRecognition['data'][0]['sex'] ?? '') == 'NỮ' ? 'selected' : '' }}>Nữ</option>
                                            <option value="3">Khác</option>
                                        </select>
                                        @error('gender')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="image_paths" class="form-label">Đường dẫn ảnh</label>
                                        <ul>
                                            @foreach (session('file_paths', []) as $path)
                                                <li><img src="{{ asset($path) }}" alt="Image" style="width: 150px; height: auto;"></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>
                        {{-- <div class="tab-pane col-lg-12">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="img-1" class="form-label">Mặt trước căn cước</label>
                                        <input type="file" class="form-control" name="images[]" id="img-1" multiple
                                            onchange="previewImages(event, 'preview-img-1')">

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
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Số điện thoại" value="{{ old('phone') }}">
                                        @error('phone')
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

                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div> --}}
                    </div>
                    <button type="submit" class="btn form-control btn-primary">Lưu</button>
                    {{-- @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif --}}

                    {{-- @if (session('response'))
                        @php
                            $response = session('response');
                        @endphp
                        <div class="alert alert-info">
                            <strong>Response Data:</strong>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mức Độ Giống (%)</td>
                                        <td>{{ $response['data']['similarity'] ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Hai Ảnh Giống Nhau</td>
                                        <td>{{ $response['data']['isMatch'] ? 'Giống Nhau' : 'Không Giống' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif --}}
                </form>
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
@endpush
