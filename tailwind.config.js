/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      "quicksand": "Quicksand",
      "roboto": "Roboto",
    },
    colors: {
      "black": "#000000",
      "black2": "#082032",
      "black3": "#334756",


      "orange": "#F0A500",
      "orange1": "#FF9843",
      "orange2": "#FF7700",


      "white": "white",
      "white2": "#F5F5F5",


      "green1": "#BED754",



      "redx": "#FA7070",
      "red": "#BE3144",
    }
  },
  plugins: [],
}