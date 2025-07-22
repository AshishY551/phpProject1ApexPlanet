<?php
require_once __DIR__ . '/../includes/db.php'; // make sure PDO $pdo is available
header('Content-Type: application/json');

// GET: Return specific post by ID (for inline edit modal)
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $postId = (int) $_GET['id'];

    $stmt = $pdo->prepare("SELECT id, title, description FROM posts WHERE id = ?");
    $stmt->execute([$postId]);

    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($post) {
        echo json_encode($post);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Post not found']);
    }
    exit;
}

// Optional: add POST or DELETE logic later if needed
