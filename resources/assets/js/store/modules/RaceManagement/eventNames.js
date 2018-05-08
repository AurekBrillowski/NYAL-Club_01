import api from '../../../utils/api'

const state = {
	eventNames: [],
	selectedRow: {},
	crudActions: {
		update: true,
		create: false,
		deleteDialog: false,
	},
	tableFilters: {
		sort_by: '',
		sort_order: 'ASC',
	},
	months: [
		{text: "January", value: 1},
		{text: "February", value: 2},
		{text: "March", value: 3},
		{text: "April", value: 4},
		{text: "May", value: 5},
		{text: "June", value: 6},
		{text: "July", value: 7},
		{text: "August", value: 8},
		{text: "September", value: 9},
		{text: "October", value: 10},
		{text: "November", value: 11},
		{text: "December", value: 12}
	],
	eventTypes: [
		{ text: 'NOT ASSIGNED', value: 1 },
		{ text: 'Cross Country Meet', value: 2 },
		{ text: 'Track Meet', value: 3 },
		{ text: 'Road Race', value: 4 },
		{ text: 'Trail Run', value: 5 },
		{ text: 'Fun Run', value: 6 },
		{ text: 'Ultra', value: 7 },
	],
	seasons: [
		{ text: 'Spring', value: 1 },
		{ text: 'Summer', value: 2 },
		{ text: 'Fall', value: 3 },
	]
};
const getters = {
	eventNames: state => state.eventNames,
	eventTypes: state => state.eventTypes,
	seasons: state => state.seasons,
};
const mutations = {
	sort_by(state, payload) { state.tableFilters.sort_by = payload },
	selectEventNameRow(state, payload) { state.selectedRow = payload; state.crudActions.deleteDialog = true; },
	initEventNames(state, payload) { state.eventNames = payload },
	createEventName(state, newEvent) { state.eventNames.push(newEvent); },
	triggerEventNameCreation(state) { state.crudActions.create = true; state.crudActions.update = false; },
	cancelEventNameCreation(state) { state.crudActions.create = false; state.crudActions.update = true; },
	updateEventName(state, payload) { state.selectedRow.event_name = payload },
	updateEventOrg(state, payload) { state.selectedRow.Event_Organization_id = payload },
	updateEventWebsite(state, payload) { state.selectedRow.race_website = payload },
	updateEventType(state, payload) { state.selectedRow.Event_Type_id = payload },
	updateEventSeason(state, payload) { state.selectedRow.NYAL_Season_id = payload },
	updateEventClubRace(state, payload) { state.selectedRow.club_race = payload },
	updateEventSchoolRace(state, payload) { state.selectedRow.school_race = payload },
	updateEventCurrentYear(state, payload) { state.selectedRow.current_year_date = payload },
	updateEventMonth(state, payload) { state.selectedRow.month_id = payload },
	updateEvent(state, updatedEventName) {
		let index = state.eventNames.map(name => name.id).indexOf(updatedEventName.id);
		state.eventNames.splice(index, 1, updatedEventName);
	},
	deleteEventName(state, id) {
		let index = state.eventNames.map(name => name.id).indexOf(id);
		state.eventNames.splice(index, 1)
	},
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
				console.log(response.data);
				commit('createEventName', response.data)
			})
			.catch(error => console.log(error))
	},
	updateEvent: ({commit}, updatedEvent) => {
		api.eventNames('/api/event_name').update(updatedEvent)
			.then(response => {
				console.log(response.data);
				commit('updateEvent', response.data)
			})
			.catch(error => console.log(error))
	},
	deleteEventName: ({commit}, id) => {
		api.eventNames('/api/event_name').delete(id)
			.then(response => {
				commit('deleteEventName', response.data.id)
			})
	},
};

export default  {
	state,
	getters,
	mutations,
	actions
}