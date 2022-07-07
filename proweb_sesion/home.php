<?php 
session_start();


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
echo $nama.' '.$alamat.' '.$jenis;
$_SESSION['nama'] = $nama;
 ?>
 <br>
<a href="proweb_sesion.php">halaman utama</a>
<a href="destroy.php">destroy session</a>