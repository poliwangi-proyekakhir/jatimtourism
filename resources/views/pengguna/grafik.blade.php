@extends('layouts')
@section('content')

<center>
<br>
<h3>GRAFIK RATING WISATA FAVORIT </h3>Berikut adalah 5 top rating wisata di Jawa Timur.<br />
<br>
<html>
<head>
	<title>Membuat Grafik Dengan Menggunakan Chart.js - www.malasngoding.com</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<style type="text/css">
		body{
			font-family: roboto;
		}
	</style>
 
	<div style="width: 100%%;height: 500px">
		<canvas id="myChart"></canvas>
	</div>
 
 	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Jatim Park 2", "Gunung Ijen Banyuwangi", "Pantai Blimbingsari", "Trans Studio XII", "Gunung Bromo", "Jembatan Wangi"],
				datasets: [{
					label: '# of Votes',
					data: [200, 195, 500, 350, 275, 345],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>
@endsection

