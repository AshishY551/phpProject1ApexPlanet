<?php
$pageTitle = "🌐 ApexPlanet | Elevating Web Innovation";
$currentTime = date("l, F j, Y - h:i:s A");
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="ApexPlanet: Futuristic platform for secure and dynamic PHP development." />
  <meta property="og:title" content="ApexPlanet | Elevating Web Innovation" />
  <meta property="og:image" content="https://yourdomain.com/assets/preview.png" />
  <meta property="og:url" content="http://apex.local" />
  <meta name="twitter:card" content="summary_large_image" />

  <title><?php echo $pageTitle; ?></title>

  <!-- Bootstrap + Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <!-- Styles -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #f1f3f5, #e0f7fa);
      color: #212529;
      padding-top: 90px;
      transition: background 0.4s, color 0.4s;
    }

    .dark-mode {
      background-color: #121212 !important;
      color: #f8f9fa;
    }

    .dark-mode .text-dark {
  color: #ffffff !important;
}

    .dark-mode .container,
    .dark-mode header,
    .dark-mode footer {
      background-color: #1f1f1f;
    }

    .container {
      max-width: 960px;
      background: #ffffff;
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
      transition: 0.4s ease;
    }

    header {
      background-color: #ffffff;
      border-bottom: 1px solid #dee2e6;
      padding: 15px 30px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
      transition: background-color 0.3s;
    }

    .dark-mode header {
      background-color: #1a1a1a;
      border-color: #333;
    }

    .navbar-brand {
      font-weight: bold;
      color: #0d6efd;
      font-size: 1.4rem;
    }

    .nav-link {
      font-weight: 500;
      color: #212529;
      margin-left: 20px;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: #0d6efd;
      transform: scale(1.05);
    }

    .dark-mode .nav-link {
      color: #f8f9fa;
    }

    .dark-mode .nav-link:hover {
      color: #0d6efd;
    }

    #darkModeToggle {
      font-size: 1.2rem;
      border-radius: 50%;
      width: 36px;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      line-height: 1;
      background: #e9ecef;
      border: none;
      color: #000;
      transition: 0.3s;
    }

    .dark-mode #darkModeToggle {
      background: #2c2c2c;
      color: #fff;
    }

    .btn-group-custom a {
      min-width: 160px;
      transition: transform 0.3s ease;
    }

    .btn-group-custom a:hover {
      transform: scale(1.05);
    }

    footer {
      margin-top: 60px;
      padding: 30px 0;
      text-align: center;
      font-size: 0.9rem;
      color: #6c757d;
      background-color: #f8f9fa;
      border-top: 1px solid #dee2e6;
    }

    .dark-mode footer {
      background-color: #1a1a1a;
      color: #aaa;
      border-color: #333;
    }

    .footer-icons a {
      color: inherit;
      margin: 0 10px;
      font-size: 1.2rem;
      text-decoration: none;
    }

    .footer-icons a:hover {
      color: #0d6efd;
    }

    .fade-in {
      animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    
  </style>
</head>
<body class="fade-in">

  <!-- 🔝 Header with Integrated Dark Mode Toggle -->
  <header>
    <div class="d-flex justify-content-between align-items-center">
      <a href="index.php" class="navbar-brand">🚀 ApexPlanet</a>
      <nav class="d-flex align-items-center gap-3">
        <a class="nav-link" href="index.php">🏠 Home</a>
        <a class="nav-link" href="about.php">🌍 About</a>
        <a class="nav-link" href="projects.php">🛠️ Projects</a>
        <a class="nav-link" href="contact.php">📬 Contact</a>
        <button id="darkModeToggle" title="Toggle Dark Mode">🌙</button>
      </nav>
    </div>
  </header>

  <!-- 🧠 Main Content -->
  <div class="container text-center mt-4 ">
    <h1 class="mb-3 text-primary fw-bold">Welcome to <span class="text-dark">ApexPlanet</span></h1>
    <p class="lead mb-4">This secure, scalable PHP-driven platform operates seamlessly on Apache Virtual Hosts.</p>

    <div class="alert alert-info text-start">
      <strong>🔒 Server Information</strong>
      <ul class="mt-2 mb-0">
        <li><strong>Host:</strong> <code>http://apex.local</code></li>
        <li><strong>Current Server Time:</strong> <span id="serverTime"><?php echo $currentTime; ?></span></li>
        <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
      </ul>
    </div>

    <div class="btn-group-custom d-flex justify-content-center flex-wrap gap-3 mt-4">
      <a href="about.php" class="btn btn-outline-primary">🌍 About Us</a>
      <a href="projects.php" class="btn btn-primary">📂 Explore Projects</a>
      <a href="contact.php" class="btn btn-success">📬 Contact</a>
    </div>
  </div>

  <!-- 📎 Footer -->
  <footer>
    <p>&copy; <?php echo $year; ?> ApexPlanet. Built with 💡 innovation and 🧠 logic.</p>
    <div class="footer-icons mt-2">
      <a href="#" title="GitHub">🐱</a>
      <a href="#" title="Twitter">🐦</a>
      <a href="#" title="LinkedIn">🔗</a>
    </div>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // ⏰ Clock Updater
    setInterval(() => {
      const date = new Date();
      const formatted = date.toLocaleString('en-US', {
        weekday: 'long', year: 'numeric', month: 'long',
        day: 'numeric', hour: '2-digit', minute: '2-digit',
        second: '2-digit', hour12: true
      });
      document.getElementById('serverTime').textContent = formatted;
    }, 1000);

    // 🌗 Dark Mode Logic
    const toggle = document.getElementById('darkModeToggle');
    const body = document.body;

    function applyTheme(isDark) {
      body.classList.toggle('dark-mode', isDark);
      toggle.textContent = isDark ? '☀️' : '🌙';
      localStorage.setItem('apexTheme', isDark ? 'dark' : 'light');
    }

    const savedTheme = localStorage.getItem('apexTheme') === 'dark';
    applyTheme(savedTheme);

    toggle.addEventListener('click', () => {
      applyTheme(!body.classList.contains('dark-mode'));
    });
  </script>
</body>
</html>
