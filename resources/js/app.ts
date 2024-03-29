import './bootstrap';
import '../css/app.css';

import { createApp, h, DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { QuillEditor} from "@vueup/vue-quill";
import '@vueup/vue-quill/dist/vue-quill.snow.css'
import DarkModeToggle from "@/DarkModeToggle.vue";
import {library} from '@fortawesome/fontawesome-svg-core';
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
import {faLinkedinIn, faGithub} from "@fortawesome/free-brands-svg-icons";

library.add(faLinkedinIn, faGithub);

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component('font-awesome-icon', FontAwesomeIcon)
            .component('QuillEditor', QuillEditor)
            .component('dark-mode-toggle', DarkModeToggle)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
