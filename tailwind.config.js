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
          xs: '0',
          sm: '0',
          md: '0'
        },
      },
      fontFamily: {
      'sans': ['Dela Gothic One', 'sans-serif'],
      },
      // fontSize: {
      //   's': ['12px', '18px'],
      //   'm': ['14px', '22px'],
      //   'l': ['16px', '26px'],
      //   'xl': ['18px', '28px'],
      //   '2xl': ['20px', '30px'],
      //   '3xl': ['24px', '34px'],
      //   '4xl': ['30px', '40px'],
      //   '5xl': ['36px', '46px'],
      //   '6xl': ['42px', '52px'],
      //   '7xl': ['48px', '58px'],
      // },
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
