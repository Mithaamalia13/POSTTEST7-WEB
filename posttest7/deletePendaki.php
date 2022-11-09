<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM datapendaki WHERE id_pendaki='$id'");

    if($hapus){
        header("Location:admin.php");
    }
}

?>