<?php

/* 
 * file untuk mengambil data dari database
 * dan mengubahnya ke format json
 * untuk ditampilkan di kalendar.
 */

require 'connection.php';

$query = "SELECT * from agenda ";
$result = mysqli_query($link, $query) or die(mysqli_error());

$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
        "date" => $row["date"],       
        "title" => $row["title"],
        "deskripsi" => $row["deskripsi"]);

    array_push($arr, $temp);}
$data = json_encode($arr);
echo $data
        
?>