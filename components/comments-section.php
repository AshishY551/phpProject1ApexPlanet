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
            <div class="flex items-center gap-2 flex-wrap">
                <label class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-300">
                    <input type="checkbox" name="sort[]" value="recent" class="form-checkbox text-blue-600 dark:bg-gray-800">
                    <span>Recent</span>
                </label>
                <label class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-300">
                    <input type="checkbox" name="sort[]" value="liked" class="form-checkbox text-blue-600 dark:bg-gray-800">
                    <span>Most Liked</span>
                </label>
                <label class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-300">
                    <input type="checkbox" name="sort[]" value="replied" class="form-checkbox text-blue-600 dark:bg-gray-800">
                    <span>Most Replied</span>
                </label>
                <label class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-300">
                    <input type="checkbox" name="sort[]" value="top" class="form-checkbox text-blue-600 dark:bg-gray-800">
                    <span>Top Rated</span>
                </label>
            </div>

            <!-- 2. Advanced Selector (e.g. category, mood) -->
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-xl dark:bg-gray-800 dark:text-white focus:outline-none">
                <option value="">Select Tag/Category</option>
                <option value="feedback">Feedback</option>
                <option value="question">Question</option>
                <option value="emoji">😄 Funny</option>
                <option value="insightful">🧠 Insightful</option>
                <option value="support">💬 Support</option>
            </select>

            <!-- 3. Search Box -->
            <div class="relative">
                <input
                    type="text"
                    name="search"
                    placeholder="Search comments..."
                    class="pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-700 rounded-xl dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                <svg class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1 0 3 10.5a7.5 7.5 0 0 0 13.65 6.15z" />
                </svg>
            </div>
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
                    <div class="flex items-center gap-3 mb-2 sm:mb-0">
                        <!-- Like -->
                        <button class="flex items-center gap-1 hover:text-blue-500 transition duration-200">
                            <i class="fas fa-thumbs-up"></i>
                            <span>12</span>
                        </button>

                        <!-- Dislike -->
                        <button class="flex items-center gap-1 hover:text-red-500 transition duration-200">
                            <i class="fas fa-thumbs-down"></i>
                            <span>2</span>
                        </button>

                        <!-- Emoji (Can trigger popup in future) -->
                        <button
                            class="hover:text-yellow-500 transition duration-200"
                            title="React with Emoji"
                            aria-label="React with Emoji">
                            <i class="fas fa-smile"></i>
                        </button>
                    </div>

                    <!-- Right: Reply / Pin -->
                    <div class="flex items-center gap-3">
                        <!-- Reply -->
                        <button
                            class="flex items-center gap-1 hover:text-green-500 transition duration-200"
                            title="Reply"
                            aria-label="Reply to this comment">
                            <i class="fas fa-reply"></i>
                            <span class="hidden sm:inline">Reply</span>
                        </button>

                        <!-- Pin -->
                        <button
                            class="flex items-center gap-1 hover:text-purple-500 transition duration-200"
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
    <form action="/modules/comments/create.php" method="POST" class="mt-8 space-y-4">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Add Your Comment</h3>
        <textarea name="comment" rows="3" required class="w-full p-3 rounded-xl border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none transition"></textarea>

        <div class="text-right">
            <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl transition">Post Comment</button>
        </div>
    </form>
</div>