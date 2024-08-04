@extends('layouts.app')
@section('titleAdmin', 'Chi Tiết Thông Báo | TRỌ NHANH')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center header-title">
                        <h4 class="mb-3">Chi Tiết Thông Báo</h4>
                        <div>
                            <a href="{{ route('admin.duyet-don') }}" class="btn btn-primary text-white me-2">
                                <i class="fas fa-reply"></i>&nbsp;Quay lại
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row mt-3">
                <div class="col-12">
                    <div class="table-responsive">
                        {{-- <h5 class="font-14">Default Example</h5> --}}
                        {{-- <p class="sub-header">
                            DataTables has most features enabled by default, so all you need to do to use it with your own
                            tables is to call the construction function: <code>$().DataTable();</code>.
                        </p> --}}

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Số căn cước</th>
                                    <th>Giới tính</th>

                                    <th>Ngày gửi</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="textwarp" style="word-wrap: break-word; white-space: normal;">
                                        {{ $item->fullname }}</td>
                                    <td class="textwarp" style="word-wrap: break-word; white-space: normal;">
                                        {{ $item->idenerregistra_number }}</td>
                                    <td class="textwarp" style="word-wrap: break-word; white-space: normal;">
                                        {{ $item->phone }}</td>
                                    <td class="textwarp" style="word-wrap: break-word; white-space: normal;">
                                        @if ($item->gender == 1)
                                            Nam
                                        @elseif ($item->gender == 2)
                                            Nữ
                                        @endif
                                    </td>

                                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>

                                        <form action="{{ route('admin.registration-form', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- end -->

                </div>
            </div>
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
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style-admin.css') }}" type="text/css" id='styleadmin-stylesheet'>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-nht.css') }}">
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
    <!-- Show Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets\js\resigtermember-admin.js') }}" text="text/javascript"></script>
@endpush
