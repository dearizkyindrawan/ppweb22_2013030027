<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>volume balok</title>
</head>
<body>
	<h3>isi data</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<table>
		<tr>
			<td>panjang</td>
			<td><input type="text" name="panjang" required></td>
			<tr><td>lebar:</td>
			<td><input type="text" name="lebar" required></td></tr>
			<td>tinggi:</td><td><input type="text" name="tinggi" required></td>
			<tr><td><input type="submit" name="submit" value="hitung"></td></tr>
		</tr>
	</table>
	</form>
	<?php 
		if (isset($_POST['submit'])) {
			$panjang =$_POST['panjang'];
			$lebar =$_POST['lebar'];
			$tinggi =$_POST['tinggi'];
			//menghitung volum balok
			$volume_balok =$panjang*$lebar*$tinggi;

			//output
			echo "maka volume balok [$panjang x $lebar x $tinggi]= $volume_balok";
		}
	 ?>
</body>
</html>