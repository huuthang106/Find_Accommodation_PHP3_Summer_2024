@extends('layouts.layout-user')
@section('titleUs', 'Trang chủ trọ nhanh')
@section('contentUs')
    <div class="container-fluid background-content">
        <div class="row d-flex justify-content-center">
            <div class="col-6 p-0">
                <span class="item">
                    <a href="{{ route('home') }}" class="item-link text-decoration-none">Trang chủ</a>
                </span>
                <div class="hostel__detail">
                    <h1 class="box-title">{{ $room->title }}</h1>
                </div>
                <div class="hostel__detail--tags">
                    <a href="" class="item vip text-decoration-none">Tin vip</a>
                </div>
                <div class="hostel__detail--address">{{ $room->address }}
                </div>
            </div>
            <div class="col-3 p-0">
                <div class="div">
                    {{-- <div class="p-0 d-flex justify-content-end">
                        <p class="p-0">giá từ</p>
                    </div> --}}
                    <div class="d-flex justify-content-end p-0 mt-5">
                        <p class="fw-bold text-orange">giá từ <span class="fs-4">{{ $room->price }}</span>
                            VND/tháng</p>
                    </div>
                    <div class="d-flex justify-content-end p-0">
                        <a href="{{ route('profile-other', $room->user->id) }}" class="btn btn-danger p-3 me-3"><i
                                class='bx bx-file'></i>
                            Xem hồ sơ</a>
                        <a href="#" class="btn btn-orange p-3 text-light"><i class="fa-solid fa-phone"
                                style="color: #ffffff;"></i> 0985885475</a>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-end p-0 mt-2">
                        <form action="{{ route('report.room', $room->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="reason" value="Đã báo cáo vì nội dung không phù hợp"> <!-- Optional: Add a reason -->
                            <button type="submit" class="btn btn-danger p-2 text-light">
                                <i class="fa-solid fa-phone" style="color: #ffffff;"></i> Báo Cáo
                            </button>
                        </form>
                    </div> --}}
            </div>
            <div class="row justify-content-center p-0 mt-3">
                <div class="col-9 p-0 block-img">
                    @if ($images->isNotEmpty())
                        @foreach ($images as $index => $item)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('assets/images/' . $item->image) }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        @endforeach
                    @else
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                alt="">
                        </div>
                    @endif
                    {{-- @if ($images->isNotEmpty()) --}}
                  
                        {{-- @endif --}}
                </div>
                <button type="button" class="btn btn-primary m-2 fixed-button" data-toggle="modal"
                data-target="#exampleModal"><i class="fas fa-image"></i> Xem tất cả ảnh
        </button>
            </div>
            <!-- Modal -->
            <div class="modal fade modal-edit" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content edit-modal">
                        <div class="modal-header border-0">
                            <button type="button " class="close btn-close"  data-dismiss="modal" aria-label="Close">
                               
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @if ($images->isNotEmpty())
                                        @foreach ($images as $index => $item)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                <img src="{{ asset('assets/images/' . $item->image) }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets\images\448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    @endif
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center p-0 mt-4 ">
                <div class="col-9 bg-body rounded p-4">
                    <h3>Thông tin</h3>
                    <div class="row rounded-top background-content p-3">
                        <div class="col-3">Địa chỉ:</div>
                        <div class="col-9">{{ $room->address }}</div>
                    </div>
                    <div class="row p-3">
                        <div class="col-3">Giá:</div>
                        <div class="col-9">{{ $room->price }}</div>
                    </div>
                    <div class="row rounded-top background-content p-3">
                        <div class="col-3">Loại:</div>
                        <div class="col-9">Trọ</div>
                    </div>
                    <div class="row p-3">
                        <div class="col-3">Người đăng:</div>
                        <div class="col-9">{{ $room->user->username }}</div>
                    </div>
                    <div class="row rounded-top background-content p-3">
                        <div class="col-3">Số điện thoại:</div>
                        <div class="col-9">{{ $room->phone }}</div>
                    </div>
                    <div class="row p-3">
                        <div class="col-3">Ngày đăng:</div>
                        <div class="col-9">{{ $room->created_at }}</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center p-0 mt-4 ">
                <div class="col-9 bg-body rounded p-4">
                    <h3>Giới thiệu</h3>
                    <p>
                        {{ $room->description }}
                    </p>
                </div>
            </div>
            <div class="row justify-content-center p-0 mt-4">
                <div class="col-9 bg-body rounded p-4">
                    <h3>Bình luận</h3>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                            <!-- Phần bình luận chính -->
                            <div id="commentList">
                                @if ($comments->isNotEmpty())
                                    @foreach ($comments as $index => $comment)
                                        @if (is_null($comment->parent_id))
                                            <div class="card mb-3 comment-card {{ $index >= 3 ? 'additional-comment' : '' }}"
                                                data-comment-id="{{ $comment->id }}"
                                                {{ $index >= 3 ? 'style=display:none;' : '' }}>
                                                <div class="card-body">
                                                    <div class="d-flex flex-start align-items-center">
                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                            src="{{ asset('assets/images/clinh4.jpeg') }}" alt="avatar"
                                                            width="60" height="60" />
                                                        <div>
                                                            <h6 class="fw-bold text-dark mb-1">
                                                                {{ $comment->user->username }}</h6>
                                                            <p class="text-muted small mb-0">Đăng vào
                                                                {{ \Carbon\Carbon::parse($comment->created_at)->timezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-4 pb-2">{{ $comment->content }}</p>
                                                    <div class="small d-flex justify-content-start">
                                                        <a href="#!"
                                                            class="d-flex align-items-center me-3 text-decoration-none text-primary like-btn">
                                                            <i class="far fa-thumbs-up me-2"></i>
                                                            <p class="mb-0">Thích</p>
                                                        </a>
                                                        <a href="#!"
                                                            class="d-flex align-items-center me-3 text-decoration-none text-primary reply-btn"
                                                            data-comment-id="{{ $comment->id }}">
                                                            <i class="far fa-comment-dots me-2"></i>
                                                            <p class="mb-0">Trả lời</p>
                                                        </a>
                                                    </div>
                                                    <div class="reply-form" id="reply-form-{{ $comment->id }}"
                                                        style="display: none;">
                                                        <form action="{{ route('comments.store') }}" method="POST"
                                                            class="reply-form-ajax">
                                                            @csrf
                                                            <input type="hidden" name="parent_id"
                                                                value="{{ $comment->id }}">
                                                            <input type="hidden" name="room_id"
                                                                value="{{ $room->id }}">
                                                            <div class="form-floating">
                                                                <textarea class="form-control border-primary rounded-3 shadow-sm" name="content" rows="3"
                                                                    placeholder="Nhập tin nhắn ở đây" required></textarea>
                                                                <label for="replyTextArea-{{ $comment->id }}">Tin
                                                                    nhắn</label>
                                                            </div>
                                                            <div class="d-flex justify-content-end mt-2">
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-sm me-2">Đăng</button>
                                                                <button type="button"
                                                                    class="btn btn-outline-primary btn-sm cancel-reply">Hủy</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- Replies -->
                                                    <div class="replies mt-3">
                                                        @foreach ($comment->replies as $reply)
                                                            <div class="card ms-2 mb-3 comment-card"
                                                                data-comment-id="{{ $reply->id }}">
                                                                <div class="card-body">
                                                                    <div class="d-flex flex-start align-items-center">
                                                                        <img class="rounded-circle shadow-1-strong me-3"
                                                                            src="{{ asset('assets/images/clinh4.jpeg') }}"
                                                                            alt="avatar" width="50"
                                                                            height="50" />
                                                                        <div>
                                                                            <h6 class="fw-bold text-dark mb-1">
                                                                                {{ $reply->user->username }}</h6>
                                                                            <p class="text-muted small mb-0">Đăng vào
                                                                                {{ \Carbon\Carbon::parse($reply->created_at)->timezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}
                                                                            </p>


                                                                        </div>
                                                                    </div>
                                                                    <p class="mt-3 mb-4 pb-2">{{ $reply->content }}
                                                                    </p>
                                                                    <div class="small d-flex justify-content-start">
                                                                        <a href="#!"
                                                                            class="d-flex align-items-center me-3 text-decoration-none text-primary like-btn">
                                                                            <i class="far fa-thumbs-up me-2"></i>
                                                                            <p class="mb-0">Thích</p>
                                                                        </a>
                                                                        <a href="#!"
                                                                            class="d-flex align-items-center me-3 text-decoration-none text-primary reply-btn"
                                                                            data-comment-id="{{ $reply->id }}">
                                                                            <i class="far fa-comment-dots me-2"></i>
                                                                            <p class="mb-0">Trả lời</p>
                                                                        </a>
                                                                    </div>
                                                                    <div class="reply-form"
                                                                        id="reply-form-{{ $reply->id }}"
                                                                        style="display: none;">
                                                                        <form action="{{ route('comments.store') }}"
                                                                            method="POST" class="reply-form-ajax">
                                                                            @csrf
                                                                            <input type="hidden" name="parent_id"
                                                                                value="{{ $reply->id }}">
                                                                            <input type="hidden" name="room_id"
                                                                                value="{{ $room->id }}">
                                                                            <div class="form-floating">
                                                                                <textarea class="form-control border-primary rounded-3 shadow-sm" name="content" rows="3"
                                                                                    placeholder="Nhập tin nhắn ở đây" required></textarea>
                                                                                <label
                                                                                    for="replyTextArea-{{ $reply->id }}">Tin
                                                                                    nhắn</label>
                                                                            </div>
                                                                            <div class="d-flex justify-content-end mt-2">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary btn-sm me-2">Đăng</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary btn-sm cancel-reply">Hủy</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <p>Chưa có bình luận nào.</p>
                                @endif
                            </div>
                        </div>
                        <!-- Nút Xem tất cả bình luận -->
                        @if ($comments->count() > 3)
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 text-center mt-3">
                                    <button id="showAllCommentsBtn" class="btn btn-primary">Xem tất cả bình
                                        luận</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Form bình luận mới -->
                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <form id="commentForm" action="{{ route('comments.store') }}" method="POST"
                            class="comment-form-ajax">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex align-items-start">
                                        <img class="rounded-circle shadow-sm ms-2 me-3"
                                            src="{{ asset('assets/images/clinh4.jpeg') }}" alt="avatar" width="40"
                                            height="40" />
                                        <div class="w-100">
                                            <div class="form-floating">
                                                <textarea class="form-control border-primary rounded-3 shadow-sm" id="textAreaExample" name="content" rows="3"
                                                    placeholder="Nhập tin nhắn ở đây" required></textarea>
                                                <label for="textAreaExample">Tin nhắn</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                            <div class="d-flex justify-content-end mt-2">
                                <button type="submit" class="btn btn-primary btn-sm me-2">Đăng</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">Hủy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center p-0 mt-4 margin-botton">
            <div class="col-9 bg-body rounded p-4">
                <h3>Đường đi</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4672.916017875077!2d105.75542651411102!3d9.980603954525968!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1721110647679!5m2!1svi!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script>
        var userIsLoggedIn = @json(auth()->check());
    </script>

    <script src="{{ asset('assets\js\comment.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- jQuery -->


    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Ngôn ngữ tiếng Việt cho DataTables -->
    <script src="https://cdn.datatables.net/plug-ins/1.11.4/i18n/Vietnamese.json"></script>
    <script src="{{ asset('assets\js\app-nht.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
