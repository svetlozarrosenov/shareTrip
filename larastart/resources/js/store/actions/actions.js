function getGames(state, payload) {
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

export default getGames;