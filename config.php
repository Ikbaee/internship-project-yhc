<?php

$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "submityhc";

$conn    = mysqli_connect($host, $user, $pass, $db);
if ($conn) { //cek koneksi
    //echo("terkoneksi ke database");
}

mysqli_select_db($conn, $db)
?>