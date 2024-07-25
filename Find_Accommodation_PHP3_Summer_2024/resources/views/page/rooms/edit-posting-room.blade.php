@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')

    <div class="">
        <div class="row d-flex justify-content-center ">
            <div class="col-10 bg-body  mt-2 rounded p-2">
                <div class="card-header text-center">
                    <h5 class="card-title bg">Chỉnh sửa bài viết </h5>
                </div>
                <form action="{{ route('update-posting', $room->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="tab-pane col-lg-6" id="">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="Title" class="form-label">Tiêu đề bài đăng</label>
                                        <input type="text" class="form-control" id="Title" name="Title"
                                            value="{{ $room->title }}">
                                        @error('Title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Description" class="form-label">Mô tả</label>
                                        <textarea class="form-control" id="Description" name="Description" style="height: 125px;"
                                            placeholder="Nhập mô tả bản thân (Nếu có).">{{ $room->description }}</textarea>
                                        @error('Description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Price" class="form-label">Giá</label>
                                        <input type="text" class="form-control" id="Price" name="Price"
                                            placeholder="Nhập giá" value="{{ $room->price }}">
                                        @error('Price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Phone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="Phone" name="Phone"
                                            placeholder="6 - 15 Ký tự" value="{{ $room->phone }}">
                                        @error('Phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Address" class="form-label">Địa chỉ</label>
                                        <textarea class="form-control" id="Address" name="Address" style="height: 125px;"
                                            placeholder="Nhập địa chỉ phòng trọ.">{{ $room->address }}</textarea>
                                        @error('Address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>
                        <div class="tab-pane col-lg-6" id="">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="Category_id" class="form-label">Loại</label>
                                        <select name="Category_id" id="Category_id" class="form-control">

                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('Category_id', $room->category_id) == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('Category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Số lượng phòng trống</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            value="{{ $room->quantity }}">
                                        @error('quantity')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div id="file-inputs">
                                        <div class="mb-3">
                                            <label for="img-room-1" class="form-label">Hình ảnh</label>
                                            <input type="file" class="form-control" id="img-room-1" name="images[]">
                                        </div>
                                    </div>

                                    <div class="row" id="old-images-container">
                                        @foreach ($room->images as $item)
                                            <div  class="col-3 image-wrapper">
                                                <img src="{{ asset('assets/images/'.$item->image) }}" class="card-img-top  old-image" alt="Old Image">
                                                {{-- <button type="button" class="delete-btn" data-image-id="{{ $item->id }}">×</button> --}}
                                            </div>
                                        @endforeach
                                    </div>

                                    <button type="button" id="add-file" class="btn btn-primary ">+</button>
                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>


@endsection

@push('styles')
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    <link href="{{ asset('assets\css\style-nht.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    {{-- cdn icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- Nút thêm thanh input up hình --}}
    {{-- <script src="{{asset('assets/js/app-nht.js')}}"></script> --}}
    <script>
        document.getElementById('add-file').addEventListener('click', function() {
            // Đếm số lượng input hiện tại
            const fileInputsContainer = document.getElementById('file-inputs');
            const numberOfFileInputs = fileInputsContainer.getElementsByTagName('input').length;

            // Tạo một div mới chứa input file mới
            const newDiv = document.createElement('div');
            newDiv.className = 'mb-3';
            newDiv.innerHTML = `
                <label for="img-room-${numberOfFileInputs + 1}" class="form-label">Hình ảnh</label>
                 <input type="file" class="form-control" id="img-room-${numberOfFileInputs + 1}" name="images[]">
            `;

            // Thêm div mới vào container
            fileInputsContainer.appendChild(newDiv);
        });
    </script>


    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Giả sử bạn có một endpoint để lấy danh sách hình ảnh
            fetch('/edit-posting')
                .then(response => response.json())
                .then(data => {
                    var container = document.getElementById('old-images-container');

                    data.images.forEach(function(image) {
                        var imageWrapper = document.createElement('div');
                        imageWrapper.classList.add('image-wrapper');

                        var img = document.createElement('img');
                        img.src = image.url;
                        img.classList.add('old-image');

                        var deleteBtn = document.createElement('button');
                        deleteBtn.classList.add('delete-btn');
                        deleteBtn.innerHTML = '&times;'; // Dấu "X"
                        deleteBtn.addEventListener('click', function() {
                            // Xóa hình ảnh từ giao diện
                            imageWrapper.remove();

                            // Gửi yêu cầu xóa đến server
                            fetch('/delete-image', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        id: image.id
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        console.log('Image deleted successfully');
                                    } else {
                                        console.error('Error deleting image');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                        });

                        imageWrapper.appendChild(img);
                        imageWrapper.appendChild(deleteBtn);
                        container.appendChild(imageWrapper);
                    });
                })
                .catch(error => {
                    console.error('Error fetching images:', error);
                });
        });
    </script> --}}
@endpush
