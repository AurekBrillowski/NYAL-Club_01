import axios from 'axios'

export default {
	organizations(endpoint) {
		return {
			getAll: () => axios.get(endpoint),
			getOne: ({ id }) => axios.get(`${endpoint}/${id}`),
			update: (toUpdate) =>  axios.put(endpoint,toUpdate),
			create: (toCreate) =>  axios.post(endpoint,toCreate),
			delete: ({ id }) =>  axios.delete(`${endpoint}/${id}`)
		}
	}
}