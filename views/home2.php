<?php
// views/home.php

ob_start();

// 🧱 Include homepage screen parts
include __DIR__ . '/../sections/middle-content.php';
include __DIR__ . '/../sections/bottom-scrollbar.php';

// 🧠 Capture scripts specific to this page
$scripts = '
  <script src="/public/assets/js/components/section-header.js" defer></script>
  <script src="/public/assets/js/components/posts-loader.js" defer></script>
  <script src="/public/assets/js/components/delete-post-modal.js" defer></script>
';

// ✅ Inject into the base layout
include __DIR__ . '/../templates/layout.php';
