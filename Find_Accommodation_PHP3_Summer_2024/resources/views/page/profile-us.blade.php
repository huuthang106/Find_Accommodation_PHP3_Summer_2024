@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <!-- start  -->
    <div class="row">
        <div class="col-md-12">
            <div class="p-0 text-center">
                <div class="member-card">
                    <div class="avatar-xxl member-thumb mb-2 center-page mx-auto">
                        <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle img-thumbnail"
                            alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>
                    <div class="">
                        <h5 class="mt-3">{{ $user->username }}</h5>
                        {{-- <p class="text-muted">@webdesigner</p> --}}
                        {{-- Nếu role == 0 sẽ hiển thị Admin, các trường hợp khác thì chưa hiển thị viết sau... --}}
                        @if ($user->role == 0)
                            <div class="mb-4">
                                <strong>Chức vụ</strong>
                                <p class="text-muted">Admin</p>
                            </div>
                        @endif
                    </div>

                    <p class="text-muted mt-2">
                        Xin chào tôi là {{ $user->username }}.
                    </p>



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
            <li class="nav-item">
                <a href="#profile-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                    Cài đặt
                </a>
            </li>
        </ul>
        <div class="tab-content bg-body">
            <div class="tab-pane fade show active" id="home-b1">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Personal-Information -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Thông Tin Cá Nhân</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <strong>Số dư</strong>
                                    <br>
                                    <p class="text-muted mb-0">{{ number_format($user->balance, 0, ',', '.') }}đ
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <strong>Họ và Tên</strong>
                                    <br>
                                    <p class="text-muted">{{ $user->username }}</p>
                                </div>
                                <div class="mb-4">
                                    <strong>Số điện thoại</strong>
                                    <br>
                                    <p class="text-muted">{{ $user->phone }}</p>
                                </div>
                                <div class="mb-4">
                                    <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">{{ $user->email }}</p>
                                </div>
                                <div class="mb-0">
                                    <strong>Địa chỉ</strong>
                                    <br>
                                    <p class="text-muted mb-0">{{ $user->address }}</p>
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
                    <div class="col-lg-8">
                        <!-- Personal-Information -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Bài viết đã đăng</h5>
                            </div>
                            <div class="card-body">
                                <!-- Nội dung tiểu sử -->
                                <div>
                                    <table id="myTable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Tất cả <input type="checkbox"></th>
                                                <th>STT</th>
                                                <th>Tiêu đề</th>
                                                <th>Số điện thoại</th>
                                                <th>Giá</th>
                                                <th>Nội dung</th>
                                                <th>Tên người đăng</th>
                                                <th>Xem chi tiết</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td></td>
                                                <td></td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td><a href="" class="btn btn-primary">Xem chi tiết</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>


                </div>
            </div>
            <div class="tab-pane fade" id="profile-b1">
                <!-- Personal-Information -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Chỉnh sửa hồ sơ</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('chinh-sua-thong-tin', ['id' => $user->id]) }}" method="POST"
                            role="form">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="FullName" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control" id="FullName" name="username"
                                    value="{{ $user->username }}">
                                @error('username')
                                    <small class="text-danger text-blod">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="Email" name="email"
                                    value="{{ $user->email }}">
                                @error('email')
                                    <small class="text-danger text-blod">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Phone" class="form-label">Số điện thoại</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    value="{{ $user->phone }}">
                                @error('phone')
                                    <small class="text-danger text-blod">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $user->address }}">
                                @error('address')
                                    <small class="text-danger text-blod">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="Password" name="passsword"
                                    placeholder="6 - 15 Ký tự">
                            </div>
                            <div class="mb-3">
                                <label for="RePassword" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" id="RePassword" name="password_confirmation"
                                    placeholder="6 - 15 Ký tự">
                                @error('password_confirmation')
                                    <small class="text-danger text-blod">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="AboutMe" class="form-label">Mô tả</label>
                                <textarea class="form-control" id="AboutMe" style="height: 125px;" placeholder="Nhập mô tả bản thân (Nếu có)."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
                <!-- Personal-Information -->
            </div>
        </div>
    </div>
@endsection
