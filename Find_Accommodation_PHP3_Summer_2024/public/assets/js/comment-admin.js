document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('form').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const url = this.action;
            const method = this.method;
            const formData = new FormData(this);

            // Xác định văn bản thông báo dựa trên văn bản của nút
            const action = this.querySelector('button').innerText.trim();
            let confirmationText = '';
            let successText = '';
            let errorText = '';

            if (action === 'Khôi phục') {
                confirmationText = 'Bạn có chắc chắn muốn khôi phục bình luận này không?';
                successText = 'Bình luận đã được khôi phục thành công.';
                errorText = 'Không tìm thấy bình luận.';
            } else if (action === 'Xóa vĩnh viễn') {
                confirmationText = 'Bạn có chắc chắn muốn xóa vĩnh viễn bình luận này không?';
                successText = 'bình luận đã được xóa vĩnh viễn.';
                errorText = 'Không tìm thấy bình luận.';
            } else if (action === 'Xóa') {
                confirmationText = 'Bạn có chắc chắn muốn xóa bình luận này không?';
                successText = 'bình luận đã được xóa mềm thành công.';
                errorText = 'Không tìm thấy bình luận.';
            }

            Swal.fire({
                title: 'Xác nhận',
                text: confirmationText,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, thực hiện!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(url, {
                        method: method,
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire(
                                    'Thành công!',
                                    successText,
                                    'success'
                                ).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Lỗi!',
                                    errorText,
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            Swal.fire(
                                'Lỗi!',
                                'Có lỗi xảy ra khi xử lý yêu cầu.',
                                'error'
                            );
                        });
                }
            });
        });
    });
});
