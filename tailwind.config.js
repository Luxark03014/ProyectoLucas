/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
        colors: {
            'rojo-avannubo': '#B60000',
            'gris-claro': '#E5E7EB',
            'blanco': 'f8f8f8',

        },
      extend: {},
    },
    plugins: [],
  }
  