<!-- 🔖 Post Card Component -->
<div class="group rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 shadow hover:shadow-lg bg-white dark:bg-gray-900 transition-all duration-300 hover:scale-[1.02]">
    <!-- 🖼 Featured Image -->
    <div class="relative h-48 w-full overflow-hidden">
        <img src="/public/assets/images/sample-post.jpg" alt="Post image"
            class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-500" />

        <!-- 🏷️ Category Tag -->
        <span class="absolute top-3 left-3 bg-indigo-600 text-white text-xs font-medium px-2 py-1 rounded-full shadow">
            Tech
        </span>
    </div>

    <!-- 📄 Content Area -->
    <div class="p-4 space-y-2">
        <!-- 📝 Title -->
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 group-hover:text-indigo-600 transition">
            How to Build Scalable PHP Applications for High-Traffic Sites
        </h3>

        <!-- 🧾 Meta Info -->
        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 space-x-4">
            <span>👤 John Doe</span>
            <span>🕒 3 days ago</span>
            <span>👁️ 1.2k</span>
            <span>💬 18</span>
        </div>

        <!-- 🔘 Future Action Buttons -->
        <div class="flex items-center justify-between mt-4">
            <!-- View Button -->
            <button class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm">
                View
            </button>

            <!-- Edit/Delete (Future Integration Placeholders) -->
            <div class="space-x-2">
                <button class="px-3 py-1 bg-yellow-400 text-white text-xs rounded-full hover:bg-yellow-500 transition" title="Edit">
                    ✏️ Edit
                </button>
                <button class="px-3 py-1 bg-red-500 text-white text-xs rounded-full hover:bg-red-600 transition" title="Delete">
                    🗑️ Delete
                </button>
            </div>
        </div>
    </div>
</div>