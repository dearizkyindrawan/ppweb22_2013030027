<?php
include ‘class_matematika.php’;
$math = new matematika();
$jari = 10;
$kel_lingkaran = $math keliling_→ lingkaran($jari);
$luas_lingkaran = $math→luas_lingkaran($jari);
echo “Menghitung Keliling dan Luas Lingkaran<br>”;
echo “JariJari
: ”.$jari.”<br>”;
echo “Keliling = ”.$kel_lingkaran.”<br>”;
echo “Luas = ”.$luas_lingkaran;
?>