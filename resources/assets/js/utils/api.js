import axios from 'axios'

export default {
	eventOrganizations(endpoint) {
		return {
			getAll: () => axios.get(endpoint),
			getOne: (id) => axios.get(`${endpoint}/${id}`),
			update: (toUpdate) =>  axios.put(endpoint,toUpdate),
			create: (toCreate) =>  axios.post(endpoint,toCreate),
			delete: (id) =>  axios.delete(`${endpoint}/${id}`)
		}
	},
	eventNames(endpoint) {
		return {
			getAll: () => axios.get(endpoint),
			getOne: ({ id }) => axios.get(`${endpoint}/${id}`),
			update: (toUpdate) =>  axios.put(endpoint,toUpdate),
			create: (toCreate) =>  axios.post(endpoint,toCreate),
			delete: ({ id }) =>  axios.delete(`${endpoint}/${id}`)
		}
	},
	// eventContacts(endpoint) {
	// 	return {
	// 		getAll: () => axios.get(endpoint),
	// 		getOne: ({ id }) => axios.get(`${endpoint}/${id}`),
	// 		update: (toUpdate) =>  axios.put(endpoint,toUpdate),
	// 		create: (toCreate) =>  axios.post(endpoint,toCreate),
	// 		delete: ({ id }) =>  axios.delete(`${endpoint}/${id}`)
	// 	}
	// },
	// eventInstances(endpoint) {
	// 	return {
	// 		getAll: () => axios.get(endpoint),
	// 		getOne: ({ id }) => axios.get(`${endpoint}/${id}`),
	// 		update: (toUpdate) =>  axios.put(endpoint,toUpdate),
	// 		create: (toCreate) =>  axios.post(endpoint,toCreate),
	// 		delete: ({ id }) =>  axios.delete(`${endpoint}/${id}`)
	// 	}
	// },
	// eventInstanceRaces(endpoint) {
	// 	return {
	// 		getAll: () => axios.get(endpoint),
	// 		getOne: ({ id }) => axios.get(`${endpoint}/${id}`),
	// 		update: (toUpdate) =>  axios.put(endpoint,toUpdate),
	// 		create: (toCreate) =>  axios.post(endpoint,toCreate),
	// 		delete: ({ id }) =>  axios.delete(`${endpoint}/${id}`)
	// 	}
	// }
}