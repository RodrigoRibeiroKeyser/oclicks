import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin';
import vuetify, { transformAssetUrls } from 'vite-plugin-vuetify'
import DefineOptions from 'unplugin-vue-define-options/vite'




export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({ 
            template: { transformAssetUrls }
          }),
        vuetify({ autoImport: true }),
        DefineOptions(),
    ],
});
