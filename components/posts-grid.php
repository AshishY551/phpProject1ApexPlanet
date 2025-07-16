<?php
// Sample posts (replace with DB fetch in production)
$posts = [
    [
        'title' => 'First post',
        'desc' => 'Testing post creation working.',
        'image' => '/public/uploads/posts/img_686a7a59a43091.65507314.jpeg',
        'date' => 'July 5, 2025'
    ],
    [
        'title' => 'Second Post',
        'desc' => 'Another example post.',
        'image' => '/public/assets/images/sample.jpg',
        'date' => 'July 8, 2025'
    ]
];
?>

<!-- 🔍 Live Search + Sort -->
<div class="mt-12 flex flex-col sm:flex-row justify-between items-center gap-4">
    <input type="text" placeholder="Search posts..." class="w-full sm:w-1/2 border px-3 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
    <select class="border px-3 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
        <option>Sort by</option>
        <option>Newest</option>
        <option>Oldest</option>
        <option>Most Liked</option>
    </select>
</div>

<!-- 📰 Posts Grid -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6 fade-in">

    <?php foreach ($posts as $post): ?>
        <article class="bg-white dark:bg-gray-900 shadow-md rounded-2xl p-4 flex flex-col justify-between hover:scale-[1.02] transition-transform duration-300">
            <img src="<?= $post['image'] ?>" alt="Post Image" class="rounded-md mb-4 w-full h-48 object-cover">
            <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-1"><?= htmlspecialchars($post['title']) ?></h2>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-3"><?= htmlspecialchars($post['desc']) ?></p>
            </div>
            <div class="text-xs text-gray-400 dark:text-gray-500 mb-2"><?= $post['date'] ?></div>
            <div class="flex justify-between mt-2 text-sm">
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                <a href="#" class="text-red-500 hover:text-red-700 font-medium">Delete</a>
            </div>
        </article>
    <?php endforeach; ?>

    <!-- 🔧 Placeholder Card -->
    <article class="bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400 shadow rounded-2xl p-4 flex flex-col justify-center items-center opacity-40">
        <p class="italic">Future post preview</p>
        <div class="mt-2 text-xs">Reserved for later expansion</div>
    </article>

</section>

<!-- ➕ Add New Post Button -->
<div class="flex justify-end mt-10">
    <a href="/views/add-post.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition">
        + Add New Post
    </a>
</div>