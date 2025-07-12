<?php

/**
 * 📦 Best Posts Section Component
 * Includes: Filter UI + Post Card loop
 * Future ready: Backend dynamic loading, AJAX hooks
 */
?>


<!-- 🔥 Best Posts Section (Improved UI, Animations, Future-Ready) -->
<section id="best-posts" class="w-full px-4 md:px-6 py-8 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-b from-white via-gray-50 to-white dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-all duration-300">
    <div class="flex items-center justify-between flex-wrap gap-4 mb-6">
        <h2 class="text-2xl md:text-3xl font-bold text-indigo-600 dark:text-indigo-400 tracking-tight">
            🚀 Your Best Posts
        </h2>

        <!--1.1 🔍 Sort + Search -->
        <div class="flex flex-col md:flex-row items-stretch md:items-center gap-3 w-full md:w-auto animate-fade-in">
            <!-- Sort Dropdown -->
            <select name="sort_by" id="sort_by"
                class="px-4 py-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-800 dark:text-gray-200 focus:ring-2 focus:ring-indigo-500 transition">
                <option value="most_viewed">🔥 Most Viewed</option>
                <option value="most_liked">❤️ Most Liked</option>
                <option value="most_commented">💬 Most Commented</option>
                <option value="latest">🕒 Latest</option>
            </select>

            <!-- Live Search Input -->
            <div class="relative">
                <input type="text" id="search_best_posts" name="search" placeholder="Search your posts..."
                    class="px-4 py-2 pl-10 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-800 dark:text-gray-200 focus:ring-2 focus:ring-indigo-500 transition w-64" />
                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M16.65 16.65A7 7 0 1 0 9 16.65a7 7 0 0 0 7.65 0z" />
                </svg>
            </div>
        </div>
    </div>



    <!-- 🧱 Posts Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 animate-fade-in-slow">
        <?php
        // Placeholder loop — replace with actual dynamic posts from DB
        for ($i = 0; $i < 6; $i++):
            include __DIR__ . '/../components/post-card.php';
        // include __DIR__ . '/post-card.php';
        endfor;
        ?>
    </div>

    gc_collect_cycles

    <div>
        <?php
        // Simulated dynamic posts (replace with DB loop later)
        $posts = [
            ['id' => 1, 'title' => 'Building Scalable PHP Apps', 'author' => 'Laga', 'posted' => '2 hrs ago', 'views' => 123, 'comments' => 8, 'excerpt' => 'This guide helps you build...'],
            // more posts...
        ];

        foreach ($posts as $post) {
            include __DIR__ . '/../components/post-card.php';
        }
        ?>
    </div>

    <!-- 📦 Placeholder for "Load More" feature -->
    <div class="flex justify-center mt-8">
        <button class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-full shadow-md transition transform hover:scale-105 active:scale-95">
            Load More
        </button>
    </div>


</section>