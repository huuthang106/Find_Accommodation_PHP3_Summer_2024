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
