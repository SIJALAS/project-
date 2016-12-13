<?php
include 'connect.php';


?>
<form method="POST" action="insert.php">
	<label>Nama Dosen</label>
	<input type="text" name="nama-dosen"><br>
	
	<label>Mata Kuliah</label>
	<input type="text" name="mata-kuliah"><br>
	
	<input type="submit" name="save" value="simpan">
</form>
<?php
?>
