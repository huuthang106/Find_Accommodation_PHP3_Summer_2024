@extends('layouts.layout-user')
@section('titleUs', 'Trang đăng trọ ')
@section('contentUs')
    <div class="background-content">
        <div class="row d-flex justify-content-center ">
            <div class="col-10 bg-body  mt-2 rounded p-2">
                <div class="card-header text-center">
                    <h5 class="card-title bg">Đăng bài</h5>
                </div>
                <div class="row">
                    <div class="tab-pane col-lg-6" id="">
                        <!-- Personal-Information -->
                        <div class="card">

                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="Title" class="form-label">Tiêu đề bài đăng</label>
                                        <input type="text" class="form-control" id="Title" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Description" class="form-label">Mô tả </label>
                                        <textarea class="form-control" id="Description" style="height: 125px;" placeholder="Nhập mô tả bản thân (Nếu có)."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Giá</label>
                                        <input type="text" class="form-control" id="text"
                                            placeholder="6 - 15 Ký tự">
                                    </div>
                                    <div class="mb-3">
                                        <label for="PhoneNumber" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="PhoneNumber"
                                            placeholder="6 - 15 Ký tự">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Address" class="form-label">Địa chỉ </label>
                                        <textarea class="form-control" id="Address" style="height: 125px;" placeholder="Nhập địa chỉ phòng trọ."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </form>
                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>
                    <div class="tab-pane col-lg-6" id="">
                        <!-- Personal-Information -->
                        <div class="card">

                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="Categories" class="form-label">Loại</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Phòng trọ</option>
                                            <option value="">Căn hộ</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Số lượng phòng trống</label>
                                        <input type="number" class="form-control" id="quantity"
                                            value="nguyenhutheng@gmail.com">
                                    </div>

                                    <div id="file-inputs">
                                        <div class="mb-3">
                                            <label for="img-room-1" class="form-label">Hình ảnh</label>
                                            <input type="file" class="form-control" id="img-room-1"
                                                placeholder="6 - 15 Ký tự">
                                        </div>
                                        
                                    </div>
                                    <button type="button" id="add-file" class="btn btn-primary">+</button>

                                </form>
                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
