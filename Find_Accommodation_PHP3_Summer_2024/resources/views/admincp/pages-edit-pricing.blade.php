@extends('layouts.error')
@section('titleAdmin', 'Đăng Ký | TÌM TRỌ')
@section('content')
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="col-12">
                                <h4 class="text-center text-primary">CHỈNH SỬA GÓI TIN</h4>
                            </div>
                            <form action="{{ route('put-pricelist', ['id' => $priceList->id]) }}" method="POST"
                                class="p-2">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="form-group">
                                    <label for="package-type">Loại gói</label>
                                    {{-- Example of accessing data --}}
                                    <select class="form-control" id="package-type" required="">
                                        <option value="">
                                            @if ($priceList->status == 1)
                                                Gói Tiết Kiệm
                                            @elseif($priceList->status == 2)
                                                Gói Nâng Cao
                                            @elseif($priceList->status == 3)
                                                Gói Cao Cấp
                                            @else
                                                Khác
                                            @endif
                                        </option>
                                        <option value="{{ $priceList->status == 1 }}">Gói Tiết Kiệm</option>
                                        <option value="{{ $priceList->status == 2 }}">Gói Nâng Cao</option>
                                        <option value="{{ $priceList->status == 3 }}">Gói Cao Cấp</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="price">Giá</label>
                                    <input class="form-control" type="text" id="price" required=""
                                        placeholder="Giá"
                                        value="{{ optional($priceList)->price ? number_format($priceList->price, 0, ',', '.') : '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="support">Hỗ trợ</label>
                                    <input class="form-control" type="text" id="support" required=""
                                        placeholder="Hỗ trợ" value="{{ $priceList->Support ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input class="form-control" type="text" id="video" required=""
                                        placeholder="Video" value="{{ $priceList->Video_Posting ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="posts">Bài đăng</label>
                                    <input class="form-control" type="text" id="posts" required=""
                                        placeholder="Bài đăng" value="{{ $priceList->Post_Posting ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="content">Nội dung</label>
                                    <input class="form-control" type="text" id="content" required=""
                                        placeholder="Nội dung" value="{{ $priceList->description ?? '' }}">
                                </div>

                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">Chỉnh sửa</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-4">
                        <div class="col-sm-12 text-center">
                            <a href="{{ route('get-pricelist') }}" class="btn btn-secondary"><b>Quay về</b></a>
                        </div>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
@endsection
