<?php
// Sample categories (in real app, load from DB)
$categories = ['All Categories', 'Technology', 'World', 'Science', 'Economy', 'Sports'];

// Simulate GET filter
$currentCategory = $_GET['category'] ?? '';
?>

<div class="w-full bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-md">
    <!-- Header + Filters -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">📰 Latest News</h2>

        <!-- Category Filter -->
        <form method="GET" class="flex gap-3 mt-4 md:mt-0">
            <select name="category" onchange="this.form.submit()" class="px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:outline-none">
                <?php foreach ($categories as $cat): ?>
                    <option value="<?= strtolower($cat) ?>" <?= strtolower($cat) === strtolower($currentCategory) ? 'selected' : '' ?>>
                        <?= $cat ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php
        // Simulated posts with pinned logic (replace with DB query later)
        $newsPosts = [
            ['title' => 'AI Revolution in Tech', 'category' => 'Technology', 'pinned' => true],
            ['title' => 'Global Markets Update', 'category' => 'Economy', 'pinned' => false],
            ['title' => 'SpaceX Launch Success', 'category' => 'Science', 'pinned' => false],
            ['title' => 'Olympics 2025 Preview', 'category' => 'Sports', 'pinned' => false],
            ['title' => 'UN Climate Report', 'category' => 'World', 'pinned' => true],
            ['title' => 'Smartphone Trends', 'category' => 'Technology', 'pinned' => false]
        ];

        // Filter by category if set
        if ($currentCategory && strtolower($currentCategory) !== 'all categories') {
            $newsPosts = array_filter(
                $newsPosts,
                fn($post) =>
                strtolower($post['category']) === strtolower($currentCategory)
            );
        }

        // Sort: pinned first
        usort($newsPosts, fn($a, $b) => $b['pinned'] <=> $a['pinned']);

        // Display loop
        foreach ($newsPosts as $i => $post):
        ?>

            <div class="relative group bg-gray-100 dark:bg-gray-800 p-4 rounded-xl transition hover:shadow-lg">
                <?php if ($post['pinned']): ?>
                    <div class="absolute top-2 left-2 bg-yellow-400 text-white text-xs px-2 py-1 rounded-full animate-pulse z-10">
                        📌 Pinned
                    </div>
                <?php endif; ?>

                <img src="/public/assets/images/sample-news.jpg" alt="News Image"
                    class="w-full h-40 object-cover rounded-md mb-3 transition duration-300 group-hover:scale-105" />

                <div class="flex flex-col gap-2">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white"><?= $post['title'] ?></h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">This is a summary of the news content shown here. More details on the full article page...</p>

                    <div class="flex justify-between items-center text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <span>🗓 <?= date("M j, Y") ?></span>
                        <span class="bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full"><?= $post['category'] ?></span>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <!-- Load More -->
    <div class="mt-6 text-center">
        <button class="px-6 py-2 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition duration-300">
            Load More News
        </button>
    </div>
</div>