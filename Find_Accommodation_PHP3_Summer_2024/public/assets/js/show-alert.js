// Show Alert 
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        if (typeof showAlert !== 'undefined') {
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
        }
    });
});
