<?php 
session_start();
session_destroy();
header("Location: proweb_sesion.php");
exit();
 ?>