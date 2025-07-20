let offset = 0;
const limit = 6;
let loading = false;

const postsContainer = document.getElementById('postsContainer');
const loadMoreBtn = document.getElementById('loadMoreBtn');

function fetchPosts(filters = {}) {
  if (loading) return;
  loading = true;

  const params = new URLSearchParams({
    ...filters,
    limit,
    offset
  });

  fetch(`/modules/posts/read.php?${params}`)
    .then(res => res.json())
    .then(data => {
      if (!data || data.length === 0) {
        loadMoreBtn.classList.add('hidden');
        if (offset === 0) {
          postsContainer.innerHTML = `
            <div class="col-span-full text-center text-gray-500 py-12">
              ❌ No posts found. Try adjusting filters.
            </div>
          `;
        }
        return;
      }

      // Append each post
      data.forEach(post => {
        postsContainer.innerHTML += renderPostCard(post);
      });

      offset += limit;
      loadMoreBtn.classList.remove('hidden');
    })
    .catch(err => {
      console.error('❌ Error loading posts:', err);
      postsContainer.innerHTML = `
        <div class="text-red-500 text-center py-10">
          ⚠️ Failed to load posts. Please try again later.
        </div>
      `;
    })
    .finally(() => {
      loading = false;
    });
}

function renderPostCard(post) {
  const image = post.image
    ? `/public/uploads/posts/${post.image}`
    : '/public/assets/images/default-post.jpg';

  return `
    <div class="post-card-wrapper" data-id="${post.id}">
      <div class="group relative bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-2xl shadow transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:scale-[1.01] overflow-hidden">

        <div class="relative w-full h-52 overflow-hidden">
          <img src="${image}" alt="Post Thumbnail"
            class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700 ease-in-out" />

          <span class="absolute top-3 left-3 bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-[10px] uppercase tracking-wider px-3 py-1 rounded-full shadow-md">
            ${post.category || 'Uncategorized'}
          </span>

          ${post.featured ? `
            <span class="absolute top-3 right-3 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded shadow-md">
              Featured
            </span>` : ''}
        </div>

        <div class="p-4 space-y-3">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-white group-hover:text-indigo-600 transition-colors line-clamp-2">
            ${post.title}
          </h2>

          <div class="flex items-center justify-start text-xs text-gray-500 dark:text-gray-400 space-x-4">
            <span>👤 ${post.author || 'Unknown'}</span>
            <span>🕒 ${post.posted || 'Some time ago'}</span>
            <span>👁️ ${post.views || 0} views</span>
            <span>💬 ${post.comments || 0}</span>
          </div>

          <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2">
            ${post.excerpt || 'No preview available...'}
          </p>

          <div class="flex items-center justify-between pt-3">
            <a href="/views/post.php?id=${post.id}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
              Read More →
            </a>
            <div class="flex items-center space-x-2">
              <button class="edit-post-btn px-3 py-[4px] text-xs bg-yellow-400 text-white rounded-full hover:bg-yellow-500 transition duration-200"
                      data-id="${post.id}">
                ✏️ Edit
              </button>
              <button class="delete-post-btn px-3 py-[4px] text-xs bg-red-500 text-white rounded-full hover:bg-red-600 transition duration-200"
                      data-id="${post.id}">
                🗑️ Delete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;
}

// 🔁 Load More Handler
loadMoreBtn?.addEventListener('click', () => {
  fetchPosts();
});

// 🔄 Initial Load
document.addEventListener('DOMContentLoaded', () => {
  fetchPosts();
});
