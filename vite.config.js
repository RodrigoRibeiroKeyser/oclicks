import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path'
import vuetify2 from 'vite-plugin-vuetify'//implementação do vuetify
import { run } from 'vite-plugin-run'
import vuetify, { transformAssetUrls } from 'vite-plugin-vuetify'





export default defineConfig({
    plugins: [
        
        
        laravel({
            input: [ 'resources/js/app.js', 'resources/css/app.css'],
            refresh: true,
           
        }),
        vue({
            template: {
                transformAssetUrls: {
                    
                    base: null,
 
                    // The Vue plugin will parse absolute URLs and treat them
                    // as absolute paths to files on disk. Setting this to
                    // `false` will leave absolute URLs un-touched so they can
                    // reference assets in the public directory as expected.
                    includeAbsolute: false,
                },
            },
        }),
        
        run([//confiraução do ziggy
            {
              name: 'typescript transform',
              run: ['php', 'artisan', 'typescript:transform'],
              condition: (file) => file.includes('Data.php'),
            },
            {
              name: 'build routes',
              run: ['php', 'artisan', 'routes:generate'],
              condition: (file) => file.includes('/routes/'),
            }
          ]),
        vuetify2({ autoImport: true}),
        vuetify(),
        
        
    ],
    resolve: {
        alias: {
            '@': '/resources/ts',
            ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue.es.js'),
        },
        
    },
    
    
    
});
