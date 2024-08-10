document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('form').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const url = this.action;
            const method = this.method;
            const formData = new FormData(this);

            const action = this.querySelector('button').innerText.trim();
            let confirmationText = '';
            let successText = '';
            let errorText = '';

            if (action === 'Khôi phục') {
                confirmationText = 'Bạn có chắc chắn muốn khôi phục đơn này không?';
                successText = 'Đơn đã được khôi phục thành công.';
                errorText = 'Không tìm thấy đơn.';
            } else if (action === 'Xóa vĩnh viễn') {
                confirmationText = 'Bạn có chắc chắn muốn xóa vĩnh viễn đơn này không?';
                successText = 'Đơn đã được xóa vĩnh viễn.';
                errorText = 'Không tìm thấy đơn.';
            } else if (action === 'Xóa') {
                confirmationText = 'Bạn có chắc chắn muốn xóa đơn này không?';
                successText = 'Đơn đã được xóa mềm thành công.';
                errorText = 'Không tìm thấy đơn.';
            }  else if (action === 'Duyệt') {
                confirmationText = 'Bạn có chắc chắn muốn duyệt đơn này không?';
                successText = 'Đơn đã được duyệt thành công.';
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
