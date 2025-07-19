document.addEventListener('DOMContentLoaded', () => {
    const filterForm = document.querySelector('form#postFilterForm');
    const postsGrid = document.querySelector('#posts-grid');

    if (!filterForm || !postsGrid) return;

    filterForm.addEventListener('change', async function (e) {
        e.preventDefault();

        try {
            // Optional: Show loading spinner
            postsGrid.innerHTML = '<div class="text-center w-full py-10">Loading...</div>';

            const formData = new FormData(this);
            const query = new URLSearchParams(formData).toString();

            const response = await fetch(`/api/posts-api.php?${query}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (!response.ok) throw new Error('Network error while loading posts.');

            const html = await response.text();
            postsGrid.innerHTML = html;

        } catch (error) {
            console.error('Fetch error:', error);
            postsGrid.innerHTML = `
                <div class="text-red-500 text-center py-8">
                    ❌ Failed to load posts. Please try again later.
                </div>
            `;
        }
    });

    // ✅ Bind edit/delete actions on initial load too
    bindPostActions();
});


// ✅ New reusable function to bind edit/delete events
function bindPostActions() {
    document.querySelectorAll('.edit-post-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const postId = btn.dataset.id;
            openEditModal(postId);
        });
    });

    document.querySelectorAll('.delete-post-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const postId = btn.dataset.id;
            openDeleteModal(postId);
        });
    });
}

// ✅ Placeholder modal functions for future use
function openEditModal(id) {
    console.log(`📝 Edit clicked for post ID: ${id}`);
    // TODO: Integrate edit modal logic
}

function openDeleteModal(id) {
    console.log(`🗑️ Delete clicked for post ID: ${id}`);
    // TODO: Hook into delete-confirm.php modal
}