// In public/assets/js/components/posts-grid.js
document.querySelector('form#postFilterForm').addEventListener('change', async function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    const params = new URLSearchParams(formData).toString();

    const res = await fetch(`/api/posts-api.php?${params}`);
    const data = await res.text(); // server returns HTML
    document.querySelector('#posts-grid').innerHTML = data;
});
