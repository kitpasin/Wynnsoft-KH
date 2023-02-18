import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/index.css', 'resources/scss/index.scss', 'resources/js/index.js'],
            refresh: true,
        }),
    ],
});
