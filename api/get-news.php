<?php
$start = intval($_GET['start'] ?? 0);
$limit = 3;

for ($i = $start + 1; $i <= $start + $limit; $i++):
?>
    <div class="relative group bg-gray-100 dark:bg-gray-800 p-4 rounded-xl transition hover:shadow-lg">
        <img src="/public/assets/images/sample-news.jpg" alt="News Image"
            class="w-full h-40 object-cover rounded-md mb-3 transition duration-300 group-hover:scale-105" />

        <div class="flex flex-col gap-2">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">📰 Loaded News <?= $i ?></h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">This content was dynamically loaded using AJAX.</p>

            <div class="flex justify-between items-center text-xs text-gray-500 dark:text-gray-400 mt-2">
                <span>🗓 <?= date("M j, Y") ?> • ✍️ Author <?= $i ?> • 🗞 Source <?= $i ?></span>
                <span class="bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full">Dynamic</span>
            </div>
        </div>
    </div>
<?php endfor; ?>