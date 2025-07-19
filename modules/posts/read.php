<?php
// modules/posts/read.php

require_once __DIR__ . '/../../includes/db.php';

$category = $_GET['category'] ?? '';
$sort = $_GET['sort'] ?? '';
$search = $_GET['search'] ?? '';
$limit = $_GET['limit'] ?? 8;
$offset = $_GET['offset'] ?? 0;

$sql = "SELECT * FROM posts WHERE 1";

// Filtering
if (!empty($category)) {
    $sql .= " AND category = ?";
    $params[] = $category;
} else {
    $params = [];
}

// Search
if (!empty($search)) {
    $sql .= " AND (title LIKE ? OR content LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

// Sorting
switch ($sort) {
    case 'newest':
        $sql .= " ORDER BY created_at DESC";
        break;
    case 'oldest':
        $sql .= " ORDER BY created_at ASC";
        break;
    case 'liked':
        $sql .= " ORDER BY likes DESC";
        break;
    default:
        $sql .= " ORDER BY created_at DESC";
        break;
}

$sql .= " LIMIT ? OFFSET ?";
$params[] = (int)$limit;
$params[] = (int)$offset;

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return data as JSON for API or AJAX usage
header('Content-Type: application/json');
echo json_encode($posts);
