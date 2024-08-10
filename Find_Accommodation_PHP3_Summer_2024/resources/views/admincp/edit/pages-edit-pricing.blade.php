@extends('layouts.app')
@section('titleAdmin', 'Thông Báo | TRỌ NHANH')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3 text-center">CHỈNH SỬA GÓI TIN</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.put-pricing-detail', $priceList->id) }}" method="POST"
                                id="yourFormId" class="p-2">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="package-type">Loại gói</label>
                                    <select class="form-control" id="package-type" name="status">
                                        <option value="1" {{ $priceList->status == 1 ? 'selected' : '' }}>
                                            Gói
                                            Tiết Kiệm
                                        </option>
                                        <option value="2" {{ $priceList->status == 2 ? 'selected' : '' }}>
                                            Gói
                                            Nâng Cao
                                        </option>
                                        <option value="3" {{ $priceList->status == 3 ? 'selected' : '' }}>
                                            Gói
                                            Cao Cấp
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="price">Giá</label>
                                    <input class="form-control" type="text" id="price" name="price"
                                        placeholder="Giá" value="{{ optional($priceList)->price ?? '' }}">
                                    @error('price')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="support">Hỗ trợ</label>
                                    <input class="form-control" type="text" id="support" name="support"
                                        placeholder="Hỗ trợ" value="{{ $priceList->Support ?? '' }}">
                                    @error('support')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input class="form-control" type="text" id="video" name="videoPosting"
                                        placeholder="Video" value="{{ $priceList->Video_Posting ?? '' }}">
                                    @error('videoPosting')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="posts">Bài đăng</label>
                                    <input class="form-control" type="text" id="posts" name="postPosting"
                                        placeholder="Bài đăng" value="{{ $priceList->Post_Posting ?? '' }}">
                                    @error('postPosting')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="content">Nội dung</label>
                                    <input class="form-control" type="text" id="content" name="description"
                                        placeholder="Nội dung" value="{{ $priceList->description ?? '' }}">
                                    @error('description')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block">Chỉnh sửa</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2024 &copy; Copyright by <a href="">TRỌ NHANH</a>
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
    <link rel="stylesheet" href="{{ asset('assets/css/style-nht.css') }}">
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
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var priceInput = document.getElementById('price');

            priceInput.addEventListener('input', function() {
                var value = priceInput.value.replace(/\./g, ''); // Loại bỏ dấu chấm để xử lý
                value = value.replace(/\D/g, ''); // Loại bỏ các ký tự không phải số
                var formattedValue = new Intl.NumberFormat('de-DE').format(value);
                priceInput.value = formattedValue;
            });

            // priceInput.addEventListener('focus', function() {
            //     var value = priceInput.value.replace(/\./g, ''); // Loại bỏ dấu chấm khi focus
            //     priceInput.value = value;
            // });

            priceInput.addEventListener('blur', function() {
                var value = priceInput.value;
                if (value) {
                    // Định dạng lại giá trị khi mất tiêu điểm
                    var formattedValue = new Intl.NumberFormat('de-DE').format(value);
                    priceInput.value = formattedValue;
                }
            });
        });
    </script> --}}
@endpush
