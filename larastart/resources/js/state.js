import axios from 'axios';
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
	strict: true,
	state: {
		games: [],
		firends: [],
	},
	mutations: {
		setGames(state, payload){
			this.state.games = payload.games;
		},
		setFriends(state, payload){
			this.state.friends = payload.friends;
		},
	},
	actions: {
		getGames(state, payload) {
            let promise = axios.get('games', {
            })
            .then((response) => {
            	this.commit({
					type: 'setGames',
					games: response.data
				});
            })
            .catch(function (error) {
                console.log(error);
            });

            return promise;
        },
        getFriends(state, payload) {
            let promise = axios.get('friends', {
            })
            .then((response) => {
            	this.commit({
					type: 'setFriends',
					friends: response.data
				});
            })
            .catch(function (error) {
                console.log(error);
            });

            return promise;
        }
	}
});

export default store;
