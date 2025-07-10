<!-- ✅ FULLY ADVANCED STICKY BOTTOM NAVIGATION BAR -->
<nav class="fixed bottom-0 left-0 w-full z-50 bg-white/20 dark:bg-black/20 backdrop-blur-xl border-t border-white/30 shadow-lg">
    <div class="max-w-screen-2xl mx-auto px-4 py-2">
        <ul id="bottomScrollBar" class="flex gap-6 overflow-x-auto whitespace-nowrap scroll-smooth px-2 animate-marquee group">
            <!-- Navigation Items (Looped for Infinite Scroll Illusion) -->
            <?php
            $items = [
                ["label" => "Home", "icon" => "home", "link" => "/views/home.php"],
                ["label" => "Explore", "icon" => "compass", "link" => "/views/explore.php"],
                ["label" => "Cart", "icon" => "shopping-cart", "link" => "/views/cart.php", "badge" => 3],
                ["label" => "Messages", "icon" => "message-circle", "link" => "/views/messages.php", "badge" => 5],
                ["label" => "Wishlist", "icon" => "heart", "link" => "/views/wishlist.php"],
                ["label" => "Track", "icon" => "map-pin", "link" => "/views/track.php"],
                ["label" => "Account", "icon" => "user", "link" => "/views/account.php"],
                ["label" => "Settings", "icon" => "settings", "link" => "/views/settings.php"],
                ["label" => "Install App", "icon" => "download", "link" => "#"],
            ];
            for ($i = 0; $i < 2; $i++):
                foreach ($items as $item):
                    $badge = isset($item['badge']) ? $item['badge'] : null;
            ?>
                    <li>
                        <a href="<?= htmlspecialchars($item['link']) ?>" class="relative flex flex-col items-center text-white hover:text-teal-300 transition duration-300">
                            <i data-lucide="<?= $item['icon'] ?>" class="w-6 h-6"></i>
                            <span class="text-xs mt-1"><?= htmlspecialchars($item['label']) ?></span>
                            <?php if ($badge): ?>
                                <span class="absolute top-0 right-0 bg-red-600 text-[10px] text-white rounded-full px-1.5 py-0.5 -translate-y-2 translate-x-2">
                                    <?= $badge ?>
                                </span>
                            <?php endif; ?>
                        </a>
                    </li>
            <?php endforeach;
            endfor; ?>
        </ul>
    </div>
</nav>

<!-- ✅ SCROLLING ANIMATION -->
<style>
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        display: inline-flex;
        animation: marquee 30s linear infinite;
    }

    #bottomScrollBar:hover {
        animation-play-state: paused;
        cursor: grab;
    }

    @media (prefers-color-scheme: dark) {
        nav {
            --tw-bg-opacity: 0.2;
            color: #f1f5f9;
        }
    }
</style>

<!-- ✅ ICON LIBRARY -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>

<!-- ✅ DARK MODE TOGGLE (OPTIONAL) -->
<button id="toggleTheme" class="fixed bottom-20 right-5 bg-white/20 dark:bg-black/30 backdrop-blur-xl p-2 rounded-full shadow-lg text-white">
    <i data-lucide="sun" id="themeIcon"></i>
</button>
<script>
    const btn = document.getElementById('toggleTheme');
    const icon = document.getElementById('themeIcon');
    btn.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        icon.setAttribute('data-lucide', icon.getAttribute('data-lucide') === 'sun' ? 'moon' : 'sun');
        lucide.createIcons();
    });
</script>

<!-- 
Worked on bottom slidebar improvement, all features are already present ie added before, but hower effect and semi-transparent effect is not working properly,moving forward. -->