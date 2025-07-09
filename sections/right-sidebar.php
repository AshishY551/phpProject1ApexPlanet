<div x-data="rightSidebar()" class="fixed top-16 right-16 h-[calc(100vh-4rem)] z-50 flex">

    <!-- ✅ Icon-only Vertical Sidebar -->
    <div class="bg-gray-900 text-white flex flex-col justify-between py-4 px-2 w-14 hover:w-14 transition-all duration-300 ease-in-out shadow-lg">
        <!-- Top icons -->
        <div class="space-y-4">
            <button @click="togglePanel('search')" :class="active === 'search' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                🔍
            </button>
            <button @click="togglePanel('connect')" :class="active === 'connect' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                🤝
            </button>
            <button @click="togglePanel('profile')" :class="active === 'profile' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                👤
            </button>
            <button @click="togglePanel('news')" :class="active === 'news' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                📰
            </button>
            <button @click="togglePanel('subscriptions')" :class="active === 'subscriptions' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                💎
            </button>
            <button @click="togglePanel('cart')" :class="active === 'cart' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                🛒
            </button>
        </div>

        <!-- Bottom icons -->
        <div class="space-y-4">
            <button @click="togglePanel('settings')" :class="active === 'settings' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                ⚙️
            </button>
            <button @click="togglePanel('auth')" :class="active === 'auth' ? 'bg-gray-700' : ''" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                🔐
            </button>
            <!-- Dark Mode Toggle -->
            <button @click="toggleDark()" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                <template x-if="dark">
                    🌙
                </template>
                <template x-if="!dark">
                    ☀️
                </template>
            </button>
        </div>
    </div>

    <!-- ✅ Expanded Panel -->
    <div x-show="active !== null" x-transition class="w-64 bg-white border-l border-gray-200 shadow-lg overflow-y-auto text-sm"
        @click.outside="active = null">
        <div class="flex justify-between items-center px-4 py-3 border-b font-semibold text-gray-700">
            <span x-text="panelTitle()"></span>
            <button @click="active = null" class="text-gray-500 hover:text-red-600 text-xl">&times;</button>
        </div>
        <div class="p-4 space-y-2">
            <!-- Dynamic Content -->
            <template x-if="active === 'search'">
                <div>
                    <input type="text" placeholder="Search people..." class="w-full border rounded px-2 py-1">
                </div>
            </template>

            <template x-if="active === 'connect'">
                <p>Connect with people or communities.</p>
            </template>

            <template x-if="active === 'profile'">
                <p>View or edit your profile.</p>
            </template>

            <template x-if="active === 'news'">
                <p>Latest news and updates here.</p>
            </template>

            <template x-if="active === 'subscriptions'">
                <p>Your current plans, upgrade options, etc.</p>
            </template>

            <template x-if="active === 'cart'">
                <p>Items in your shopping cart.</p>
            </template>

            <template x-if="active === 'settings'">
                <p>Platform preferences, theme, and more.</p>
            </template>

            <template x-if="active === 'auth'">
                <p><a href="/login.php" class="text-blue-600 hover:underline">Login</a> / <a href="/logout.php" class="text-red-600 hover:underline">Logout</a></p>
            </template>
        </div>
    </div>
</div>

<!-- ✅ Alpine Script -->
<script>
    function rightSidebar() {
        return {
            active: null,
            dark: false,

            togglePanel(panel) {
                this.active = this.active === panel ? null : panel;
            },

            panelTitle() {
                switch (this.active) {
                    case 'search':
                        return 'Find People';
                    case 'connect':
                        return 'Connect';
                    case 'profile':
                        return 'Your Profile';
                    case 'news':
                        return 'News';
                    case 'subscriptions':
                        return 'Subscriptions';
                    case 'cart':
                        return 'Cart';
                    case 'settings':
                        return 'Settings';
                    case 'auth':
                        return 'Login / Logout';
                    default:
                        return '';
                }
            },

            toggleDark() {
                this.dark = !this.dark;
                document.documentElement.classList.toggle('dark', this.dark);
            }
        }
    }
</script>