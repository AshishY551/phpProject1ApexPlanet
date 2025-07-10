<!-- sections/bottom-scrollbar.php -->

<div class="w-full fixed bottom-0 left-0 z-50 bg-[#6d6e72] backdrop-blur-xl border-t border-gray-500 shadow-inner overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-2 py-1">
        <div
            id="bottomScrollBar"
            class="flex gap-6 overflow-x-auto no-scrollbar animate-scroll-left-to-right items-center py-2 px-1">
            <?php
            $bottomItems = [
                ["label" => "About",     "icon" => "users",        "link" => "/views/about.php"],
                ["label" => "Delivery",  "icon" => "truck",        "link" => "/views/delivery.php"],
                ["label" => "Privacy",   "icon" => "user",         "link" => "/views/privacy.php"],
                ["label" => "Terms",     "icon" => "file-text",    "link" => "/views/terms.php"],
                ["label" => "Contact",   "icon" => "mail",         "link" => "/views/contact.php"],
                ["label" => "Account",   "icon" => "user-circle",  "link" => "/views/account.php"],
                ["label" => "Sign In",   "icon" => "log-in",       "link" => "/views/signin.php", "highlight" => true],
                ["label" => "Cart",      "icon" => "shopping-cart", "link" => "/views/cart.php", "badge" => "0"],
                ["label" => "Wishlist",  "icon" => "heart",        "link" => "/views/wishlist.php"],
                ["label" => "Track",     "icon" => "map-pin",      "link" => "/views/track.php"],
                ["label" => "Help",      "icon" => "help-circle",  "link" => "/views/help.php"],
                ["label" => "Install",   "icon" => "download",     "link" => "#"],
                ["label" => "iOS",       "icon" => "apple",        "link" => "#"],
                ["label" => "Android",   "icon" => "play",         "link" => "#"],
                ["label" => "Pay",       "icon" => "credit-card",  "link" => "#"]
            ];

            foreach ($bottomItems as $item):
                $badge = isset($item['badge']) && $item['badge'] > 0 ? $item['badge'] : null;
                $highlight = isset($item['highlight']) && $item['highlight'] === true;
            ?>
                <a href="<?= htmlspecialchars($item['link']) ?>"
                    class="relative flex flex-col items-center justify-center px-3 py-1 transition duration-300 shrink-0
           <?= $highlight ? 'bg-teal-600 text-white rounded-md' : 'hover:-translate-y-1 hover:scale-105 text-white' ?>">
                    <i data-lucide="<?= $item['icon'] ?>" class="w-6 h-6 stroke-[1.8] text-white"></i>
                    <span class="text-xs mt-1 text-white"><?= htmlspecialchars($item['label']) ?></span>

                    <?php if ($badge): ?>
                        <span class="absolute top-0 right-0 text-white text-[10px] bg-red-600 rounded-full w-4 h-4 flex items-center justify-center translate-x-2 -translate-y-1">
                            <?= htmlspecialchars($badge) ?>
                        </span>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Scroll Animation & Styles -->
<style>
    @keyframes scroll-left-to-right {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .animate-scroll-left-to-right {
        animation: scroll-left-to-right 35s linear infinite;
    }

    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #bottomScrollBar:hover {
        animation-play-state: paused;
        cursor: grab;
    }
</style>

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>