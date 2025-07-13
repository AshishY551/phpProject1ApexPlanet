// Import Swiper core and required modules
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle'; // If you want this instead of CSS import above

// Initialize Swiper
const swiper = new Swiper('.swiper-container', {
  loop: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
