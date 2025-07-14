<!-- components/comments-filter-bar.php -->

<div class="w-full px-4 py-5 bg-white dark:bg-gray-900 rounded-2xl shadow-sm space-y-4">

    <!-- 1. Multi-checkbox Sorting -->
    <div class="flex items-center gap-3 flex-wrap">
        <label class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
            <input type="checkbox" name="sort[]" value="recent" class="form-checkbox text-blue-600 dark:bg-gray-800">
            <span>Recent</span>
        </label>
        <label class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
            <input type="checkbox" name="sort[]" value="liked" class="form-checkbox text-blue-600 dark:bg-gray-800">
            <span>Most Liked</span>
        </label>
        <label class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
            <input type="checkbox" name="sort[]" value="replied" class="form-checkbox text-blue-600 dark:bg-gray-800">
            <span>Most Replied</span>
        </label>
        <label class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
            <input type="checkbox" name="sort[]" value="top" class="form-checkbox text-blue-600 dark:bg-gray-800">
            <span>Top Rated</span>
        </label>
    </div>

    <!-- 2. Tag/Category Selector -->
    <div class="flex items-center gap-3">
        <select name="tag" class="px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-xl focus:outline-none dark:bg-gray-800 dark:text-white">
            <option value="">Filter by Tag</option>
            <option value="feedback">📝 Feedback</option>
            <option value="question">❓ Question</option>
            <option value="funny">😄 Funny</option>
            <option value="insightful">🧠 Insightful</option>
            <option value="support">💬 Support</option>
        </select>
    </div>

    <!-- 3. Search Input -->
    <div class="relative max-w-sm">
        <input
            type="text"
            name="search"
            placeholder="🔍 Search comments, users, tags..."
            class="pl-12 pr-4 py-2 w-full border border-gray-300 dark:border-gray-700 rounded-xl shadow-sm dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
        <svg class="w-5 h-5 absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-300 pointer-events-none"
            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1 0 3 10.5a7.5 7.5 0 0 0 13.65 6.15z" />
        </svg>
    </div>
</div>