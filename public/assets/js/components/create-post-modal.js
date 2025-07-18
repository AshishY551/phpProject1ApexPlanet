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
