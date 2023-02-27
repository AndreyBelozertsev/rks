/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  darkMode: 'media',
  theme: {
      screens: {
        'xs': '375px',
        'sm': '540px',
        'md': '720px',
        'lg': '960px',
        'xl': '1140px',
        '2xl': '1550px',
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '20px',
          xs: '16px',
          sm: '16px',
        },
      },
      fontFamily: {
      'sans': ['Dela Gothic One', 'sans-serif'],
      },

      extend: {
        spacing: {
          '128': '128px',
        },
        colors: {
            brand: "#282C35",
            accent: "#CBE857",
            onAccent: "#AEED42",
            sunnyLime: "#d8ee7f",
            wildSand: "#F0F0F0",
            brandWhite: "#FBFBFB",
            success: "#18762e",
            error: "#c30f00",
            warning: "#ec8e00",
            brandGrey:{
              10: '#E9E9EC',
              20: '#D5D5D6',
              40: '#AAABAD',
              60: '#808185',
              80: '#55575C',
              100: '#404247'
            }          
        },
      },
  },
  variants: {
      extend: {},
  },
  plugins: []
}
