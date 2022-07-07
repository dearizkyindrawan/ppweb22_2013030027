
<?php 
session_start() 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>
	<?php 
	if(isset($_SESSION['nama']))
	echo $_SESSION['nama']; 
	?>
	<form name="myform" method="post" action="home.php">
	<h3>nama</h3><input type="text" name="nama">
	<h3>alamat</h3><textarea name="alamat"></textarea>
	<h3>jenis kelamin</h3><select name="jenis">
		<option value="L">laki-laki</option>
		<option value="P">perempuan</option>
	</select>
	<br><br><input type="submit" name="proces" value="simpan">
	</form>
</body>
</html>