export default {
	selectFirstRow(state, payload) {
		state.selected = payload;
		state.deleteDialog = false
	},
	selectRow(state, payload) {
		state.selected = payload;
		state.deleteDialog = false
	},
	getOrganizations(state, payload) {
		state.organizations = payload;
	},
	triggerCreateAction(state) {
		state.crudActions.create = true;
		state.crudActions.edit = false;
	},
	cancelCreateAction(state) {
		state.crudActions.create = false;
		state.crudActions.edit = true;
	},
	createOrganization(state, newOrganization) {
		state.organizations.push(newOrganization);
	},
	updateOrganization(state, updatedOrganization) {
		console.log(updatedOrganization);
		// let index = state.organizations.map(org => org.id).indexOf(updatedOrganization.id);
		// state.organizations.splice(index, 1, updatedOrganization)
	},
	deleteOrganization(state, id) {
		let index = state.organizations.map(org => org.id).indexOf(id);
		state.organizations.splice(index, 1)
	}
}