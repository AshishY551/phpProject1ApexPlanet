<!-- 🔽 Create Post Modal -->
<!-- absolute xxx -->
<div id="createPostModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm overflow-y-auto py-10 hidden">
    <div class="bg-white dark:bg-gray-900 rounded-xl w-full max-w-2xl mx-auto p-6 animate-slide-up shadow-2xl relative">

        <!-- ✖️ Close Button -->
        <button onclick="closeCreateModal()" class="absolute top-1 right-2 text-gray-500 hover:text-red-500 transition text-xl">
            <i class="fas fa-times"></i>
        </button>


        <!-- ✨ Scrollable Inner Content -->
        <div class="max-h-[90vh] overflow-y-auto pr-2">




            <!-- 📝 Header -->
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4 flex items-center gap-1">
                <i class="fas fa-pen-nib text-blue-500"></i> Create New Post
            </h2>

            <!-- 🧾 Form -->
            <form id="createPostForm" action="/modules/posts/create.php" method="POST" enctype="multipart/form-data" class="space-y-2">
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">

                <!-- 🔤 Title -->
                <input name="title" type="text" placeholder="Post Title" required
                    class="w-full px-4 py-2 rounded-xl border dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 transition" />

                <!-- 📝 Description -->
                <textarea name="description" placeholder="Write your post content..." rows="2" required
                    class="w-full px-4 py-2 rounded-xl border dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 transition markdown-editor"></textarea>

                <!-- 🏷️ Tags Input -->
                <input name="tags" type="text" placeholder="Tags (comma-separated)"
                    class="w-full px-4 py-2 rounded-xl border border-gray-300 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-purple-500 transition" />

                <!--1.1 🖼 Image Upload (Future Ready) -->
                <input type="file" name="image" accept="image/*"
                    class="w-full px-4 py-2 border rounded-xl dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600" />

                <!--2.1 🖼 Image Upload -->
                <div>
                    <!-- 📸 Image Preview -->
                    <img id="preview" src="#" class="mt-3 max-h-48 hidden rounded-xl shadow border" alt="Image Preview" />

                    <!-- 📸 Image Preview -->
                    <!-- <img id="preview" src="#" alt="Image Preview" class="hidden w-full max-h-64 rounded-xl object-cover shadow-md transition-all duration-300" /> -->


                    <!-- 📝 Image Info (Optional) -->
                    <div id="preview-info" class="text-sm text-gray-500 mt-2 hidden"></div>

                    <!-- 🖼 Input Field -->
                    <input type="file" name="image" accept="image/*" onchange="previewImage(event)"
                        class="w-full px-4 py-2 border rounded-xl dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600" />

                </div>

                <!-- 🔖 Category (Future Dynamic) -->
                <select name="category" required
                    class="w-full px-4 py-2 border rounded-xl dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600">
                    <option value="">Select Category</option>
                    <option value="tech">Tech</option>
                    <option value="design">Design</option>
                    <option value="news">News</option>
                </select>

                <!-- 🌐 Status -->
                <select name="status"
                    class="w-full px-4 py-2 border rounded-xl dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600">
                    <option value="published">Public</option>
                    <option value="draft">Draft</option>
                    <option value="private">Private</option>
                </select>

                <!-- ✅ Submit Button -->
                <div class="text-right">
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-lg transition transform hover:scale-105">
                        Post Now
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>