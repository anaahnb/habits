/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'black-900': '#09090A',
        'gray-700': '#18181B',
        'gray-600': '#202024',
        'gray-500': '#A1A1AA',
        'gray-400': '#7C7C8A',
        'gray-300': '#27272A',
        'gray-200': '#E1E1E6',
        'green-400': '#00FFB5',
      },
      width: {
        '128': '32rem',
      }
    },
  },
  plugins: [],
}

