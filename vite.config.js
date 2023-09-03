import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        port: 5173,
        watch: {
            usePolling:true,
        }
    },
    append: [
        'node_modules/bootstrap/dist/css/bootstrap.css',
    ],
});
