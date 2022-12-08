/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./index.html",
      "./src/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
      extend: {
        fontFamily: {
            sans: ["Quicksand", "sans-serif"]
        },
        colors: {
        },
        fontSize: {
            xxs: '0.6875rem'
        },
        borderRadius: {
            '2.5xl': '1.25rem'
        },
        maxWidth: {
            xxs: '15rem'
        }
      },
    },
    plugins: [
        require('@tailwindcss/forms')
    ],
  }
