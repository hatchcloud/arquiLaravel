/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#FFFFFF',
                'zafiro': {
                  400: '#515DE1',
                  500: '#2534D9'
                },
                'dark': {
                  100: '#F2F2F3',
                  900: '#202022',
                  950: '#19191A'
                },
            }
        }

    },
    plugins: [],
  }
