<!-- Mengatur waktu default ke zona waktu Indonesia Barat -->
<?php date_default_timezone_set("Asia/Jakarta"); ?>

<!DOCTYPE html>
<html>
	<body>
	<!-- Untuk mencetak jam -->
	<p id="demo" style="text-align:center;font-size:64pt"></p>

	<script>
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
			document.getElementById("demo").innerHTML = zeroHour+hour+':'+zeroMinute+minute+':'+zeroSecond+second;
		}
	</script>

	</body>
</html>
