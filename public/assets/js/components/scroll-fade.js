// scroll-fade.js

document.addEventListener("DOMContentLoaded", () => {
  const animatedElements = document.querySelectorAll(".animate-enhanced-fade-in");

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("opacity-100", "translate-y-0", "scale-100");
        entry.target.classList.remove("opacity-0", "translate-y-8", "scale-95");
        obs.unobserve(entry.target); // Optional: animate only once
      }
    });
  }, {
    threshold: 0.1,
  });

  animatedElements.forEach(el => {
    // Setup initial state
    el.classList.add("opacity-0", "translate-y-8", "scale-95", "transition", "duration-700");
    observer.observe(el);
  });
});
