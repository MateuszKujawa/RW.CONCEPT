/** @type {import('tailwindcss').Config} */
export const content = ["./dist/*.{html,js}"];
export const theme = {
  extend: {
    fontFamily: {
      raleway: ['Raleway'],
      roboto: ['Roboto'],
      poppins: ['poppins']
    },
    colors: {
      'darkgray': '#0F0F0F',
    },
    extend: {
      backgroundImage: {
        'about-background-image': "url('/images/backgrounds/bg-about2.jpg')",
      },
    },
  },
  variants: {},
  plugins: [],
};
