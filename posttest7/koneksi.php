<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "mountravelers";

$koneksi = new mysqli($server, $username, $password, $db_name);

// $koneksi = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_error($koneksi));

if(!$koneksi){
    die("Gagal terhubung");
}

?>