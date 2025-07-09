<!-- sections/right-sidebar.php -->
<div x-data="{ open: false }"
    @mouseenter="open = true"
    @mouseleave="open = false"
    class="sticky top-16 h-[calc(100vh-4rem)] bg-white shadow-md border-l border-gray-200 z-30 transition-all duration-300"
    :class="{ 'w-64': open, 'w-12': !open }">

    <!-- Sidebar Items -->
    <nav class="flex flex-col h-full space-y-2 py-4 px-2 text-sm overflow-y-auto">

        <!-- Title -->
        <div class="text-gray-700 font-semibold mb-3 pl-2" x-show="open">
            Quick Links
        </div>

        <!-- Icon + Text Links -->
        <a href="/search/find-people.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>🔍</span>
            <span x-show="open">Find People</span>
        </a>

        <a href="/connect.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>🤝</span>
            <span x-show="open">Connect</span>
        </a>

        <a href="/profile.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>👤</span>
            <span x-show="open">Your Profile</span>
        </a>

        <a href="/connections.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>🔗</span>
            <span x-show="open">Connections</span>
        </a>

        <a href="/news.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>📰</span>
            <span x-show="open">News</span>
        </a>

        <a href="/subscriptions.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>💎</span>
            <span x-show="open">Subscriptions</span>
        </a>

        <a href="/cart.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>🛒</span>
            <span x-show="open">Cart</span>
        </a>

        <a href="/payments.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>💳</span>
            <span x-show="open">Payments</span>
        </a>

        <a href="/auth/logout.php" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-1 rounded-md">
            <span>🔐</span>
            <span x-show="open">Login / Logout</span>
        </a>

    </nav>
</div>