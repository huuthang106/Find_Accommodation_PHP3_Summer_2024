@extends('layouts.app')
@section('titleAdmin', 'Thông Báo | TÌM TRỌ')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">

            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center header-title">
                        <h4 class="mb-3">Thùng rác bình luận</h4>
                        <div>
                            <button type="button" class="btn btn-danger">Xóa tất cả</button>
                            <a href="{{ route('admin.pages-commet') }}" class="btn btn-primary text-white me-2">
                                <i class="fas fa-arrow-left"></i>&nbsp;Trở lại danh sách
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end row -->

            <div class="row mt-3">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tất cả <input type="checkbox"></th>
                                    <th>STT</th>
                                    <th>Nội dung</th>
                                    <th>Tên bài viết</th>
                                    <th>Tên người dùng</th>
                                    <th>Ngày bình luận</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trashedComments as $comment)
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->content }}</td>
                                        <td>{{ $comment->room->title }}</td>
                                        <td>{{ $comment->user->username }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td>
                                            <form action="{{ route('admin.comment.restore', $comment->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success"
                                                    >Khôi
                                                    phục</button>
                                            </form>
                                            <form action="{{ route('admin.comment.deletePermanent', $comment->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    >Xóa
                                                    vĩnh viễn</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- end row -->


    <!-- end row -->

    </div>
    <!-- end container-fluid -->



    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2017 - 2020 &copy; Simple theme by <a href="">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    </div>
@endsection
@push('styles')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo3.png') }}">
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }} "rel="stylesheet" type="text/css">
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-admin.css') }}" type="text/css" id='styleadmin-stylesheet'>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-nht.css') }}">
@endpush

@push('scripts')
    <!-- SweetAlert2 CDN --> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('assets/js/pages/morris.init.js') }}"></script>

    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.axislabels.js') }}"></script>

    <!-- KNOB JS -->
    <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/flot.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('assets\js\pages\datatables.init.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets\libs\datatables\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets\libs\datatables\dataTables.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('assets\js\comment-admin.js') }}"></script>
        
@endpush
