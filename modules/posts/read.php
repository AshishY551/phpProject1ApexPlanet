<?php
// modules/posts/read.php

require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/../../includes/helpers.php';

header('Content-Type: application/json');

// 🔐 Sanitize and assign GET parameters
$category = isset($_GET['category']) ? trim($_GET['category']) : '';
$status   = isset($_GET['status']) ? trim($_GET['status']) : 'published'; // default to public posts
$search   = isset($_GET['search']) ? trim($_GET['search']) : '';
$sort     = isset($_GET['sort']) ? trim($_GET['sort']) : 'newest';
$limit    = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
$offset   = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

$params = [];
// $sql = "SELECT 
//             posts.id, posts.title, posts.slug, posts.description,
//             posts.category, posts.status, posts.image, posts.tags,
//             posts.created_at, posts.updated_at,
//             users.username AS author
//         FROM posts
//         LEFT JOIN users ON posts.user_id = users.id
//         WHERE 1=1";

// After Table updation in database posts table
$sql = "SELECT 
    posts.id, posts.title, posts.slug, posts.excerpt,
    posts.category, posts.status, posts.image, posts.tags,
    posts.likes, posts.views, posts.created_at, posts.updated_at,
    users.username AS author
FROM posts
LEFT JOIN users ON posts.user_id = users.id
WHERE 1=1";


// 🔎 Optional category filter
if (!empty($category)) {
    $sql .= " AND posts.category = ?";
    $params[] = $category;
}

// 🌐 Optional status (public/draft/private)
if (!empty($status)) {
    $sql .= " AND posts.status = ?";
    $params[] = $status;
}

// 🔍 Search (title, description, tags)
// ✅ 2. Update Search Clause to Use excerpt Instead of description
if (!empty($search)) {
    $sql .= " AND (posts.title LIKE ? OR posts.excerpt LIKE ? OR posts.tags LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}


// 📊 Sorting options
switch ($sort) {
    case 'oldest':
        $sql .= " ORDER BY posts.created_at ASC";
        break;
    case 'popular': // Future: sort by likes/views
        $sql .= " ORDER BY posts.likes DESC";
        break;
    default: // newest
        $sql .= " ORDER BY posts.created_at DESC";
        break;
}

// 🔢 Pagination
$sql .= " LIMIT ? OFFSET ?";
$params[] = $limit;
$params[] = $offset;

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 🧩 Optional: Add fallback image and formatted date
    foreach ($posts as &$post) {
        if (empty($post['image'])) {
            $post['image'] = '/public/assets/images/default-post.jpg';
        }

        $post['formatted_date'] = date('M d, Y', strtotime($post['created_at']));
        // ✅ 3. Fix the Fallback Short Description Generation
        // $post['short_desc'] = substr(strip_tags($post['description']), 0, 120) . '...';
        $post['short_desc'] = $post['excerpt'] ?? '';
    }

    echo json_encode([
        'success' => true,
        'count' => count($posts),
        'posts' => $posts
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error fetching posts',
        'error' => $e->getMessage()
    ]);
}
