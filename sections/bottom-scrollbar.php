<!-- ✅ BACKGROUND SECTION (same as before)  bg-blue-500-->
<div class="w-full fixed bottom-0 left-0 z-50 bg-black backdrop-blur-lg border-t border-gray-500 shadow-inner overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-2 py-1">
        <div id="bottomScrollBarWrapper" class="relative w-full overflow-hidden">
            <div
                id="bottomScrollBar"
                class="flex flex-row-reverse gap-6 animate-loop-scroll whitespace-nowrap direction-rtl">
                <?php
                // Repeat the items twice for seamless loop
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
                    ["label" => "Pay",       "icon" => "credit-card",  "link" => "#"],

                    ["label" => "Cart",      "icon" => "shopping-cart", "link" => "/views/cart.php", "badge" => "0"],
                    ["label" => "Wishlist",  "icon" => "heart",        "link" => "/views/wishlist.php"],
                    ["label" => "Track",     "icon" => "map-pin",      "link" => "/views/track.php"]
                ];

                // Repeat list twice for loop illusion
                for ($r = 0; $r < 2; $r++):
                    foreach ($bottomItems as $item):
                        $badge = isset($item['badge']) && $item['badge'] > 0 ? $item['badge'] : null;
                        $highlight = isset($item['highlight']) && $item['highlight'] === true;
                ?>
                        <a href="<?= htmlspecialchars($item['link']) ?>"
                            class="relative flex flex-col items-center justify-center px-4 py-2 transition duration-300 shrink-0
              <?= $highlight
                            ? 'bg-teal-600 text-white rounded-md shadow-md'
                            : 'hover:bg-white/10 hover:scale-105 hover:shadow-md rounded-xl text-white' ?>">
                            <i data-lucide="<?= $item['icon'] ?>" class="w-6 h-6 stroke-[1.8] text-white"></i>
                            <span class="text-xs mt-1 text-white font-semibold"><?= htmlspecialchars($item['label']) ?></span>

                            <?php if ($badge): ?>
                                <span class="absolute top-0 right-0 text-white text-[10px] bg-red-600 rounded-full w-4 h-4 flex items-center justify-center translate-x-2 -translate-y-1">
                                    <?= htmlspecialchars($badge) ?>
                                </span>
                            <?php endif; ?>
                        </a>
                <?php
                    endforeach;
                endfor;
                ?>
            </div>
        </div>
    </div>
</div>

<!-- ✅ LOOPING SCROLL STYLES -->
<style>
    @keyframes loop-scroll {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(50%);
        }
    }

    .animate-loop-scroll {
        animation: loop-scroll 15s linear infinite;
    }

    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #bottomScrollBarWrapper {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }

    #bottomScrollBar:hover {
        animation-play-state: paused;
        cursor: grab;
    }
</style>

<!-- ✅ LUCIDE ICONS -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>

<!-- 
Worked on bottom slidebar improvement, all features are already present ie added before, but hower effect and semi-transparent effect is not working properly,moving forward. -->