import $ from 'jquery';
import Utils from './Utils';
import Dashboard from './Dashboard';
export default class MakeRequest {
	
	constructor() {
		
	}

	getData(month) {

		let requestParameters = this.requestParams(month, month);

		let start = requestParameters[0];
		let end = requestParameters[1];

		return $.ajax({
			url: "http://localhost/ecommerce-app/public/api/v1/orders?startDate="+start+"&endDate="+end+"",
            beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
            async: true,
            dataType: 'json',
            
		});
	}

	requestParams(monthStart, monthEnd) {
		let year = new Date().getFullYear();
		let month = new Date().getMonth();
		let startDate = '01';
		let currentMonth = new Date().getMonth();
		let monthNames = Utils.sortMonths();
		var dates = {};
		for(var i = monthNames.length; i >= 0; i--) {
			
			dates[monthNames[i]] = {};
			if (monthNames[i] === 'December') {
				year -= 1;
			}	
			var monthInt = Utils.formatMonthName(monthNames[i]);

			dates[monthNames[i]].startDate = year + Utils.formatMonth(monthInt) + startDate;
			dates[monthNames[i]].endDate = year + Utils.formatMonth(monthInt) + Utils.daysInMonth(monthInt + 1, year);

		}

		dates.getStartDate = 
            function (month) {
                return this[month].startDate;

        };

        dates.getEndDate = 
            function (month) {
                return this[month].endDate;

        };    	

		return [
			dates.getStartDate(monthStart),
			dates.getEndDate(monthEnd),
		];
        

	}

	send() {

		let m = Utils.sortMonths();
		$.when(this.getData(m[0]), this.getData(m[1]), this.getData(m[2]), this.getData(m[3]), this.getData(m[4]), this.getData(m[5]), this.getData(m[6]), this.getData(m[7]), this.getData(m[8]), this.getData(m[9]), this.getData(m[10]), this.getData(m[11]))
        .then(function(m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12){

            var salesArray = [];
            salesArray.push(m1[0].orders.totalItems);
            salesArray.push(m2[0].orders.totalItems);
            salesArray.push(m3[0].orders.totalItems);
            salesArray.push(m4[0].orders.totalItems);
            salesArray.push(m5[0].orders.totalItems);    
            salesArray.push(m6[0].orders.totalItems);
            salesArray.push(m7[0].orders.totalItems);
            salesArray.push(m8[0].orders.totalItems);
            salesArray.push(m9[0].orders.totalItems);
            salesArray.push(m10[0].orders.totalItems);
            salesArray.push(m11[0].orders.totalItems);
            salesArray.push(m12[0].orders.totalItems);
            
            new Dashboard().updateCanvas(salesArray);
        }).fail(function() {
    		
    		$('.chart').text('No data');



  		});
		
	}

}