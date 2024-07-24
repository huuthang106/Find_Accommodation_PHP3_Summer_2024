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
                        <h4 class="mb-3">Danh sách Blog</h4>
                        <div class="btn-group">
                            <a href="{{ route('blogs.create') }}" class="btn btn-primary mx-2">Thêm Blog</a>
                            <button type="button" class="btn btn-danger me-2">Xóa tất cả</button>
                        
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
                                    <th>Tiêu Đề</th>
                                    <th>Mô Tả</th>
                                    {{-- <th>Giá</th>
                                    <th>Hỗ trợ</th>
                                    <th>Video</th>
                                    <th>Bài đăng</th>
                                    <th>Nội dung</th>--}}
                                    <th>Thao tác</th> 

                                    <tbody>
                                        @foreach ($blog as $item)
                                            <tr>
                                               
                                                <th><input type="checkbox"></th>
                                                <th>{{ $item->id }}</th>
                                               
                                           
                                                <td>{{ Str::limit($item->title, 15) }}</td>
                                                <td>{{ Str::limit($item->description, 25)}}</td>           
                                                <td>
                                                    <form action="{{ route('delete-blog', $item->id) }}" method="POST" style="display: inline;">                                                        @csrf
                                                        @method('DELETE') <!-- Đổi thành DELETE -->
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn ẩn gói tin này không?');">Xóa</button>
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                        </table>

                    </div>
                    <!-- end -->

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
@endpush

@push('scripts')
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
@endpush
