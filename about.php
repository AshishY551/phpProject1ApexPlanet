<?php
$pageTitle = "🌍 About | ApexPlanet – Our Vision, Mission & Values";
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="Learn more about ApexPlanet – our mission, vision, core values, and the journey driving our innovation." />
  <meta name="keywords" content="About ApexPlanet, Vision, Mission, Innovation, Web Development" />
  <meta name="author" content="ApexPlanet Team" />

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <!-- Styles -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #ece9e6, #ffffff);
      color: #212529;
      padding-top: 90px;
      transition: background 0.4s, color 0.4s;
    }

    .dark-mode {
      background: #121212 !important;
      color: #f8f9fa;
    }

    .dark-mode .container,
    .dark-mode header,
    .dark-mode footer {
      background-color: #1f1f1f !important;
      color: #f8f9fa;
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
      transition: background-color 0.3s ease;
    }

    .dark-mode header {
      background-color: #1a1a1a;
      border-color: #333;
    }

    .navbar-brand {
      font-weight: bold;
      color: #0d6efd;
      font-size: 1.4rem;
      text-decoration: none;
    }

    .nav-link {
      font-weight: 500;
      color: #212529;
      margin-left: 20px;
      text-decoration: none;
    }

    .nav-link:hover {
      color: #0d6efd;
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
      background: #e9ecef;
      border: none;
      color: #000;
    }

    .dark-mode #darkModeToggle {
      background: #2c2c2c;
      color: #fff;
    }

    .container {
      max-width: 960px;
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      transition: background 0.3s ease;
    }

    h1, h2 {
      font-weight: 700;
    }

    footer {
      margin-top: 50px;
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

  <!-- 🌗 Header with Dark Mode Toggle -->
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

  <!-- 🌍 Page Content -->
  <div class="container mt-4">
    <h1 class="text-primary text-center mb-4">About ApexPlanet</h1>
    <p class="lead text-center">We’re committed to crafting futuristic, scalable, and secure web ecosystems using modern technology stacks.</p>

    <h2 class="mt-5">🚀 Our Mission</h2>
    <p>To deliver state-of-the-art web applications that prioritize performance, modularity, and user-centric design. We enable innovation through open standards, secure practices, and agile methodologies.</p>

    <h2 class="mt-4">🌐 Our Vision</h2>
    <p>To become the leading open-source and enterprise web innovation hub, shaping the future of digital transformation globally.</p>

    <h2 class="mt-4">💡 Core Values</h2>
    <ul>
      <li><strong>Innovation-First:</strong> Leveraging the latest in PHP, Apache, and cloud-native tools.</li>
      <li><strong>Security-Driven:</strong> Adhering to best practices across all layers – backend, frontend, and hosting.</li>
      <li><strong>Community-Centric:</strong> We grow by collaborating, contributing, and empowering others.</li>
    </ul>

    <h2 class="mt-4">📈 Our Journey</h2>
    <p>Founded in 2025, ApexPlanet started as a local Apache Virtual Host project and evolved into a full-stack innovation lab. We’ve since helped clients build dynamic platforms across industries – eCommerce, EdTech, SaaS, and beyond.</p>
  </div>

  <!-- 🔚 Footer -->
  <footer>
    <p>&copy; <?php echo $year; ?> ApexPlanet. Powered by curiosity & code.</p>
    <div class="footer-icons mt-2">
      <a href="#" title="GitHub">🐱</a>
      <a href="#" title="Twitter">🐦</a>
      <a href="#" title="LinkedIn">🔗</a>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
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
