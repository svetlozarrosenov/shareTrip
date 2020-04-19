import Dashboard from './components/DashboardComponent';
import Friends from './components/FriendsComponent';
import Profile from './components/ProfileComponent';

export default {
	routes: [
		{
			path: '/',
			component: Dashboard
		},
		{
			path: '/search-friends',
			component: Friends
		},
		{
			path: '/profile',
			component: Profile
		}
	]
};