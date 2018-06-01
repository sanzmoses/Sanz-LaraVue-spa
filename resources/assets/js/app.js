import Vue 			from 'vue'
import VueRouter 	from 'vue-router'
import App 			from './views/App'
import Modal		from './components/Modal'
import { routes } 	from './routes'

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

const app = new Vue({
    el: '#app',
    components: { App, Modal },
    router,
});

