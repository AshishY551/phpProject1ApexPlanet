<?php
// 🛡 Security
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_token'];

require_once __DIR__ . '/../includes/db.php';

// ✅ Moved this block before header.php
// 📥 Get post ID to edit
$postId = $_GET['id'] ?? null;
if (!$postId) {
    header('Location: /views/dashboard.php?error=missing_id');
    exit;
}

var_dump($pdo); // Check if PDO is valid

// 📦 Fetch post data (simulate for now — replace with DB query)
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$postId]);
$post = $stmt->fetch();
var_dump($post);
exit;



// if (!$post) {
//     // echo "<p class='text-red-600 text-center mt-10'>Post not found.</p>";
//     echo "<div class='text-center mt-12 text-red-500 text-lg font-semibold'>
//         ❌ Post not found or has been deleted.
//       </div>";

//     require_once __DIR__ . '/../templates/footer.php';
//     exit;
// }
if (!$postId) {
    $_SESSION['error'] = "Missing post ID.";
    header('Location: /views/dashboard.php');
    exit;
}



// ✅ Now it's safe to load header
require_once __DIR__ . '/../templates/header.php';
?>



<!-- ✏️ Edit Post UI -->
<section class="max-w-3xl mx-auto bg-white dark:bg-gray-900 p-8 rounded-xl shadow-md my-10 animate-fade-in">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 flex items-center gap-2">
        <i class="fas fa-edit text-blue-500"></i> Edit Post
    </h2>

    <form action="/modules/posts/update.php" method="POST" enctype="multipart/form-data" class="space-y-6" id="editPostForm">
        <input type="hidden" name="csrf_token" value="<?= $csrf ?>">
        <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">

        <!-- 📝 Title -->
        <div>
            <label class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Post Title</label>
            <input type="text" name="title" required value="<?= htmlspecialchars($post['title']) ?>"
                class="w-full px-4 py-2 rounded-xl border dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 transition" />
        </div>

        <!-- ✍️ Description -->
        <div>
            <label class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Content</label>
            <textarea name="description" rows="5" required
                class="w-full px-4 py-2 rounded-xl border dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 transition"><?= htmlspecialchars($post['description']) ?></textarea>
        </div>

        <!-- 🖼 Existing Image -->
        <?php if (!empty($post['image'])): ?>
            <div class="flex flex-col sm:flex-row gap-4 items-center">
                <img src="/public/uploads/posts/<?= htmlspecialchars($post['image']) ?>" alt="Current Image" class="h-32 rounded-lg object-cover shadow">
                <div>
                    <label class="block text-sm text-gray-600 dark:text-gray-400 mb-1">Replace Image (optional)</label>
                    <input type="file" name="image" accept="image/*"
                        class="w-full px-4 py-2 border rounded-xl dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600">
                </div>
            </div>
        <?php endif; ?>

        <!-- 📂 Category -->
        <div>
            <label class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Category</label>
            <select name="category" required
                class="w-full px-4 py-2 border rounded-xl dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600">
                <option value="tech" <?= $post['category'] === 'tech' ? 'selected' : '' ?>>Tech</option>
                <option value="design" <?= $post['category'] === 'design' ? 'selected' : '' ?>>Design</option>
                <option value="news" <?= $post['category'] === 'news' ? 'selected' : '' ?>>News</option>
            </select>
        </div>

        <!-- 🔐 Status -->
        <div>
            <label class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Status</label>
            <select name="status"
                class="w-full px-4 py-2 border rounded-xl dark:bg-gray-800 dark:text-white border-gray-300 dark:border-gray-600">
                <option value="published" <?= $post['status'] === 'published' ? 'selected' : '' ?>>Public</option>
                <option value="draft" <?= $post['status'] === 'draft' ? 'selected' : '' ?>>Draft</option>
                <option value="private" <?= $post['status'] === 'private' ? 'selected' : '' ?>>Private</option>
            </select>
        </div>

        <!-- ✅ Save Button -->
        <div class="text-right">
            <button type="submit"
                class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-xl shadow-md transition hover:scale-105">
                <i class="fas fa-save mr-1"></i> Save Changes
            </button>
        </div>
    </form>
</section>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>