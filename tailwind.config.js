import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/assets/tailadmin/**/*.{js,css}',
    ],
    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        screens: {
            'sm': '576px',
            'md': '768px',
            'lg': '992px',
            'xl': '1200px',
            '2xl': '1400px',
        },
        extend: {
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                roboto: ['Roboto', 'sans-serif'],
            },
            colors: {
                'current': 'currentColor',
                'transparent': 'transparent',
                'white': '#FFFFFF',
                'black': '#101828',
                'primary': '#fd3d57', // E-commerce primary color
                'brand': {
                    25: '#f2f7ff',
                    50: '#ecf3ff',
                    100: '#dde9ff',
                    200: '#c2d6ff',
                    300: '#9cb9ff',
                    400: '#7592ff',
                    500: '#465fff',
                    600: '#3641f5',
                    700: '#2e37d5',
                    800: '#2730aa',
                    900: '#283087',
                    950: '#1a1e52',
                },
                'gray': {
                    25: '#fcfcfd',
                    50: '#f9fafb',
                    100: '#f2f4f7',
                    200: '#e4e7ec',
                    300: '#d0d5dd',
                    400: '#98a2b3',
                    500: '#667085',
                    600: '#475467',
                    700: '#344054',
                    800: '#1d2939',
                    900: '#101828',
                },
            },
            spacing: {
                '4.5': '1.125rem',
                '7.5': '1.875rem',
                '15': '3.75rem',
                '17.5': '4.375rem',
                '22.5': '5.625rem',
                '25': '6.25rem',
                '30': '7.5rem',
                '50': '12.5rem',
                '90': '22.5rem',
            },
            zIndex: {
                '9999': '9999',
            },
        },
    },
    plugins: [forms],
};
