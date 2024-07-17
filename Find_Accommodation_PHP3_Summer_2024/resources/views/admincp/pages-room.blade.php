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
                        <h4 class="mb-3">Danh sách bảng tin</h4>
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
                                    <th>Tiêu đề</th>
                                    <th>Giá</th>
                                    <th>Tên người đăng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($room as $item)
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ Str::limit($item->title, 20) }}</td> <!-- Giới hạn 30 ký tự -->
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td><button class="btn btn-primary">Xem chi tiết</button></td>
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
