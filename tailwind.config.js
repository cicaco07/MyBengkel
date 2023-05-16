/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#0F172A',
        'purple' : '#B3C5EF',
        'secondary' : '#1E293B',
        'dark-purple' : '#818CF8',
        'warning' : '#F4D35E',
        'table-head' : '#2E2F5B',
        'success' : '#2DD4BF',

      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

