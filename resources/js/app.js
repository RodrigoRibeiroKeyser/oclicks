import './bootstrap';
import '../css/app.scss';



/*inertia e vue*/
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { Head } from '@inertiajs/inertia-vue3' //component Head para as paginas, utiliza <Head title="Home">

/**componente global */
import { InertiaProgress } from '@inertiajs/progress'
import {Link} from "@inertiajs/inertia-vue3"



/*ziggy*/
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Ziggy } from './ziggy';

/* veutify */
import { createVuetify	} from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '../../node_modules/vuetify/lib/styles/main.sass'
import { md3 } from 'vuetify/blueprints' // material desing  icones aqui https://materialdesignicons.com/ 
//mude para md2 ou md1 para versões do material design
import { useDisplay } from 'vuetify'
import {aliases, mdi} from 'vuetify/iconsets/mdi'

import { md} from 'vuetify/iconsets/md'

//v-calendar
import 'v-calendar/dist/style.css'
import { SetupCalendar, Calendar, DatePicker } from 'v-calendar';


/**configuração do vuetify */
const vuetify = createVuetify({
	icons:{
		defaultSet: 'mdi',
		aliases, 
		sets:{
			mdi,
			md,
		}
	},
	components,
	directives,
	blueprint: md3,
	theme:{
		
		//escolha das cores e temas	 
		themes: {
			
			light: {
				colors: {
					primary: "#6750A4",
					secondary: "#958DA5",
                    terc: "#a395c8",
					
                    
					
				}
			},
			dark: {
				colors:{
					primary: "#D0BCFF;",
					secondary: "#CCC2DC;",
					terc: "#8a7ea6",
				}
			},
		}
	}
	
})

let app = createInertiaApp({
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  title: title => `${title} - Oclicks`,
  setup({ el, App, props, plugin } ) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(vuetify)

	  .use(SetupCalendar, {})
	  
		.use(Calendar, {
			screens: {
				tablet: '576px',
				laptop: '992px',
				desktop: '1200px'}
		})

      .use(ZiggyVue, Ziggy)
      .component("Link", Link)//registro do componente Link
      .component('Head' , Head) // registro do componente Head

	  .component('Calendar', Calendar)
	  .component('DatePicker', DatePicker)

      .mount(el)
      
  },
});




InertiaProgress.init({ color: '#6750A4'})
