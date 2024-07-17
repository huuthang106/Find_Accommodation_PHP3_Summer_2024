@extends('layouts.app')
@section('content')
    <div class="content">

        <!-- Start container-fluid -->
        <div class="container-fluid">

            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Danh sách gói tin</h4>

                        <!-- Start row -->
                        <div class="row mt-5 justify-content-center">
                            <div class="col-md-10">
                                <div class="text-center">
                                    <h4 class="mt-2 mb-2">Vui Lòng Chọn Gói</h4>
                                </div>

                                <div class="row mt-5">
                                    @foreach($price as $item)
                                    <div class="col-lg-4">
                                        <div class="card text-center mt-3 bg-light border-0">
                                            <div class="card-header bg-primary">
                                                <h5 class="text-uppercase text-white font-16">
                                                    @if($item->status == 1)
                                                        Gói Tiết Kiệm
                                                    @elseif($item->status == 2)
                                                        Gói Nâng Cao
                                                    @elseif($item->status == 3)
                                                        Gói Cao Cấp
                                                    @else
                                                        Khác
                                                    @endif
                                                </h5>
                                            </div>
                                            <div class="text-center p-4 mb-3">
                                                <h1 class="display-5 mt-0 font-weight-bold">{{ number_format($item->price, 0, ',', '.') }}đ</h1>
                                                <p class="font-13">Mỗi tháng</p>
                                                <div class="mt-4 pt-2">
                                                    {{-- <p>{{$item->Additional_Features}}</p> --}}
                                                    <p>{{$item->Support}}</p>
                                                    <p>{{$item->Post_Posting}}</p>
                                                    <p>{{$item->Video_Posting}}</p>
                                                  
                                                    <p>{{$item->description}}</p>
                                                </div>
                                                <div class="text-center mt-5">
                                                    <a href="#" class="btn btn-danger width-md btn-rounded">Đăng Kí</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                        
                             

                                    {{-- <div class="col-lg-4">
                                        <div class="card text-center mt-3 ribbon-box bg-light border-0">

                                            <div class="card-header bg-primary">
                                                <div class="ribbon-two ribbon-two-success"><span>Phổ Biến</span></div>
                                                <h5 class="text-uppercase text-white font-16">GÓI CHUYÊN NGHIỆP</h5>
                                            </div>

                                            <div class="text-center p-4 mb-3">
                                                <h1 class="display-4 mt-0 font-weight-bold">290.000 đ</h1>
                                                <p class="font-13">Mỗi Tháng</p>

                                                <div class="mt-4 pt-2">
                                                    <p>Lưu trữ 10 GB</p>
                                                    <p>Băng thông 500 GB</p>
                                                    <p>Không có tên miền</p>
                                                    <p>1 Người dùng</p>
                                                    <p>Hỗ trợ email</p>
                                                    <p>Hỗ trợ 24x7</p>
                                                </div>

                                                <div class="text-center mt-4">
                                                    <button type="button" class="btn btn-danger width-md btn-rounded"
                                                        data-toggle="modal" data-target="#editPackageModal">Chỉnh
                                                        sửa</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="col-lg-4">
                                        <div class="card text-center mt-3 bg-light border-0">
                                            <div class="card-header bg-primary">
                                                <h5 class="text-uppercase text-white font-16">GÓI DOANH NGHIỆP</h5>
                                            </div>

                                            <div class="text-center p-4 mb-3">
                                                <h1 class="display-4 mt-0 font-weight-bold">390.000 đ</h1>
                                                <p class="font-13">Mỗi Tháng</p>

                                                <div class="mt-4 pt-2">
                                                    <p>Lưu trữ 10 GB</p>
                                                    <p>Băng thông 500 GB</p>
                                                    <p>Không có tên miền</p>
                                                    <p>1 Người dùng</p>
                                                    <p>Hỗ trợ email</p>
                                                    <p>Hỗ trợ 24x7</p>
                                                </div>

                                                <div class="text-center mt-4">
                                                    <a href="{{ route('pages-edit-pricing') }} "
                                                        class="btn btn-danger width-md btn-rounded">Chỉnh
                                                        sửa</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
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
                        2017 - 2020 &copy; Chủ đề đơn giản của <a href="">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
