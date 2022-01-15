const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
            fontSize: {
                'xs': '.75rem',
                'sm': '.875rem',
                'tiny': '.875rem',
                'base': '1rem',
                'lg': '1.125rem',
                'xl': '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.875rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '4rem',
                '7xl': '5rem',
            }
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'mtom-orange': '#F2C933',
                'mtom-blue': '#101927',
                'mtom-blue-2': '#010d1c',
                'mtom-dark-blue': '#0b141e',
                'mtom-gray': '#2d3744',
                'gray-50': '#f9f9f9',
            },
            lineHeight: {
                'title-1': '3.5rem',
            },
            fontSize: {
                'lg+': '1.188rem',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            outline: ["focus"],
            transform: ['hover'],
            borderWidth: ['hover', 'focus'],
            backgroundColor: ['checked'],
            borderColor: ['checked'],
            saturate: ['hover', 'focus'],
            animation: ['hover', 'focus'],
        },
    },

    // plugins: [require('@tailwindcss/forms')],
};

