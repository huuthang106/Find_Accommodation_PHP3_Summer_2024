@extends('layouts.app')
@section('titleAdmin', 'Thông Báo | TÌM TRỌ')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="background-content">
            <div class="row d-flex justify-content-center ">
                <div class="col-10 bg-body  mt-2 rounded p-2">
                    <div class="text-center">
                        <h4 class="text-primary">CHI TIẾT BÀI VIẾT</h4>
                    </div>
                  
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <div class="form-group mb-3">
                                    <label for="Title" class="form-label">Tiêu đề bài đăng</label>
                                    <input type="text" class="form-control" value="{{ $roomDetail->title }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Price" class="form-label">Giá</label>
                                    <input type="text" class="form-control" id="Price" name="Price"
                                        value="{{ $roomDetail->price }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Phone" class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" id="Phone" name="Phone"
                                        value="{{ $roomDetail->phone }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Description" class="form-label">Mô tả</label>
                                    <textarea class="form-control" id="Description" name="Description" style="height: 125px;" readonly>{{ $roomDetail->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for="Category_id" class="form-label">Loại phòng</label>
                                    <input type="text" name="Category_id" id="Category_id" class="form-control"
                                        value="{{ $roomDetail->category ? $roomDetail->category->name : 'Không có dữ liệu' }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Số lượng phòng trống</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity"
                                        value="{{ $roomDetail->quantity }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Người đăng bài</label>
                                    <input type="text" class="form-control" value="{{ $roomDetail->user->username }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Address" class="form-label">Địa chỉ</label>
                                    <textarea class="form-control" id="Address" name="Address" style="height: 125px;" readonly>{{ $roomDetail->address }}</textarea>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <img class="img-fluid" width="50%"
                                    src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                    alt="">
                            </div> --}}
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{ url('xem-phong/' . $roomDetail->id) }}" class="btn btn-primary m-2">Xem địa chỉ bài
                                viết</a>
                                @if($images->isNotEmpty())
                            <button type="button" class="btn btn-primary m-2" data-toggle="modal"
                                data-target="#exampleModal"><i class="fas fa-image"></i> Xem tất cả
                                ảnh</button>
                                @endif
                            <!-- Modal -->
                            <div class="modal fade modal-edit" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @if($images->isNotEmpty())
                                                    @foreach($images as $item)
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets/images/'. $item->image) }}"
                                                            class="d-block w-100 " alt="...">
                                                    </div>
                                                    @endforeach
                                                    @else
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                                            class="d-block w-100 " alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                                            class="d-block w-100 " alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    @endif

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                  

                </div>
            </div>
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
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style-nht.css')}}">
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
