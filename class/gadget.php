<?php 
	class gadget{
		function __construct(){
			echo "wellcome gadged <br>";
		}
		public $color = 'red';
		function layar($size='10',$jenis='amoled'){
				echo "size:".$size;
				echo "<br>jenis:".$jenis;
				echo "<br>warna: ".$this->color;
				echo "<br><br>";
		}
		function processor($speed,$vendor){
			echo "speed:".$speed;
			echo "<br>vendor:".$vendor;
		}
	}
	echo 'layar<br>';
	$hp = new gadget;
	$hp->layar('x');
	$hp->color = 'silver';
	$hp->layar(10,'ips');
	$hp->layar(15,'ipa');
	$hp->layar(6,'tft');

	$hp->processor('1800','intel i5');
 ?>