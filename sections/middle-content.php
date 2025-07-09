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

</main>