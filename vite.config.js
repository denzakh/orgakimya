import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { imagetools } from 'vite-imagetools';

export default defineConfig({
    server: {
        proxy: {
          '/storage': {
            target: 'http://localhost:8000/'
          },
        }
    },
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
