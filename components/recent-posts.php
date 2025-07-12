<?php

/**
 * 🔽 Recent Posts Section
 * Location: sections/middle-content/recent-posts-section.php
 * Purpose: Display recent posts with responsive grid layout, animations, and ready for backend integration
 */
?>

<section id="recent-posts" class="w-full px-4 sm:px-6 lg:px-8 py-10 bg-white dark:bg-gray-950">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 dark:text-white">
                🕒 Recent Posts
            </h2>
            <!-- Future View All Link -->
            <a href="/views/post.php?filter=recent" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-400">
                View All →
            </a>
        </div>

        <!-- Posts Grid -->
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 animate-fadeInSlow">
            <?php
            // Placeholder: Loop through recent posts from backend
            for ($i = 1; $i <= 4; $i++) {
                include __DIR__ . '/post-card.php';
            }
            ?>
        </div>
    </div>
</section>

<!-- 🔧 Tailwind animation (if not already added globally) -->
<style>
    @keyframes fadeInSlow {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInSlow {
        animation: fadeInSlow 0.7s ease-out;
    }
</style>