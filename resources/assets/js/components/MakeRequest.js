import $ from 'jquery';

export default class MakeRequest {
	
	constructor() {

	}

	getData() {

		return $.ajax({
			url: "http://localhost/ecommerce-app/public/api/v1/orders?startDate=20160101&endDate=20160525",
            async: true,
            dataType: 'json',
		});
	}
}