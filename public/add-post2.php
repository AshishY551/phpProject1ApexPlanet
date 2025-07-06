<?php 
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_token'];
require_once __DIR__ . '/../templates/header.php';
?>

<h2>Add New Post</h2>

<?php if (isset($_GET['error'])): ?>
    <p style="color:red;">Error: Failed to add post.</p>
<?php endif; ?>

<form action="../modules/posts/create.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf) ?>">

    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="6" required></textarea><br><br>

    <label>Image (optional):</label><br>
    <input type="file" name="image" accept="image/*"><br><br>

    <button type="submit">Publish</button>
</form>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>



