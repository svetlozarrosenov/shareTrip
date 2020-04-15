import Dashboard from './components/DashboardComponent';
import Friends from './components/FriendsComponent';

export default {
	routes: [
		{
			path: '/',
			component: Dashboard
		},
		{
			path: '/search-friends',
			component: Friends
		}
	]
};