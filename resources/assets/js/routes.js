import Hello 	from './views/Hello';
import Home 	from './views/Home';

export const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/hello', name: 'hello', component: Hello },

];