document.addEventListener('DOMContentLoaded', function () {
    // Xử lý sự kiện nhấp chuột vào nút "Trả lời"
    document.querySelectorAll('.reply-btn').forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.preventDefault();
            const commentId = btn.getAttribute('data-comment-id');
            const replyForm = document.getElementById(`reply-form-${commentId}`);
            if (replyForm) {
                // Ẩn tất cả các form trả lời khác
                document.querySelectorAll('.reply-form').forEach(function (form) {
                    if (form.id !== `reply-form-${commentId}`) {
                        form.style.display = 'none';
                    }
                });
                // Chuyển trạng thái hiển thị của form trả lời
                replyForm.style.display = replyForm.style.display === 'none' ? 'block' : 'none';
            }
        });
    });

    // Xử lý sự kiện nhấp chuột vào nút "Hủy"
    document.querySelectorAll('.cancel-reply').forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.preventDefault();
            const replyForm = btn.closest('.reply-form');
            if (replyForm) {
                replyForm.style.display = 'none';
            }
        });
    });
});

$(document).ready(function () {
    $('#commentForm').on('submit', function (e) {
        e.preventDefault(); // Ngăn việc tải lại trang

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (response) {
                if (response.success) {
                    // Thêm bình luận mới vào danh sách
                    $('#commentList').prepend(`
                        <div class="card mb-3" id="newComment-${response.comment.id}">
                            <div class="card-body">
                                <div class="d-flex flex-start align-items-center">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="/assets/images/448469911_476143361772862_3803638986442606747_n-min.jpg"
                                        alt="avatar" width="60" height="60" />
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">${response.comment.user_name}</h6>
                                        <p class="text-muted small mb-0">Đăng vào ${response.comment.created_at}</p>
                                    </div>
                                </div>
                                <p class="mt-3 mb-4 pb-2">${response.comment.content}</p>
                                <div class="small d-flex justify-content-start">
                                    <a href="#!" class="d-flex align-items-center me-3 text-decoration-none text-primary">
                                        <i class="far fa-thumbs-up me-2"></i>
                                        <p class="mb-0">Thích</p>
                                    </a>
                                    <a href="#!" class="d-flex align-items-center me-3 text-decoration-none text-primary">
                                        <i class="far fa-comment-dots me-2"></i>
                                        <p class="mb-0">Trả lời</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `);
                    $('#textAreaExample').val('');

                    // Xóa bình luận cũ nếu số lượng bình luận nhiều hơn 3
                    if ($('#commentList .card').length > 3) {
                        $('#commentList .card').last().remove();
                        if (!$('#showAllComments').length) {
                            $('#commentList').after(`
                                <div class="text-center mb-2">
                                    <a href="{{ route('comments.showAll', ['id' => $room->id]) }}" id="showAllComments" class="btn btn-primary">Xem tất cả bình luận</a>
                                </div>
                            `);
                        }
                    }

                    // Lưu vị trí cuộn vào local storage và tải lại trang
                    localStorage.setItem('scrollPosition', $(window).scrollTop());
                    window.location.reload();
                }
            },
            error: function () {
                alert('Đã xảy ra lỗi. Vui lòng thử lại.');
            }
        });
    });

    $('#showAllComments').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('href'),
            method: 'GET',
            success: function (response) {
                if (response.comments) {
                    let html = '';
                    response.comments.forEach(comment => {
                        html += `
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex flex-start align-items-center">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                            src="/assets/images/448469911_476143361772862_3803638986442606747_n-min.jpg"
                                            alt="avatar" width="60" height="60" />
                                        <div>
                                            <h6 class="fw-bold text-dark mb-1">${comment.user_name}</h6>
                                            <p class="text-muted small mb-0">Đăng vào ${comment.created_at}</p>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-4 pb-2">${comment.content}</p>
                                    <div class="small d-flex justify-content-start">
                                        <a href="#!" class="d-flex align-items-center me-3 text-decoration-none text-primary">
                                            <i class="far fa-thumbs-up me-2"></i>
                                            <p class="mb-0">Thích</p>
                                        </a>
                                        <a href="#!" class="d-flex align-items-center me-3 text-decoration-none text-primary">
                                            <i class="far fa-comment-dots me-2"></i>
                                            <p class="mb-0">Trả lời</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    $('#commentList').html(html);
                }
            },
            error: function () {
                alert('Đã xảy ra lỗi. Vui lòng thử lại.');
            }
        });
    });

    // Khi trang được tải lại, cuộn đến vị trí đã lưu
    $(window).on('load', function () {
        let scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition) {
            $(window).scrollTop(scrollPosition);
            localStorage.removeItem('scrollPosition'); // Xóa vị trí cuộn sau khi đã cuộn đến
        }
    });
});
