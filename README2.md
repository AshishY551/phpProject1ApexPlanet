# Simple PHP Web Page

http://apex.local/#
http://apex.local/#

This is a basic PHP-powered web page designed to demonstrate the structure and functionality of a simple PHP project. It displays a welcome message and the current date dynamically using PHP.

## Features

- Clean HTML5 structure
- Embedded PHP for dynamic content
- Displays current date
- Simple, responsive-friendly design with basic CSS

## Getting Started

### Requirements

- A local or remote web server with PHP support (e.g., [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), [MAMP](https://www.mamp.info/), or a Linux/Apache/PHP setup)
- A web browser

### Installation

1. Clone or download this repository to your local machine.
2. Move the project folder to your web server’s root directory:

   - For XAMPP: `C:\xampp\htdocs\`
   - For WAMP: `C:\wamp\www\`
   - For MAMP: `/Applications/MAMP/htdocs/`

3. Start your web server.

4. Open your browser and visit:







<!-- includes/header.php -->
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
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">
  <header class="bg-blue-600 py-6 shadow-md">
    <h1 class="text-3xl text-white text-center font-bold tracking-wide">My Blog</h1>
  </header>
  <main class="p-4 md:p-8">
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
      <!-- Example Post Card Start -->
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
      <!-- Example Post Card End -->

      <!-- Future placeholder cards -->
      <article class="bg-white shadow rounded-2xl p-4 flex flex-col justify-center items-center opacity-40">
        <p class="italic">Future post preview</p>
        <div class="mt-2 text-gray-400 text-xs">Reserved for later expansion</div>
      </article>

    </section>
    <!-- Add Post Button (can be turned into floating action button later) -->
    <div class="flex justify-end mt-10">
      <a href="/modules/posts/create.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition-colors duration-200">
        + Add New Post
      </a>
    </div>
  </main>
  <footer class="text-center text-sm text-gray-500 py-6 mt-12">
    &copy; 2025 ApexPlanet Blog Platform. All rights reserved.
  </footer>
</body>
</html>  this is index.php  , its good but don't you think we need more featured and advance project,    It don't have ,,,,,[1.sticky-header and there {contents- icon and text for to go to other features- with also having drop-downs  and further side-panel opens for those options too},{sign up sign in- which then drop down also to change account sign in ,signout all options}  ,dark mode change icon]  ,,,,,,[2.1 sticky-thin-left-expandable-panel section {for category selection for search of different types of  posts and blogs and comments just like in used in amajon site}],,,,,,[2.2.middle-body-section- { having all sections like for showing (your-best posts - with search and oder by icon options,your- recent posts), (featured posts-with selectors- like search  and order feature or specific post selection), (comment section), (news section search section at last ),(email section at last) } ], ,,,,,,[2.3 sticky-morethin-right-expandable-panel section {with links to the optons or pages like--- find people search, connect people, go to your profile, your connections,news, take our best subscription plans, cart , payments login/logout }] ,,,,,,,[3.{footer- having different coluns for different list of site -links for move including contact-us about-us features     ,app download section having app and web download    , payment methods }],,,,,,[4. stcky-thin  left to right slow moving bar {with different options which have link to other pages}].        .............. <<That is my expectaion . if you cant buid it at once start one by one.  confirm me that you understood, and if you find it difficult to understand logic behind to how to divide screeen fo diffrent parts take my help i will specify for example - how many rows we divide our screen into - then how many rowns  or columns or both we need for each row - further division . then make components which- will be linked to backend>>