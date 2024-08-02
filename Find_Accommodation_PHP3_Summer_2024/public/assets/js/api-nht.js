
// $(document).ready(function() {
//     $('#ocr-form').on('submit', function(event) {
//         event.preventDefault(); // Ngăn chặn form gửi bình thường

//         var formData = new FormData(this);

//         $.ajax({
//             url: $(this).attr('action'),
//             method: $(this).attr('method'),
//             data: formData,
//             processData: false,
//             contentType: false,
//             success: function(response) {
//                 console.log(response);
//                 // Xử lý phản hồi thành công
//             },
//             error: function(xhr, status, error) {
//                 console.error(error);
//                 // Xử lý lỗi
//             }
//         });
//     });
// });