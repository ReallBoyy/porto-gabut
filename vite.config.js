import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,

            // Self-hosted at build time and emitted through the @fonts Blade
            // directive: Instrument Sans for body copy, Fraunces for headings.
            // optimizedFallbacks is off so the build does not require the
            // optional fontaine dependency.
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                    optimizedFallbacks: false,
                }),
                bunny('Fraunces', {
                    weights: [500, 600],
                    preload: [{ weight: 600 }],
                    optimizedFallbacks: false,
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});