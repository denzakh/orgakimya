import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.less',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
    // CSS Pre -processor
    preprocessorOptions: {
      less: {
        // relativeUrls: 'all',
      },
    },
  }
});
