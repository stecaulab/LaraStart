const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './public/**/*.js',

    ],

    theme: {
        extend: {
            fontFamily: {

            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
