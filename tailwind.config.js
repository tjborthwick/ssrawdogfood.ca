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
                'hero-about': "url('/images/dogs/about.png')",
                'hero-about-2': "url('/images/dogs/about-2.jpg')",
                'hero-benefits': "url('/images/dogs/benefits-of-raw-dog-food.jpg')",
                'hero-feeding': "url('/images/dogs/raw-diet-feeding-guidelines.jpg')",
                'hero-faq': "url('/images/dogs/raw-dog-food-faq.jpg')",
                'hero-contact': "url(/images/dogs/contact.jpg)",
            },

            fontSize: {
                '7xl': ['3.875rem', '1.175'],
                '6xl': ['3.5rem', '1.175'],
                '5xl': ['2.625rem', '1.175'],
                '4xl': ['2.25rem', '1.25em'],
                '3xl': '1.75rem',
                '2xl': ['1.5rem', '1.5em'],
                '2xl-b': ['1.5rem', '1.25em'],
                'xl': ['1.25rem', '1.5em'],
                'xl-b': ['1.25rem', '1.25em'],
                'lg': '1.125rem',
                'sm': ['0.9rem', '1.25em'],
                'xs': '0.875rem',
                'base15-sm': ['0.9375rem', '1.5em'],
                'base15-5xl': ['2.461rem', '1.175'],
                'base15-3xl': ['1.641rem', '1'],
                'base15-2xl': ['1.41rem', '1.5em'],
                'base15-xl': ['1.172rem', '1.5em'],
                'base15-lg': ['1.055rem', '1'],
            },

            screens: {
                'xs': '390px',
                '3xl': '1920px',
                '4xl': '2304px',
                '5xl': '2560px',
            },

            maxWidth: {
                'xxs': '14rem',
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
            'orange-100': '#ee8746',
            'orange-200': '#a83c24',
            'transparent': 'transparent',
        },

        fontFamily: {
            sans: ['Arial', 'Helvetica', 'sans-serif'],
            cubano: ['cubano', 'sans-serif'],
            roboto: ['Roboto', 'sans-serif'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
