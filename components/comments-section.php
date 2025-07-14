<!-- components/comments-section.php -->

<div class="w-full px-4 py-6 bg-white dark:bg-gray-900 shadow-xl rounded-2xl animate-fade-in">
    <!-- Section Header -->
    <!-- Updated Comments Header (Advanced Filters + Search) -->
    <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mb-6">
        <!-- Title -->
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
            💬 Comments
        </h2>

        <!-- Filters and Search -->
        <div class="flex flex-col md:flex-row md:items-center gap-4 w-full md:w-auto">
            <!-- 1. Sort Type (Multi-checkbox) -->
            <!-- <div class="flex items-center gap-2 flex-wrap"> -->
            <!-- 1. Sort Type (Multi-checkbox, Animated, Tailwind) -->
            <div class="flex flex-wrap gap-3 mt-2">
                <!-- Recent -->
                <label class="flex items-center space-x-2 text-sm text-gray-700 dark:text-gray-300 cursor-pointer hover:text-blue-600 transition">
                    <input
                        type="checkbox"
                        name="sort[]"
                        value="recent"
                        class="form-checkbox h-4 w-4 text-blue-600 dark:bg-gray-800 dark:border-gray-600 rounded transition focus:ring-2 focus:ring-blue-400" />
                    <span>🕒 Recent</span>
                </label>

                <!-- Most Liked -->
                <label class="flex items-center space-x-2 text-sm text-gray-700 dark:text-gray-300 cursor-pointer hover:text-red-500 transition">
                    <input
                        type="checkbox"
                        name="sort[]"
                        value="liked"
                        class="form-checkbox h-4 w-4 text-red-500 dark:bg-gray-800 dark:border-gray-600 rounded transition focus:ring-2 focus:ring-red-400" />
                    <span>❤️ Most Liked</span>
                </label>

                <!-- Most Replied -->
                <label class="flex items-center space-x-2 text-sm text-gray-700 dark:text-gray-300 cursor-pointer hover:text-green-600 transition">
                    <input
                        type="checkbox"
                        name="sort[]"
                        value="replied"
                        class="form-checkbox h-4 w-4 text-green-600 dark:bg-gray-800 dark:border-gray-600 rounded transition focus:ring-2 focus:ring-green-400" />
                    <span>💬 Most Replied</span>
                </label>

                <!-- Top Rated -->
                <label class="flex items-center space-x-2 text-sm text-gray-700 dark:text-gray-300 cursor-pointer hover:text-purple-600 transition">
                    <input
                        type="checkbox"
                        name="sort[]"
                        value="top"
                        class="form-checkbox h-4 w-4 text-purple-600 dark:bg-gray-800 dark:border-gray-600 rounded transition focus:ring-2 focus:ring-purple-400" />
                    <span>⭐ Top Rated</span>
                </label>
            </div>


            <!-- 2. Advanced Selector (e.g. category, mood) -->
            <!-- 2. Advanced Selector: Category / Mood -->
            <div class="relative">
                <label for="tag-filter" class="sr-only">Filter by Tag or Mood</label>
                <select
                    id="tag-filter"
                    name="tag"
                    class="block w-full px-4 py-2 text-sm rounded-xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                    <option disabled selected value="">🎯 Filter by Tag / Mood</option>
                    <optgroup label="Category">
                        <option value="feedback">📝 Feedback</option>
                        <option value="question">❓ Question</option>
                        <option value="support">💬 Support</option>
                    </optgroup>
                    <optgroup label="Emotion">
                        <option value="funny">😂 Funny</option>
                        <option value="insightful">🧠 Insightful</option>
                        <option value="angry">😡 Angry</option>
                        <option value="happy">😊 Happy</option>
                    </optgroup>
                </select>
            </div>


            <!-- 3. Search Box  dynamic use from other file-->
            <?php include __DIR__ . '/../components/comments-search-bar.php'; ?>


            <!-- 3. Search Box  direct use in this file-->
            <!-- <div class="relative w-full max-w-sm transition duration-300">
                <input
                    type="text"
                    name="search"
                    placeholder="Search comments, users, tags..."
                    class="pl-12 pr-4 py-2 w-full border border-gray-300 dark:border-gray-700 rounded-xl shadow-sm dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition placeholder:text-sm" /> -->

            <!-- Search Icon -->
            <!-- <svg class="w-5 h-5 absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-300 pointer-events-none"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1 0 3 10.5a7.5 7.5 0 0 0 13.65 6.15z" />
                </svg>
            </div> -->

        </div>
    </div>


    <!-- Comment Grid: 2 Rows × 4 Columns -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <div class="relative bg-gray-50 dark:bg-gray-800 p-4 rounded-xl shadow group hover:shadow-lg transition">
                <!-- User Info -->
                <div class="flex items-center gap-3 mb-2">
                    <img src="/public/assets/images/user<?= $i ?>.jpg" class="w-10 h-10 rounded-full border border-gray-300 dark:border-gray-600" alt="User">
                    <div>
                        <h4 class="font-semibold text-gray-800 dark:text-white">User <?= $i ?></h4>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</span>
                    </div>
                </div>

                <!-- Comment Content -->
                <p class="text-gray-700 dark:text-gray-300 mb-4">This is a user comment. Very insightful and useful.</p>

                <!-- Actions -->
                <!-- Actions -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between text-sm text-gray-600 dark:text-gray-300 mt-3 transition-all duration-300">

                    <!-- Left: Reactions -->
                    <div class="flex items-center gap-1 mb-2 sm:mb-0">
                        <!-- Like -->
                        <button class="flex items-center gap-1 text-blue-500 dark:text-blue-400 hover:text-blue-600 dark:hover:text-blue-300 transition duration-200">
                            <i class="fas fa-thumbs-up"></i>
                            <span>12</span>
                        </button>


                        <!-- Dislike -->
                        <button class="flex items-center gap-1 text-red-500 dark:text-red-400 hover:text-red-600 dark:hover:text-red-300 transition duration-200">
                            <i class="fas fa-thumbs-down"></i>
                            <span>2</span>
                        </button>


                        <!-- Emoji (Can trigger popup in future) -->
                        <button
                            class="flex items-center gap-1 text-yellow-400 dark:text-yellow-300 hover:text-yellow-500 dark:hover:text-yellow-200 transition duration-200"
                            title="React with Emoji"
                            aria-label="React with Emoji">
                            <i class="fas fa-smile"></i>
                        </button>

                    </div>

                    <!-- Right: Reply / Pin -->
                    <div class="flex items-center gap-1 ">
                        <!-- Reply -->
                        <button
                            class="flex items-center gap-1 text-green-500 dark:text-green-400 hover:text-green-600 dark:hover:text-green-300 transition duration-200"
                            title="Reply"
                            aria-label="Reply to this comment">
                            <i class="fas fa-reply"></i>
                            <span class="hidden sm:inline">Reply</span>
                        </button>


                        <!-- Pin -->
                        <button
                            class="flex items-center gap-1 text-purple-500 dark:text-purple-400 hover:text-purple-600 dark:hover:text-purple-300 transition duration-200"
                            title="Pin Comment"
                            aria-label="Pin Comment">
                            <i class="fas fa-thumbtack"></i>
                            <span class="hidden sm:inline">Pin</span>
                        </button>

                    </div>
                </div>

            </div>
        <?php endfor; ?>
    </div>

    <!-- View More Comments Button -->
    <div class="text-center mt-6">
        <a href="/views/comments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-300">
            View All Comments →
        </a>
    </div>

    <!-- Comment Form -->
    <!--2.1 Advanced Comment Form -->
    <form
        action="/modules/comments/create.php"
        method="POST"
        class="mt-10 space-y-5 bg-white dark:bg-gray-900 p-6 rounded-xl shadow-md transition duration-300">
        <h3 class="text-xl font-bold text-gray-800 dark:text-white">💬 Leave a Comment</h3>

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                required
                placeholder="Your Name"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200" />
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="you@example.com"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200" />
        </div>

        <!-- Comment Textarea -->
        <div>
            <label for="comment" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Your Comment</label>
            <textarea
                id="comment"
                name="comment"
                rows="4"
                required
                placeholder="Write your comment here..."
                class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none transition duration-200"></textarea>
        </div>

        <!-- Hidden Post ID -->
        <input type="hidden" name="post_id" value="<?= $post_id ?? 0 ?>">

        <!-- Submit -->
        <div class="text-right">
            <button
                type="submit"
                class="inline-flex items-center gap-2 px-6 py-2 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
                <i class="fas fa-paper-plane"></i>
                Post Comment
            </button>
        </div>
    </form>


    <!--1.1 <form action="/modules/comments/create.php" method="POST" class="mt-8 space-y-4">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Add Your Comment</h3>
        <textarea name="comment" rows="3" required class="w-full p-3 rounded-xl border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none transition"></textarea>

        <div class="text-right">
            <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl transition">Post Comment</button>
        </div>
    </form> -->
</div>