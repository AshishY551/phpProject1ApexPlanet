<?php
// sections/middle-content.php
?>

<!-- 🧱 Section: Page Title -->
<header class="bg-blue-600 py-6 shadow-md rounded-xl">
    <h1 class="text-3xl text-white text-center font-bold tracking-wide">My Blog</h1>
</header>

<!-- 🧱 Section: Main Content Grid -->
<main class="p-4 md:p-8">

    <!-- 📰 Posts Grid -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">

        <!-- ✅ Example Post Card -->
        <article class="bg-white shadow rounded-2xl p-4 flex flex-col justify-between transition-transform transform hover:scale-105 duration-300">
            <img src="/public/uploads/posts/img_686a7a59a43091.65507314.jpeg" alt="Post Image" class="rounded-md mb-4 w-full h-4000 object-cover">
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-1">First post</h2>
                <p class="text-sm text-gray-600 mb-3">Testing post creation working.</p>
            </div>
            <div class="text-xs text-gray-400 mb-2">July 5, 2025</div>
            <div class="flex justify-between mt-2">
                <button class="text-sm text-blue-500 hover:text-blue-700 font-medium">Edit</button>
                <button class="text-sm text-red-500 hover:text-red-700 font-medium">Delete</button>
            </div>
        </article>

        <!-- 🔧 Placeholder Card -->
        <article class="bg-white shadow rounded-2xl p-4 flex flex-col justify-center items-center opacity-40">
            <p class="italic">Future post preview</p>
            <div class="mt-2 text-gray-400 text-xs">Reserved for later expansion</div>
        </article>

    </section>

    <!-- ➕ Add New Post Button -->
    <div class="flex justify-end mt-10">
        <a href="/views/add-post.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition-colors duration-200">
            + Add New Post
        </a>
    </div>

    <!-- 🔍 Live Search + Sort -->
    <div class="mt-12 flex flex-col sm:flex-row justify-between items-center gap-4">
        <input type="text" placeholder="Search posts..." class="w-full sm:w-1/2 border px-3 py-2 rounded shadow-sm" />
        <select class="border px-3 py-2 rounded shadow-sm">
            <option>Sort by</option>
            <option>Newest</option>
            <option>Oldest</option>
            <option>Most Liked</option>
        </select>
    </div>

    <!-- 🌟 Featured Posts Carousel -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">🌟 Featured Posts</h2>
        <div class="flex overflow-x-auto gap-4 pb-2 hide-scrollbar">
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="min-w-[250px] bg-white rounded-xl shadow-md p-4 flex-shrink-0">
                    <h3 class="font-semibold text-lg mb-1">Featured #<?= $i ?></h3>
                    <p class="text-sm text-gray-600">This is a highlighted article snippet or teaser preview.</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- 🔥 Trending Topics -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">🔥 Trending Topics</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>How to grow your audience in 2025</li>
            <li>Top 10 design trends</li>
            <li>Web security essentials</li>
            <li>Creating viral content</li>
        </ul>
    </div>

    <!-- 💬 Recent Comments Preview -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">💬 Latest Comments</h2>
        <div class="space-y-3 text-sm text-gray-700">
            <div class="border rounded p-3 bg-gray-50 shadow-sm">
                <strong>Alice:</strong> Loved your article on design!
            </div>
            <div class="border rounded p-3 bg-gray-50 shadow-sm">
                <strong>Bob:</strong> I disagree with your point about SEO.
            </div>
        </div>
    </div>

    <!-- 📩 Newsletter Subscription -->
    <div class="mt-16 bg-gray-100 rounded-xl p-6 shadow-inner">
        <h2 class="text-xl font-bold mb-2">📬 Subscribe to Our Newsletter</h2>
        <p class="text-sm text-gray-600 mb-4">Get weekly insights, tips, and resources delivered to your inbox.</p>
        <form action="/modules/subscriptions/subscribe.php" method="POST" class="flex flex-col sm:flex-row gap-3">
            <input type="email" name="email" required placeholder="Enter your email"
                class="flex-1 px-4 py-2 rounded border shadow-sm" />
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow font-semibold">Subscribe</button>
        </form>
    </div>

    <!-- 📥 Load More Posts Button -->
    <div class="flex justify-center mt-12">
        <button class="bg-gray-800 hover:bg-black text-white font-semibold px-6 py-2 rounded shadow-md">
            Load More Posts
        </button>
    </div>

</main>

<!-- ✅ Optional: Hide native scrollbars for horizontal carousel -->
<style>
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>