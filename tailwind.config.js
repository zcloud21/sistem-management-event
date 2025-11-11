import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class', // Enable dark mode with class strategy
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'soft-shadow': '5px 5px 10px rgba(0, 0, 0, 0.1)',
            },
            colors: {
                'primary': '#012A4A',
                'accent': {
                    'green': '#27AE60',
                },
                'background': {
                    'light': '#F7F7F7',
                    'dark': '#1A1A1A',
                },
                'surface': {
                    'light': '#FFFFFF',
                    'dark': '#2C2C2C',
                },
                'text': {
                    'primary': '#1A1A1A',
                    'secondary': '#666666',
                    'light': '#FFFFFF',
                },
            },
        },
    },

    plugins: [forms],
};