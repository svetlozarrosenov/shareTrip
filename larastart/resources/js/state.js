import axios from 'axios';
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
	strict: true,
	state: {
		games: []
	},
	mutations: {
		setGames(state, payload){
			this.state.games = payload.games;
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
        }
	}
});

export default store;
