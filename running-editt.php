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
		  <li><a href="admin.php">Setting Jadwal</a></li>
		  <li><a class="active" href="running-edit.php">Setting Running Teks</a></li>
		  <li style="float:right"><a class="logout" href="logout.php">Logout</a></li>
		</ul>
		
		<br>
		
		<div class="w3-container">
			<form action="running-edit.php" method="POST">
				<input type="text" class="w3-input" name="input-running" value="<?php echo $text; ?>"><br>
				<input type="submit" class="w3-btn w3-right" name="submit-running" value="simpan">
			</form>
		</div>
		
		<footer class="example1">
			<h3><?php echo $text; ?></h3>
		</footer>
	</body>
</html>
