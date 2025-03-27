import {
    defineConfig
} from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                `resources/views/***`,
                'app/Livewire/**',
                'app/Filament/**',
            ],
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});
