module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {
            fontFamily: {
                h1: ["Righteous, cursive"],
                p: ["Abel, sans-serif"],
            },
        },
    },
    variants: {},
    plugins: [require("@tailwindcss/ui")],
};
