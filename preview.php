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
		  <li><a class="active" href="preview.php">Preview</a></li>
		  <li><a href="admin.php">Setting Jadwal</a></li>
		  <li><a href="running-edit.php">Setting Running Teks</a></li>
		  <li style="float:right"><a class="logout" href="logout.php">Logout</a></li>
		</ul>
		
		<br>
		
		<!-- First and Second Grid-->
		<div class="w3-row-padding">			
			<div class="w3-half">
				<span class="w3-quarter w3-padding">Pilih hari: </span>
				<select id="hari" onchange="gantiHari()" class="w3-input w3-select w3-threequarter">
					  <option value="Senin" id="Senin">Senin</option>
					  <option value="Selasa" id="Selasa">Selasa</option>
					  <option value="Rabu" id="Rabu">Rabu</option>
					  <option value="Kamis" id="Kamis">Kamis</option>
					  <option value="Jumat" id="Jumat">Jum'at</option>
				</select>
			</div>
			
			<div class="w3-half">
				<span class="w3-quarter w3-padding">Pilih sesi: </span>
				<select id="sesi" onchange="gantiSesi()" class="w3-input w3-select w3-threequarter">
					  <option value="1" id="1">1</option>
					  <option value="2" id="2">2</option>
					  <option value="3" id="3">3</option>
					  <option value="4" id="4">4</option>
				</select>
			</div>
		</div>
		
		<br>
		
		<!-- First Grid -->
		<div class="w3-row-padding ">
			<?php
			for($i=0;$i<4;$i++) {
				?>
				<div class="w3-quarter w3-container w3-margin-bottom">
					<div class="w3-container <?php if($keteranganSekarang[$i]!="Ada") { echo "w3-red"; } else { echo "w3-green"; } ?>">
						<p><b><?php echo $panelRuang[$i];?></b></p>
							
						<p class="w3-center" style="font-weight:bold">
							<?php echo $kuliahSekarang[$i]; ?><br>
							[<?php echo $kelasSekarang[$i]; ?>]
						</p>
							
						<p class="w3-center">
							<i><?php echo $dosenSekarang[$i]; ?></i>
						</p>
							
						<p class="w3-center">
							<i><?php echo $keteranganSekarang[$i]; ?></i>
						</p>
					</div>
				</div>
				<?php
			}
			?>
		</div>
		
		<!-- First Second -->
		<div class="w3-row-padding ">
			<?php
			for($i=4;$i<8;$i++) {
				?>
				<div class="w3-quarter w3-container w3-margin-bottom">
					<div class="w3-container <?php if($keteranganSekarang[$i]!="Ada") { echo "w3-red"; } else { echo "w3-green"; } ?>">
						<p><b><?php echo $panelRuang[$i];?></b></p>
							
						<p class="w3-center" style="font-weight:bold">
							<?php echo $kuliahSekarang[$i]; ?><br>
							[<?php echo $kelasSekarang[$i]; ?>]
						</p>
							
						<p class="w3-center">
							<i><?php echo $dosenSekarang[$i]; ?></i>
						</p>
							
						<p class="w3-center">
							<i><?php echo $keteranganSekarang[$i]; ?></i>
						</p>
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
					<div class="w3-container <?php if($keteranganSekarang[$i]!="Ada") { echo "w3-red"; } else { echo "w3-green"; } ?>">
						<p><b><?php echo $panelRuang[$i];?></b></p>
							
						<p class="w3-center" style="font-weight:bold">
							<?php echo $kuliahSekarang[$i]; ?><br>
							[<?php echo $kelasSekarang[$i]; ?>]
						</p>
							
						<p class="w3-center">
							<i><?php echo $dosenSekarang[$i]; ?></i>
						</p>
							
						<p class="w3-center">
							<i><?php echo $keteranganSekarang[$i]; ?></i>
						</p>
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
		<footer class="example1">
			<h3><?php echo $text; ?></h3>
		</footer>
		<script>
			var tiada = document.getElementsByClassName('tiada');
			var ada = document.getElementsByClassName('ada');
			
			function gantiHari() {
				var hari = document.getElementById("hari").value;
		
				window.open("preview.php?hari="+hari+"&sesi=<?php echo $sesi; ?>","_self");
			}
			
			function resetHari() {
				document.getElementById("Senin").selected = "false";
				document.getElementById("Selasa").selected = "false";
				document.getElementById("Rabu").selected = "false";
				document.getElementById("Kamis").selected = "false";
				document.getElementById("Jumat").selected = "false";
			}
			
			function setHari(hari) {
				resetHari();
				
				document.getElementById(hari).selected = "true";
			}
			
			setHari("<?php echo $hari; ?>");
				
			function gantiSesi() {
				var sesi = document.getElementById("sesi").value;
		
				window.open("preview.php?hari=<?php echo $hari; ?>&sesi="+sesi,"_self");
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
					resetKeterangan();
				}
				
				console.log(indeks);
			}
			
			resetKeterangan();			
		</script>
		
		<?php
		for($i=0;$i<11;$i++) {
			if(isset($id_kelas[$i])) {
				?><script>setKeterangan("<?php echo $keteranganSekarang[$i]; ?>",<?php echo $id_kelas[$i]-1; ?>);</script><?php
			}
		}
		?>
	</body>
</html>
