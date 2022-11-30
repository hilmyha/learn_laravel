/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    
    screens: {
      'android': '480px',      
      'tablet': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      '3xl': '1920px',
    },
    fontSize: {
      // headings
      h1: ['64px', {
        lineHeight: '83px',
      }],
      h2: ['44px', {
        lineHeight: '57px',
      }],
      h3: ['24px', {
        lineHeight: '31px',
      }],
      h4: ['20px', {
        lineHeight: '26px',
      }],
      h5: ['18px', {
        lineHeight: '23px',
      }],
      h6: ['16px', {
        lineHeight: '20px',
      }],
      h7: ['14px', {
        lineHeight: '18px',
      }],

      // label
      l1: ['18px', {
        lineHeight: '23px',
      }],
      l2: ['16px', {
        lineHeight: '20px',
      }],
      l3: ['14px', {
        lineHeight: '18px',
      }],
      
      // paragraph
      p1: ['18px', {
        lineHeight: '32px',
      }],
      p2: ['16px', {
        lineHeight: '29px',
      }],
      p3: ['14px', {
        lineHeight: '25px',
      }],

    },
    fontFamily: {
      poppins: ['Poppins', 'sans-serif']
    },
    fontWeight: {
      thin: '100',
      extralight: '200',
      light: '300',
      normal: '400',
      medium: '500',
      semibold: '600',
      bold: '700',
      extrabold: '800',
      black: '900',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '16px'
      },
    },
    extend: {
      colors:{
        'primary': {
          50: '#DCE7E6',
          100: '#C5D6D5',
          200: '#A8C2C0',
          300: '#8BAEAB',
          400: '#6E9996',
          500: '#518581'
        },
        'secondary': {
          50: '#FFF0D9',
          100: '#FFE5BF',
          200: '#FFD89F',
          300: '#FFCC7F',
          400: '#FFBF5F',
          500: '#FFB23F'
        },
        'title': {
          50: '#FFFFFF',
          100: '#B1B1B0',
          200: '#8A8988',
          300: '#636260',
          400: '#3C3B39',
          500: '#151411'
        },
        'paragraph': {
          50: '#EFEFF0',
          100: '#E4E4E6',
          200: '#D7D6DA',
          300: '#CAC8CE',
          400: '#BCBBC1',
          500: '#AFADB5'
        },
        
      },
    },
  },
  plugins: [],
}
