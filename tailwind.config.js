// tailwind.config.js
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {
        keyframes: {
          colorShift: {
            '0%, 100%': { backgroundColor: '#6B46C1' }, // Purple
            '25%': { backgroundColor: '#9F7AEA' }, // Light Purple
            '50%': { backgroundColor: '#D6BCFA' }, // Even Lighter Purple
            '75%': { backgroundColor: '#805AD5' }, // Slightly Different Purple
          },
        },
        animation: {
          colorShift: 'colorShift 5s infinite',
        },
      },
    },
    plugins: [],
  }
  