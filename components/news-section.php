<!-- News Section Component -->
<div id="news-section" class="w-full bg-white dark:bg-gray-900 p-6 rounded-xl shadow mb-8">

    <!-- 🔔 Breaking News Banner -->
    <div class="mb-4 px-4 py-2 bg-gradient-to-r from-red-500 to-yellow-400 text-white font-bold text-center animate-pulse rounded">
        🔥 Breaking News: Stay informed with the latest updates!
    </div>

    <!-- News Grid -->
    <div id="news-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Initial Placeholder News -->
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl shadow hover:shadow-lg transition duration-300">
                <h3 class="font-semibold text-gray-800 dark:text-white mb-2">📰 News Title <?= $i ?></h3>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">Short news summary with teaser content here.</p>
                <div class="text-xs text-gray-500 dark:text-gray-400">
                    <span>📅 Jul 2025</span> • <span>✍️ Author <?= $i ?></span> • <span>🗞 Source <?= $i ?></span>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <!-- 🔄 Load More Button -->
    <div class="mt-6 text-center">
        <button id="loadMoreNews" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl transition">🔄 Load More</button>
    </div>
</div>