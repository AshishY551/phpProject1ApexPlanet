<?php
// Database configuration
$host = 'localhost';
$dbname = 'blog'; // Your database name
$username = 'root'; // Default for XAMPP/WAMP
$password = '';     // Default for XAMPP/WAMP

try {
    // Create PDO instance with strict error reporting and UTF-8
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    // Log the error securely and show a generic message
    error_log("Database connection error: " . $e->getMessage());
    die("Database connection failed. Please try again later.");
}
?>
