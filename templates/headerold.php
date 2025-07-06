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



<!-- templates/header.php -->
<header class="sticky top-0 z-50 bg-white shadow-md border-b border-gray-200" x-data="{ showAccount: false, showContact: false, showPostsPanel: false, showLang: false }">
  <div class="max-w-screen-xl mx-auto px-4 py-2 flex items-center justify-between">

    <!-- Left: Logo + Menu -->
    <div class="flex items-center gap-4">
      <img src="/public/assets/images/logo.png" alt="Logo" class="w-8 h-8">
      <span class="font-bold text-xl text-blue-600">ApexPlanet</span>

      <!-- Posts Dropdown with Slide Panel -->
      <div class="relative">
        <button @mouseover="showPostsPanel = true" @mouseleave="showPostsPanel = false" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
          <span>Posts</span>
        </button>
        <div x-show="showPostsPanel" @mouseover.away="showPostsPanel = false" class="absolute left-0 top-full mt-2 w-64 bg-white shadow-lg rounded-lg p-4 z-40 transition-all">
          <h4 class="text-sm font-semibold mb-2 text-gray-700">Post Options</h4>
          <ul class="space-y-1 text-sm text-gray-600">
            <li><a href="#" class="hover:text-blue-600">Create Post</a></li>
            <li><a href="#" class="hover:text-blue-600">My Posts</a></li>
            <li><a href="#" class="hover:text-blue-600">Drafts</a></li>
            <li><a href="#" class="hover:text-blue-600">Scheduled</a></li>
            <li><a href="#" class="hover:text-blue-600">Saved for Later</a></li>
            <li><a href="#" class="hover:text-blue-600">Popular Tags</a></li>
          </ul>
        </div>
      </div>

      <!-- Language Selector -->
      <div class="relative">
        <button @click="showLang = !showLang" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 00-1 1v3h2V3a1 1 0 00-1-1zm-7 8a7 7 0 1114 0 7 7 0 01-14 0zm7-5a5 5 0 100 10 5 5 0 000-10z" /></svg>
          <span>Language</span>
        </button>
        <div x-show="showLang" @click.away="showLang = false" class="absolute top-full mt-2 w-32 bg-white border rounded shadow p-2 text-sm">
          <a href="#" class="block hover:text-blue-600">English</a>
          <a href="#" class="block hover:text-blue-600">Hindi</a>
          <a href="#" class="block hover:text-blue-600">Spanish</a>
        </div>
      </div>
    </div>

    <!-- Center: Expandable Search Bar -->
    <div class="relative flex-1 mx-6">
      <input
        type="text"
        placeholder="Search..."
        class="transition-all w-36 hover:w-full focus:w-full duration-300 ease-in-out px-4 py-1 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
      />
    </div>

    <!-- Right: Contact, Cart, Account, Dark mode -->
    <div class="flex items-center gap-4">

      <!-- Contact Dropdown -->
      <div class="relative">
        <button @click="showContact = !showContact" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3.6 7.59-1.35 2.45A1 1 0 008 17h10a1 1 0 001-1v-1H8.42a1 1 0 01-.96-.74L7 12h11a1 1 0 001-.8l1-5A1 1 0 0019 5H6.21L5.27 3H3z" /></svg>
          <span>Contact</span>
        </button>
        <div x-show="showContact" @click.away="showContact = false" class="absolute right-0 top-full mt-2 bg-white shadow-md border rounded-lg p-3 text-sm space-y-2">
          <a href="#" class="flex items-center gap-2 hover:text-blue-600">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a1 1 0 011-1h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5z"/></svg>
            <span>Email Us</span>
          </a>
          <a href="#" class="flex items-center gap-2 hover:text-blue-600">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5h2l3.6 7.59L7.16 15H18a1 1 0 001-1V5H3z"/></svg>
            <span>Call Us</span>
          </a>
        </div>
      </div>

      <!-- Cart Link -->
      <a href="/views/cart.php" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4"/></svg>
        <span>Cart</span>
      </a>

      <!-- Account Dropdown (preserve original) -->
      <div class="relative">
        <button @click="showAccount = !showAccount" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5.121 17.804A9 9 0 1112 21a8.963 8.963 0 01-6.879-3.196z" /></svg>
          <span>Account</span>
        </button>
        <div x-show="showAccount" @click.away="showAccount = false" class="absolute right-0 mt-2 w-72 bg-white border rounded shadow-lg p-4 text-sm z-50">
          <div class="flex justify-between mb-2">
            <button class="bg-yellow-400 px-4 py-1 rounded hover:bg-yellow-300 text-sm font-medium">Sign In</button>
            <span class="text-xs text-gray-500 self-center">New customer? <a href="#" class="text-blue-600">Start here</a></span>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <h3 class="font-bold text-gray-700 mb-1">Your Lists</h3>
              <ul class="space-y-1">
                <li><a href="#" class="hover:text-blue-600">Create a Wish List</a></li>
                <li><a href="#" class="hover:text-blue-600">Wish from Any Website</a></li>
                <li><a href="#" class="hover:text-blue-600">Discover Your Style</a></li>
              </ul>
            </div>
            <div>
              <h3 class="font-bold text-gray-700 mb-1">Your Account</h3>
              <ul class="space-y-1">
                <li><a href="#" class="hover:text-blue-600">Your Orders</a></li>
                <li><a href="#" class="hover:text-blue-600">Your Subscriptions</a></li>
                <li><a href="#" class="hover:text-blue-600">Manage Content</a></li>
                <li><a href="#" class="hover:text-blue-600">Seller Account</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Dark Mode Toggle -->
      <button class="text-gray-700 hover:text-blue-600">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
        </svg>
      </button>

    </div>
  </div>
</header>


</body>
</html>



