<?php 
    require 'koneksi.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($koneksi, "SELECT * FROM datapendaki WHERE id_pendaki = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $status = $_POST['status'];

        $update = mysqli_query($koneksi, "UPDATE datapendaki SET status_pendakian='$status' WHERE id_pendaki='$id'");

        if($update){
            header("Location:admin.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="stylesheet/crud.css">
</head>
<body>
    <div class="form-class">
        <h3 class="judul-edit">Edit Data Pendaki</h3>
        <form action="" method="post">
            <label for="">Status Pendakian</label><br>
            <input type="text" name="status" autocomplete="off" required class="form-text" value=<?=$row['status_pendakian'];?>><br>
            
            <input type="submit" name="submit" value="Update" class="btn-submit">
        
        </form>
    </div>

</body>
</html>