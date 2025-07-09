<?php
// sections/middle-content.php
?>

<!-- only need to include main content not hader, nor footer , not haed etc -->

<!-- dont need to include html headhere, but just to see how yhis page is working i am inserting this
  -->
<!-- html code -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <style>
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- ✅ INCLUDE THE HEADER HERE -->
    <?php include_once __DIR__ . '/../templates/header.php'; ?>
    <!-- 🧱 Page-specific content below -->
    <!-- till here not needed to include -->

    <!-- 🧱 Section: Main Header -->
    <header class="bg-blue-600 py-6 shadow-md">
        <h1 class="text-3xl text-white text-center font-bold tracking-wide">My Blog</h1>
    </header>

    <!-- 🧱 Section: Main Content Grid -->
    <main class="p-4 md:p-8">

        <!-- 📰 Posts Grid -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">

            <!-- ✅ Example Post Card -->
            <article class="bg-white shadow rounded-2xl p-4 flex flex-col justify-between transition-transform transform hover:scale-105 duration-300">
                <img src="/assets/uploads/post-image.jpg" alt="Post Image" class="rounded-md mb-4 w-full h-48 object-cover">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-1">First post</h2>
                    <p class="text-sm text-gray-600 mb-3">Testing post creation working.</p>
                </div>
                <div class="text-xs text-gray-400 mb-2">July 5, 2025</div>
                <div class="flex justify-between mt-2">
                    <button class="text-sm text-blue-500 hover:text-blue-700 font-medium">Edit</button>
                    <button class="text-sm text-red-500 hover:text-red-700 font-medium">Delete</button>
                </div>
            </article>

            <!-- 🔧 Placeholder Card -->
            <article class="bg-white shadow rounded-2xl p-4 flex flex-col justify-center items-center opacity-40">
                <p class="italic">Future post preview</p>
                <div class="mt-2 text-gray-400 text-xs">Reserved for later expansion</div>
            </article>

        </section>

        <!-- ➕ Add New Post Button -->
        <div class="flex justify-end mt-10">
            <a href="/modules/posts/create.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition-colors duration-200">
                + Add New Post
            </a>
        </div>

    </main>

    <!-- 🔻 Footer -->
    <footer class="text-center text-sm text-gray-500 py-6 mt-12">
        &copy; 2025 ApexPlanet Blog Platform. All rights reserved.
    </footer>


</body>

</html>