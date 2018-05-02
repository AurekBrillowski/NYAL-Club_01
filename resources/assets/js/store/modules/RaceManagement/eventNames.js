import api from '../../../utils/api'

const state = {
	eventNames: []
};
const getters = {
	eventNames: state => state.eventNames,
};
const mutations = {
	initEventNames(state, payload) { state.eventNames = payload },
};
const actions = {
	initEventNames: ({commit}) => {
		api.eventNames('/api/eventnames').getAll()
			.then(response => {
				console.log(response.data);
				commit('initEventNames', response.data);
			})
	},
};

export default  {
	state,
	getters,
	mutations,
	actions
}