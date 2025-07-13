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

    <!--2.1 components/featured-posts.php -->

    <div class="w-full px-4 py-6 bg-white dark:bg-gray-900 shadow rounded-2xl">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-3 md:mb-0">⭐ Featured Posts</h2>

            <!-- Selector Tabs (for future filter logic) -->
            <div class="flex gap-2">
                <button class="px-4 py-2 text-sm rounded-xl bg-indigo-500 text-white hover:bg-indigo-600">Trending</button>
                <button class="px-4 py-2 text-sm rounded-xl bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600">Editor's Pick</button>
                <button class="px-4 py-2 text-sm rounded-xl bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600">Most Viewed</button>
            </div>
        </div>

        <!-- Featured Posts Scroll (Horizontal) -->
        <div class="overflow-x-auto">
            <div class="flex gap-4 pb-2 snap-x snap-mandatory scroll-smooth">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="w-72 min-w-[18rem] snap-start shrink-0 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-xl transition-transform duration-300 transform hover:-translate-y-1">
                        <img src="/public/assets/images/sample.jpg" alt="Featured Post" class="w-full h-40 object-cover rounded-t-xl">

                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Featured Post <?= $i ?></h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">This is a summary of the featured post. Keep it engaging...</p>

                            <!-- Placeholder Buttons (Future actions) -->
                            <div class="flex justify-end gap-2 mt-3">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 text-xs rounded">Feature</button>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-2 py-1 text-xs rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 text-xs rounded">Delete</button>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>



</section>