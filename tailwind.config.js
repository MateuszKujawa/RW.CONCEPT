/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        raleway: ['Raleway'],
        roboto: ['Roboto'],
        poppins: ['poppins']
      },
      colors: {
        'darkgray': '#0F0F0F',
      }
    },
  },
  plugins: [],
}
