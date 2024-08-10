$('#description').summernote({
    placeholder: 'Mô tả...',
    tabsize: 2,
    height: 100,
    focus: true,
    lang: 'vi-VN', // Cấu hình ngôn ngữ tiếng Việt
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear', 'istatic']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
        ['view', ['fullscreen', 'codeview']]
    ]
});