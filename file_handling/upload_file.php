<?php 
	$target_dir = "foto/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if ($imageFileType=='jpg'){
	if ($_FILES["fileToUpload"]["size"] < 1024000) {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
		echo "upload file berhasil";
	else
		echo "upload file gagal";}
	else 
		echo "upload gagal, file melebihi 1mb";}
	else
		echo "upload file gagal file harus .jpg "
 ?>