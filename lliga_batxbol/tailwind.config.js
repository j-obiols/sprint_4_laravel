/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    //Aquí escrivim les modificacions que volem fer a les classes
    //Cada vegada que ho canviem hem de compilar
    container: {
      center:true
    },
    
    extend: {spacing: {
      '128': '32rem',
    }}
  },
  plugins: [],
}

