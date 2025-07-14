<?php
// api/get-news.php

// Simulate news data (normally from DB)
$start = intval($_GET['start'] ?? 0);
$limit = 3;

$newsData = '';
for ($i = $start + 1; $i <= $start + $limit; $i++) {
    $newsData .= '
    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl shadow hover:shadow-lg transition duration-300">
        <h3 class="font-semibold text-gray-800 dark:text-white mb-2">📰 Loaded News Title ' . $i . '</h3>
        <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">Dynamically loaded content from server...</p>
        <div class="text-xs text-gray-500 dark:text-gray-400">
            📅 Jul 2025 • ✍️ Author ' . $i . ' • 🗞 Source ' . $i . '
        </div>
    </div>';
}

echo $newsData;
