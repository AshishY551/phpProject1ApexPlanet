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
  <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js  use only once"></script> -->
  <!-- Alpine.js (required for live search) -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</head>

<body class="bg-gray-50">

  <!-- ✅ Common Header -->
  <?php include_once __DIR__ . '/header.php'; ?>

  <!-- ✅ Main content: this should be dynamically included -->
  <!-- ✅ Page Layout with Sticky Sidebars -->
  <div class="flex flex-row min-h-screen ">

    <!-- ✅ Sticky Left Sidebar -->
    <!-- <aside class="w-64 hidden lg:block sticky top-16 h-[calc(100vh-4rem)] overflow-y-auto border-r border-gray-200 bg-white z-30">
      [php] include __DIR__ . '/../sections/left-sidebar.php'; [/php]
    </aside> -->
    <!-- ✅ Full Left Sidebar Logic (handles mobile, tablet, desktop) -->
    <!-- ✅ Sticky Left Sidebar (1/6 of screen width on lg and up) -->
    <div class="hidden lg:block w-1/6 h-[calc(100vh-4rem)] sticky top-16 overflow-y-auto border-r border-gray-200 bg-white z-30">
      <?php include __DIR__ . '/../sections/left-sidebar.php'; ?>
    </div>

    <!-- ✅ Main content: this should be dynamically included -->
    <main class="flex-1 mt-1 px-8 py-4 overflow-y-auto">
      <?php
      // Load a specific view (set dynamically from index.php or router.php
      if (isset($viewFile)) {
        include $viewFile;
      } else {
        echo "<p class='text-center text-gray-500'>No view loaded.</p>";
      }


      ?>



    </main>

    <!-- ✅ Sticky Right Sidebar -->
    <!-- <aside class="w-64 hidden xl:block sticky top-16 h-[calc(100vh-4rem)] overflow-y-auto border-l border-gray-200 bg-white z-30">
      [?php] include __DIR__ . '/../sections/right-sidebar.php'; [?]
    </aside> -->
    <!-- ✅ Sticky Right Sidebar (1/6 of screen width on xl and up) -->
    <div class="hidden xl:block w-1/7 h-[calc(100vh-4rem)] sticky top-16 overflow-y-auto border-l border-gray-200 bg-white z-30">
      <?php include __DIR__ . '/../sections/right-sidebar3.php'; ?>
    </div>

  </div>



  <!-- ✅ Optional Footer -->
  <?php include_once __DIR__ . '/footer.php'; ?>

  <script>
    function liveSearch() {
      return {
        query: '',
        suggestions: [],
        message: '',
        selectedIndex: -1,

        fetchSuggestions() {
          if (this.query.trim().length < 1) {
            this.suggestions = [];
            this.message = '';
            this.selectedIndex = -1;
            return;
          }

          fetch(`/modules/search/search.php?q=${encodeURIComponent(this.query)}`)
            .then(res => res.json())
            .then(data => {
              this.suggestions = data.results;
              this.message = data.message;
              this.selectedIndex = -1;
            });
        },

        moveDown() {
          if (this.selectedIndex < this.suggestions.length - 1) this.selectedIndex++;
        },

        moveUp() {
          if (this.selectedIndex > 0) this.selectedIndex--;
        },

        select(item = null) {
          const selected = item || this.suggestions[this.selectedIndex];
          if (selected) window.location.href = selected.url;
        }
      };
    }
  </script>








</body>

</html>