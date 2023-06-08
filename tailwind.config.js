module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
theme: {
  extend: {
    boxShadow: {
      '3xl': '0px 4px 20px rgba(187, 23, 23, .3,);',
    },
    fontSize: {
      small: '0.80rem' ,
      normal: '0.975rem',
      '1lg': '1.150rem',
      '1xl': '1.3rem'
    },
    fontFamily: {
      'bebas': ['Bebas Neue'],
      'montserrat': ['Montserrat'],
    },
    spacing: {
      '30': '7.5rem',
      '70': 'calc(70vh * (var(--viewport-height) / 100))',
      '40': 'calc(40vh * (var(--viewport-height) / 100))',
      '29': '29.313rem',
      '50': '50%'

    },
    backgroundColor: theme => ({
      ...theme('colors'),
      'primary': '#3490dc',
      'secondary': '#ffed4a',
      'danger': '#860909',
     })
  },
  margin: {
    sm: '8px',
    md: '16px',
    lg: '24px',
    xl: '48px',
  },
  border: {
    'danger-darker': '#8a0000',
  }
},
plugins: [],
}
