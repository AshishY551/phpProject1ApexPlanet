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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body class="bg-gray-100 text-gray-800">


    <!-- Althogh responsive code for desktop (responsive) but mobile and  tablet  is also there seperately but do to some issues it is not working properly . I will adress it later -->
    <!-- sections/left-sidebar.php -->
    <div x-data="{ openMobile: false , openTablet: null }" class="z-40">
        <div>
            <!-- ✅ MOBILE ONLY: Full-screen overlay category list -->
            <!-- ✅ MOBILE-ONLY CATEGORY DROPDOWN PANEL -->
            <div class="lg:hidden fixed top-16 left-0 w-full z-50">

                <!-- Toggle Button -->
                <div class="bg-white border-b border-gray-200 shadow px-4 py-2">
                    <button
                        @click="openMobile = !openMobile"
                        class="w-full flex items-center justify-between px-4 py-2 bg-blue-600 text-white rounded-md">
                        <span>Select Category</span>
                        <svg class="w-5 h-5 transform transition-transform duration-300"
                            :class="{ 'rotate-180': openMobile }"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>

                <!-- Slide-out Dropdown Panel -->
                <div
                    x-show="openMobile"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-x-full"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-full"
                    @click.away="openMobile = false"
                    @mouseleave.window="openMobile = false"
                    class="absolute top-full left-0 w-full max-h-[300px] h-auto overflow-y-auto bg-white shadow-xl z-50 border-t border-gray-200 px-4 py-4 text-sm text-gray-700">

                    <!-- ✅ Cloned Desktop Structure (simplified for mobile) -->
                    <div class="space-y-4">

                        <!-- Section: Categories -->
                        <div>
                            <h2 class="font-semibold text-gray-800 mb-2">📂 Categories</h2>
                            <ul class="space-y-1">
                                <li class="font-medium flex items-center gap-2">
                                    <span class="text-lg">💻</span>
                                    <span>Technology & Innovation</span>
                                </li>
                                <ul class="ml-6 mt-1 space-y-1 text-gray-600">
                                    <li class="flex items-center gap-2">
                                        <span class="text-sm">🤖</span>
                                        <a href="#" class="hover:underline">Artificial Intelligence</a>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-sm">🚀</span>
                                        <a href="#" class="hover:underline">Startups & Trends</a>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-sm">📱</span>
                                        <a href="#" class="hover:underline">Gadgets & Devices</a>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-sm">📡</span>
                                        <a href="#" class="hover:underline">Mobile Tech</a>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-sm">⭐</span>
                                        <a href="#" class="hover:underline">Product Reviews</a>
                                    </li>
                                </ul>
                            </ul>
                        </div>

                        <!-- Section: Premium -->
                        <div>
                            <h2 class="font-semibold text-gray-800 mb-2">💎 Premium Posts</h2>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="accent-purple-600" />
                                <span>Members Only</span>
                            </label>
                        </div>

                        <!-- Section: Featured -->
                        <div>
                            <h2 class="font-semibold text-gray-800 mb-2">⭐ Featured Posts</h2>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="accent-blue-500" />
                                <span>Editor's Pick</span>
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <div>
            <!-- ✅ TABLET: Sticky thin icon-only panel with click-to-expand -->
            <aside class="hidden md:flex lg:hidden fixed top-16 left-0 h-[calc(100vh-4rem)] w-16 bg-white border-r border-gray-200 shadow z-40 flex-col items-center py-4 space-y-4">

                <template x-for="(category, index) in [
        { icon: '📝', name: 'All Posts' },
        { icon: '💻', name: 'Programming' },
        { icon: '📱', name: 'Mobile Reviews' },
        { icon: '📰', name: 'Tech News' },
        { icon: '💡', name: 'Tutorials' },
        { icon: '🎮', name: 'Gaming' },
        { icon: '🌐', name: 'AI & Web' },
        { icon: '✍️', name: 'Write for Us' }
      ]"
                    :key="index">

                    <div class="relative group">
                        <button
                            @click="openTablet === index ? openTablet = null : openTablet = index"
                            class="text-xl hover:text-blue-600 transition">
                            <span x-text="category.icon"></span>
                        </button>

                        <div
                            x-show="openTablet === index"
                            x-transition
                            class="absolute left-full top-0 ml-2 w-48 bg-white shadow-lg border rounded-md p-2 z-50">
                            <a href="#" class="block text-gray-700 hover:text-blue-600 text-sm" x-text="category.name"></a>
                        </div>
                    </div>

                </template>
            </aside>
        </div>


        <!-- ✅ DESKTOP: Sticky thin sidebar, expands on hover -->
        <div class="hidden lg:flex fixed top-16 left-0 h-[calc(100vh-4rem)] w-64 z-40">

            <!--  ✅ DESKTOP: Sticky thin sidebar -->
            <aside
                class="h-full hidden lg:flex fixed top-16 left-0 h-[calc(100vh-4rem)] w-64 bg-white border-r border-gray-200 shadow-md overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 z-40">

                <nav class="w-full h-full px-4 py-6 space-y-6 text-sm text-gray-700">

                    <!-- Section: Categories -->
                    <div>
                        <h2 class="font-semibold text-gray-800 mb-2">📂 Categories</h2>
                        <ul class="space-y-1">
                            <!-- Main Category: Tech -->
                            <li class="font-medium flex items-center gap-2">
                                <span class="text-lg">💻</span>
                                <span>Technology & Innovation</span>
                            </li>
                            <ul class="ml-6 mt-1 space-y-1 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <span class="text-sm">🤖</span>
                                    <a href="#" class="hover:underline">Artificial Intelligence</a>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-sm">🚀</span>
                                    <a href="#" class="hover:underline">Startups & Trends</a>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-sm">📱</span>
                                    <a href="#" class="hover:underline">Gadgets & Devices</a>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-sm">📡</span>
                                    <a href="#" class="hover:underline">Mobile Tech</a>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-sm">⭐</span>
                                    <a href="#" class="hover:underline">Product Reviews</a>
                                </li>
                            </ul>
                        </ul>
                    </div>

                    <!-- Section: Premium -->
                    <div>
                        <h2 class="font-semibold text-gray-800 mb-2">💎 Premium Posts</h2>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="accent-purple-600" />
                            <span>Members Only</span>
                        </label>
                    </div>

                    <!-- Section: Featured -->
                    <div>
                        <h2 class="font-semibold text-gray-800 mb-2">⭐ Featured Posts</h2>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="accent-blue-500" />
                            <span>Editor's Pick</span>
                        </label>
                    </div>

                    <!-- Section: Reading Time -->
                    <div>
                        <h2 class="font-semibold text-gray-800 mb-2">⏱️ Reading Time</h2>
                        <ul class="space-y-1">
                            <li class="flex items-center gap-2">
                                <input type="checkbox" class="accent-green-500" />
                                <span>&lt; 5 Minutes</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <input type="checkbox" class="accent-green-500" />
                                <span>5–10 Minutes</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Section: Popular Topics -->
                    <div>
                        <li class="font-medium flex items-center gap-2">
                            <span class="text-lg">🏷️</span>
                            <span>Popular Topics</span>
                        </li>

                        <ul class="ml-2 mt-0 space-y-1 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-sm">💰</span>
                                <a href="#" class="hover:underline">Personal Finance</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-sm">💪</span>
                                <a href="#" class="hover:underline">Health & Wellness</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-sm">🌍</span>
                                <a href="#" class="hover:underline">Travel Diaries</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-sm">🎯</span>
                                <a href="#" class="hover:underline">Career Advice</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Section: Popular Topics -->
                    <div>
                        <li class="font-medium flex items-center gap-2">
                            <span class="text-lg">🏷️</span>
                            <span>Popular Topics</span>
                        </li>

                        <ul class="ml-2 mt-0 space-y-1 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-sm">💰</span>
                                <a href="#" class="hover:underline">Personal Finance</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-sm">💪</span>
                                <a href="#" class="hover:underline">Health & Wellness</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-sm">🌍</span>
                                <a href="#" class="hover:underline">Travel Diaries</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-sm">🎯</span>
                                <a href="#" class="hover:underline">Career Advice</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </aside>



        </div>





</body>

</html>