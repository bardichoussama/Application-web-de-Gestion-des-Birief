// tailwind.config.js
module.exports = {
  // darkMode: 'class', // or 'media'
  content: [
    'node_modules/preline/dist/*.js',
    './index.php',
    './**/*.php',
    './view/formateur/dashboard.php',
    './view/formateur/formateurLogin.php',
    './view/formateur/briefs_list.php',
    './view/formateur/test.php',
    "./node_modules/flowbite/**/*.js"

  ],
  theme: {
    extend: {
      borderWidth: {
        '3': '3px'
      },
      
      fontFamily: {
        sans: ['Poppins', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
      },
      colors: {
        primary: '#3AAFA9',
        hoverprimary : '#48BEB8',
        secondary: '#DEF2F1',
        bodybackground: '#F6F5F3',
        yellobadge: '#FEF3C7',
      
      }
    },
  },
  plugins: [
    require('preline/plugin'),
    require('flowbite/plugin')
  ],
};
