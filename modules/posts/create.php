<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
require_once __DIR__ . '/../../includes/db.php';

// 1. Validate method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// 2. Validate CSRF token
if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    exit('Invalid CSRF token');
}
unset($_SESSION['csrf_token']);

// 3. Validate inputs
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$user_id = 1; // later: replace with $_SESSION['user_id']
$slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $title));
$image = null;

// 4. Check for duplicate slug and make it unique
$baseSlug = $slug;
$counter = 1;
$stmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE slug = ?");
while (true) {
    $stmt->execute([$slug]);
    if ($stmt->fetchColumn() == 0) break;
    $slug = $baseSlug . '-' . $counter++;
}

// 5. Handle image upload (secure)
if (!empty($_FILES['image']['name'])) {
    $imgName = basename($_FILES['image']['name']);
    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'webp'];

    if (!in_array($imgExt, $allowed)) {
        die('Invalid image type.');
    }

    if ($_FILES['image']['size'] > 2 * 1024 * 1024) { // 2MB
        die('Image too large. Max 2MB allowed.');
    }

    $newName = uniqid('img_', true) . '.' . $imgExt;
    $target = __DIR__ . '/../../public/assets/' . $newName;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        die('Failed to upload image.');
    }

    $image = $newName;
}

// 6. Insert post
// try {
//     $stmt = $pdo->prepare("INSERT INTO posts (user_id, title, slug, content, image, published) VALUES (?, ?, ?, ?, ?, ?)");
//     $stmt->execute([$user_id, $title, $slug, $content, $image, 1]);

//     header("Location: ../../public/index.php?status=success");
//     exit;
// } catch (PDOException $e) {
//     error_log("Create Post Error: " . $e->getMessage());
//     header("Location: ../../public/add-post.php?error=1");
//     exit;
// }

// replacing for testin error
$stmt = $pdo->prepare("INSERT INTO posts (user_id, title, slug, content, image, published) VALUES (?, ?, ?, ?, ?, ?)");
if ($stmt->execute([$user_id, $title, $slug, $content, $image, 1])) {
    echo "✅ Post inserted successfully.";
} else {
    echo "<pre>";
    print_r($stmt->errorInfo());
    echo "</pre>";
}
exit;

