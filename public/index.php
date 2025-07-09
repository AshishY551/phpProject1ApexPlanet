<?php
// public/index.php

// ✅ Enable full error reporting (for debugging)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// ✅ Load essential config and session
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/session.php';



// ✅ Set the view file to be rendered inside layout
$viewFile = __DIR__ . '/../views/home.php';

// ✅ Check if view file exists
// if (!file_exists($viewFile)) {
//   die("<h2 style='color: red; text-align: center;'>❌ Error: View file not found at <code>$viewFile</code></h2>");
// } else {
//   echo "<h3 style='color: green; text-align: center;'>✅ Success: View file found. Loading layout...</h3>";
// }

// ✅ Load the main layout which includes header, sidebars, and dynamic content
include_once __DIR__ . '/../templates/layout.php';
