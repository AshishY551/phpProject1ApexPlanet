<?php
// /includes/helpers.php

/**
 * Generate a unique slug based on the title.
 *
 * @param PDO $pdo
 * @param string $title
 * @return string
 */
function generateUniqueSlug(PDO $pdo, string $title): string {
    $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', trim($title)));
    $baseSlug = $slug;
    $counter = 1;

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE slug = ?");
    while (true) {
        $stmt->execute([$slug]);
        if ($stmt->fetchColumn() == 0) break;
        $slug = $baseSlug . '-' . $counter++;
    }

    return $slug;
}

/**
 * Securely handle an image upload.
 *
 * @param array $file The $_FILES['image'] array
 * @param string $subfolder Subfolder inside /public/uploads (e.g., 'posts', 'profiles')
 * @return string|null Saved filename or null if nothing uploaded
 * @throws Exception on failure
 */
function handleImageUpload(array $file, string $subfolder): ?string {
    if (empty($file['name'])) {
        return null;
    }

    $imgName = basename($file['name']);
    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'webp'];

    if (!in_array($imgExt, $allowed)) {
        throw new Exception('❌ Invalid image type. Allowed: jpg, jpeg, png, webp.');
    }

    if ($file['size'] > 2 * 1024 * 1024) {
        throw new Exception('❌ Image too large. Max 2MB allowed.');
    }

    $newName = uniqid('img_', true) . '.' . $imgExt;
    $uploadDir = __DIR__ . '/../public/uploads/' . $subfolder . '/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $targetPath = $uploadDir . $newName;

    if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
        throw new Exception('❌ Failed to upload image.');
    }

    return $newName;
}

// helpers.php
// delete image operation
function deleteImage($filename, $folder = 'posts') {
    $filePath = __DIR__ . "/../public/uploads/$folder/" . $filename;
    if ($filename && file_exists($filePath)) {
        unlink($filePath);
    }
}


