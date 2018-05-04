import api from '../../../utils/api'

const state = {
	eventNames: []
};
const getters = {
	eventNames: state => state.eventNames,
	
};
const mutations = {
	initEventNames(state, payload) { state.eventNames = payload },
	createEventName(state, payload) { state.eventNames.push(payload); },
};
const actions = {
	initEventNames: ({commit}) => {
		api.eventNames('/api/event_names').getAll()
			.then(response => {
				console.log(response.data);
				commit('initEventNames', response.data);
			})
	},
	createEventName: ({commit}, createdEvent) => {
		api.eventNames('/api/event_name').create(createdEvent)
			.then(response => {
				commit('createEventName', response.data)
			})
			.catch(error => console.log(error))
	},
};

export default  {
	state,
	getters,
	mutations,
	actions
}