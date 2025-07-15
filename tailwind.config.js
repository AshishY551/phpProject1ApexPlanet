/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./views/**/*.php",
    "./components/**/*.php",
    "./sections/**/*.php",
    "./public/**/*.html",
    "./src/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [],


  // adding extra css for header of middle-content section
  extend: {
  animation: {
    'fade-in': 'fadeIn 1s ease-out',
    'slide-up': 'slideUp 0.8s ease-out',
    'slide-down': 'slideDown 0.8s ease-out'
  },
  keyframes: {
    fadeIn: {
      '0%': { opacity: 0 },
      '100%': { opacity: 1 }
    },
    slideUp: {
      '0%': { opacity: 0, transform: 'translateY(30px)' },
      '100%': { opacity: 1, transform: 'translateY(0)' }
    },
    slideDown: {
      '0%': { opacity: 0, transform: 'translateY(-30px)' },
      '100%': { opacity: 1, transform: 'translateY(0)' }
    }
  }
}

}


