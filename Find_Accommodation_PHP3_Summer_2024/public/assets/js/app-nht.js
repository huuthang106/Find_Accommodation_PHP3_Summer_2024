let table = new DataTable('#myTable',
    {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/vi.json',
        },
    });

document.getElementById('add-file').addEventListener('click', function () {
    // Đếm số lượng input hiện tại
    const fileInputsContainer = document.getElementById('file-inputs');
    const numberOfFileInputs = fileInputsContainer.getElementsByTagName('input').length;

    // Tạo một div mới chứa input file mới
    const newDiv = document.createElement('div');
    newDiv.className = 'mb-3';
    newDiv.innerHTML = `
            <label for="img-room-${numberOfFileInputs + 1}" class="form-label">Hình ảnh</label>
             <input type="file" class="form-control" id="img-room-${numberOfFileInputs + 1}" name="images[]">
        `;

    // Thêm div mới vào container
    fileInputsContainer.appendChild(newDiv);
});
function previewImages(event, previewId) {
    const files = event.target.files;
    const preview = document.getElementById(previewId);
    preview.innerHTML = ''; // Xóa nội dung cũ

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('img-resigter'); // Thêm class img-register
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    }
} 
