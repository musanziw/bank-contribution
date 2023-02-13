import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/dashlite.min.css',
                'resources/js/bundle.js',
                'resources/js/scripts.js',
            ],
            refresh: true,
        }),
    ],
});
