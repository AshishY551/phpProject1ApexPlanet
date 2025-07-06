<?php
// /modules/posts/create.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/../../includes/helpers.php'; // ✅ Added to use helper functions

// 1. Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// 2. CSRF token validation
if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    exit('Invalid CSRF token');
}
unset($_SESSION['csrf_token']);

// 3. Sanitize input
$title   = trim($_POST['title']);
$content = trim($_POST['content']);
$user_id = 1; // TODO: Replace with $_SESSION['user_id'] when login is done
$image   = null;

// 4. Ensure unique slug (✅ now using helper)
$slug = generateUniqueSlug($pdo, $title);

// 5. Image upload — secure & to `/public/uploads/posts/` (✅ now using helper)
if (!empty($_FILES['image']['name'])) {
    try {
        $image = handleImageUpload($_FILES['image'], 'posts');
    } catch (Exception $e) {
        exit('❌ ' . $e->getMessage());
    }
}

// 6. Insert post into DB
try {
    $stmt = $pdo->prepare("INSERT INTO posts (user_id, title, slug, content, image, published) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $title, $slug, $content, $image, 1]);

    echo "✅ Post inserted successfully.";
    // You can use header redirect once frontend integration is done
    // header("Location: " . BASE_URL . "/views/add-post.php?status=success");
    exit;
} catch (PDOException $e) {
    error_log("Create Post Error: " . $e->getMessage());
    exit("❌ Error saving post.");
}

// 🔒 Old versions kept for future reference or debugging (as per your request)
/*
try {
    $stmt = $pdo->prepare("INSERT INTO posts (user_id, title, slug, content, image, published) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $title, $slug, $content, $image, 1]);

    header("Location: ../../public/index.php?status=success");
    exit;
} catch (PDOException $e) {
    error_log("Create Post Error: " . $e->getMessage());
    header("Location: ../../public/add-post.php?error=1");
    exit;
}

$stmt = $pdo->prepare("INSERT INTO posts (user_id, title, slug, content, image, published) VALUES (?, ?, ?, ?, ?, ?)");
if ($stmt->execute([$user_id, $title, $slug, $content, $image, 1])) {
    echo "✅ Post inserted successfully.";
} else {
    echo "<pre>";
    print_r($stmt->errorInfo());
    echo "</pre>";
}
exit;
*/
