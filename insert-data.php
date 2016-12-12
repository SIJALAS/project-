<?php
function insert() {
	$insert_sql = "INSERT INTO panel_tampil (id_hari, id_sesi, id_ruang, id_matakuliah, id_dosen, kelas_matkul, keterangan) VALUES ('$id_hari','$id_sesi','$id_ruang','$id_matakuliah','$id_dosen','$id_kelas','$keterangan')";
	$eksekusi_sql_insert = mysqli_query($mengoneksikan, $insert_sql);
			
	if($eksekusi_sql_insert) {
		header('Location: admin.php?hari='.$nama_hari.'&sesi='.$id_sesi);
	}
}
?>
