<?php
// templates/layout.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ApexPlanet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ✅ Tailwind CSS (for development) -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- ✅ Alpine.js (for dropdowns, panels) -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50">

  <!-- ✅ Common Header -->
  <?php include_once __DIR__ . '/header.php'; ?>

  <!-- ✅ Main content: this should be dynamically included -->
  <main class="mt-16 px-4">
    <?php
    // Load a specific view (set dynamically from index.php or router.php)
    if (isset($viewFile)) {
      include $viewFile;
    } else {
      echo "<p class='text-center text-gray-500'>No view loaded.</p>";
    }
    ?>
  </main>

  <!-- ✅ Optional Footer -->
  <?php include_once __DIR__ . '/footer.php'; ?>

</body>
</html>
