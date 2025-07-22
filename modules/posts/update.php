<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/../../includes/helpers.php';
require_once __DIR__ . '/../../includes/session.php';

// 1. Validate method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// 2. CSRF token validation
if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    exit('Invalid CSRF token');
}
unset($_SESSION['csrf_token']);

// 3. Extract + sanitize inputs
$post_id   = (int)$_POST['post_id'];
$title     = trim($_POST['title']);
$content   = trim($_POST['content']);
$old_image = $_POST['old_image'] ?? null;
$user_id   = 1; // TODO: Replace with $_SESSION['user_id']

// echo json_encode([
//     'message' => '✅ Fake update successful (no DB)',
//     'title' => $title,
//     'slug' => $slug,
//     'image' => $image
// ]);
// exit;

// 4. Slug (regenerate only if title changed)
$slug = generateUniqueSlug($title, $pdo, $post_id);

// 5. Handle new image upload (optional)
$image = $old_image;
if (!empty($_FILES['image']['name'])) {
    $image = handleImageUpload($_FILES['image'], 'posts');
    deleteImage($old_image, 'posts');
}

// 6. Update DB
try {
    $stmt = $pdo->prepare("UPDATE posts SET title = ?, slug = ?, content = ?, image = ? WHERE id = ? AND user_id = ?");
    $stmt->execute([$title, $slug, $content, $image, $post_id, $user_id]);

    echo "✅ Post updated successfully.";
    // header("Location: " . BASE_URL . "/views/edit-post.php?id=$post_id&status=updated");
    exit;
} catch (PDOException $e) {
    error_log("Update Post Error: " . $e->getMessage());
    exit('❌ Failed to update post.');
}
