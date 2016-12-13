<?php session_start(); ?>

<!DOCTYPE html>
<!-- Mengatur waktu default ke zona waktu Indonesia Barat -->
<?php
date_default_timezone_set("Asia/Jakarta");

include 'connect.php';
include 'get-data.php';

//Menambahkan library untuk login dan logout
include 'login-logout-library.php';

if(isset($_SESSION['admin'])) {
	header('Location: admin.php');		//Menampilkan halaman admin
} else {
	;
}

//Menjalankan fungsi login ketika login sudah dilakukan
if(isset($_POST["login"])) {
	loggingIn();
}
?>
<html>
<title>Sijalas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<head>

<style>

/* Ini style awal untuk Login */

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}



/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}


.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 20px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

/* Ini style akhir untuk Login */



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color:rgb(100,100,255);
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 7px 8px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}
li a.login {
    color: white;
    background-color:rgb(50,100,255);
}
</style>
<style style="text/css">
	.example1 {
	 height: 50px; 
	 overflow: hidden;
	 position: relative;
	}
	.example1 h3 {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 margin: 0;
	 line-height: 50px;
	 text-align: center;
	 
	 /* Starting position: PANEL KELAS */
	 -moz-transform:translateX(100%);
	 -webkit-transform:translateX(100%); 
	 transform:translateX(100%);
	 /* Apply animation to this element */ 
	 -moz-animation: example1 15s linear infinite;
	 -webkit-animation: example1 15s linear infinite;
	 animation: example1 15s linear infinite;
	}
	/* Move it (define the animation) */
	@-moz-keyframes example1 {
	 0%   { -moz-transform: translateX(100%); }
	 100% { -moz-transform: translateX(-100%); }
	}
	@-webkit-keyframes example1 {
	 0%   { -webkit-transform: translateX(100%); }
	 100% { -webkit-transform: translateX(-100%); }
	}
	@keyframes example1 {
	 0%   { 
	 -moz-transform: translateX(100%); /* Firefox bug fix */
	 -webkit-transform: translateX(100%); /* Firefox bug fix */
	 transform: translateX(100%);   
	 }
	 100% { 
	 -moz-transform: translateX(-100%); /* Firefox bug fix */
	 -webkit-transform: translateX(-100%); /* Firefox bug fix */
	 transform: translateX(-100%); 
	 }
	}
</style>
<meta http-equiv="refresh" content="5">
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px;margin-top:0;padding-top:0;">
<nav id="menu" class="w3-sidenav w3-blue w3-animate-right w3-large w3-card-2 w3-quarter" style="right:0;top:0;display:none">
	<div class="w3-row">
		<span><b class="w3-xlarge w3-padding" style="top:10%">SI ITS</b></span><a href="#" class="w3-padding w3-large w3-right w3-red w3-hover-red" onclick="w3_close()">&times;</a>
		<img src="logo2.png" width="100%">
	</div>
	<a href="index.php" class="w3-padding-8">Home</a>
	<a href="#" class="w3-padding-8" onclick="w3_close();document.getElementById('id01').style.display='block'">Login</a>
	<a href="http://share.its.ac.id/" class="w3-padding-8" target="_blank">Share ITS</a>
	<a href="http://si.its.ac.id/" class="w3-padding-8" target="_blank">Profil Jurusan Sistem Informasi ITS</a>
</nav>

<header>
<h1><b><center>Sistem Informasi Jadwal Kelas</center></b></h1>
</header>

<ul>
  <li onclick="w3_open()"style="float:right"><a class="w3-green w3-xlarge w3-padding" href="#"><b>&#9776;</b></a></li>
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input class="w3-input" type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input class="w3-input" type="password" placeholder="Enter Password" name="password" required>
        
      <input class="w3-btn w3-green w3-padding-8 w3-large" type="submit" value="login" name="login">
    </div>
  </form>
</div>

</ul>
<br>
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
		
		<!-- Second Grid -->
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
		
		<div id="demo" style="text-align:center;font-size:64pt"></div>
      
<!-- End page content -->
</div>

<script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    //JAM ANALOG 
   //Mengambil waktu dari server
    var hour = <?php echo date("H"); ?>;
    var minute = <?php echo date("i"); ?>;
    var second = <?php echo date("s"); ?>;
    
    //Untuk memanggil fungsi setiap satu detik (1 detik = 1000 milidetik)
    var myVar = setInterval(function(){ myTimer() }, 1000);
    
    //Fungsi yang dipanggil
    function myTimer() {
      //Tambahan agar muncul angka 0 meskipun inkremen dilakukan - BUKA
      var zeroSecond = '';
      var zeroMinute = '';
      var zeroHour = '';
      
      if(second < 9) {
        zeroSecond = '0';
      }
      
      if(minute < 9) {
        zeroMinute = '0';
      }
      
      if(hour < 9) {
        zeroHour = '0';
      }
      //Tambahan agar muncul angka 0 meskipun inkremen dilakukan - TUTUP
      
      //Untuk melakukan inkremen
      if(second == 59) {
        second = 0;
        
        if(minute < 59) {
          minute++;
        } else {
          minute = 0;
          
          if(hour < 23) {
            hour++;
          } else {
            hour = 0;
          }
        }
      } else {
        second++;
      }
      
      //Untuk mencetak ke halaman
      document.getElementById("demo").innerHTML = zeroHour+hour+':'+zeroMinute+minute;
    }
      
</script>

<script>
			
			var tiada = document.getElementsByClassName('tiada');
			var ada = document.getElementsByClassName('ada');
				
			function gantiSesi() {
				var sesi = document.getElementById("sesi").value;
		
				window.open("index.php?hari=<?php echo $hari; ?>&sesi="+sesi,"_self");
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
			
			function gantiHari() {
				var hari = document.getElementById("hari").value;
		
				window.open("index.php?hari="+hari+"&sesi=<?php echo $sesi; ?>","_self");
			}
			
			function resetHari() {
				document.getElementById("Senin").selected = "false";
				document.getElementById("Selasa").selected = "false";
				document.getElementById("Rabu").selected = "false";
				document.getElementById("Kamis").selected = "false";
				document.getElementById("Jumat").selected = "false";
			}
			
			function setHari(hariSet) {
				resetHari();
				
				document.getElementById(hariSet).selected = "true";
			}
			
			
			
			setHari("<?php echo $hari; ?>");
			setSesi(<?php echo $sesi; ?>);
			
			function w3_open() {
				document.getElementById("menu").style.display = "block";
			}
			function w3_close() {
				document.getElementById("menu").style.display = "none";
			}
		</script>

<footer class="">
<h3><marquee scrolldelay="100"><?php echo $text; ?></marquee></h3>
</footer>


</body>
</html>
