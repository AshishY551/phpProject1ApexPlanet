<?php
// sections/middle-content.php
?>

<!-- 🧱 Section: Page Title -->
<!-- <div class="p-4 md:p-8">
    <header class="bg-blue-600 p-4 py-5 shadow-md rounded-xl">
        <h1 class="text-3xl text-white text-center font-bold tracking-wide">My Blog</h1>
    </header>
</div> -->

<?php include __DIR__ . '/../components/section-header.php'; ?>


<!-- 🧱 Section: Main Content Grid -->
<main class="p-4 md:p-8">

    <!--1. 📰 Posts Grid -->
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

    <!--1. ➕ Add New Post Button -->
    <div class="flex justify-end mt-10">
        <a href="/views/add-post.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition-colors duration-200">
            + Add New Post
        </a>
    </div>

    <!--1. 🔍 Live Search + Sort -->
    <div class="mt-12 flex flex-col sm:flex-row justify-between items-center gap-4">
        <input type="text" placeholder="Search posts..." class="w-full sm:w-1/2 border px-3 py-2 rounded shadow-sm" />
        <select class="border px-3 py-2 rounded shadow-sm">
            <option>Sort by</option>
            <option>Newest</option>
            <option>Oldest</option>
            <option>Most Liked</option>
        </select>
    </div>

    <!-- 3.1 Your Best posts .sections/middle-content.php -->


    <section class="w-full max-w-7xl mx-auto p-4 space-y-10">

        <!-- Include Best Posts -->
        <?php include_once __DIR__ . '/../components/post-list.php'; ?>
        <div>🚧 Future sections (Recent posts, Featured, Comments, News, Email)</div>

        <!-- 🚧 Future sections (Recent posts, Featured, Comments, News, Email) will be added below -->

    </section>


    <?php include __DIR__ . '/../components/best-posts-section.php'; ?>

    <!-- 3.2 Recent posts sections/middle-content.php -->

    <section class="w-full max-w-7xl mx-auto p-4 space-y-10">

        <!-- Best Posts -->
        <?php include_once __DIR__ . '/../components/post-list.php'; ?>

        <!--2.1 Recent Posts -->
        <?php include_once __DIR__ . '/../components/recent-posts.php'; ?>

        <!--1.1 2️⃣ Recent Posts Section -->
        <div id="recent-posts" class="space-y-4">
            <h2 class="text-2xl font-bold">🕘 Classic Recent Posts</h2>
            <div class="space-y-3">
                <!-- 🔁 Placeholder -->
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="p-4 bg-white rounded shadow hover:bg-gray-50 transition">
                        <h4 class="font-semibold">Recent Post Title <?= $i ?></h4>
                        <p class="text-sm text-gray-500">Published on <?= date('Y-m-d') ?> · Author Name</p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- ✅ More blocks below (to be added) -->

    </section>
    <!--3.3 sections/middle-content.php -->
    <section id="middle-content" class="w-full flex flex-col gap-8 px-4 md:px-6 lg:px-8 py-6">



        <!-- 3️⃣ ✅ Featured Posts Section (NEW) -->
        <?php include_once __DIR__ . '/../components/featured-slider.php'; ?>

        <!-- 3️⃣ ✅ Featured Posts Section (NEW) -->
        <?php include __DIR__ . '/../components/best-posts-section.php'; ?>


        <!-- 4️⃣ Next Sections (Comments, News, Newsletter, etc.) -->
        <?php // include_once __DIR__ . '/../components/comments-section.php'; 
        ?>
        <?php // include_once __DIR__ . '/../components/news-section.php'; 
        ?>
        <?php // include_once __DIR__ . '/../components/newsletter-form.php'; 
        ?>

    </section>

    <!--3.4 🟦 Your Best Posts Section -->
    <section id="best-posts" class="w-full px-4 md:px-6 py-6 border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center justify-between flex-wrap gap-4 mb-6">
            <h2 class="text-xl md:text-2xl font-semibold text-gray-800 dark:text-gray-100">
                Your Best Posts
            </h2>

            <!-- 🔍 Search + Sort -->
            <div class="flex items-center gap-3 w-full md:w-auto">
                <!-- Sort Dropdown -->
                <select
                    class="px-3 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-indigo-500"
                    name="sort_by"
                    id="sort_by">
                    <option value="most_viewed">Most Viewed</option>
                    <option value="most_liked">Most Liked</option>
                    <option value="most_commented">Most Commented</option>
                    <option value="latest">Latest</option>
                </select>

                <!-- Search Input -->
                <input
                    type="text"
                    class="px-3 py-2 w-60 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-indigo-500"
                    placeholder="Search your posts..."
                    name="search"
                    id="search" />
            </div>
        </div>

        <!-- 🧱 Posts Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 animate-fade-in">
            <?php
            // Placeholder loop — in future, replace with real DB posts
            for ($i = 0; $i < 6; $i++):
                include __DIR__ . '/../components/post-card.php';
            endfor;
            ?>
        </div>
    </section>




    <!--2. ✅ middle-content.php -->
    <!-- 📁 Path: sections/middle-content.php -->
    <!-- 💡 Advanced, responsive, scalable, secure, user-friendly UI -->
    <!-- 🔧 Built with future backend integration in mind -->
    <!-- 🛠 Uses Tailwind CSS CDN -->

    <section id="middle-body-section" class="w-full px-4 md:px-8 py-10 space-y-12">

        <!-- 1️⃣ Best Posts Section -->
        <div id="best-posts" class="space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold">🔥 Best Posts</h2>
                <div class="flex space-x-2">
                    <input type="text" placeholder="Search Best Posts..." class="input input-bordered rounded px-3 py-1 text-sm">
                    <select class="select select-bordered px-2 py-1 text-sm">
                        <option>Order By</option>
                        <option>Most Liked</option>
                        <option>Most Viewed</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 animate-fadeIn">
                <!-- 🔁 Loop placeholder -->
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="bg-white shadow rounded-lg p-4 space-y-2 relative">
                        <h3 class="font-semibold text-lg">Sample Best Post Title <?= $i ?></h3>
                        <p class="text-gray-600 text-sm">Short description of the post goes here...</p>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <span>💬 12 comments</span>
                            <span>👁 1.2k views</span>
                        </div>
                        <div class="absolute top-2 right-2 space-x-2">
                            <!-- 🔧 Placeholder buttons -->
                            <button class="text-blue-500 hover:text-blue-700">Edit</button>
                            <button class="text-red-500 hover:text-red-700">Delete</button>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>



        <!-- 3️⃣ Featured Posts with Selectors -->
        <div id="featured-posts" class="space-y-4">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold">⭐ Featured Posts</h2>
                <div class="flex gap-2">
                    <input type="text" placeholder="Search Featured..." class="input input-bordered px-3 py-1">
                    <select class="select select-bordered px-2 py-1">
                        <option>Sort By</option>
                        <option>Most Shared</option>
                        <option>Author Picks</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 animate-fadeInUp">
                <!-- 🔁 Loop placeholder -->
                <?php for ($i = 1; $i <= 2; $i++): ?>
                    <div class="bg-blue-50 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold">Featured Article <?= $i ?></h3>
                        <p class="text-sm text-gray-600">Explore this selected featured post.</p>
                        <div class="mt-2 text-right">
                            <button class="text-indigo-600 text-sm hover:underline">Read More</button>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <!--2.1 4️⃣ Comments Section -->
        <?php include __DIR__ . '/../components/comments-section.php'; ?>


        <!--1.1 4️⃣ Comments Section -->
        <div id="comments-section" class="space-y-4">
            <h2 class="text-2xl font-bold">💬 Other old classic Comments</h2>
            <!-- 🔁 Placeholder loop -->
            <?php for ($i = 1; $i <= 2; $i++): ?>
                <div class="bg-white p-4 rounded-lg shadow border-l-4 border-blue-500">
                    <p class="text-gray-800"><strong>User<?= $i ?></strong>: Great post, I really enjoyed it!</p>
                    <div class="text-sm text-gray-500 mt-1">Posted on <?= date('Y-m-d') ?></div>
                    <div class="mt-1 space-x-2">
                        <button class="text-blue-500 hover:underline text-sm">Reply</button>
                        <button class="text-red-500 hover:underline text-sm">Delete</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <!--2.1 5️⃣ News Section -->
        <?php include __DIR__ . '/../components/news-section.php'; ?>


        <!-- 6️⃣ Email Subscription Section -->
        <!-- <div id="newsletter-section" class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-6 rounded-lg mt-10">
            <h2 class="text-xl font-bold mb-2">📧 Subscribe to Our Newsletter</h2>
            <p class="text-sm mb-4">Get latest updates, featured posts, and more directly to your inbox.</p>
            <form method="POST" action="#" class="flex flex-col md:flex-row items-center gap-3">
                <input type="email" name="email" placeholder="Enter your email" class="rounded px-4 py-2 text-black w-full md:w-auto">
                <button type="submit" class="bg-white text-blue-600 font-semibold px-4 py-2 rounded hover:bg-gray-200">Subscribe</button>
            </form>
        </div> -->

    </section>




    📩 Newsletter Subscription
    <div class="mt-10 bg-blue-400 rounded-xl p-6 shadow-inner">
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