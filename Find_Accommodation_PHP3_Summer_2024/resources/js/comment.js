// public/js/comments.js

$(document).ready(function () {
    $('#commentForm').on('submit', function (e) {
        e.preventDefault();

        var formData = $(this).serialize();
        var url = $(this).attr('action');

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            success: function (response) {
                // Xóa nội dung của textarea
                $('#textAreaExample').val('');

                // Thêm bình luận mới vào danh sách
                addComment(response.comment, response.user);
            },
            error: function (response) {
                alert('Có lỗi xảy ra, vui lòng thử lại.');
            }
        });
    });

    function addComment(comment, user) {
        // Xử lý thêm bình luận mới vào danh sách
        var commentHtml = `
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex flex-start align-items-center">
                        <img class="rounded-circle shadow-1-strong me-3"
                            src="{{ asset('assets/images/448469911_476143361772862_3803638986442606747_n-min.jpg') }}"
                            alt="avatar" width="60" height="60" />
                        <div>
                            <h6 class="fw-bold text-dark mb-1">${user.name}</h6>
                            <p class="text-muted small mb-0">Đăng vào ${comment.created_at}</p>
                        </div>
                    </div>
                    <p class="mt-3 mb-4 pb-2">${comment.content}</p>
                    <div class="small d-flex justify-content-start">
                        <a href="#!"
                            class="d-flex align-items-center me-3 text-decoration-none text-primary">
                            <i class="far fa-thumbs-up me-2"></i>
                            <p class="mb-0">Thích</p>
                        </a>
                        <a href="#!"
                            class="d-flex align-items-center me-3 text-decoration-none text-primary">
                            <i class="far fa-comment-dots me-2"></i>
                            <p class="mb-0">Trả lời</p>
                        </a>
                    </div>
                </div>
            </div>
        `;

        $('.col-md-12').prepend(commentHtml);
    }
});
