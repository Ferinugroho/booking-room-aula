<?php
session_start();
require "../config/connection.php";


$pass=mysql_escape_string(strip_tags($_POST['password']));
$user=mysql_escape_string(strip_tags($_POST['username']));

$data=mysql_query("select id_user, username, level from user where username='$user' and password=md5('$pass')");
list($id_user, $username, $level)=mysql_fetch_row($data);
echo mysql_error();


// Apabila username dan password ditemukan
if (mysql_num_rows($data) > 0):
  //include "timeout.php";
  $_SESSION['id_user']=$id_user;
  $_SESSION['sesiuser']=$username;
  $_SESSION['level_user']=$level;
  echo "<script>alert('Anda berhasil login!'); location.href='../main.php?module=home';</script>";
else:
  include "error-login.php";

endif;
?>