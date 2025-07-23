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

  <!-- Font Awesome v6 CDN (latest *Recommended) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Font Awesome old 4.7 (for 'fa fa-*' classes) -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body class="bg-gray-100 text-gray-800">



  <!-- templates/header.php -->
  <header class="sticky top-0 z-50 bg-white shadow-md border-b border-gray-200" x-data="{ showAccount: false, showContact: false, showPostsPanel: false, showLang: false }">
    <div class="w-full max-w-screen-xl mx-auto px-4 py-2 flex flex-wrap items-center justify-between  gap-y-2 sm:flex-nowrap sm:gap-y-0">

      <!-- Left: Logo + Menu -->
      <div class="flex items-center mx-0 gap-6">
        <img src="/public/assets/images/logo.jpeg" alt="Logo" class="w-8 h-8">
        <span class="font-bold text-xl text-blue-600">ApexPlanet</span>


        <!-- POSTS DROPDOWN WITH NESTED SIDE PANELS -->
        <div class="relative group" x-data="{ showPostsPanel: false }">

          <!-- Posts Hover Button -->
          <button
            @mouseenter="showPostsPanel = true"
            @mouseleave="showPostsPanel = false"
            class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>Posts</span>
          </button>

          <!-- Main Dropdown Panel -->
          <div
            x-show="showPostsPanel"
            @mouseenter="showPostsPanel = true"
            @mouseleave="showPostsPanel = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-2"
            class="absolute top-full left-0 mt-2 w-64 bg-white shadow-lg rounded-lg p-4 z-50">
            <h4 class="text-sm font-semibold mb-2 text-gray-700">Post Options</h4>
            <ul class="space-y-1 text-sm text-gray-600">

              <!-- Item with Subpanel -->
              <!-- Item with Subpanel -->
              <li class="relative">
                <!-- My Posts link wrapped in a hover-trigger group -->
                <div class="group inline-block w-full">
                  <a href="#" class="flex justify-between items-center hover:text-blue-600 w-full px-2 py-0">
                    My Posts
                    <svg class="w-4 h-4 ml-2 text-gray-400 group-hover:text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                  </a>

                  <!-- Side Dropdown: Only appears when hovering "My Posts" -->
                  <div
                    class="absolute top-0 left-full ml-2 w-48 bg-white rounded-lg shadow-lg p-3 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-hover:translate-x-0 transform -translate-x-2 transition duration-300 z-50">
                    <ul class="space-y-1 text-sm text-gray-600">
                      <li><a href="#" class="block hover:text-blue-600">Published</a></li>
                      <li><a href="#" class="block hover:text-blue-600">Archived</a></li>
                      <li><a href="#" class="block hover:text-blue-600">Analytics</a></li>
                    </ul>
                  </div>
                </div>
              </li>


              <!-- Other Direct Options -->
              <li><a href="#" class="block hover:text-blue-600">Create Post</a></li>
              <li><a href="#" class="block hover:text-blue-600">Drafts</a></li>

              <!-- Another Item with Side Panel -->
              <!-- Saved for Later with Subpanel (hover only on <a>) -->
              <li class="relative">
                <div class="group inline-block w-full">
                  <!-- Hoverable link -->
                  <a href="#" class="flex justify-between items-center hover:text-blue-600 w-full px-2 py-1">
                    Saved for Later
                    <svg class="w-4 h-4 ml-2 text-gray-400 group-hover:text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                  </a>

                  <!-- Side Panel (must be inside same group) -->
                  <div
                    class="absolute top-0 left-full ml-2 w-48 bg-white rounded-lg shadow-lg p-3 
             opacity-0 pointer-events-none 
             group-hover:opacity-100 group-hover:pointer-events-auto 
             group-hover:translate-x-0 transform -translate-x-2 
             transition duration-300 z-50">
                    <ul class="space-y-1 text-sm text-gray-600">
                      <li><a href="#" class="block hover:text-blue-600">Read Later</a></li>
                      <li><a href="#" class="block hover:text-blue-600">Bookmarks</a></li>
                    </ul>
                  </div>
                </div>
              </li>



              <!-- Simple Link -->
              <li><a href="#" class="block hover:text-blue-600">Popular Tags</a></li>
            </ul>
          </div>
        </div>


        <!-- Language Selector -->
        <div class="relative">
          <button @click="showLang = !showLang" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 2a1 1 0 00-1 1v3h2V3a1 1 0 00-1-1zm-7 8a7 7 0 1114 0 7 7 0 01-14 0zm7-5a5 5 0 100 10 5 5 0 000-10z" />
            </svg>
            <span>Language</span>
          </button>
          <div x-show="showLang" @click.away="showLang = false" class="absolute top-full mt-2 w-32 bg-white border rounded shadow p-2 text-sm">
            <a href="#" class="block hover:text-blue-600">English</a>
            <a href="#" class="block hover:text-blue-600">Hindi</a>
            <a href="#" class="block hover:text-blue-600">Spanish</a>
          </div>
        </div>
      </div>


      <!-- New Dropdowns: Services, Tools, Explore -->
      <div class="flex items-center mx-6 gap-6">
        <template x-for="(menu, index) in [{ label: 'Services', icon: '🔧', options: ['SEO Services', 'Write for Us', 'Consulting'] }, { label: 'Tools', icon: '🛠', options: ['Post Builder', 'Analytics', 'Image Optimizer'] }, { label: 'Explore', icon: '🌐', options: ['Most Popular', 'Trending', 'AI Tools'] }]">
          <div class="relative group" :class="'group-' + menu.label" @mouseenter="window['show' + menu.label] = true" @mouseleave="window['show' + menu.label] = false">
            <button class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
              <span x-text="menu.icon"></span>
              <span x-text="menu.label"></span>
            </button>
            <div x-show="window['show' + menu.label]" class="absolute left-0 top-full mt-2 w-48 bg-white shadow-lg rounded-lg p-3 z-40" @mouseenter="window['show' + menu.label] = true" @mouseleave="window['show' + menu.label] = false">
              <template x-for="option in menu.options">
                <a href="#" class="block px-2 py-1 text-sm text-gray-700 hover:text-blue-600 flex items-center gap-2">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="1.5" />
                  </svg>
                  <span x-text="option"></span>
                </a>
              </template>
            </div>
          </div>
        </template>
      </div>

      <!-- Center: Expandable Search Bar  --//mx-6 i removed-->
      <!-- Header Search Bar with Category Dropdown -->
      <div class="relative flex  items-center bg-white rounded-full border border-gray-300 shadow-sm px-2 py-1 w-full max-w-full sm:max-w-md md:max-w-xl group transition-all duration-300 ease-in-out">

        <!-- Category Dropdown -->
        <!-- Category Dropdown (Improved for hover + accessibility) -->
        <div
          class="relative"
          x-data="{ showCategories: false }"
          @mouseenter="showCategories = true"
          @mouseleave="showCategories = false">
          <!-- Button -->
          <button
            @click="showCategories = !showCategories"
            class="flex items-center gap-1 text-sm text-black-700 bg-grey-200 px-3 py-1 hover:text-blue-600 focus:outline-none"
            aria-haspopup="true"
            aria-expanded="false">
            <span class="whitespace-nowrap">All</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          <!-- Dropdown Menu -->
          <div
            x-show="showCategories"
            x-transition
            class="absolute left-0 top-full mt-1 w-56 bg-white max-h-72 overflow-y-auto shadow-lg rounded-lg border z-50 text-sm">
            <ul class="py-1">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">All Categories</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Technology</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Programming</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Lifestyle</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">News</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Business</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Health</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Travel</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Finance</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Education</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Science</a></li>
            </ul>
          </div>
        </div>


        <!-- Input Box -->
        <!-- <input
          type="text"
          placeholder="Search ApexPlanet..."
          class="flex-1 px-3 py-2 text-sm rounded-full focus:outline-none focus:ring-0 bg-transparent placeholder-gray-400" /> -->

        <!-- 🔍 Search Input (no icon) -->
        <div x-data="liveSearch()" class="relative w-full max-w-xs text-sm">
          <input
            type="text"
            x-model="query"
            @input.debounce.300ms="fetchSuggestions"
            @keydown.arrow-down.prevent="moveDown"
            @keydown.arrow-up.prevent="moveUp"
            @keydown.enter.prevent="select()"
            placeholder="Search ApexPlanet..."
            class="w-full px-4 py-2 rounded-full bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400 shadow-sm transition-all duration-200"
            autocomplete="off" />

          <!-- 🔽 Dropdown Suggestions -->
          <div
            x-show="suggestions.length > 0 || message"
            x-transition
            class="absolute left-0 right-0 mt-1 bg-white border border-gray-300 rounded-lg shadow-lg z-50 overflow-hidden">
            <ul>
              <template x-for="(item, index) in suggestions" :key="item.id">
                <li>
                  <a
                    :href="item.url"
                    @click.prevent="select(item)"
                    :class="{
              'bg-blue-100 text-blue-800 font-medium': index === selectedIndex,
              'text-gray-700': index !== selectedIndex
            }"
                    class="block px-4 py-2 hover:bg-gray-100 transition-all duration-150"
                    x-text="item.title"></a>
                </li>
              </template>
            </ul>
            <div x-show="message" class="px-4 py-2 text-sm text-gray-500 italic" x-text="message"></div>
          </div>
        </div>








        <!-- Search Button     transition-color changed-->
        <button class="ml-2 bg-orange-200 hover:bg-orange-500 transition-all duration-300 rounded p-2 group">
          <!-- transition-transform   removed from class -bleow z conflicting-->
          <svg
            class="w-5 h-5 text-[#5C4033] group-hover:text-blue-600 group-hover:animate-spin duration-300"

            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10 17a7 7 0 100-14 7 7 0 000 14z" />
          </svg>
        </button>





      </div>






      <!-- Right: Contact, Cart, Account, Dark mode -->
      <div class="flex items-center mx-6 gap-6">

        <!-- Contact Dropdown -->
        <div class="relative">
          <button @click="showContact = !showContact" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3.6 7.59-1.35 2.45A1 1 0 008 17h10a1 1 0 001-1v-1H8.42a1 1 0 01-.96-.74L7 12h11a1 1 0 001-.8l1-5A1 1 0 0019 5H6.21L5.27 3H3z" />
            </svg>
            <span>Contact</span>
          </button>
          <div x-show="showContact" @click.away="showContact = false" class="absolute right-0 top-full mt-2 bg-white shadow-md border rounded-lg p-3 text-sm space-y-2">
            <a href="#" class="flex items-center gap-2 hover:text-blue-600">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M3 5a1 1 0 011-1h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5z" />
              </svg>
              <span>Email Us</span>
            </a>
            <a href="#" class="flex items-center gap-2 hover:text-blue-600">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M3 5h2l3.6 7.59L7.16 15H18a1 1 0 001-1V5H3z" />
              </svg>
              <span>Call Us</span>
            </a>
          </div>
        </div>

        <!-- Cart Link -->
        <a href="/views/cart.php" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4" />
          </svg>
          <span>Cart</span>
        </a>

        <!-- Account Dropdown (preserve original) -->
        <div class="relative">
          <button @click="showAccount = !showAccount" class="flex items-center gap-1 text-sm text-gray-700 hover:text-blue-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path d="M5.121 17.804A9 9 0 1112 21a8.963 8.963 0 01-6.879-3.196z" />
            </svg>
            <span>Account</span>
          </button>
          <div x-show="showAccount" @click.away="showAccount = false" class="absolute right-0 mt-2 w-72 bg-white border rounded shadow-lg p-4 text-sm z-50">
            <div class="flex justify-between mb-2">
              <button class="bg-yellow-400 px-4 py-1 rounded hover:bg-yellow-300 text-sm font-medium"><a href="/views/auth/login.php">Sign In</a></button>
              <span class="text-xs text-gray-500 self-center">New customer? <a href="/views/auth/signup.php" class="text-blue-600">Start here</a></span>
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