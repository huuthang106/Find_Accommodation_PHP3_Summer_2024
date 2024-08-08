document.addEventListener('DOMContentLoaded', function () {
    // Lắng nghe sự kiện click vào nút "Đăng Kí" hoặc "Chỉnh sửa"
    document.querySelectorAll('.btn-danger').forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của nút

            const form = this.closest('form'); // Tìm form bao quanh nút
            const url = form.action;
            const method = form.method;
            const formData = new FormData(form);

            Swal.fire({
                title: 'Xác nhận',
                text: 'Bạn có chắc chắn muốn ẩn gói tin này không?',
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
                                    'Gói tin đã được ẩn thành công.',
                                    'success'
                                ).then(() => {
                                    window.location.reload(); // Tải lại trang sau khi thông báo
                                });
                            } else {
                                Swal.fire(
                                    'Lỗi!',
                                    'Không tìm thấy gói tin.',
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
