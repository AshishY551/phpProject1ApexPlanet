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
});
