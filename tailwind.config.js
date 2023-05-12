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
        'secondary' : '#B3C5EF'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

