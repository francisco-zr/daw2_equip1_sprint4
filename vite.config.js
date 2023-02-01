import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        vue(),
        laravel([
            'resources/css/app.css', 
            'resources/js/app.js',
        ]),
    ],
});
