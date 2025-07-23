<?php
// modules/posts/delete.php

require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/../../includes/session.php';
require_once __DIR__ . '/../../includes/helpers.php';
require_once __DIR__ . '/../../includes/csrf.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$post_id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

if (!$post_id) {
    echo json_encode(['success' => false, 'message' => 'Missing or invalid post ID']);
    exit;
}

try {
    // Future: Add soft delete logic here
    $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
    $success = $stmt->execute([$post_id]);

    echo json_encode([
        'success' => $success,
        'message' => $success ? '✅ Post deleted successfully.' : '❌ Delete failed.'
    ]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => '❌ DB error', 'error' => $e->getMessage()]);
}
