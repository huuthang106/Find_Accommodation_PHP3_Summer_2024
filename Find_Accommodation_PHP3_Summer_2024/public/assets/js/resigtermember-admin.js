document.addEventListener('DOMContentLoaded', function () {
    // Lắng nghe sự kiện submit của các form
    document.querySelectorAll('form').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Ngăn chặn hành vi submit mặc định của form

            const url = this.action;
            const method = this.method;
            const formData = new FormData(this);

            // Xác định loại hành động
            const action = this.querySelector('button').innerText.trim();
            let confirmationText = '';
            let successText = '';
            let errorText = '';

            if (action === 'Khôi phục') {
                confirmationText = 'Bạn có chắc chắn muốn khôi phục đơn này không?';
                successText = 'đơn đã được khôi phục thành công.';
                errorText = 'Không tìm thấy đơn.';
            } else if (action === 'Xóa vĩnh viễn') {
                confirmationText = 'Bạn có chắc chắn muốn xóa vĩnh viễn đơn này không?';
                successText = 'đơn đã được xóa vĩnh viễn.';
                errorText = 'Không tìm thấy đơn.';
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
                            'X-Requested-With': 'XMLHttpRequest'
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
                                    window.location.reload(); // Tải lại trang sau khi thông báo
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
document.addEventListener('DOMContentLoaded', function () {
    // Lắng nghe sự kiện submit của các form
    document.querySelectorAll('form').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Ngăn chặn hành vi submit mặc định của form

            const url = this.action;
            const method = this.method;
            const formData = new FormData(this);

            Swal.fire({
                title: 'Xác nhận',
                text: 'Bạn có chắc chắn muốn xóa đơn này không?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, xóa nó!'
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
                                    'Đã xóa!',
                                    'đơn đã được xóa thành công.',
                                    'success'
                                ).then(() => {
                                    window.location.reload(); // Tải lại trang sau khi thông báo
                                });
                            } else {
                                Swal.fire(
                                    'Lỗi!',
                                    'Không tìm thấy đơn.',
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