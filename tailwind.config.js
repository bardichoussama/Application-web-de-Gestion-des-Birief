/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './**/*.php',
    './view/formateur/dashboard.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
      },

      colors : {

        primary : '#3AAFA9',
        secondary : '#DEF2F1',
        bodybackground : '#F3F3F3' ,
        yellobadge : '#FEF3C7'

        
      }

    },
  },
  plugins: [
    require('tailwindcss')('./tailwind-full.config.js')
  ],
};
