@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <!-- start  -->

    <div class="col-md-12">
        <div class="p-0 text-center">
            <div class="member-card">
                <div class="avatar-xxl member-thumb mb-2 center-page mx-auto">
                    <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle img-thumbnail"
                        alt="profile-image">
                    <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                </div>
                <div class="">
                    <h5 class="mt-3">{{ $users->username }}</h5>
                    {{-- <p class="text-muted">@webdesigner</p> --}}
                    {{-- Nếu role == 0 sẽ hiển thị Admin, các trường hợp khác thì chưa hiển thị viết sau... --}}
                    @if ($users->role == 0)
                        <div class="mb-4">
                            <strong>Chức vụ</strong>
                            <p class="text-muted">Admin</p>
                        </div>
                    @endif
                </div>

                <p class="text-muted mt-2">
                    Xin chào tôi là {{ $users->username }}.
                <div>
                    <button class="btn btn-primary"><i class='bx bxs-message-square-add'></i> Theo dõi</button>
                    <button class="btn btn-primary"><i class='bx bx-message-rounded-dots'></i> Nhắn tin</button>
                </div>
            </div>

        </div>
        <!-- end card-box -->

    </div>
    <!-- end col -->
    </div>
    <!-- end row -->
    <!-- end -->
    <div class="mt-5 p-3">
        <ul class="nav nav-tabs tabs-bordered">
            <li class="nav-item">
                <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                    Thông tin
                </a>
            </li>
        </ul>
        <div class="tab-content bg-body">
            <div class="tab-pane fade show active" id="home-b1">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Personal-Information -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Thông Tin Cá Nhân</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <strong>Số dư</strong>
                                    <br>
                                    <p class="text-muted mb-0">{{ number_format($users->balance, 0, ',', '.') }}đ
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <strong>Họ và Tên</strong>
                                    <br>
                                    <p class="text-muted">{{ $users->username }}</p>
                                </div>
                                <div class="mb-4">
                                    <strong>Số điện thoại</strong>
                                    <br>
                                    <p class="text-muted">{{ $users->phone }}</p>
                                </div>
                                <div class="mb-4">
                                    <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">{{ $users->email }}</p>
                                </div>
                                <div class="mb-0">
                                    <strong>Địa chỉ</strong>
                                    <br>
                                    <p class="text-muted mb-0">{{ $users->address }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Personal-Information -->

                        <!-- Social -->
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title">Mạng xã hội</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-3">
                                        <a title="Facebook" data-bs-toggle="tooltip" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <a title="Twitter" data-bs-toggle="tooltip" href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="Skype" data-bs-toggle="tooltip" href="#">
                                            <i class="fab fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Social -->
                    </div>
                    <div class="col-lg-9">
                        <!-- Personal-Information -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Bài viết đã đăng</h5>
                            </div>
                            <div class="card-body">
                                <!-- Nội dung tiểu sử -->
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Tất cả <input type="checkbox"></th>

                                                <th>Tiêu đề</th>
                                                <th>Giá</th>
                                                <th>Số điện thoại</th>

                                                <th>Loại phòng</th>
                                                <th>Số lượng</th>

                                                <th>Xem chi tiết</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rooms as $item)
                                                <tr>
                                                    <td><input type="checkbox"></td>

                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->category->name }}</td>
                                                    <td>{{ $item->quantity }}</td>

                                                    <td><a href="{{ route('get-room', $item->id) }}"
                                                            class="btn btn-primary">Xem chi tiết</a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Personal-Information -->
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
        {{-- dropdow nut profile --}}
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endpush
