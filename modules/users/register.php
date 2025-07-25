<?php
require_once __DIR__ . '/../../includes/db.php';
require_once __DIR__ . '/../../includes/helpers.php';
require_once __DIR__ . '/../../includes/session.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => '❌ Invalid request method']);
    exit;
}
//      <!-- register.php  ✅ POST signup logic -->
//  <!-- // modules/users/register.php -->

// Sanitize input
// $name     = trim($_POST['name'] ?? '');
$username = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');
$confirm  = trim($_POST['confirm_password'] ?? '');

// Validate input
$errors = [];

if ($username === '' || strlen($username) < 3) {
    $errors[] = 'Username must be at least 3 characters.';
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format.';
}

if (strlen($password) < 6) {
    $errors[] = 'Password must be at least 6 characters.';
}

if ($password !== $confirm) {
    $errors[] = 'Passwords do not match.';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode('<br>', $errors)]);
    exit;
}

try {
    // Check if user already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
    $stmt->execute(['email' => $email]);

    if ($stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'An account with this email already exists.']);
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Create username slug
    // $slug = generateUniqueSlug($pdo, $name, 'users');
    $slug = generateUniqueSlug($pdo, $username, 'users');


    //$stmt = $pdo->prepare("INSERT INTO users (username, email, password, slug) VALUES (:username, :email, :password, :slug)");
    // $stmt->execute([
    //     'username' => $username,


    // Insert into DB
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, slug) VALUES (:username, :email, :password, :slug)");
    $stmt->execute([
        'username'     => $username,
        'email'    => $email,
        'password' => $hashedPassword,
        'slug'     => $slug,
    ]);

    echo json_encode(['success' => true, 'message' => '✅ Registration successful!']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Server error: ' . $e->getMessage()]);
}
