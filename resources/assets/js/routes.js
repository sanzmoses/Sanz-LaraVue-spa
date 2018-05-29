import User 		from './views/pages/user/User';
import Users 		from './views/pages/user/Users';
import UserDetails 	from './views/pages/user/UserDetails';
import UserEdit 	from './views/pages/user/UserEdit';
import Home 		from './views/home';
import Login		from './views/pages/Login';

export const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/user', name: 'user', component: User, children: [
    	{path: '', component: Users },
    	{path: ':id', component: UserDetails },
    	{path: ':id/edit', component: UserEdit }
    ]},
    { path: '/login', name: 'login', component: Login },
];