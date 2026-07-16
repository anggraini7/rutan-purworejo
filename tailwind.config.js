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
      colors: {
        'instansi-dark': 'var(--color-instansi-dark)',
        'footer': 'var(--color-instansi-footer)',
        'text-nav': 'var(--color-text-nav)',
        'bg': 'var(--color-hero-bg)',
        'font-biru': 'var(--color-hero-text)',
        'font-abu': 'var(--color-hero-muted)',
        'aksen-yellow': 'var(--color-aksen-yellow)',
        'font-putih': 'var(--color-font-putih)',
        'card-putih': 'var(--color-card)',
        'card-biru': 'var(--color-card-biru)',


      },
    },
  },

    plugins: [forms],
};
