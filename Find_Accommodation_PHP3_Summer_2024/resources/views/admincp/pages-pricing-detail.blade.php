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
                        <h4 class="mb-3">Danh sách gói tin</h4>
                        <button type="button" class="btn btn-danger">Xóa tất cả</button>
                    </div>
                </div>
            </div>

            <!-- end row -->

            <div class="row mt-3">
                <div class="col-12">
                    <div>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tất cả <input type="checkbox"></th>
                                    <th>STT</th>
                                    <th>Loại gói</th>
                                    <th>Giá</th>
                                    <th>Hỗ trợ</th>
                                    <th>Video</th>
                                    <th>Bài đăng</th>
                                    <th>Nội dung</th>
                                    <td></td>
                            <tbody>
                                @foreach ($priceDetail as $item)
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>{{ $item->id }}</th>
                                        <td>
                                            @if ($item->status == 1)
                                                Gói Tiết Kiệm
                                            @elseif($item->status == 2)
                                                Gói Nâng Cao
                                            @elseif($item->status == 3)
                                                Gói Cao Cấp
                                            @else
                                                Khác
                                            @endif
                                        </td>
                                        <td>
                                            {{ number_format($item->price, 0, ',', '.') }}đ
                                        </td>
                                        <td>{{ Str::limit($item->Support, 20) }}</td>
                                        <td>{{ $item->Video_Posting }}</td>
                                        <td>{{ Str::limit($item->Post_Posting, 15) }}</td>
                                        <td>
                                            {{ Str::limit($item->description, 10) }}
                                        </td>
                                        <td><a href="chinh-sua-goi-tin/{{ $item->id }}" class="btn btn-primary">Chỉnh
                                                sửa</a></td>
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
