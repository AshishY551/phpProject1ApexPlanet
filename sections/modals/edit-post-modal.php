<!-- 🔧 Edit Post Modal -->
<div id="editPostModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 backdrop-blur-sm hidden items-center justify-center">
    <div class="bg-white dark:bg-gray-900 rounded-xl w-full max-w-2xl mx-auto p-6 animate-slide-up shadow-2xl relative">

        <!-- ✖ Close -->
        <button onclick="closeEditPostModal()" class="absolute top-3 right-3 text-gray-500 hover:text-red-500 transition text-xl">
            <i class="fas fa-times"></i>
        </button>

        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4 flex items-center gap-2">
            <i class="fas fa-edit text-yellow-500"></i> Edit Post
        </h2>

        <form id="editPostForm" action="/modules/posts/update.php" method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">
            <input type="hidden" name="post_id" id="edit-post-id">

            <!-- Fields -->
            <input type="text" name="title" id="edit-title" placeholder="Title" required
                class="w-full px-4 py-2 rounded-xl border dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600" />

            <textarea name="description" id="edit-description" rows="4" placeholder="Description" required
                class="w-full px-4 py-2 rounded-xl border dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600"></textarea>

            <!-- Submit -->
            <div class="text-right">
                <button type="submit"
                    class="px-6 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl shadow-lg transition hover:scale-105">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</div>