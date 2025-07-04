<?php
// index.php

$pageTitle = "🌐 ApexPlanet | Elevating Web Innovation";
$currentTime = date("l, F j, Y - h:i:s A");
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ApexPlanet is a futuristic PHP-powered platform running on Apache with Virtual Host, engineered for innovation.">
    <meta name="author" content="ApexPlanet Dev Team">
    <meta name="keywords" content="PHP, XAMPP, Apache, Bootstrap 5, ApexPlanet, Web Development, Virtual Host">
    
    <!-- SEO & Social Meta -->
    <meta property="og:title" content="ApexPlanet | Dynamic PHP Landing">
    <meta property="og:description" content="Welcome to ApexPlanet – where innovation meets execution.">
    <meta property="og:image" content="https://yourdomain.com/assets/preview.png">
    <meta property="og:url" content="http://apex.local">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Title -->
    <title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #f1f3f5, #e0f7fa);
            color: #212529;
            padding-top: 60px;
            transition: background 0.3s, color 0.3s;
        }
        .container {
            max-width: 960px;
            background: #fff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
        }
        .btn-group-custom a {
            min-width: 160px;
        }
        footer {
            margin-top: 60px;
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
        }
        .dark-mode {
            background: #121212;
            color: #f8f9fa;
        }
        .dark-mode .container {
            background: #1e1e1e;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h1 class="mb-3 text-primary fw-bold">🚀 Welcome to <span class="text-dark">ApexPlanet</span></h1>
        <p class="lead mb-4">This is a secure, modular, and responsive PHP-driven web experience on Apache with Virtual Hosts.</p>

        <div class="alert alert-info text-start">
            <strong>🔒 Server Information</strong>
            <ul class="mt-2">
                <li><strong>Host:</strong> <code>http://apex.local</code></li>
                <li><strong>Current Server Time:</strong> <span id="serverTime"><?php echo $currentTime; ?></span></li>
                <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
            </ul>
        </div>

        <div class="btn-group-custom d-flex justify-content-center flex-wrap gap-3 mt-4">
            <a href="#" class="btn btn-outline-primary">🌍 About Us</a>
            <a href="#" class="btn btn-primary">📂 Explore Projects</a>
            <a href="#" class="btn btn-success">📬 Contact</a>
        </div>

        <div class="form-check form-switch mt-5">
            <input class="form-check-input" type="checkbox" id="darkModeToggle">
            <label class="form-check-label" for="darkModeToggle">Enable Dark Mode</label>
        </div>
    </div>

    <footer class="mt-5">
        <p>&copy; <?php echo $year; ?> ApexPlanet. Built with 💡 innovation and 🧠 logic.</p>
    </footer>

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Update server time every second
        setInterval(() => {
            const date = new Date();
            const formatted = date.toLocaleString('en-US', {
                weekday: 'long', year: 'numeric', month: 'long',
                day: 'numeric', hour: '2-digit', minute: '2-digit',
                second: '2-digit', hour12: true
            });
            document.getElementById('serverTime').textContent = formatted;
        }, 1000);

        // Dark mode toggle
        const toggle = document.getElementById('darkModeToggle');
        toggle.addEventListener('change', () => {
            document.body.classList.toggle('dark-mode', toggle.checked);
        });
    </script>
</body>
</html>


