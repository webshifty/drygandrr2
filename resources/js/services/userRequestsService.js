import requestService from "./requestService";

export default {
	async getRequests(filter) {
		const response = await requestService.get('/api/requests', {
			'filter[search]': filter.search,
		});

		return response?.data || { data: [] };
	},
	async updateRequests(id, request) {
		const response = await requestService.put('/api/requests/' + id, request);

		return response?.data || {
			data: []
		};
	},
	mapRequest(request) {
		return {
			id: request.id,
			question: request.question,
			user: request.user,
			status: request.status,
			created_at: request.created_at,
		};
	},
};