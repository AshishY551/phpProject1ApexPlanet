<!-- components/featured-slider.php -->
<section id="featured-posts-section" class="py-6 px-4">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 dark:text-white">🌟 Featured Posts</h2>

        <div class="flex flex-col sm:flex-row items-center gap-3">
            <!-- Category Filter Dropdown -->
            <select class="px-3 py-2 rounded-lg border border-gray-300 text-sm dark:bg-gray-800 dark:text-white dark:border-gray-600">
                <option value="">All Categories</option>
                <option value="tech">Technology</option>
                <option value="lifestyle">Lifestyle</option>
                <option value="news">News</option>
            </select>

            <!-- Search Input -->
            <input
                type="text"
                placeholder="Search Featured..."
                class="px-4 py-2 rounded-lg border border-gray-300 text-sm dark:bg-gray-800 dark:text-white dark:border-gray-600" />
        </div>
    </div>

    <!-- Horizontal Scrollable Slider -->
    <div class="flex gap-4 overflow-x-auto scrollbar-thin pb-2">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="min-w-[280px] md:min-w-[320px] bg-white dark:bg-gray-900 rounded-2xl shadow-lg p-4 transition hover:scale-[1.02] hover:shadow-xl flex flex-col">
                <img
                    src="https://via.placeholder.com/300x180?text=Post+<?= $i ?>"
                    alt="Featured Post <?= $i ?>"
                    class="rounded-xl mb-3" />
                <h3 class="font-bold text-gray-800 dark:text-white mb-2">Post Title <?= $i ?></h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Short summary of the featured post goes here...</p>

                <!-- Placeholder action buttons -->
                <div class="mt-auto flex justify-between text-sm">
                    <button class="text-blue-600 dark:text-blue-400 hover:underline">View</button>
                    <div class="flex gap-2">
                        <button class="text-yellow-500 hover:underline">Edit</button>
                        <button class="text-red-500 hover:underline">Delete</button>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>