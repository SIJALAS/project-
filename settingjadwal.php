<?php
include 'connect.php';

//Ambil data matakuliah
$cek_matkul = "SELECT * FROM matakuliah";
$eksekusi_sql_matkul = mysqli_query($mengoneksikan, $cek_matkul);
$indeks = 0;

while($matkul = mysqli_fetch_assoc($eksekusi_sql_matkul)) {
	$daftar_matkul[$indeks] = $matkul["nama_matkul"];
	$indeks++;
}

$jml_matkul = count($daftar_matkul);
sort($daftar_matkul);

//Ambil data keterangan
$cek_keberlangsungan = "SELECT * FROM keberlangsungan";
$eksekusi_sql_keberlangsungan = mysqli_query($mengoneksikan, $cek_keberlangsungan);
$indeks = 0;

while($keberlangsungan = mysqli_fetch_assoc($eksekusi_sql_keberlangsungan)) {
	$daftar_keberlangsungan[$indeks] = $keberlangsungan["nama_ket"];
	$indeks++;
}



$jml_keberlangsungan = count($daftar_keberlangsungan);
sort($daftar_keberlangsungan);

//Ambil data dosen
$cek_dosen = "SELECT * FROM nama_dosen";
$eksekusi_sql_dosen = mysqli_query($mengoneksikan, $cek_dosen);
$indeks = 0;

while($dosen = mysqli_fetch_assoc($eksekusi_sql_dosen)) {
	$daftar_dosen[$indeks] = $dosen["nama_dosen"];
	$indeks++;
}

$jml_dosen = count($daftar_dosen);
sort($daftar_dosen);

function cobaFunc() {
	echo "Ini informasi penting!";
}

date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Jadwal Kelas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="w3-light-grey w3-content" style="max-width:1600px">

	</ul>
	<br>
		  <span class="w3-margin-right">Hari :</span>
		  <button class="w3-btn w3-white">Senin</button>
		  <button class="w3-btn w3-white">Selasa</button>
		  <button class="w3-btn w3-white">Rabu</button>
		  <button class="w3-btn w3-white">Kamis</button>
		  <button class="w3-btn w3-white">Jum'at</button>
		  <span style="float:right" >
			<?php echo  date("l, "); ?>
			<span id="jam"></span>
		</span>
	</br>

	<br>
		  <span class="w3-margin-right">Jam ke:</span>
			 <select class="w3-input w3-select">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
	<br></br>
	<!-- First Grid-->
	  <div class="w3-row-padding ">
		<div class="w3-quarter w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			  <form method="POST" action="admin.php">
				<p><b>101</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
		<div class="w3-quarter w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>102</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
		<div class="w3-quarter w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>103</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
	 <div class="w3-quarter w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>104</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
	  </div>
	  
	  <!-- Second Grid-->
	  <div class="w3-row-padding">
		<div class="w3-quarter w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>105</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
		<div class="w3-quarter w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>106</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
		<div class="w3-quarter w3-container">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>107</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
		<div class="w3-quarter w3-container">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>108</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
	  </div>

	  <!-- third Grid-->
	  <div class="w3-row-padding">
		<div class="w3-third w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>AULA</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
		<div class="w3-third w3-container w3-margin-bottom">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>LPSI 1</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>
		<div class="w3-third w3-container">
		  <div class="w3-container w3-white">
			<form method="POST" action="admin.php">
				<p><b>LPSI 2</b></p>
				<p>
					Matakuliah:
	<form action="action_page.php">
		  <input list="browsers">
		  	<datalist id="browsers">
			   		<?php
						
						for($i=0;$i<$jml_matkul;$i++) {
							$cetak_matkul = $daftar_matkul[$i];
							
							?>
							<option value="<?php echo $cetak_matkul; ?>"><?php
						}
						?>
		  </datalist> 
	</form>
				</p>
				<p>
					Nama Dosen:
					<input list="dosen" class="w3-input">
					<datalist id="dosen">
						<?php
						
						for($i=0;$i<$jml_dosen;$i++) {
							$cetak_dosen = $daftar_dosen[$i];
							
							?>
							<option value="<?php echo $cetak_dosen; ?>"><?php
						}
						?>
					</datalist>
				</p>
				<p>
					Keterangan:
					<select class="w3-input w3-select">
						<?php
						for($i=0;$i<$jml_keberlangsungan;$i++) {
							$cetak_keberlangsungan = $daftar_keberlangsungan[$i];?>
							<option value="<?php echo $cetak_keberlangsungan; ?>"><?php echo $cetak_keberlangsungan; ?></option><?php
						}
						?>
					</select>
				</p>
				<input class="w3-btn" type="submit" value="Simpan">
			  </form>
		  </div>
		</div>

	  
	<!-- End page content -->
	</div>
	
	<!-- Running text -->
	<footer class="example1">
		<h3><?php cobaFunc() ?></h3>
	</footer>
	<script>
		var jam = '<?php echo date("h"); ?>';
		var menit = '<?php echo date("m"); ?>';
		var detik = '<?php echo date("s"); ?>';
	</script>
	</body>

</html>
