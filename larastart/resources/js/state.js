import axios from 'axios';
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
	strict: true,
	state: {
		activities: []
	},
	mutations: {
		setActivities(state, payload){
			this.state.activities = payload.activities;
		},
	},
	actions: {
		getActivities(state, payload) {
            let promise = axios.get('activity', {
            })
            .then((response) => {
            	this.commit({
					type: 'setActivities',
					activities: response.data
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
