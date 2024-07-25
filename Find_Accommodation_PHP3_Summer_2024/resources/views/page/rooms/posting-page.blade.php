@extends('layouts.layout-user')
@section('titleUs', 'Trang đăng trọ ')
@section('contentUs')
    <div class="background-content">
        <div class="row d-flex justify-content-center ">
            <div class="col-10 bg-body  mt-2 rounded p-2">
                <div class="card-header text-center">
                    <h5 class="card-title bg">Đăng bài</h5>
                </div>
                <form action="{{ route('show-posting-room') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="tab-pane col-lg-6" id="">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="Title" class="form-label">Tiêu đề bài đăng</label>
                                        <input type="text" class="form-control" id="Title" name="Title"
                                            value="{{ old('Title') }}">
                                        @error('Title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Description" class="form-label">Mô tả</label>
                                        <textarea class="form-control" id="Description" name="Description" style="height: 125px;"
                                            placeholder="Nhập mô tả bản thân (Nếu có).">{{ old('Description') }}</textarea>
                                        @error('Description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Price" class="form-label">Giá</label>
                                        <input type="text" class="form-control" id="Price" name="Price"
                                            placeholder="Nhập giá" value="{{ old('Price') }}">
                                        @error('Price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Phone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="Phone" name="Phone"
                                            placeholder="6 - 15 Ký tự" value="{{ old('Phone') }}">
                                        @error('Phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Address" class="form-label">Địa chỉ</label>
                                        <textarea class="form-control" id="Address" name="Address" style="height: 125px;"
                                            placeholder="Nhập địa chỉ phòng trọ.">{{ old('Address') }}</textarea>
                                        @error('Address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>
                        <div class="tab-pane col-lg-6" id="">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="Category_id" class="form-label">Loại</label>
                                        <select name="Category_id" id="Category_id" class="form-control">
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('Category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="area" class="form-label">Khu vực</label>
                                        <select name="area_id" id="area_id" class="form-control">
                                            @foreach ($areas as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('Category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Số lượng phòng trống</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            value="{{ old('quantity') }}">
                                        @error('quantity')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div id="file-inputs">
                                        <div class="mb-3">
                                            <label for="img-room-1" class="form-label">Hình ảnh</label>
                                            <input type="file" class="form-control" id="img-room-1" name="images[]">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" hidden class="form-control" id="user_id" name="user_id"
                                            placeholder="6 - 15 Ký tự" value="{{ $user }}">
                                    </div>
                                    <button type="button" id="add-file" class="btn btn-primary">+</button>
                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
