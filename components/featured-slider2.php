<!-- components/featured-slider.php -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="w-full max-w-6xl mx-auto py-8 px-4">
    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-center text-gray-800">
        🌟 Featured Posts - by featured slider-2
    </h2>

    <div class="swiper featuredSwiper rounded-2xl overflow-hidden shadow-md">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide bg-white p-6">
                <h3 class="text-xl font-semibold mb-2">Post Title 1</h3>
                <p class="text-gray-600">A short summary or preview of post 1...</p>
                <div>
                    <?php
                    // Simulated dynamic posts (replace with DB loop later)
                    $posts = [
                        ['id' => 1, 'title' => 'Building Scalable PHP Apps', 'author' => 'Laga', 'posted' => '2 hrs ago', 'views' => 123, 'comments' => 8, 'excerpt' => 'This guide helps you build...'],
                        // more posts...
                    ];

                    foreach ($posts as $post) {
                        include __DIR__ . '/../components/post-card.php';
                    }
                    ?>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide bg-white p-6">
                <h3 class="text-xl font-semibold mb-2">Post Title 2</h3>
                <p class="text-gray-600">A short summary or preview of post 2...</p>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide bg-white p-6">
                <h3 class="text-xl font-semibold mb-2">Post Title 3</h3>
                <p class="text-gray-600">A short summary or preview of post 3...</p>
            </div>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".featuredSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });
</script>