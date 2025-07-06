<?php
// templates/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ApexPlanet</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 text-gray-800">

<!-- Sticky Header -->
<header class="bg-white shadow-md sticky top-0 z-50" x-data="{ dark: false }">
  <div class="flex items-center justify-between px-4 py-3 md:px-8">
    <!-- Logo -->
    <a href="/" class="flex items-center space-x-2">
      <img src="/public/assets/images/logo.png" alt="Logo" class="w-8 h-8">
      <span class="font-bold text-xl text-gray-800">ApexPlanet</span>
    </a>

    <!-- Search Bar -->
    <div class="relative hidden md:block w-1/3">
      <input type="text" placeholder="Search..." class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring focus:ring-blue-300">
      <div class="absolute right-3 top-2.5 text-gray-400">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 15z"></path>
        </svg>
      </div>
    </div>

    <!-- Right Side Icons -->
    <div class="flex items-center space-x-4">

      <!-- Contact Us Dropdown -->
      <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex items-center space-x-1 hover:text-blue-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>Contact Us</span>
        </button>
        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg py-2 z-50">
          <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
            ☎️ <span class="ml-2">Call</span>
          </a>
          <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
            ✉️ <span class="ml-2">Email</span>
          </a>
          <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
            📢 <span class="ml-2">Message Us</span>
          </a>
        </div>
      </div>

      <!-- Cart -->
      <a href="/views/cart.php" class="flex items-center hover:text-blue-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.293 2.293A1 1 0 007 17h10a1 1 0 00.894-.553L20 13M16 17a2 2 0 11-4 0 2 2 0 014 0zm-8 0a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="ml-1">Cart</span>
      </a>

      <!-- Account Dropdown -->
      <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex items-center space-x-1 hover:text-blue-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118 6.879"></path>
          </svg>
          <span>Account</span>
        </button>
        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-80 bg-white border rounded-md shadow-lg z-50">
          <div class="p-4 border-b">
            <a href="/views/login.php" class="block bg-yellow-400 text-center py-2 rounded-md text-black font-semibold">Sign In</a>
            <p class="text-sm mt-2 text-center">New customer? <a href="/views/signup.php" class="text-blue-500">Start here</a></p>
          </div>
          <div class="grid grid-cols-2 gap-4 p-4">
            <div>
              <h4 class="font-bold mb-2">Your Lists</h4>
              <ul class="space-y-1 text-sm">
                <li><a href="#" class="hover:underline">Create a Wish List</a></li>
                <li><a href="#" class="hover:underline">Discover Your Style</a></li>
                <li><a href="#" class="hover:underline">Baby Wishlist</a></li>
              </ul>
            </div>
            <div>
              <h4 class="font-bold mb-2">Your Account</h4>
              <ul class="space-y-1 text-sm">
                <li><a href="#" class="hover:underline">Your Orders</a></li>
                <li><a href="#" class="hover:underline">Subscriptions</a></li>
                <li><a href="#" class="hover:underline">Switch Account</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Dark Mode Toggle -->
      <button @click="dark = !dark" class="hover:text-blue-600">
        <svg x-show="!dark" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-11.66l-.71.71M4.34 19.66l-.71-.71M21 12h-1M4 12H3m16.66 4.66l-.71-.71M4.34 4.34l-.71.71" />
        </svg>
        <svg x-show="dark" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
        </svg>
      </button>

    </div>
  </div>
</header>
</body>
</html>


