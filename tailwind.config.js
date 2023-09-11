/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                primary: "#009949",
                secondary: "#F3C13E",
                accent: "#1D6740",
                neutral: {
                    "01": "#001524",
                    "02": "#31373A",
                    "03": "#70797E",
                    "04": "#90979B",
                    "05": "#D7DAE2",
                    "06": "#F0F0F0",
                    "07": "#F7F7F7",
                    "08": "#475569",
                    "09": "#1E293B",
                    10: "#94A3B8",
                    11: "#8CA799",
                    12: "#1FA860",
                    13: "#009045",
                    14: "#F7941D",
                    15: "#EFEFEF"
                },
                error: "#F13327",
            },
            container: {
                center: true,
                padding: "0.9375rem",
                screens: {
                    sm: "640px",
                    md: "768px",
                    lg: "1024px",
                    xl: "1280px",
                },
            },
            screens: {
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
            },
            spacing: {
                "30x": "30px",
            },
            borderRadius: {
                "5x": "5px",
            },
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
                'libre':['Libre Franklin','sans-serif']
            },
        },
    },
    //   plugins: [],
    plugins: [require("tw-elements/dist/plugin.cjs")]
};
