const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            'sm': '300px',
            'sm2xl': '650px',
            'md': '900px',
            'lg': '1020px',
            'xl': '1400px',
        },
        colors: {
            'dirty-white': '#f7f5f2',
            'gray-dirty-white': '#D9D4CC',
            'space-blue': '#111820',
            'light-space-blue': '#2C3D52',
            'custom-green': '#006A39',
        }
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
    ],
};
