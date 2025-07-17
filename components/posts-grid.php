<!-- components/posts-grid.php -->
<article class="animate-enhanced-fade-in bg-white p-4 rounded-xl shadow-lg">


    <section class="w-full bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-md fade-in">

        <!-- 1. Enhanced Header -->
        <header class="mb-8 text-center animate-enhanced-fade-in">
            <div class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-500 text-white px-6 py-3 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                <i class="fas fa-pen-nib text-xl"></i>
                <h2 class="text-2xl font-bold tracking-wide">My Posts</h2>
            </div>

            <p class="mt-3 text-sm text-gray-600 dark:text-gray-300 max-w-xl mx-auto">
                Review, edit or manage your contributions – stay creative and productive! ✨
            </p>
        </header>


        <!-- 2. Filters + Sort + Search -->
        <!-- 🔍 Advanced Filter + Sort + Search Bar -->
        <form method="GET" id="postFilterForm"
            class="flex flex-col sm:flex-row sm:items-center sm:justify-between flex-wrap gap-4 p-4 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl shadow-sm animate-fade-in">

            <!-- ✅ 1. Multi-Checkbox Filters -->
            <div class="flex flex-wrap gap-3">
                <?php
                $filters = ['Tech', 'Design', 'News', 'Tutorial'];
                foreach ($filters as $filter): ?>
                    <label class="inline-flex items-center gap-2 px-3 py-1 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-full cursor-pointer hover:bg-blue-100 dark:hover:bg-gray-700 transition">
                        <input type="checkbox" name="filter[]" value="<?= strtolower($filter) ?>"
                            class="form-checkbox text-blue-600 dark:bg-gray-800 dark:checked:bg-blue-500 focus:ring-blue-500">
                        <span class="text-sm text-gray-700 dark:text-gray-300"><?= $filter ?></span>
                    </label>
                <?php endforeach; ?>
            </div>

            <!-- 🔄 2. Sort Dropdown -->
            <div class="relative w-full sm:w-auto">
                <select name="sort"
                    class="pl-3 pr-10 py-2 border border-gray-300 dark:border-gray-700 rounded-xl dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    <option value="">Sort By</option>
                    <option value="newest">🆕 Newest</option>
                    <option value="oldest">📜 Oldest</option>
                    <option value="likes">👍 Most Liked</option>
                </select>
                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-gray-500 pointer-events-none">
                    <i class="fas fa-sort"></i>
                </span>
            </div>

            <!-- 🔎 3. Search Field -->
            <!-- 🔍 Animated Search Field -->
            <div class="relative w-full sm:w-64 transition-all duration-300 group">
                <input
                    type="text"
                    name="search"
                    placeholder="Search posts..."
                    aria-label="Search posts"
                    class="pl-11 pr-4 py-2 w-full rounded-xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-sm group-hover:shadow-md transition duration-300 placeholder-gray-400 dark:placeholder-gray-500" />

                <!-- Search Icon -->
                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-400 pointer-events-none">
                    <i class="fas fa-search animate-pulse group-focus-within:text-blue-500"></i>
                </div>
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

</article>