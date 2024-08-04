// Đăng Nhập
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);

    fetch(routes.login, { // Sử dụng biến routes để lấy URL
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (!data.success) {
            if (data.errors.login_error) {
                document.getElementById('loginErrors').innerText = data.errors.login_error;
                document.getElementById('loginErrors').classList.remove('d-none');
            }
        } else {
            window.location.href = data.redirect;
        }
    })
    .catch(error => console.error('Error:', error));
});

// Đăng Ký
document.getElementById('registerForm').addEventListener('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);

    fetch(routes.register, { // Sử dụng biến routes để lấy URL
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (!data.success) {
            if (data.errors.register_error) {
                document.getElementById('registerErrors').innerText = data.errors.register_error;
                document.getElementById('registerErrors').classList.remove('d-none');
            }
        } else {
            window.location.href = data.redirect;
        }
    })
    .catch(error => console.error('Error:', error));
});
