var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	
	var lineChartData = {
			labels : ["2009","2010","2011","2012","2013","2014","2015"],
			datasets : [
				
				{
					label: "My Second dataset",
					fillColor : "rgba(78, 89, 90, 0.2)",
					strokeColor : "rgba(48, 164, 80, 1)",
					pointColor : "rgba(48, 190, 90, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(45, 50, 70, 90)",
					data : [70,75,80,85,80,90,90]
				}
			]

		}
var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};		
	var barChartData = {
			labels : ["2009-2010","2010-2011","2011-2012","2012-2013","2013-2014","2014-2015","2015-2016"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data :[700,650,800,850,500,890,950]
					
				},
				{
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 0.8)",
					highlightFill : "rgba(48, 164, 255, 0.75)",
					highlightStroke : "rgba(48, 164, 255, 1)",
					data :  [400,500,700,900,800,860,800]
				}
			]
	
		}

	var pieData = [
				{
					value: 150,
					color:"#30a5ff",
					highlight: "#62b9fb",
					label: "AP"
				},
				{
					value: 80,
					color: "#ffb53e",
					highlight: "#fac878",
					label: "PM"
				},
				
				{
					value: 70,
					color: "#000",
					highlight: "#242222",
					label: "MM"
				},
				{
					value: 100,
					color: "#05da1e",
					highlight: "#47d257",
					label: "AK"
				},
				{
					value: 300,
					color: "#f9243f",
					highlight: "#f6495f",
					label: "RPL"
				}

			];
			
	var doughnutData = [
					{
						value: 300,
						color:"#30a5ff",
						highlight: "#62b9fb",
						label: "Basket"
					},
					{
						value: 50,
						color: "#ffb53e",
						highlight: "#fac878",
						label: "Volly"
					},
					{
						value: 100,
						color: "#1ebfae",
						highlight: "#3cdfce",
						label: "Futsal"
					},
					{
						value: 120,
						color: "#f9243f",
						highlight: "#f6495f",
						label: "PO"
					}
	
				];
				
window.onload = function(){
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive : true
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {responsive : true
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
	});
	
};

