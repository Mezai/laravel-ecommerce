export default class Dashboard {

	constructor() {
		this.drawCanvas();
	}

	drawCanvas() {
		let salesChartCanvas = document.getElementById('salesChart').getContext('2d');

		let myChart = new Chart.Line(salesChartCanvas, {
    		type: 'line',
    			data: {
        			labels: ["January", "February", "March", "April", "May", "June", "July", "August", "October", "November", "December"],
    			datasets: [
					{
            			label: "Sales",
            			fill: false,
            			lineTension: 0.1,
            			backgroundColor: "rgba(75,192,192,0.4)",
			            borderColor: "rgba(75,192,192,1)",
			            borderCapStyle: 'butt',
			            borderDash: [],
			            borderDashOffset: 0.0,
			            borderJoinStyle: 'miter',
			            pointBorderColor: "rgba(75,192,192,1)",
			            pointBackgroundColor: "#fff",
			            pointBorderWidth: 1,
			            pointHoverRadius: 5,
			            pointHoverBackgroundColor: "#ed461d",
			            pointHoverBorderColor: "#000000",
			            pointHoverBorderWidth: 1,
			            pointRadius: 1,
			            pointHitRadius: 10,
		            	data: [1],
					}
				]
    		},
    			options: {
        			xAxes: [{
            			display: false
        		}]
    		}
		});		
	}

	
}


