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

  // fetch(`/modules/posts/read.php?${params}`)
  //   ✅ Why?
  // Because public/ is  web root, and modules/ is one level above it. So we use ../ to go up a directory.

  // Your API (read.php) returns this correct, modern, structured JSON:
  // But your old JavaScript logic (posts-loader.js) was expecting the wrong structure, like this:
  fetch(`/../modules/posts/read.php?${params}`)
    .then(res => res.json())
    .then(data => {
      // if (!data || data.length === 0) {
      //   loadMoreBtn.classList.add('hidden');
      //   if (offset === 0) {
      //     postsContainer.innerHTML = `
      //       <div class="col-span-full text-center text-gray-500 py-12">
      //         ❌ No posts found. Try adjusting filters.
      //       </div>
      //     `;
      //   }
      //   return;
      // }

      // // Append each post
      // data.forEach(post => {
      //   postsContainer.innerHTML += renderPostCard(post);
      // });

      // updated
      if (!data.success || !Array.isArray(data.posts) || data.posts.length === 0) {
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
      data.posts.forEach(post => {
      //         🧪 Bonus: Debug Tip
      // To quickly catch this kind of mismatch in future:
        console.log('[DEBUG POST]', post);  // log inside forEach
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

// 🔐 5. Utility: Escape HTML (✅ Place this just before renderPostCard)
// function escapeHTML(str) {
//   return String(str)
//     .replace(/&/g, "&amp;")
//     .replace(/</g, "&lt;")
//     .replace(/>/g, "&gt;")
//     .replace(/"/g, "&quot;")
//     .replace(/'/g, "&#039;");
// }

function escapeHTML(str) {
  return String(str).replace(/[&<>"']/g, function (tag) {
    const chars = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;',
    };
    return chars[tag] || tag;
  });
}

// 🎨 6. Render Post Card (✅ Place this at the bottom)
// 🔄 Built a JS equivalent of post-card.php (used in AJAX mode via posts-loader.js)
function renderPostCard(post) {
  const image = post.image
    ? `/public/uploads/posts/${post.image}`
    : '/public/assets/images/default-post.jpg';

  return `
    <div class="post-card-wrapper" data-id="${post.id}">
      <div id="post-card" class="group relative bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-2xl shadow transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:scale-[1.01] overflow-hidden">

        <!-- 🖼 Featured Image -->
        <div class="relative w-full h-52 overflow-hidden">
          <img src="${image}" alt="Post Thumbnail"
            class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700 ease-in-out" />

          <span class="absolute top-3 left-3 bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-[10px] uppercase tracking-wider px-3 py-1 rounded-full shadow-md">
            ${escapeHTML(post.category || 'Uncategorized')}
          </span>

          ${post.featured ? `
            <span class="absolute top-3 right-3 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded shadow-md">
              Featured
            </span>` : ''}
        </div>

        <!-- 📄 Post Content -->
        <div class="p-4 space-y-3">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-white group-hover:text-indigo-600 transition-colors line-clamp-2">
            ${escapeHTML(post.title || 'Untitled Post')}
          </h2>

          <div class="flex items-center justify-start text-xs text-gray-500 dark:text-gray-400 space-x-4">
            <span>👤 ${escapeHTML(post.author || 'Unknown')}</span>
            <!-- Removed <span>🕒 $!!{escapeHTML(post.posted || 'Some time ago')}</span>-->
            <span>🕒 ${escapeHTML(post.formatted_date || 'Some time ago')}</span>
            <span>👁️ ${post.views || 0} views</span>
            <!--Removed <span>💬 $!!{post.comments || 0}</span>-->
            <span>💬 0 comments</span> <!-- placeholder for now -->
          </div>

          <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2">
            ${escapeHTML(post.excerpt || 'No preview available...')}
          </p>

          <div class="flex items-center justify-between pt-3">
            <a href="/views/post.php?id=${post.id}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
              Read More →
            </a>
            <div class="flex items-center space-x-2">
              <button class="edit-post-btn px-3 py-[4px] text-xs bg-yellow-400 text-white rounded-full hover:bg-yellow-500 transition duration-200"
                      data-id="${post.id}" onclick="openEditPostModal(this)">
                ✏️ Edit
              </button>
              <!--<button class="delete-post-btn px-3 py-[4px] text-xs bg-red-500 text-white rounded-full hover:bg-red-600 transition duration-200"
                      data-id="$!!{post.id}">
                🗑️ Delete
              </button>-->
              <button onclick="confirmDelete(${post.id})"
                      class="delete-post-btn px-3 py-[4px] text-xs bg-red-500 text-white rounded-full hover:bg-red-600 transition duration-200">
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





// | Area            | Old Code    | Problem              | Fix                  |
// | --------------- | ----------- | -------------------- | -------------------- |
// | `post.posted`   | Not in JSON | Wrong field          | Use `formatted_date` |
// | `post.comments` | Undefined   | Missing from backend | Use placeholder      |

// 🔁 Replaced this :
// <span>🕒 ${escapeHTML(post.posted || 'Some time ago')}</span>
// <span>💬 ${post.comments || 0}</span>
// ✅ With:
// <span>🕒 ${escapeHTML(post.formatted_date || 'Some time ago')}</span>
// <span>💬 0 comments</span> <!-- placeholder for now -->