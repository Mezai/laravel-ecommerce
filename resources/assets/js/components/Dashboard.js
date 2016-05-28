import Chart from 'chart.js'
import $ from "jquery";

import Utils from './Utils';
import MakeRequest from './MakeRequest';


export default class Dashboard {

	constructor() {
		this.updateSalesDate();
	}

	updateSalesDate() {
		let salesDate = document.getElementById('salesDates');
		let dateRange = Utils.formatDate();
		salesDate.textContent = dateRange[0] + ' - ' + dateRange[1];

	}

	updateCanvas(salesData) {
		let salesChartCanvas = document.getElementById('salesChart');
		let ctx = salesChartCanvas.getContext('2d');
		let canvas = this.drawCanvas();

		for (var i = 0; i <= salesData.length; i++) {
			canvas.data.datasets[0].data[i] = salesData[i];
		}

		canvas.update();	
	}

	drawCanvas() {
		let salesChartCanvas = document.getElementById('salesChart');
		let ctx = salesChartCanvas.getContext('2d');
		let data = this.canvasData();
		let options = this.canvasOptions();	

    	return new Chart(ctx, {
    		type: 'line',
    		data: data,
    		options: options
		});
			
		
	}

	canvasData() {
		return {
		    labels: Utils.sortMonths(),
		    datasets: [
		        {
		            label: "Orders",
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
		            pointHoverBackgroundColor: "rgba(75,192,192,1)",
		            pointHoverBorderColor: "rgba(220,220,220,1)",
		            pointHoverBorderWidth: 2,
		            pointRadius: 1,
		            pointHitRadius: 10,
		            data: [0,0,0,0,0,0,0,0,0,0,0],
		        }
		    ]
		};
	}

	canvasOptions() {
		return {
			maintainAspectRatio: false,
        	responsive: true,
        	xAxes: [{
            	display: false
        	}],

    	};
	}




}


