// Show Alert 
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        if (typeof showAlert !== 'undefined') {
            // Trường hợp thành công
            if (showAlert.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công!',
                    text: showAlert.success,
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
            // Trường hợp Lỗi
            if (showAlert.error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: showAlert.error,
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
            // Trường hợp không tìm thấy
            if (showAlert.not_found) {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: showAlert.not_found,
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
        }
    });
});
// Button Alert
function confirmDelete(itemId) {
    Swal.fire({
        title: 'Bạn có chắc chắn muốn xóa thông báo này không?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Xóa',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + itemId).submit();
        }
    });
}


