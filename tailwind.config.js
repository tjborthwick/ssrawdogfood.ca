const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            backgroundImage: {
                'hero-home': "url('/images/dogs/awesome-food-awesome-friends.jpg')",
            }
        },

        colors: {
            'grey-100': '#F2F2F2', // var-8
            'grey-200': '#B3B3B3', // var-9
            'grey-300': '#4D4D4D', // var-1
            'grey-400': '#231D1F', // var-2
            'red': '#AE2452',
            'purple': '#783784',
            'blue': '#2E68A8',
            'green': '#009385',
            'tan': '#BEA88B',
            'white': '#FFFFFF',
        },
        fontFamily: {
            sans: ['Arial', 'Helvetica', 'sans-serif'],
            cubano: ['cubano', 'sans-serif'],
            roboto: ['Roboto', 'sans-serif'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
