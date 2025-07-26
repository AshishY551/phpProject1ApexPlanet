<?php
// <!-- login.php ✅ POST login logic -->
// modules/users/login.php

require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/../../includes/session.php';
require_once __DIR__ . '/../../includes/helpers.php';

header('Content-Type: application/json');

// ✅ Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => '❌ Invalid request method.']);
    exit;
}

// ✅ Sanitize & fetch input
$email    = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($password)) {
    echo json_encode(['success' => false, 'message' => '❌ Invalid email or password.']);
    exit;
}

try {
    // ✅ Check if user exists
    $stmt = $pdo->prepare("SELECT id, username, email, password, role, slug FROM users WHERE email = :email LIMIT 1");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($password, $user['password'])) {
        echo json_encode(['success' => false, 'message' => '❌ Incorrect credentials.']);
        exit;
    }

    // ✅ Login success - start session
    $_SESSION['user'] = [
        'id'       => $user['id'],
        'username' => $user['username'],
        'email'    => $user['email'],
        'role'     => $user['role'],
        'slug'     => $user['slug'],
        'logged_in_at' => time()
    ];

    echo json_encode(['success' => true, 'message' => '✅ Login successful!']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => '⚠️ Server error. Try again later.']);
}
