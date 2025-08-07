import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'madgrower-main': '#AEC670',
                'madgrower-background': '#24272B',
                'madgrower-white': '#FFFFFF',
                'madgrower-black': '#000000',
                'madgrower-description': '#D2D0D0',
                'madgrower-green': '#4AFF6B',
                'madgrower-ip-copied-background': 'rgba(74, 255, 107, 0.17)',
                'madgrower-ip-copied-icon-background': 'rgba(74, 255, 107, 0.5)',
                'madgrower-copy-ip-button-background': 'rgba(119, 141, 69, 0.7)',
                'madgrower-how-to-join-button-background': 'rgba(210, 208, 208, 0.2)',
                'madgrower-stats-background': 'rgba(210, 208, 208, 0.05)',
                'madgrower-stat-icon-background-2': 'rgba(119, 141, 69, 0.5)',
                'madgrower-scroll-bar': '#24272B',
                'madgrower-scroll-bar-hover': '#778D45',
                'madgrower-red': '#FF7C7C',
                'madgrower-warning-background': 'rgba(255, 124, 124, 0.17)',
                'madgrower-warning-icon-background': 'rgba(255, 124, 124, 0.5)',
                'madgrower-warning': '#F5C1C1',
            }
        },
    },

    plugins: [forms],
};
