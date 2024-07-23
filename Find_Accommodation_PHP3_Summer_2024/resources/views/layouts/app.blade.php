<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('titleAdmin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @stack('styles')


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                {{-- <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="assets\images\flags\us.jpg" alt="user-image" class="mr-2" height="12"> <span
                            class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\spain.jpg" alt="user-image" class="mr-2" height="12">
                            <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\italy.jpg" alt="user-image" class="mr-2" height="12">
                            <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\french.jpg" alt="user-image" class="mr-2" height="12">
                            <span class="align-middle">French</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\russia.jpg" alt="user-image" class="mr-2" height="12">
                            <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </li> --}}

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">{{ $notificationCount }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 m-0">
                                <span class="float-right">
                                    <a href="{{ route('soft-delete-all-notifications') }}" class="text-dark">
                                        <small>Xóa tất cả</small>
                                    </a>
                                </span>Thông báo
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            @foreach ($unreadNotifications as $item)
                                <a href="{{ route('pages-notification-detail', $item->id) }}"
                                    class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">{{ $item->message }}<small
                                            class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                    </p>
                                </a>
                            @endforeach

                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1
                                        min ago</small></p>
                            </a> --}}

                            <!-- item-->
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">5 hours
                                        ago</small></p>
                            </a> --}}

                            <!-- item-->
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3
                                        days ago</small></p>
                            </a> --}}

                            <!-- item-->
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4
                                        days ago</small></p>
                            </a> --}}

                            <!-- item-->
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a> --}}
                        </div>

                        <!-- All-->
                        <a href="{{ route('pages-notification') }}"
                            class="dropdown-item text-primary text-center notify-item notify-all ">
                            Xem tất cả
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets\images\users\avatar-1.jpg') }}" alt="user-image"
                            class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            {{-- Maxine K <i class="mdi mdi-chevron-down"></i> --}}
                            @if (Auth::check())
                                {{ Auth::user()->username }} <i class="mdi mdi-chevron-down"></i>
                            @else
                                <!-- Nếu người dùng chưa đăng nhập, không hiển thị gì -->
                            @endif
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Xin chào !</h6>
                        </div>

                        <!-- item-->
                        <a href="{{ route('quan-li-ho-so') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Hồ sơ</span>
                        </a>




                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a> --}}
                        <a href="javascript:void(0);" class="dropdown-item notify-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Đăng xuất</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>




            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('assets\images\logo3.png') }}" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">S</span> -->
                        <img src="assets\images\logo-sm.png" alt="" height="22">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets\images\logo-light.png" alt="" height="26">
                        <!-- <span class="logo-lg-text-light">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-light">S</span> -->
                        <img src="assets\images\logo-sm.png" alt="" height="22">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">


            <div class="user-box">
                <div class="float-left">
                    <img src="{{ asset('assets\images\users\avatar-1.jpg') }}" alt=""
                        class="avatar-md rounded-circle">
                </div>
                {{-- Kiểm tra nếu người dùng đã đăng nhập --}}
                @if (Auth::check())
                    @php
                        $admin = Auth::user();
                    @endphp

                    <div class="user-info">
                        <a href="#">{{ $admin->username }}</a>

                        {{-- Kiểm tra vai trò của người dùng --}}
                        @if ($admin->role == 0)
                            <p class="text-muted m-0">
                                Admin
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="{{ route('trang-quan-ly') }}">
                            <i class="ti-home"></i>
                            <span> Bảng điều khiển </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pages-report') }}">
                            <i class="fas fa-flag"></i>
                            <span> Bảng Báo Cáo </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-files"></i>
                            <span> Quản lý</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('pages-commet') }}">
                                    <i class="fas fa-comment"></i>
                                    <span>Quản lí bình luận</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages-room') }}">
                                    <i class="fas fa-newspaper"></i>
                                    <span>Quản lí tin đăng</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('pages-evaluate') }}">
                                    <i class="fas fa-money-check"></i>
                                    <span>Quản lí đánh giá</span>
                                </a>
                            </li> --}}
                            <li>
                                <a href="{{ route('goi-dang-tin') }}">
                                    <i class="fas fa-money-check"></i>
                                    <span>Quản lí gói đăng tin</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get-pricelist') }}">
                                    <i class="fas fa-money-check"></i>
                                    <span>Quản lí chi tiết gói</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('quan-li-blog') }}">
                                    <i class="fas fa-money-check"></i>
                                    <span>Quản lí blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('quan-li-role') }}">
                                    <i class="fas fa-money-check"></i>
                                    <span>Quản lí role</span>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    {{-- <li>
                        <a href="javascript: void(0);">
                            <i class="ti-menu-alt"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('tables-advanced') }}">Advanced Tables</a></li>
                        </ul>
                    </li> --}}





                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>


        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            @yield('content')
            <!-- end content -->

        </div>
        <!-- END content-page -->

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    @stack('scripts')
</body>

</html>
