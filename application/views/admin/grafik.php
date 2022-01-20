<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Dengan Menggunakan Chart.js - www.malasngoding.com</title>
	<script type="text/javascript" src="<?php echo base_url().'chartjs/Chart.js'?>"></script>
</head>
<body>
	<style type="text/css">
		body{
			font-family: roboto;
		}
	</style>
<div class="page-header">
  <h3>Grafik Perolehan Suara </h3>
</div>

 <div class="col-lg-4 about-grid">
          <div class="about-grid-main">
                       <div class="form-group">
              <h4 class="my-4">Muchammad Baswaidan Dwi Alfarizi</h4><hr>
              <?php echo form_error('nama_calon '); ?>
            </div>
               <h4>Total Suara Masuk</h4>
            <h3 class="w3ls_pvt-title"><span><h1><?php echo $count; ?></h1></span></h3>
            <h4>Suara</h4>
              </div>
        </div>
        <div class="col-lg-4 about-grid my-lg-0 my-5">
          <div class="about-grid-main">
             
            <div class="form-group">
              <h4 class="my-4">Nadira Rahma Oktafiani</h4><hr>
              <?php echo form_error('nama_calon '); ?>
            </div>
               <h4>Total Suara Masuk</h4>
            <h3 class="w3ls_pvt-title"><span><h1><?php echo $count2; ?></h1></span></h3>
            <h4>Suara</h4>
            </div>
      
      </div>
        <div class="col-lg-4 about-grid my-lg-0 my-5">
          <div class="about-grid-main">
            
            <div class="form-group">
              <h4 class="my-4">Nurul Annisa Sholihah</h4><hr>
              <?php echo form_error('nama_calon '); ?>
            </div>
             <h4>Total Suara Masuk</h4>
            <h3 class="w3ls_pvt-title"><span><h1><?php echo $count3; ?></h1></span></h3>
            <h4>Suara</h4>
        </div>
      
      </div>
    </div><hr>

	<center><div style="width: 700px;height: 600px">
		<canvas id="myChart"></canvas>
	</div>


	

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Muchammad Baswaidan", "Nadira Rahma Oktafiani", "Nurul Annisa Sholihah"],
				datasets: [{
					label: 'Jumlah Suara',
					data: [<?php echo $count; ?>, <?php echo $count2; ?>, <?php echo $count3; ?>],
					backgroundColor: [
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
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

</center>
   
</body>
</html>
