<!-- components/posts-grid.php -->

<!-- 🧠 Post Grid Header & Controls -->
<div class="mb-6 space-y-4 md:space-y-0 md:flex md:items-center md:justify-between">
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white flex items-center gap-2 animate-fade-in" aria-label="Your Posts Section">
        <span class="text-blue-600 dark:text-blue-400 text-3xl">🧩</span>
        <span>Your Posts</span>
    </h2>


    <!-- 🔍 Filter/Search UI -->
    <div class="flex flex-wrap gap-3">

        <!-- ✅ Multiple Checkbox Filters -->
        <div class="flex gap-2 flex-wrap">
            <?php
            $filters = ['Tech', 'News', 'Tutorial', 'Design', 'Updates'];
            foreach ($filters as $filter):
            ?>
                <label class="text-sm text-gray-700 dark:text-gray-300 flex items-center gap-1">
                    <input type="checkbox" name="category[]" value="<?= strtolower($filter) ?>" class="form-checkbox text-blue-600 dark:bg-gray-800">
                    <?= $filter ?>
                </label>
            <?php endforeach; ?>
        </div>

        <!-- 🔄 Single Sort Selector -->
        <select id="sort" class="px-3 py-2 border rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:text-white">
            <option value="">Sort By</option>
            <option value="newest">Newest</option>
            <option value="oldest">Oldest</option>
            <option value="liked">Most Liked</option>
        </select>

        <!-- 🔎 Search Box -->
        <input type="text" id="search" placeholder="Search..." class="px-3 py-2 border rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:text-white">
    </div>
</div>


<section class="w-full bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-md fade-in">

    <!-- 1. Header -->
    <header class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white flex items-center justify-center gap-2">
            📚 My Posts
        </h2>
        <p class="text-sm text-gray-500 dark:text-gray-400">Manage and review your published posts</p>
    </header>

    <!-- 2. Filters + Sort + Search -->
    <form method="GET" class="flex flex-wrap justify-between gap-4 items-center mb-8">
        <!-- Multi-checkbox filter -->
        <div class="flex flex-wrap gap-3">
            <?php
            $filters = ['Tech', 'Design', 'News', 'Tutorial'];
            foreach ($filters as $filter):
            ?>
                <label class="flex items-center space-x-2 text-sm text-gray-700 dark:text-gray-300">
                    <input type="checkbox" name="filter[]" value="<?= strtolower($filter) ?>"
                        class="form-checkbox text-blue-600 dark:bg-gray-800">
                    <span><?= $filter ?></span>
                </label>
            <?php endforeach; ?>
        </div>

        <!-- Sort dropdown -->
        <select name="sort" class="px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-xl dark:bg-gray-800 dark:text-white focus:outline-none">
            <option value="newest">Newest</option>
            <option value="oldest">Oldest</option>
            <option value="likes">Most Liked</option>
        </select>

        <!-- Search -->
        <div class="relative w-full sm:w-auto">
            <input type="text" name="search" placeholder="Search posts..."
                class="pl-10 pr-4 py-2 w-full sm:w-64 border border-gray-300 dark:border-gray-700 rounded-xl dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 transition" />
            <svg class="w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1 0 3 10.5a7.5 7.5 0 0 0 13.65 6.15z" />
            </svg>
        </div>
    </form>

    <!-- 3. Posts Grid (2 rows × 4 columns) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <?php include __DIR__ . '/post-card.php'; ?>
        <?php endfor; ?>
    </div>

    <!-- 4. Add New Post Button -->
    <div class="flex justify-end mt-10">
        <a href="/views/add-post.php"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-xl shadow-lg transition duration-200">
            ➕ Add New Post
        </a>
    </div>
</section>