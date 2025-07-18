// JS to open/close modal
function openCreateModal() {
    const modal = document.getElementById('createPostModal');
    modal?.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
}

function closeCreateModal() {
    const modal = document.getElementById('createPostModal');
    modal?.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
}




// Preview image before upload
function previewImage(event) {
    const imgPreview = document.getElementById('preview');
    imgPreview.src = URL.createObjectURL(event.target.files[0]);
    imgPreview.classList.remove('hidden');
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
