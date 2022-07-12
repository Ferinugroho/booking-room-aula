<?php
//memulai sesi
session_start();
$sesi = $_SESSION['sesiuser']; 
$level = $_SESSION['level_user'];
$no_id=$_SESSION['id_user'];
if(empty($sesi)):
	echo "<script>alert('Anda tidak memiliki sesi.');location.href='index.php';</script>";
	exit();
endif;

?>