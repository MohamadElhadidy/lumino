/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors:{
                "beige" : "#fcf5ee"
            },
            fontFamily:{
                "jost" : ["Jost", "sans-serif"],
                "roboto" : ["Roboto Mono", "sans-serif"]
            }
        },
    },
    plugins: [],
}
