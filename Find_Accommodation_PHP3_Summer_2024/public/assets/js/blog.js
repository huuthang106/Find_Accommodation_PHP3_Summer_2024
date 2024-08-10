document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('form').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Ngăn chặn hành vi submit mặc định của form

            const url = this.action;
            const method = this.method;
            const formData = new FormData(this);

            Swal.fire({
                title: 'Xác nhận',
                text: 'Bạn có chắc chắn muốn ẩn blog này không?',
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
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire(
                                    'Thành công!',
                                    'Blog đã được ẩn thành công.',
                                    'success'
                                ).then(() => {
                                    window.location.reload(); // Tải lại trang sau khi thông báo
                                });
                            } else {
                                Swal.fire(
                                    'Lỗi!',
                                    'Không tìm thấy blog.',
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
