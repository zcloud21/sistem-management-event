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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Warm Beige Palette - Light Mode
                'warm-beige': {
                    50: '#FDF8F4',
                    100: '#FBF1EA',
                    200: '#F9E9DF',
                    300: '#F6E2D5',
                    400: '#F2DFD3',
                    500: '#EEDBCB',
                    600: '#D9C5B3',
                    700: '#C4AE9B',
                    800: '#AF9783',
                    900: '#9A806B',
                },
                'dark-brown': {
                    50: '#F9F7F5',
                    100: '#F2EEE9',
                    200: '#E8E2DC',
                    300: '#D4CDC4',
                    400: '#B5A79A',
                    500: '#9C8B7B',
                    600: '#826E5E',
                    700: '#685748',
                    800: '#504238',
                    900: '#3D2817',
                },
                'earth-brown': {
                    50: '#FAF7F2',
                    100: '#F4EDE2',
                    200: '#ECD2C5',
                    300: '#E4B8A8',
                    400: '#DCAE8B',
                    500: '#C17A4A',
                    600: '#A8663D',
                    700: '#8F522F',
                    800: '#764024',
                    900: '#5D2E19',
                },
                'light-peach': {
                    50: '#FEFBF9',
                    100: '#FDF6F1',
                    200: '#FBECD9',
                    300: '#F9E2C0',
                    400: '#F7D8A8',
                    500: '#E8C4A0',
                    600: '#D9B191',
                    700: '#CB9E7D',
                    800: '#BD8B69',
                    900: '#AF7855',
                },
                // Warm Beige Palette - Dark Mode
                'dark-warm': {
                    50: '#F6F4F2',
                    100: '#EDE5E0',
                    200: '#DDD4CD',
                    300: '#CDB3A9',
                    400: '#BE9285',
                    500: '#AE7161',
                    600: '#955A4A',
                    700: '#7A4433',
                    800: '#5F301F',
                    900: '#451B0A',
                },
                'deep-brown': {
                    50: '#F6F5F4',
                    100: '#EBE8E4',
                    200: '#D6D0C8',
                    300: '#C1B8AF',
                    400: '#ACA096',
                    500: '#97887D',
                    600: '#7A6B60',
                    700: '#63574D',
                    800: '#4C423A',
                    900: '#352E27',
                },
                'peach': {
                    50: '#FFFDFB',
                    100: '#FFF9F3',
                    200: '#FFF4E6',
                    300: '#FFEED9',
                    400: '#FFE8CC',
                    500: '#E8A876',
                    600: '#D98F5D',
                    700: '#CB7644',
                    800: '#BD5D2B',
                    900: '#AF4412',
                },
                // Specific colors as requested
                'primary-light': '#C17A4A',
                'primary-dark': '#E8A876',
                'secondary-light': '#E8C4A0',
                'secondary-dark': '#7A6B60',
                'text-dark': '#3D2817',
                'text-light': '#F5F1ED',
                'bg-light': '#F2DFD3',
                'bg-dark': '#1A1410',
                'bg-dark-alt': '#2B2420',
                'divider-light': '#E0D0C0',
                'divider-dark': '#4A4038',
            },
        },
    },

    plugins: [forms],
};
