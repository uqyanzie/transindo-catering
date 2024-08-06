/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'catering-image' : "url('https://live-core-image-service.vivialplatform.net/images/143980/1920x480/norcross-ga-office-catering_cropped.LpSsFASedO.jpg')",
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    themes : ['bumblebee'],
  },
}