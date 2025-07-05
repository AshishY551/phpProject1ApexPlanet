<?php
$pageTitle = "📬 Contact | ApexPlanet – Let’s Collaborate";
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $pageTitle; ?></title>

  <!-- Meta -->
  <meta name="description" content="Get in touch with ApexPlanet for collaboration, support, or partnerships. We’re here to innovate together." />
  <meta name="keywords" content="Contact ApexPlanet, Get in Touch, Connect, Form, Web Team" />
  <meta name="author" content="ApexPlanet Support" />

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <!-- Styles -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #f5f7fa, #c3cfe2);
      padding-top: 90px;
      transition: background 0.3s ease, color 0.3s ease;
    }

    .dark-mode {
      background: #121212 !important;
      color: #f8f9fa;
    }

    .dark-mode .container, .dark-mode input, .dark-mode textarea {
      background-color: #1f1f1f !important;
      color: #f8f9fa !important;
      border-color: #333;
    }

    .dark-mode .form-control::placeholder,
    .dark-mode textarea::placeholder {
      color: #ccc;
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
      max-width: 720px;
      background: #ffffff;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
    }

    .form-control, .form-select {
      border-radius: 8px;
    }

    .btn-primary {
      border-radius: 8px;
      padding: 10px 24px;
    }

    .form-label {
      font-weight: bold;
    }

    .alert-success {
      display: none;
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

  <!-- 🌐 Header -->
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

  <!-- 📬 Contact Form Section -->
  <div class="container mt-4">
    <h1 class="text-center text-primary fw-bold mb-4">📬 Contact ApexPlanet</h1>
    <p class="lead text-center mb-4">Whether you’re a client, developer, or partner – we’d love to hear from you.</p>

    <div id="successMessage" class="alert alert-success text-center" role="alert">
      ✅ Your message has been sent successfully. We’ll get back to you shortly.
    </div>

    <form id="contactForm" method="POST" action="#">
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name *</label>
        <input type="text" class="form-control" id="fullName" name="fullName" required placeholder="Your full name"/>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email Address *</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com"/>
      </div>

      <div class="mb-3">
        <label for="subject" class="form-label">Subject *</label>
        <input type="text" class="form-control" id="subject" name="subject" required placeholder="Short summary"/>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Message *</label>
        <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Tell us how we can help..."></textarea>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Send Message 🚀</button>
      </div>
    </form>
  </div>

  <!-- 🔚 Footer -->
  <footer class="mt-5">
    <p>&copy; <?php echo $year; ?> ApexPlanet. Built with logic & love.</p>
    <div class="footer-icons mt-2">
      <a href="#" title="GitHub">🐱</a>
      <a href="#" title="Twitter">🐦</a>
      <a href="#" title="LinkedIn">🔗</a>
    </div>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Dark Mode Toggle
    const toggle = document.getElementById('darkModeToggle');
    const body = document.body;

    function applyTheme(isDark) {
      body.classList.toggle('dark-mode', isDark);
      toggle.textContent = isDark ? '☀️' : '🌙';
      localStorage.setItem('apexTheme', isDark ? 'dark' : 'light');
    }

    // Initialize Theme
    const savedTheme = localStorage.getItem('apexTheme') === 'dark';
    applyTheme(savedTheme);

    toggle.addEventListener('click', () => {
      applyTheme(!body.classList.contains('dark-mode'));
    });

    // Contact Form Simulated Submission
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      setTimeout(() => {
        form.reset();
        successMessage.style.display = 'block';
        setTimeout(() => successMessage.style.display = 'none', 5000);
      }, 500);
    });
  </script>
</body>
</html>


