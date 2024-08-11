<div class="container mt-5">
    <div class="email-container">
        <div class="email-header">
            {{-- <img src="{{ asset('assets/images/logo3.png') }}" alt="Logo" height="60" width="170"> --}}
            <h2>Xin chào, {{ $admin->username }}</h2>
        </div>
        <div class="email-body">
            <p class="lead">Chúng tôi nhận được yêu cầu đổi mật khẩu cho tài khoản của bạn.</p>
            <p>Nếu bạn không thực hiện yêu cầu này, vui lòng bỏ qua email này. Ngược lại, bạn có thể đổi mật khẩu
                bằng cách nhấn vào nút bên dưới.</p>
            <a href="{{ route('admin.pages-reset-password', $token) }}" class="btn-reset">Đổi mật khẩu</a>
            <p class="mt-4">Nếu bạn gặp vấn đề với nút trên, hãy copy và dán đường link sau vào trình duyệt:</p>
            <p>{{ route('admin.pages-reset-password', $token) }}</p>
            <p class="mt-4">Trân trọng,<br>Đội ngũ hỗ trợ</p>
        </div>
    </div>
</div>
