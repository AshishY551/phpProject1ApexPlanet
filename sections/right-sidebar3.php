<!-- sections/right-sidebar.php -->

<div
    x-data="rightSidebar()"
    class="relative z-50"
    :class="{ 'w-16': open, 'w-12': !open }"
    @keydown.window.escape="active = null">
    <!-- 🌐 Floating Open Button (Mobile Only) -->
    <button
        @click="mobileOpen = !mobileOpen"
        class="fixed bottom-4 right-4 z-50 md:hidden bg-blue-600 text-white rounded-full p-3 shadow-lg hover:bg-blue-700 transition"
        x-show="!mobileOpen"
        x-transition>
        ☰
    </button>

    <!-- 📱 Full Panel for Mobile -->

    <div
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-x-full"
        x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 translate-x-full"
        @click.outside="mobileOpen = false"
        class="fixed inset-0 flex justify-end md:hidden z-50">
        <div class="w-64 h-full bg-white shadow-lg border-l border-gray-200 flex flex-col">
            <div class="flex justify-between items-center px-4 py-3 border-b">
                <span class="font-semibold">Quick Links</span>
                <button @click="mobileOpen = false" class="text-xl font-bold text-gray-500 hover:text-red-500">&times;</button>
            </div>

            <div class="flex-1 overflow-y-auto text-sm p-4 space-y-3">
                <template x-for="item in items" :key="item.key">
                    <a :href="item.href" class="flex items-center space-x-2 hover:bg-gray-100 px-2 py-2 rounded-md">
                        <span x-text="item.icon"></span>
                        <span x-text="item.label"></span>
                    </a>
                </template>
            </div>
        </div>
    </div>

    <!-- 🔤️ Desktop Sidebar -->
    <div class="hidden md:flex fixed top-16 right-0 h-[calc(100vh-4rem)] z-40">
        <!-- Icon bar -->
        <div class="bg-gray-900 text-white flex flex-col justify-between py-4 px-2 w-14 transition-all duration-300 ease-in-out shadow-lg">
            <div class="space-y-4">
                <template x-for="item in items" :key="item.key">
                    <button @click="togglePanel(item.key)" :class="active === item.key ? 'bg-gray-700' : ''"
                        class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                        <span x-text="item.icon"></span>
                    </button>
                </template>
            </div>
            <!-- Dark mode -->
            <button @click="toggleDark()" class="w-full h-10 flex items-center justify-center rounded-md hover:bg-gray-700">
                <template x-if="dark">🌙</template>
                <template x-if="!dark">☀️</template>
            </button>
        </div>

        <!-- Expandable Panel -->
        <div x-show="active !== null" x-transition class="w-64 bg-white border-l border-gray-200 shadow-lg overflow-y-auto text-sm"
            @click.outside="active = null">
            <div class="flex justify-between items-center px-4 py-3 border-b font-semibold text-gray-700">
                <span x-text="panelTitle()"></span>
                <button @click="active = null" class="text-gray-500 hover:text-red-600 text-xl">&times;</button>
            </div>
            <div class="p-4 space-y-2">
                <template x-if="active === 'search'">
                    <input type="text" placeholder="Search people..." class="w-full border rounded px-2 py-1">
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
</div>

<!-- Alpine Component -->
<script>
    function rightSidebar() {
        return {
            active: null,
            mobileOpen: false,
            dark: false,
            items: [{
                    key: 'search',
                    icon: '🔍',
                    label: 'Find People',
                    href: '/search/find-people.php'
                },
                {
                    key: 'connect',
                    icon: '🤝',
                    label: 'Connect',
                    href: '/connect.php'
                },
                {
                    key: 'profile',
                    icon: '👤',
                    label: 'Profile',
                    href: '/profile.php'
                },
                {
                    key: 'news',
                    icon: '📰',
                    label: 'News',
                    href: '/news.php'
                },
                {
                    key: 'subscriptions',
                    icon: '💎',
                    label: 'Subscriptions',
                    href: '/subscriptions.php'
                },
                {
                    key: 'cart',
                    icon: '🛒',
                    label: 'Cart',
                    href: '/cart.php'
                },
                {
                    key: 'settings',
                    icon: '⚙️',
                    label: 'Settings',
                    href: '/settings.php'
                },
                {
                    key: 'auth',
                    icon: '🔐',
                    label: 'Auth',
                    href: '/auth/logout.php'
                }
            ],
            togglePanel(key) {
                this.active = this.active === key ? null : key;
            },
            panelTitle() {
                const item = this.items.find(i => i.key === this.active);
                return item ? item.label : '';
            },
            toggleDark() {
                this.dark = !this.dark;
                document.documentElement.classList.toggle('dark', this.dark);
            }
        }
    }
</script>