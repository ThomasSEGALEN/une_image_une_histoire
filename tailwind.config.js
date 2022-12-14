const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}',
        './node_modules/tw-elements/dist/js/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                subtitle: ['Subtitle', 'sans-serif'],
                text: ['Text', 'sans-serif'],
            },
            colors: {
                dark: '#343434',
                gold: '#e6b31e',
                light: '#fcfaf1',
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tw-elements/dist/plugin')
    ],
};
