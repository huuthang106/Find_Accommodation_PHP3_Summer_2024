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
                        <h4 class="header-title mb-3">Bảng Thông Báo</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div>
                        {{-- <h5 class="font-14">Default Example</h5> --}}
                        {{-- <p class="sub-header">
                            DataTables has most features enabled by default, so all you need to do to use it with your own
                            tables is to call the construction function: <code>$().DataTable();</code>.
                        </p> --}}

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="min-width: 95px;">
                                        <div class="checkbox checkbox-single checkbox-primary">Tất cả
                                            <input type="checkbox" class="custom-control-input" id="action-checkbox">
                                            <label class="custom-control-label" for="action-checkbox">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Loại</th>
                                    <th>Dữ liệu</th>
                                    <th>Nội dung</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>

                            @foreach ($notification as $item)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-primary mr-2 float-left">
                                                <input id="checkbox{{ $item->id }}" type="checkbox">
                                                <label for="checkbox{{ $item->id }}"></label>
                                            </div>
                                        </td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->data }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>{{ $item->status == 1 ? 'Chưa xem' : 'Đã xem' }}</td>
                                        <td>{{ $item->created_at->format('d/m/Y H:i:s') }}</td>
                                        <td><a href="trang-chi-tiet-thong-bao/{{ $item->id }}"><button type="button"
                                                    class="btn btn-primary">Xem chi
                                                    tiết</button></a></td>
                                    </tr>
                                </tbody>
                            @endforeach
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
                        2024 &copy; Copyright by <a href="">TRỌ NHANH</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
