<?php
// error_reporting(0);
require 'connect.php';

$records = array();

$result = $db->query("SELECT * FROM forecast_hujan");

if ($result) {
	if ($result->num_rows){
		while ($row = $result->fetch_object()){
			$records[] = $row;
		}
		$result->free();
	}
}

if (isset($_POST['prediksi'])){

		if (count($records) >= 3){

			$tiga = $db->query("SELECT curah FROM forecast_hujan ORDER BY id DESC LIMIT 3");

			while($tigaFetch = $tiga->fetch_object()) {
				$arrTiga[] = $tigaFetch;
			}
			foreach($arrTiga as $t) {
				$a[] = $t->curah;
			}

			$t1 = $a[0];
			$t2 = $a[1];
			$t3 = $a[2];

			$averageTiga = round((($t1 + $t2 + $t3) / 3), 2);

			$insertForecast3 = $db->query("INSERT INTO forecast_hujan (forecast) VALUES ('$averageTiga')");
			if ($insertForecast3) {
				echo "<script>window.location.replace('http://localhost/peramalan-hujan/index.php')</script>";
			}

		} else {
			echo "DATA KURANG DARI 3";
		}
}

if (count($records) < 3 ) {
	if (isset($_POST['input'])){

		$inputData = $_POST['inputData'];
		$input = $db->query("INSERT INTO forecast_hujan (curah) VALUES ('$inputData')");

		if ($input) {
echo "<script>window.location.replace('http://localhost/peramalan-hujan/index.php')</script>";
		}

	}
}

$cekFore3 = $db->query("SELECT forecast from forecast_hujan ORDER BY id DESC LIMIT 1");

		while($data3 = $cekFore3->fetch_object()){
			$d3[] = $data3;
		}
		foreach ($d3 as $val3 ) {
			$l3 = $val3->forecast;
		} // LAST FORECAST VALUE 3

		$lastVal3 = $l3;


if(isset($_POST['input'])){
	
}


if(isset($_POST['input'])) {
	if($lastVal3 == 0) {
		echo "<script>
					alert('Harap Lihat Forecast Lebih Dulu Sebagai Acuan');
				</script>";
	}
	if (count($records) > 6) {

						$inputData = $_POST['inputData'];

						$mad3 = round( (abs( $inputData - $lastVal3)), 2);
						$mse3 = round(($mad3 * $mad3), 2);

						$mape3 = round((100 * ($mad3 / $inputData)), 2);
					

						$input = $db->query("UPDATE forecast_hujan
																		SET curah = '$inputData',
																				mad_3 = '$mad3',
																				mse_3 = '$mse3',
																				mape_3 = '$mape3'
																				WHERE curah = 0") ;

						if ($input) {
							echo "<script>
											alert('Data Aktual Berhasil diupdate');
										</script>";

echo "<script>window.location.replace('http://localhost/peramalan-hujan/index.php')</script>";						}



	} 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css"> -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script>
		function showPrompt() {
			var x;
	        var site = prompt("Masukkan Data", "");
        	if (site != null) {
            	x = site;
            	document.getElementById("demo").value = x;
			}
		}
	</script>
</head>
<body>

	<div class="limiter">
		<h1 class="judul">Moving Average</h1>
		<p class="subJudul">Peramalan Curah Hujan</p>



		<div class="container-table100">
			<div class="wrap-table100">
				<?php if (!count($records)) {
					echo "<p class='subJudul'> No Records </p>";
				} else {
				?>
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Bulan</th>
								<th class="column2">Curah Hujan</th>
								<th class="column3">Peramalan</th>
								<th class="column5">MAD</th>
								<th class="column7">MSE</th>
								<th class="column9">MAPE</th>
								<th class="column10">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($records as $r) { ?>

								<tr>
									<td class="column1"><?php echo $i; ?></td>
									<td class="column2"><?php echo $r->curah . " milimeter"; ?></td>
									<td class="column3"><?php echo $r->forecast; ?></td>
									<td class="column5"><?php echo $r->mad_3; ?></td>
									<td class="column7"><?php echo $r->mse_3; ?></td>
									<td class="column9"><?php echo $r->mape_3; ?></td>
									<td class="column10"><a href="hapusdata.php?id=<?php echo $r->id; ?>"><button type="button" class="btn btn-danger">Hapus Data</button>
									
								</tr>
								<?php $i++ ?>
							<?php } ?>

						</tbody>
					</table>
				</div>

				<?php } ?>

					<div class="nengah">
						<form action="" method="post">
							<input id="demo" type="hidden" name="inputData" value=""></input>
							<button class="purple-bg" name="input" onclick="showPrompt()">Masukan Data Baru</button>
							<button class="purple-bg" name="prediksi">Prediksi Bulan Depan</button>
					</div>

				</div>
			</div>
		</div>



	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
