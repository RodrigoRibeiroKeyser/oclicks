import './bootstrap';
import '../css/app.scss';



/*inertia e vue*/
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'
//Composition API global
import 'vue-global-api'
// register all reactivity apis (`ref`, `computed`, `watch`, etc.)
import 'vue-global-api/reactivity'
// register all lifecycle hooks (`onMounted`, `onUpdated`, `onUnmounted`, etc.)
import 'vue-global-api/lifecycle'
// register component apis (`inject`, `provide`, `h`, etc.)
import 'vue-global-api/component'




/*ziggy*/
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Ziggy } from './ziggy';

/* veutify */
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '../../node_modules/vuetify/lib/styles/main.sass'
import { md3 } from 'vuetify/blueprints' // material desing  icones aqui https://materialdesignicons.com/ 
//mude para md2 ou md1 para versões do material design
import { useDisplay } from 'vuetify'
import { aliases, mdi } from 'vuetify/iconsets/mdi'

import { md } from 'vuetify/iconsets/md'

//v-calendar
import 'v-calendar/dist/style.css'
import SetupCalendar from 'v-calendar';
import { Calendar } from 'v-calendar';
import { DatePicker } from 'v-calendar';

//vue mask //
import VueMask from '@devindex/vue-mask';


/**configuração do vuetify */
const vuetify = createVuetify({
	icons: {
		defaultSet: 'mdi',
		aliases,
		sets: {
			mdi,
			md,
		}
	},
	components,
	directives,
	blueprint: md3,
	theme: {

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
				colors: {
					primary: "#D0BCFF;",
					secondary: "#CCC2DC;",
					terc: "#8a7ea6",
				}
			},
		}
	}

})

let app = createInertiaApp({
	progress: {
		color: 'red',
		includeCSS: true,
		showSpinner: false,

	},
	resolve: name => {
		const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
		return pages[`./Pages/${name}.vue`]
	},
	title: title => `${title} - Oclicks`,
	setup({ el, App, props, plugin }) {
		createApp({ render: () => h(App, props) })
			.use(plugin)
			.use(vuetify)
			.use(SetupCalendar, {})
			.use(Calendar, {
				screens: {
					tablet: '576px',
					laptop: '992px',
					desktop: '1200px'
				}
			})
			
			.use(VueMask) // mask vue
			.use(ZiggyVue, Ziggy)
			.component("Link", Link)//registro do componente Link
			.component('Head', Head) // registro do componente Head

			.component('Calendar', Calendar)
			.component('DatePicker', DatePicker)

			.mount(el)

	},
});





