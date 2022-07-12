<?php
mysql_connect("localhost", "root");
mysql_select_db("pusri");
$query = "SELECT * from agenda ";
$result = mysql_query($query) or die(mysql_error());

$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
        "date" => $row["date"],       
        "title" => $row["title"],
        "deskripsi" => $row["deskripsi"]);

    array_push($arr, $temp);}
$data = json_encode($arr);
echo $data
?>