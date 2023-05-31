/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/*.blade.php',
    './public/script/view/*.js',
    './public/script/**/*.js',
  ],
  theme: {
    extend: {
      
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}

