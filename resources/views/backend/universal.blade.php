<input type="file" class="image-input" multiple>
<div class="preview-container"></div>

<input type="file" class="image-input" multiple>
<div class="preview-container"></div>

<script>
function setupImageInput(inputSelector, previewSelector, onUpdate) {
    let files = [];

    const input = document.querySelector(inputSelector);
    const preview = document.querySelector(previewSelector);

    input.addEventListener('change', (e) => {
        for (let file of e.target.files) {
            files.push(file);
        }
        e.target.value = ""; // clear input so user can re-select
        renderPreviews();
        if (onUpdate) onUpdate(files);
    });

    function renderPreviews() {
        preview.innerHTML = '';
        files.forEach((file, index) => {
            const wrapper = document.createElement('div');
            wrapper.style.display = 'inline-block';
            wrapper.style.margin = '5px';

            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.width = 100;

            const btn = document.createElement('button');
            btn.innerText = 'Remove';
            btn.onclick = () => {
                files.splice(index, 1);
                renderPreviews();
                if (onUpdate) onUpdate(files);
            };

            wrapper.appendChild(img);
            wrapper.appendChild(btn);
            preview.appendChild(wrapper);
        });
    }

    return {
        getFiles: () => files,
        clear: () => { files = []; renderPreviews(); }
    };
}

// Example usage:
const uploader1 = setupImageInput(
    '.image-input:nth-of-type(1)', 
    '.preview-container:nth-of-type(1)', 
    (files) => console.log("Uploader 1 files:", files)
);

const uploader2 = setupImageInput(
    '.image-input:nth-of-type(2)', 
    '.preview-container:nth-of-type(2)', 
    (files) => console.log("Uploader 2 files:", files)
);

// Later, you can get files like:
document.querySelector('#submit').addEventListener('click', () => {
    const formData = new FormData();
    uploader1.getFiles().forEach(f => formData.append('pictures1[]', f));
    uploader2.getFiles().forEach(f => formData.append('pictures2[]', f));

    fetch('/rooms', { method: 'POST', body: formData });
});
</script>
