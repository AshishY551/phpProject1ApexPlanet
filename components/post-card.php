<!-- 🔥 Advanced Post Card Component -->
<div id="post-card" class="group relative bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-2xl shadow transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:scale-[1.01] overflow-hidden">

    <!-- 🖼 Featured Image -->
    <div class="relative w-full h-52 overflow-hidden">
        <img src="/public/uploads/posts/sample.jpg" alt="Post Thumbnail"
            class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700 ease-in-out" />

        <!-- 🏷️ Category Badge -->
        <span class="absolute top-3 left-3 bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-[10px] uppercase tracking-wider px-3 py-1 rounded-full shadow-md">
            Tech
        </span>

        <!-- 🌟 Featured Badge (Optional future use) -->
        <span class="absolute top-3 right-3 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded shadow-md hidden group-hover:inline">
            Featured
        </span>
    </div>

    <!-- 📄 Post Content -->
    <div class="p-4 space-y-3">
        <!-- 📝 Post Title -->
        <h2 class="text-lg font-semibold text-gray-800 dark:text-white group-hover:text-indigo-600 transition-colors line-clamp-2">
            <?= htmlspecialchars($post['title'] ?? 'Post Title Placeholder') ?>
        </h2>

        <!-- 🧾 Meta Information -->
        <div class="flex items-center justify-start text-xs text-gray-500 dark:text-gray-400 space-x-4">
            <span>👤 <?= htmlspecialchars($post['author'] ?? 'John Doe') ?></span>
            <span>🕒 <?= htmlspecialchars($post['posted'] ?? '2 days ago') ?></span>
            <span>👁️ <?= htmlspecialchars($post['views'] ?? '51234') ?> views</span>
            <span>💬 <?= htmlspecialchars($post['comments'] ?? '45') ?></span>
        </div>

        <!-- 📄 Description (Optional Preview Snippet) -->
        <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2">
            <?= htmlspecialchars($post['excerpt'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...') ?>
        </p>

        <!-- 🔘 Action Buttons -->
        <div class="flex items-center justify-between pt-3">
            <!-- View Button -->
            <a href="/views/post.php?id=<?= $post['id'] ?? 0 ?>" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline font-medium">
                Read More →
            </a>

            <!-- 🛠 Placeholder Edit/Delete -->
            <div class="flex items-center space-x-2">
                <button class="px-3 py-[4px] text-xs bg-yellow-400 text-white rounded-full hover:bg-yellow-500 transition duration-200" title="Edit">
                    ✏️ Edit
                </button>
                <button class="px-3 py-[4px] text-xs bg-red-500 text-white rounded-full hover:bg-red-600 transition duration-200" title="Delete">
                    🗑️ Delete
                </button>
            </div>
        </div>
    </div>

</div>