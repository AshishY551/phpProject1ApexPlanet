<?php
// index.php

$pageTitle = "🌐 ApexPlanet | Dynamic PHP Page";
$currentTime = date("l, F j, Y - h:i:s A");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A modern and responsive PHP web page running on a local server.">
    <meta name="author" content="ApexPlanet Developer">
    <meta name="keywords" content="PHP, Localhost, XAMPP, Virtual Host, ApexPlanet">

    <title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #f8f9fa, #e3f2fd);
            color: #343a40;
            padding-top: 80px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        .lead {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h1 class="mb-4 text-primary fw-bold">🚀 Welcome to ApexPlanet</h1>
        <p class="lead">This is a modern, dynamic PHP-powered local web page served via Apache Virtual Host.</p>

        <hr>

        <div class="text-start mt-4">
            <h5>🔧 Server Info</h5>
            <ul>
                <li><strong>Host:</strong> <code>http://apex.local</code></li>
                <li><strong>Current Server Time:</strong> <?php echo $currentTime; ?></li>
                <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
            </ul>
        </div>

        <div class="mt-4">
            <a href="#" class="btn btn-outline-primary me-2">Learn More</a>
            <a href="#" class="btn btn-primary">Explore Projects</a>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> ApexPlanet. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


