<!-- components/post-list.php -->
<div class="w-full px-4 py-6 bg-white dark:bg-gray-900 shadow rounded-2xl">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-3 md:mb-0">🔥 Your Best Posts</h2>

        <div class="flex gap-2">
            <!-- Search -->
            <input
                type="text"
                placeholder="Search posts..."
                class="px-3 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white" />

            <!-- Sort -->
            <select
                class="px-3 py-2 border rounded-xl focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                <option value="latest">Latest</option>
                <option value="popular">Most Popular</option>
                <option value="likes">Most Liked</option>
            </select>
        </div>
    </div>

    <!-- Posts Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="relative group bg-gray-100 dark:bg-gray-800 p-4 rounded-xl shadow hover:shadow-lg transition duration-300">
                <img src="/public/assets/images/sample.jpg" alt="Post Image" class="w-full h-40 object-cover rounded-lg mb-3">

                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1">Sample Post Title <?= $i ?></h3>
                <p class="text-sm text-gray-600 dark:text-gray-300">Short description or excerpt from the post. Click to read more...</p>

                <!-- Placeholder Action Buttons -->
                <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition">
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-2 py-1 text-xs rounded">Edit</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 text-xs rounded">Delete</button>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>