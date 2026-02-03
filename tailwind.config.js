import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                'inter': ['Inter', 'sans-serif'],
            },
            animation: {
                'fadeInDown': 'fadeInDown 0.3s ease-out',
                'float': 'float 3s ease-in-out infinite',
            },
            keyframes: {
                fadeInDown: {
                    '0%': { 
                        opacity: '0', 
                        transform: 'translateY(-10px)' 
                    },
                    '100%': { 
                        opacity: '1', 
                        transform: 'translateY(0)' 
                    },
                },
                float: {
                    '0%, 100%': { 
                        transform: 'translateY(0px)' 
                    },
                    '50%': { 
                        transform: 'translateY(-10px)' 
                    },
                }
            }
        }
    },

    plugins: [forms],
};