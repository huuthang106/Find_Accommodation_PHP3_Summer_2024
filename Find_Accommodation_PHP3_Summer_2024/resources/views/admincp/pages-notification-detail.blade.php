@extends('layouts.app')
@section('titleAdmin', 'Chi Tiết Thông Báo | TRỌ NHANH')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Chi Tiết Thông Báo</h4>
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
                                    <th>Loại</th>
                                    <th>Dữ liệu</th>
                                    <th>Nội dung</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>

                            @foreach ($notifications as $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->data }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>{{ $item->status == 1 ? 'Chưa xem' : 'Đã xem' }}</td>
                                        <td>{{ $item->created_at->format('d/m/Y H:i:s') }}</td>
                                        <td>
                                            <form action="{{ route('pages-notification-detail', $item->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Xem</button>
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </td>
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
                        2017 - 2020 &copy; Simple theme by <a href="">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
