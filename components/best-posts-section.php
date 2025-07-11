<!-- 🟦 Your Best Posts Section -->
<section id="best-posts" class="w-full px-4 md:px-6 py-6 border-b border-gray-200 dark:border-gray-700">
    <div class="flex items-center justify-between flex-wrap gap-4 mb-6">
        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 dark:text-gray-100">
            Your Best Posts mmmmmmmmmmmmm
        </h2>

        <!-- 🔍 Search + Sort -->
        <div class="flex items-center gap-3 w-full md:w-auto">
            <select class="px-3 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-indigo-500" name="sort_by" id="sort_by">
                <option value="most_viewed">Most Viewed</option>
                <option value="most_liked">Most Liked</option>
                <option value="most_commented">Most Commented</option>
                <option value="latest">Latest</option>
            </select>

            <input type="text" class="px-3 py-2 w-60 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-indigo-500" placeholder="Search your posts..." name="search" id="search">
        </div>
    </div>

    <!-- 🧱 Posts Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 animate-fade-in">
        <?php
        // Placeholder loop — replace later with actual DB posts
        for ($i = 0; $i < 6; $i++):
            include __DIR__ . '/post-card.php';
        endfor;
        ?>
    </div>
</section>