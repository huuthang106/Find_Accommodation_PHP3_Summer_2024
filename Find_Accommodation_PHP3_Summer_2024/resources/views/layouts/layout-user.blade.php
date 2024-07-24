<!doctype html>
<html lang="en">

<head>
    <title>@yield('titleUs')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{-- Thư viện ShowAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @stack('styles')

</head>

<body>

    <div class="page-home">
        <div class="container">
            <div class="row headerTop">
                <div class="col-3">
                    <div class="logo">
                        <img class="img-fluid logo-img" src="{{ asset('assets\images\logo3.png') }}" alt="...">
                    </div>
                </div>
                <div class="col-9">
                    <div class="header-right">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
                                        <li class="nav-item pe-4">
                                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Trang
                                                chủ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Loại trọ
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach ($categories as $category)
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('category-motel-id', $category->id) }}">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="nav-item pe-4">
                                            <a class="nav-link" href="#">Video review</a>
                                        </li>
                                        <li class="nav-item pe-4">
                                            <a class="nav-link" href="#">Diễn đàn</a>
                                        </li>
                                        @if (auth()->check() && in_array(auth()->user()->role, [0, 2, 3]))
                                            <li class="nav-item pe-4">
                                                <a class="nav-link" href="{{ route('posting-room') }}">Đăng bài</a>
                                            </li>
                                        @endif
                                    </ul>

                                    {{-- Khi chưa login sẽ hiển thị Đăng Ký/ Đăng nhập, khi login xong sẽ hiển thị Tên login --}}

                                    @if (Auth::check())
                                        <ul class="list-unstyled topnav-menu float-right mb-0  p-1 rounded-3">
                                            <li class="dropdown notification-list">
                                                <a class="nav-link dropdown-toggle nav-user mr-0 "
                                                    data-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    {{ Auth::user()->username }} <i class="mdi mdi-chevron-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                                    <!-- item -->
                                                    <div class="dropdown-header noti-title">
                                                        <h6 class="text-overflow m-0">Xin chào!</h6>
                                                    </div>
                                                    <!-- item -->
                                                    <a href="{{ route('profileus') }}"
                                                        class="dropdown-item notify-item">
                                                        <i class="mdi mdi-account-outline"></i>
                                                        <span>Hồ sơ</span>
                                                    </a>
                                                    <!-- item -->
                                                    <a href="{{ route('pages-update-password') }}"
                                                        class="dropdown-item notify-item">
                                                        <i class="mdi mdi-account-outline"></i>
                                                        <span>Đổi mật khẩu</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item -->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <i class="mdi mdi-logout-variant"></i>
                                                        <span>Đăng xuất</span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @else
                                            <ul
                                                class="list-unstyled topnav-menu float-right mb-0 bg-primary p-1 rounded-3">
                                                <li>
                                                    <button type="button" class="btn btn-primary p-0"
                                                        data-bs-toggle="modal" data-bs-target="#loginModal">
                                                        Đăng nhập/Đăng ký
                                                    </button>
                                                </li>
                                    @endif
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"> <!-- Thêm class này -->
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="account-pages my-3 pt-2">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <a href="index.html">
                                                        <span><img src="{{ asset('assets/images/logo3.png') }}"
                                                                alt="" height="60" width="170"></span>
                                                    </a>
                                                </div>
                                                <form action="{{ route('login-users') }}" method="POST"
                                                    class="p-2">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="emailaddress" class="form-label">Email</label>
                                                        <input class="form-control" name="email" type="email"
                                                            id="emailaddress" required=""
                                                            placeholder="example@gmail.com">
                                                        @error('email')
                                                            <small
                                                                class="text-danger text-blod">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Mật khẩu</label>
                                                        <input class="form-control" name="password" type="password"
                                                            required="" id="password"
                                                            placeholder="Nhập mật khẩu">
                                                        @error('password')
                                                            <small
                                                                class="text-danger text-bold">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 pb-3 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="checkbox-signin">
                                                        <label class="form-check-label" for="checkbox-signin">Ghi
                                                            nhớ tài khoản?</label>
                                                    </div>
                                                    <div class="mb-3 text-center">
                                                        <button class="btn btn-primary w-100" type="submit">ĐĂNG
                                                            NHẬP</button>
                                                    </div>
                                                    <a href="" id="showforgotpassModal" class="text-dark"
                                                        data-bs-toggle="modal" data-bs-target="#forgotpassModal"
                                                        class="text-muted float-end text-decoration-none">Quên mật
                                                        khẩu?</a>
                                                </form>
                                                <div class="mb-3 text-center">
                                                    <hr>
                                                    <button class="btn btn-danger w-100 mb-2" type="button">
                                                        <i class="fab fa-google"></i> Đăng nhập bằng Google
                                                    </button>
                                                    <button class="btn btn-primary w-100" type="button">
                                                        <i class="fab fa-facebook-f"></i> Đăng nhập bằng Facebook
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted mb-0">Bạn chưa có tài khoản? <a href="#"
                                                        id="showRegisterModal" class="text-dark"
                                                        data-bs-toggle="modal" data-bs-target="#registerModal"><b>ĐĂNG
                                                            KÝ</b></a></p>
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
        <!-- Modal Đăng Ký -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <a href="index.html">
                                <span><img src="{{ asset('assets/images/logo3.png') }}" alt=""
                                        height="60" width="170"></span>
                            </a>
                        </div>
                        <div class="account-pages my-3 pt-2">
                            <div class="container">
                                <form action="{{ route('register-user') }}" method="POST" class="p-2">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="registerUsername" class="form-label">Tên</label>
                                        <input class="form-control" name="username" type="text"
                                            id="registerUsername" required placeholder="Tên người dùng">
                                        @error('username')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="registerEmail" class="form-label">Email</label>
                                        <input class="form-control" name="email" type="email" id="registerEmail"
                                            required placeholder="example@gmail.com">
                                        @error('email')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="registerPassword" class="form-label">Mật khẩu</label>
                                        <input class="form-control" name="password" type="password"
                                            id="registerPassword" required placeholder="Nhập mật khẩu">
                                        @error('password')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Xác nhận mật khẩu</label>
                                        <input class="form-control" name="password_confirmation" type="password"
                                            id="confirmPassword" required placeholder="Nhập lại mật khẩu">
                                        @error('password_confirmation')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary w-100" type="submit">ĐĂNG KÝ</button>
                                    </div>
                                </form>
                                <div class="mb-3 text-center">
                                    <hr>
                                    <button class="btn btn-danger w-100 mb-2" type="button">
                                        <i class="fab fa-google"></i> Đăng ký bằng Google
                                    </button>
                                    <button class="btn btn-primary w-100" type="button">
                                        <i class="fab fa-facebook-f"></i> Đăng ký bằng Facebook
                                    </button>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted mb-0">Bạn đã có tài khoản? <a href="#"
                                                id="showLoginModal" class="text-dark" data-bs-toggle="modal"
                                                data-bs-target="#loginModal"><b>ĐĂNG NHẬP</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Quên Mật Khẩu --}}
        @if (session('showAlert'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    setTimeout(function() {
                        @if (session('success'))
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                text: "{{ session('success') }}",
                                timer: 5000,
                                timerProgressBar: true,
                                showConfirmButton: false
                            });
                        @endif

                        @if (session('error'))
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi!',
                                text: "{{ session('error') }}",
                                timer: 5000,
                                timerProgressBar: true,
                                showConfirmButton: false
                            });
                        @endif
                    }); // Delay 500ms trước khi hiển thị alert
                });
            </script>
        @endif
        <div class="modal fade" id="forgotpassModal" tabindex="-1" aria-labelledby="forgotpassModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <a href="index.html">
                                <span><img src="{{ asset('assets/images/logo3.png') }}" alt=""
                                        height="60" width="170"></span>
                            </a>
                        </div>
                        <div class="account-pages my-3 pt-2">
                            <div class="container">
                                <form action="{{ route('check-forget-password-us') }}" method="POST"
                                    class="p-2">
                                    @csrf
                                    <div class="text-center">
                                        <p class="text-muted w-75 mx-auto"> Nhập địa chỉ email của bạn và chúng tôi sẽ
                                            gửi cho bạn
                                            một email kèm theo hướng dẫn để đặt lại mật khẩu của bạn. </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerEmail" class="form-label">Email</label>
                                        <input class="form-control" name="email" type="email" id=""
                                            required placeholder="Nhập địa chỉ Email">
                                        @error('email')
                                            <small class="text-danger text-blod">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary w-100" type="submit">XÁC NHẬN</button>
                                    </div>
                                </form>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted mb-0">Bạn đã có tài khoản? <a href="#"
                                                id="showLoginModal" class="text-dark" data-bs-toggle="modal"
                                                data-bs-target="#loginModal"><b>ĐĂNG NHẬP</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- start content --}}
        @yield('contentUs')
        {{-- end content --}}
        <footer class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid" src="{{ asset('assets\images\logo3.png') }}" alt="">
                        <span class="titleFooter">Tìm trọ nhanh,dễ tìm</span>
                    </div>
                    <div class="col-3 mt-5 newsFooter">
                        <h4>THÔNG TIN</h4>
                        <p>Điều khoản & Cam kết</p>
                        <p>Quy chế hoạt động</p>
                        <p>Giải quyết khiếu nại</p>
                        <p>Chính sách bảo mật</p>
                    </div>
                    <div class="col-3 mt-5 newsFooter">
                        <h4>HỆ THỐNG</h4>
                        <p>Bảng phí</p>
                        <p>Phương thức thanh toán</p>
                        <p>Liên hệ</p>
                        <p>Hướng dẫn</p>
                    </div>
                    <div class="col-3 mt-5 newsFooter">
                        <h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
                        <p><i class='bx bxs-phone' style='color:#030299'></i> 045.342.4324</p>
                        <p><i class='bx bxl-facebook-circle' style='color:#0404a0'></i> tronhanhtoanquoc</p>
                    </div>
                </div>
            </div>
            <div class="col-12 endBarFooter">
                <span class="text-center">Copyright2024 TroNhanh</span>
            </div>
        </footer>
    </div>
    @stack('scripts')
</body>



</html>
