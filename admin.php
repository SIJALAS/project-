<?php
session_start();

include 'connect.php';
include 'get-data.php';
include 'update-data.php';

if(!isset($_SESSION['admin'])) {
	header('Location: index.php');
} else {
	;
}
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
		<header>
		   <h1><b>Informasi Jadwal Kelas</b></h1>
		</header>

		<ul>
		  <li><a href="preview.php">Preview</a></li>
		  <li><a class="active" href="admin.php">Setting Jadwal</a></li>
		  <li><a href="running-edit.php">Setting Running Teks</a></li>
		  <li style="float:right"><a class="logout" href="logout.php">Logout</a></li>
		</ul>
		
		<br>
			  <span class="w3-margin-right">Hari :</span>
			  <a href="admin.php?hari=Senin&sesi=<?php echo $sesi; ?>" class="w3-btn w3-white" id="Senin">Senin</a>
			  <a href="admin.php?hari=Selasa&sesi=<?php echo $sesi; ?>" class="w3-btn w3-white" id="Selasa">Selasa</a>
			  <a href="admin.php?hari=Rabu&sesi=<?php echo $sesi; ?>" class="w3-btn w3-white" id="Rabu">Rabu</a>
			  <a href="admin.php?hari=Kamis&sesi=<?php echo $sesi; ?>" class="w3-btn w3-white" id="Kamis">Kamis</a>
			  <a href="admin.php?hari=Jumat&sesi=<?php echo $sesi; ?>" class="w3-btn w3-white" id="Jumat">Jum'at</a>
		</br>
		
		<br>
			  <span class="w3-margin-right">Jam ke:</span>
			  <select id="sesi" onchange="gantiSesi()" class="w3-input w3-select">
				  <option value="1" id="1">1</option>
				  <option value="2" id="2">2</option>
				  <option value="3" id="3">3</option>
				  <option value="4" id="4">4</option>
			</select>
		<br></br>
		
		<!-- First and Second Grid-->
		<div class="w3-row-padding ">
			<?php
			for($i=0;$i<8;$i++) {
				?>
				<div class="w3-quarter w3-container w3-margin-bottom">
					<div class="w3-container w3-white">
						<form method="POST" action="admin.php?hari=<?php echo $hari; ?>&sesi=<?php echo $sesi; ?>">
							<p><b><?php echo $panelRuang[$i];?></b></p>
							
							<p>
								Matakuliah:
								<input list="matakuliah" class="w3-input" value="<?php echo $kuliahSekarang[$i]; ?>" name="matakuliah">
							</p>
							
							<p>
								Nama Dosen:
								<input list="dosen" class="w3-input" value="<?php echo $dosenSekarang[$i]; ?>" name="dosen">
							</p>
							
							<p>
								Kode Kelas:
								<input list="kode_kelas" class="w3-input" value="<?php echo $kelasSekarang[$i]; ?>" name="kode_kelas">
							</p>
							
							<p>
								Keterangan:
								<select name="keterangan" class="w3-input w3-select">
									<option value="Ada" class="ada">Ada</option>
									<option value="Tidak Ada" class="tiada">Tidak Ada</option>
								</select>
							</p>
							
							<input type="hidden" name="identifier" value="<?php if(isset($identifier[$i])) { echo $identifier[$i]; } else { echo "none"; } ?>">
							<input type="hidden" name="sesi" value="<?php echo $sesi; ?>">
							<input type="hidden" name="hari" value="<?php echo $hari; ?>">
							<input type="hidden" name="ruangan" value="<?php echo $panelRuang[$i]; ?>">
							<input class="w3-btn" type="submit" name="simpan" value="Simpan">
						</form>
					</div>
				</div>
				<?php
			}
			?>
		</div>
		
		<!-- Third Grid-->
		<div class="w3-row-padding ">
			<?php
			for($i=8;$i<11;$i++) {
				?>
				<div class="w3-third w3-container w3-margin-bottom">
					<div class="w3-container w3-white">
						<form method="POST" action="admin.php?hari=<?php echo $hari; ?>&sesi=<?php echo $sesi; ?>">
							<p><b><?php echo $panelRuang[$i]; ?></b></p>
							
							<p>
								Matakuliah:
								<input list="matakuliah" class="w3-input" value="<?php echo $kuliahSekarang[$i]; ?>" name="matakuliah">
							</p>
							
							<p>
								Nama Dosen:
								<input list="dosen" class="w3-input" value="<?php echo $dosenSekarang[$i]; ?>" name="dosen">
							</p>
							
							<p>
								Kode Kelas:
								<input list="kode_kelas" class="w3-input" value="<?php echo $kelasSekarang[$i]; ?>" name="kode_kelas">
							</p>
							
							<p>
								Keterangan:
								<select name="keterangan" class="w3-input w3-select">
									<option value="Ada" class="ada">Ada</option>
									<option value="Tidak Ada" class="tiada">Tidak Ada</option>
								</select>
							</p>
							
							<input type="hidden" name="identifier" value="<?php if(isset($identifier[$i])) { echo $identifier[$i]; } else { echo "none"; } ?>">
							<input type="hidden" name="sesi" value="<?php echo $sesi; ?>">
							<input type="hidden" name="hari" value="<?php echo $hari; ?>">
							<input type="hidden" name="ruangan" value="<?php echo $panelRuang[$i]; ?>">
							<input class="w3-btn" type="submit" name="simpan" value="Simpan">
						</form>
					</div>
				</div>
				<?php
			}
			?>
		</div>
		
		<!-- End page content -->
		<datalist id="matakuliah">
			<?php
			for($i=0;$i<$jml_matkul;$i++) {
				$cetak_matkul = $daftar_matkul[$i];
				?>
				<option value="<?php echo $cetak_matkul; ?>"></option><?php
			}
			?>
		</datalist>
		
		<datalist id="dosen">
			<?php
			for($i=0;$i<$jml_dosen;$i++) {
				$cetak_dosen = $daftar_dosen[$i];
				?>
				<option value="<?php echo $cetak_dosen; ?>"></option>
				<?php
			}
			?>
		</datalist>
		
		<datalist id="kode_kelas">
			<?php
			for($i=0;$i<$jml_kelas;$i++) {
				$cetak_kelas = $daftar_kelas[$i];
				?>
				<option value="<?php echo $cetak_kelas; ?>"></option>
				<?php
			}
			?>
		</datalist>
		
		<!-- Running text -->
		<footer>
			<marquee><?php echo $text; ?></marquee>
		</footer>
		
		<script>
			var tiada = document.getElementsByClassName('tiada');
			var ada = document.getElementsByClassName('ada');
			
			document.getElementById("<?php echo $hari; ?>").className = "w3-btn w3-green";
			
				
			function gantiSesi() {
				var sesi = document.getElementById("sesi").value;
		
				window.open("admin.php?hari=<?php echo $hari; ?>&sesi="+sesi,"_self");
			}
			
			function resetSesi() {
				document.getElementById("1").selected = "false";
				document.getElementById("2").selected = "false";
				document.getElementById("3").selected = "false";
				document.getElementById("4").selected = "false";
			}
			
			function setSesi(sesi) {
				resetSesi();
				
				document.getElementById(sesi).selected = "true";
			}
			
			setSesi(<?php echo $sesi; ?>);
			
			function resetKeterangan() {				
				for(i=0;i<ada.length;i++) {
					ada[i].selected = "false";
				}
				
				for(i=0;i<tiada.length;i++) {
					tiada[i].selected = "true";
				}
			}
			
			function setKeterangan(keterangan, indeks) {				
				if(keterangan=="Ada") {
					tiada[indeks].selected = "false";
					ada[indeks].selected = "true";
				} else {
					ada[indeks].selected = "false";
					tiada[indeks].selected = "true";
				}
			}
			
			resetKeterangan();			
		</script>
		
		<?php
		for($i=0;$i<11;$i++) {
			if(isset($id_kelas[$i])) {
				?><script>setKeterangan("<?php echo $keteranganSekarang[$i]; ?>",<?php echo $id_kelas[$i]-1; ?>)</script><?php
			}
		}
		?>
	</body>
</html>
