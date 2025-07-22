function openEditPostModal(btn) {
    const postId = btn.dataset.id;

    fetch(`/api/posts-api.php?id=${postId}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('edit-post-id').value = data.id;
            document.getElementById('edit-title').value = data.title;
            document.getElementById('edit-description').value = data.description;
            // Add more fields if needed
            document.getElementById('editPostModal').classList.remove('hidden');
        });
}

function closeEditPostModal() {
    document.getElementById('editPostModal').classList.add('hidden');
}

// Optional AJAX submission
document.getElementById('editPostForm')?.addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch(this.action, {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        alert("✅ Post updated!");
        closeEditPostModal();
        location.reload(); // Or AJAX reload of grid
    })
    .catch(err => {
        alert("❌ Failed to update post.");
    });
});
