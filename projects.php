<?php
$pageTitle = "📂 Projects | ApexPlanet – Powered by Innovation";
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="Explore all projects, modules, and digital innovations by ApexPlanet – built with modern stacks and clean architecture." />
  <meta name="keywords" content="ApexPlanet Projects, PHP, Web Apps, Bootstrap, Full Stack, Modular Systems" />
  <meta name="author" content="ApexPlanet Dev Team" />

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <!-- Styles -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #e8f0fe, #ffffff);
      color: #212529;
      padding-top: 90px;
      transition: background 0.3s, color 0.3s;
    }

    .dark-mode {
      background: #121212 !important;
      color: #f8f9fa;
    }

    .dark-mode header,
    .dark-mode footer,
    .dark-mode .card {
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
      max-width: 1200px;
    }

    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      border-radius: 10px;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
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

  <!-- 🌗 Header -->
  <header>
    <div class="d-flex justify-content-between align-items-center">
      <a href="index.php" class="navbar-brand">🚀 ApexPlanet</a>
      <nav class="d-flex align-items-center gap-3">
        <a class="nav-link" href="index.php">🏠 Home</a>
        <a class="nav-link" href="about.php">🌍 About</a>
        <a class="nav-link" href="projects.php">📂 Projects</a>
        <a class="nav-link" href="contact.php">📬 Contact</a>
        <button id="darkModeToggle" title="Toggle Dark Mode">🌙</button>
      </nav>
    </div>
  </header>

  <!-- 📂 Projects Grid -->
  <div class="container mt-5">
    <h1 class="text-center text-primary fw-bold mb-4">📂 Our Featured Projects</h1>
    <p class="text-center lead mb-4">Explore our flagship web modules, built with precision, scalability, and next-gen technology stacks.</p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- Project Card 1 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/600x300.png?text=To-Do+App+UI" class="card-img-top" alt="To-Do App" />
          <div class="card-body">
            <h5 class="card-title">📌 To-Do Web App</h5>
            <p class="card-text">A full-stack MERN-based productivity application with cloud-based task management and drag-drop UI.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
          </div>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/600x300.png?text=E-Commerce+System" class="card-img-top" alt="E-Commerce App" />
          <div class="card-body">
            <h5 class="card-title">🛒 E-Commerce Platform</h5>
            <p class="card-text">Responsive, SEO-optimized e-commerce system with dynamic catalog, cart, checkout, and payment integration.</p>
            <a href="#" class="btn btn-outline-success btn-sm">View Details</a>
          </div>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/600x300.png?text=Portfolio+Site" class="card-img-top" alt="Portfolio" />
          <div class="card-body">
            <h5 class="card-title">🧬 NeoPersona Resume</h5>
            <p class="card-text">A dynamic, animated portfolio platform with real-time project sync, animations, and backend integration.</p>
            <a href="#" class="btn btn-outline-dark btn-sm">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🔚 Footer -->
  <footer>
    <p>&copy; <?php echo $year; ?> ApexPlanet. Code. Create. Conquer.</p>
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
