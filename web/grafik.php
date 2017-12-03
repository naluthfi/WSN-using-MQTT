<?php
	include 'connect.php';
	$query =  "Select* from data ORDER By id ASC";
	$tampil=mysqli_query($connect,$query); 
	//fungsi untuk SQL
	$obj=new Stdclass ();
	// perintah untuk membaca dan mengambil data dalam bentuk array
	echo "
	<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
	<div id='chart_div'>
	<script>
		google.charts.load('current', {'packages':['line', 'corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {

		var button = document.getElementById('change-chart');
		var chartDiv = document.getElementById('chart_div');

		var data = new google.visualization.DataTable();
		data.addColumn('string', 'time');
		data.addColumn('number', 'jarak');
		
		data.addRows([
		";
			
		while ($data = mysqli_fetch_array ($tampil)){
			echo "
				['".$data['id']."', ".$data['jarak']."],
			";
		}

		echo "
		]);

		var materialOptions = {
		chart: {
		  title: 'Data jarak sensor'
		},
		width: 450,
		height: 350,
		};

		function drawMaterialChart() {
			var materialChart = new google.charts.Line(chartDiv);
			materialChart.draw(data, materialOptions);
			button.innerText = 'Change to Classic';
			button.onclick = drawClassicChart;
		}
		drawMaterialChart();

		}							
	</script>
	</div>
	";
?>