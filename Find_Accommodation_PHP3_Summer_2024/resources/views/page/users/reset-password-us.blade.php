@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <!-- start  -->
    <div class="container-fluid background-content pb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-5 bg-body mt-3 rounded">
                <div class="card-header text-center mt-3">
                    <h5 class="card-title fw-bold">ĐỔI MẬT KHẨU</h5>
                </div>
                <!-- Personal-Information -->
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('check_update_password') }}" method="POST" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="OldPassword" class="form-label">Mật khẩu cũ</label>
                                <input type="password" class="form-control" id="OldPassword" name="old_password"
                                    placeholder="6 - 15 Ký tự">
                                @error('old_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Mật khẩu mới</label>
                                <input type="password" class="form-control" id="Password" name="password"
                                    placeholder="6 - 15 Ký tự">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="RePassword" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" id="RePassword" name="password_confirmation"
                                    placeholder="6 - 15 Ký tự">
                                @error('password_confirmation')
                                    <small class="text-danger text-bold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary w-100">Lưu</button>
                            </div>
                        </form>
                        @if (session('showAlert'))
                            <script>
                                var showAlert = {
                                    @if (session('success'))
                                        success: "{{ session('success') }}",
                                    @endif
                                    @if (session('error'))
                                        error: "{{ session('error') }}",
                                    @endif
                                };
                            </script>
                            <script src="{{ asset('js/alerts.js') }}"></script>
                        @endif
                    </div>
                </div>
                <!-- Personal-Information -->
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
    {{-- dropdow nut profile --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
