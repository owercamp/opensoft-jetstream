import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
              'indigo': {
                50: '#edfbff',
                100: '#d6f4ff',
                200: '#b5edff',
                300: '#83e4ff',
                400: '#48d3ff',
                500: '#1eb6ff',
                600: '#0699ff',
                700: '#0082f9',
                800: '#0865c5',
                900: '#0d579b',
                950: '#0e355d'
              }
            }
        },
    },

    plugins: [forms, typography,require('flowbite/plugin')],
};
