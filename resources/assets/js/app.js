import Vue 			from 'vue'
import VueRouter 	from 'vue-router'
import iView 		from 'iview';

Vue.use(VueRouter);
Vue.use(iView);

import App 			from './views/App'
import Modal		from './components/Modal'
import { routes } 	from './routes'

const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

const app = new Vue({
    el: '#app',
    components: { App, Modal },
    router,
});