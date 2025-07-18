// JS to open/close modal
function openCreateModal() {
    const modal = document.getElementById('createPostModal');
    modal?.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
}

// function openCreateModal() {
//   document.getElementById('createPostModal')?.classList.remove('hidden');
//   document.body.classList.add('overflow-hidden'); // Optional scroll lock
// }


function closeCreateModal() {
    const modal = document.getElementById('createPostModal');
    modal?.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
}




//1.1 Preview image before upload
// function previewImage(event) {
//     const imgPreview = document.getElementById('preview');
//     imgPreview.src = URL.createObjectURL(event.target.files[0]);
//     imgPreview.classList.remove('hidden');
// }

// 🔍 Advanced Image Preview with Validation and Dynamic Alt Text
function previewImage(event) {
    const fileInput = event.target;
    const imgPreview = document.getElementById('preview');
    const file = fileInput.files[0];

    // ✅ Check if file exists
    if (!file) {
        imgPreview.classList.add('hidden');
        imgPreview.removeAttribute('src');
        return;
    }

    // ✅ Only allow image files (prevent non-image)
    const validTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    if (!validTypes.includes(file.type)) {
        alert('⚠️ Please select a valid image (JPEG, PNG, WebP, or GIF).');
        fileInput.value = ''; // reset input
        imgPreview.classList.add('hidden');
        return;
    }

    // ✅ Show preview
    const reader = new FileReader();
    reader.onload = function (e) {
        imgPreview.src = e.target.result;
        imgPreview.alt = `Preview of ${file.name}`;
        imgPreview.classList.remove('hidden');
        imgPreview.classList.add('animate-fade-in');
    };
    reader.readAsDataURL(file);

    // ✅ Optional: display filename or size elsewhere
    const infoBox = document.getElementById('preview-info');
    if (infoBox) {
        infoBox.innerHTML = `📂 <strong>${file.name}</strong> (${(file.size / 1024).toFixed(1)} KB)`;
        infoBox.classList.remove('hidden');
    }
}


// 🌠 Multiple Image Previews with Validation
function previewMultipleImages(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById('multi-preview');

    // Clear old previews
    previewContainer.innerHTML = '';

    const validTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    const maxCount = 5;

    if (files.length > maxCount) {
        alert(`⚠️ You can upload a maximum of ${maxCount} images.`);
        event.target.value = '';
        return;
    }

    Array.from(files).forEach((file, index) => {
        if (!validTypes.includes(file.type)) {
            alert(`❌ ${file.name} is not a supported image type.`);
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = `Preview ${index + 1}`;
            img.className = 'w-24 h-24 object-cover rounded-lg shadow-md m-2 animate-fade-in';
            previewContainer.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
}




// (Optional) AJAX Submission
document.getElementById('createPostForm')?.addEventListener('submit', function (e) {
    e.preventDefault(); // prevent full page reload

    const formData = new FormData(this);

    fetch(this.action, {
        method: 'POST',
        body: formData
    }).then(res => res.text()).then(data => {
        alert("Post created!");
        closeCreateModal();
        // Optionally reload post list here via AJAX
    }).catch(err => {
        alert("Failed to create post.");
    });
});
