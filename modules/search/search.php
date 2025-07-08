<?php
// Set JSON response header
header('Content-Type: application/json');

// Include DB connection (adjust path if needed)
require_once __DIR__ . '/../../includes/db.php';

// Get and sanitize search query
$search = $_GET['q'] ?? '';
$search = trim($search);

// Early response if empty
if (strlen($search) < 1) {
    echo json_encode([
        'results' => [],
        'message' => 'Start typing to search...'
    ]);
    exit;
}

try {
    // Prepare SQL: match partial title
    $stmt = $pdo->prepare("
        SELECT id, title 
        FROM posts 
        WHERE title LIKE ? 
        ORDER BY created_at DESC 
        LIMIT 10
    ");
    $stmt->execute(["%" . $search . "%"]);

    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // No results
    if (empty($posts)) {
        echo json_encode([
            'results' => [],
            'message' => 'No results found for "' . htmlspecialchars($search) . '".'
        ]);
        exit;
    }

    // Format result with links
    $results = array_map(function ($post) {
        return [
            'id'    => $post['id'],
            'title' => $post['title'],
            'url'   => '/views/post.php?id=' . $post['id']  // Adjust if you use slug
        ];
    }, $posts);

    // Success response
    echo json_encode([
        'results' => $results,
        'message' => null
    ]);
} catch (Exception $e) {
    // Error response
    http_response_code(500);
    echo json_encode([
        'results' => [],
        'message' => 'Server error. Please try again.'
    ]);
}
