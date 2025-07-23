let deleteTargetId = null;

function confirmDelete(id) {
  deleteTargetId = id;
  document.getElementById('deleteModal').classList.remove('hidden');
}

function closeDeleteModal() {
  deleteTargetId = null;
  document.getElementById('deleteModal').classList.add('hidden');
}

document.getElementById('confirmDeleteBtn').addEventListener('click', () => {
  if (!deleteTargetId) return;

  fetch(`/../modules/posts/delete.php`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: `id=${encodeURIComponent(deleteTargetId)}`
  })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        // 💥 Animate and remove from DOM
        const card = document.querySelector(`.post-card-wrapper[data-id="${deleteTargetId}"]`);
        if (card) {
          card.classList.add('opacity-0', 'scale-95', 'transition', 'duration-500');
          setTimeout(() => card.remove(), 500);
        }
      }
      alert(data.message || 'Delete result unknown');
      closeDeleteModal();
    })
    .catch(err => {
      console.error(err);
      alert('❌ Network error. Try again.');
    });
});
