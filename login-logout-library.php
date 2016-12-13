<?php

//Fungsi untuk login
function loggingIn() {
	include 'connect.php';
			
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
			
	$sql = mysqli_query($mengoneksikan, "SELECT * FROM akun WHERE username='$username' AND password='$password'");
			
	if(mysqli_num_rows($sql) == 1) {
		$_SESSION["admin"] = true;
			
		header('Location: admin.php');
	} else {
		?><script>window.alert("Login GAGAL! Username atau password tidak terdaftar.")</script><?php
	}
}

//fungsi untuk register admin
function registerAdmin() {
	include 'connect.php';
			
	$username = $_POST['username'];
	$password = md5($_POST['password']);
			
	$query = "INSERT INTO akun (username, password) VALUES ('$username', '$password')";
			
	if(mysqli_query($mengoneksikan, $query)) {				
		echo "Pendaftaran berhasil!";
	} else {
		echo "Pendaftaran gagal!";
	}
}

?>
