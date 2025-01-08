/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      container: {
        padding: {
          DEFAULT: '1rem',
          sm: '2rem',
          lg: '4rem',
          xl: '5rem',
          '2xl': '6rem',
        },
      },
      colors: {
        "primary": "var(--primary)",
        "secondary": "var(--secondary)",
        "tertiary": "var(--tertiary)",
        "accent": "var(--accent)",
      }
    },
  },
  plugins: [],
}