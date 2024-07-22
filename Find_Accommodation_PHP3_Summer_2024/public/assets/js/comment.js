$(document).ready(function () {
    // Hiển thị form trả lời khi nhấn nút "Trả lời"
    $(document).on('click', '.reply-btn', function (e) {
        e.preventDefault();
        var commentId = $(this).data('comment-id');
        $('#reply-form-' + commentId).toggle();
    });

    // Gửi form trả lời qua AJAX
    $(document).on('submit', '.reply-form-ajax', function (e) {
        e.preventDefault();
        var form = $(this);
        var commentId = form.find('input[name="parent_id"]').val();
        
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            success: function (response) {
                if (response.success) {
                    var newReply = '<div class="card mb-3 comment-card" data-comment-id="' + response.comment.id + '">';
                    newReply += '<div class="card-body">';
                    newReply += '<div class="d-flex flex-start align-items-center">';
                    newReply += '<img class="rounded-circle shadow-1-strong me-3" src="' + response.comment.avatar + '" alt="avatar" width="60" height="60" />';
                    newReply += '<div>';
                    newReply += '<h6 class="fw-bold text-dark mb-1">' + response.comment.user_name + '</h6>';
                    newReply += '<p class="text-muted small mb-0">Đăng vào ' + response.comment.created_at + '</p>';
                    newReply += '</div></div>';
                    newReply += '<p class="mt-3 mb-4 pb-2">' + response.comment.content + '</p>';
                    newReply += '<div class="small d-flex justify-content-start">';
                    newReply += '<a href="#!" class="d-flex align-items-center me-3 text-decoration-none text-primary like-btn">';
                    newReply += '<i class="far fa-thumbs-up me-2"></i><p class="mb-0">Thích</p></a>';
                    newReply += '<a href="#!" class="d-flex align-items-center me-3 text-decoration-none text-primary reply-btn" data-comment-id="' + response.comment.id + '">';
                    newReply += '<i class="far fa-comment-dots me-2"></i><p class="mb-0">Trả lời</p></a></div>';
                    newReply += '<div class="reply-form" id="reply-form-' + response.comment.id + '" style="display: none;">';
                    newReply += '<form action="' + form.attr('action') + '" method="POST" class="reply-form-ajax">';
                    newReply += '@csrf';
                    newReply += '<input type="hidden" name="parent_id" value="' + response.comment.id + '">';
                    newReply += '<input type="hidden" name="room_id" value="' + response.comment.room_id + '">';
                    newReply += '<div class="form-floating"><textarea class="form-control border-primary rounded-3 shadow-sm" name="content" rows="3" placeholder="Nhập tin nhắn ở đây" required></textarea>';
                    newReply += '<label for="replyTextArea-' + response.comment.id + '">Tin nhắn</label></div>';
                    newReply += '<div class="d-flex justify-content-end mt-2"><button type="submit" class="btn btn-primary btn-sm me-2">Đăng</button><button type="button" class="btn btn-outline-primary btn-sm cancel-reply">Hủy</button></div></form></div></div></div>';

                    // Thêm bình luận trả lời mới vào đúng vị trí
                    var parentComment = $('#commentList').find('[data-comment-id="' + commentId + '"]').find('.replies');
                    if (parentComment.length) {
                        parentComment.prepend(newReply);
                    } else {
                        // Nếu không có phần replies, thêm vào sau bình luận chính
                        $('#commentList').find('[data-comment-id="' + commentId + '"]').append('<div class="replies mt-3">' + newReply + '</div>');
                    }
                    
                    // Xóa nội dung trong ô nhập liệu sau khi gửi thành công
                    form.find('textarea[name="content"]').val('');
                    // Ẩn form trả lời sau khi gửi
                    form.closest('.reply-form').hide();
                } else {
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Có lỗi xảy ra:', error);
                alert('Có lỗi xảy ra. Vui lòng thử lại.');
            }
        });
    });



    $('#commentForm').submit(function (e) {
        e.preventDefault(); // Ngăn chặn hành vi mặc định của form gửi đi
    
        var form = $(this);
        
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            success: function (response) {
                if (response.success) {
                    location.reload(); // Tải lại trang để cập nhật bình luận mới
                } else {
                    // Xử lý lỗi nếu có
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Có lỗi xảy ra:', error);
                alert('Có lỗi xảy ra. Vui lòng thử lại.');
            }
        });
    });
    


     $(document).on('click', '#showAllCommentsBtn', function(e) {
        e.preventDefault();

        let additionalComments = $('.additional-comment');

        additionalComments.each(function() {
            $(this).slideToggle();
        });

        $(this).hide();
    });

    // Lưu vị trí cuộn khi người dùng rời khỏi trang
    $(window).on('scroll', function() {
        localStorage.setItem('scrollPosition', $(window).scrollTop());
    });

    // Khi trang được tải lại, cuộn đến vị trí đã lưu
    $(window).on('load', function() {
        let scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition) {
            $(window).scrollTop(scrollPosition);
            localStorage.removeItem('scrollPosition'); // Xóa vị trí cuộn sau khi đã cuộn đến
        }
    });
});
