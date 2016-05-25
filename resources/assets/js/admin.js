$(document).ready(function() {
	$("[name='active']").bootstrapSwitch({
		'onText' : 'Active',
		'offText' : 'Disabled',
		'onColor' : 'success',
		'offColor' : 'danger',
	});


    function drawSalesCanvas(salesData) {
        var salesChartCanvas = $('#salesChart').get(0).getContext("2d");
        var salesChart = new Chart(salesChartCanvas);


        var data = {
                labels: months(),
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
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: salesData,
                    }
                ]
        };

        var salesChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
        };


        Chart.Line(salesChartCanvas, {
            type: 'line',
            data: data,
            options: salesChartOptions
        });

    }


    function daysInMonth(month,year) {
        return new Date(year, month, 0).getDate();
    }

    function ajax1(month) {
    var requestData = requestParams(month, month);
    var startDate = requestData[0];
    var endDate = requestData[1];
        return $.ajax({
            method: 'GET',
            url: "http://localhost/ecommerce-app/public/api/v1/orders?startDate="+startDate+"&endDate="+endDate+"",
            async: true,
            dataType: 'json',           
            
        });
    }

    function getData()
    {
        var requestData = requestParams("January", "January");
        var startDate = requestData[0];
        var endDate = requestData[1];

        var request = {
            getArray: function(callback) {
                $.ajax({
                    method: 'GET',
                    url: "http://localhost/ecommerce-app/public/api/v1/orders?startDate="+startDate+"&endDate="+endDate+"",
                    async: true,
                    dataType: 'json',
                    success:function(data){
                    
                    callback.call(this,data);
                    
                    }

                });    
            }
        }

        request.getArray(function(data){
            
            console.log(data['orders'].totalItems);
            var counter = 0;
            counter ++;

            var salesArray = [];
            salesArray.push(data['orders'].totalItems);
            drawSalesCanvas(salesArray);
           

        });   
    }


    function requestParams(startDate, endDate) {
        var date = new Date();

        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        var dates = {};
        
        for (var i = 0; i < monthNames.length; i++) {
            
            dates[monthNames[i]] = {};
            dates[monthNames[i]].startDate = date.getFullYear() + getMonth(i) + '01';
            dates[monthNames[i]].endDate = date.getFullYear() + getMonth(i) + daysInMonth(i + 1, date.getFullYear());
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
            dates.getStartDate(startDate),
            dates.getEndDate(endDate),
        ];
        

    }   

    function getMonth(value) {
        var month = value + 1;
        return month < 10 ? '0' + month : '' + month; 
    }  

    function months() {
        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        var month = [];
        
        var date = new Date();

        if (date.getMonth() > 0) {
            for (var i = date.getMonth(); i <= 11; i++) {
                item = monthNames[i];
                month.push(item);
            }

            for (var i = 0; i <= date.getMonth(); i++) {
                item = monthNames[i];
                month.push(item); 
            }
        } else {
            for (var i = date.getMonth(); i <= 11; i++) {
                item = monthNames[i];
                month.push(item);
            }
        }

        return month;
    }

    function execute()
    {
        var currentMonths = months();

        $.when(ajax1(currentMonths[0]), ajax1(currentMonths[1]), ajax1(currentMonths[2]), ajax1(currentMonths[3]), ajax1(currentMonths[4]), ajax1(currentMonths[5]), ajax1(currentMonths[6]), ajax1(currentMonths[7]), ajax1(currentMonths[8]), ajax1(currentMonths[9]), ajax1(currentMonths[10]), ajax1(currentMonths[11]))
        .done(function(month1, month2, month3, month4, month5, month6, month7, month8, month9, month10, month11, month12){

            var salesArray = [];
            salesArray.push(month1[0].orders.totalItems);
            salesArray.push(month2[0].orders.totalItems);
            salesArray.push(month3[0].orders.totalItems);
            salesArray.push(month4[0].orders.totalItems);
            salesArray.push(month5[0].orders.totalItems);    
            salesArray.push(month6[0].orders.totalItems);
            salesArray.push(month7[0].orders.totalItems);
            salesArray.push(month8[0].orders.totalItems);
            salesArray.push(month9[0].orders.totalItems);
            salesArray.push(month10[0].orders.totalItems);
            salesArray.push(month11[0].orders.totalItems);
            salesArray.push(month12[0].orders.totalItems);
            drawSalesCanvas(salesArray);
        });    
    }

    execute();
});