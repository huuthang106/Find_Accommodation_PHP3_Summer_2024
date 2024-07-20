$(document).ready(function () {
    // Mở modal khi nhấn nút
    $('#openModalButton').on('click', function (event) {
        event.preventDefault(); // Ngăn hành động mặc định
        $('#imageModal').modal('show'); // Hiển thị modal
    });

    // Khởi tạo carousel tự động chạy
    $('#carouselExampleIndicators').carousel({
        interval: 3000 // Thay đổi ảnh sau mỗi 3 giây
    });
});


