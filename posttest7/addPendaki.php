<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                document.location.href = 'login.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaki</title>
    <link rel="stylesheet" href="stylesheet/addpendaki.css">
</head>
<body>
    <img src="img/hiking.png" alt="" class="hiking">
    <div class="form_pendakian">
        <h1>FORMULIR PENDAKIAN</h1>
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <input type="text" name="namaPendaki" class="form_data" placeholder="Nama Lengkap" autocomplete="off" required></input><br>
            <input type="text" name="ttlPendaki" class="form_data" placeholder="Tempat, Tanggal Lahir" autocomplete="off" required></input><br>
            <input type="text" name="daerah" class="form_data" placeholder="Asal Daerah" autocomplete="off" required></input><br>
            <input type="text" name="ortu" class="form_data" placeholder="Nama Orang Tua" autocomplete="off" required></input><br>
            <input type="text" name="grup" class="form_data" placeholder="Nama Grup/Rombongan" autocomplete="off" required></input><br>
            <input type="text" name="Notelepon" class="form_data" placeholder="Nomor Telepon" autocomplete="off" required></input><br>
            <input type="text" name="gunung" class="form_data" placeholder="Nama Gunung" autocomplete="off" required></input><br>
            <!-- <input type="text" name="status" class="form_data" placeholder="Status Pendakian (On Track)" autocomplete="off" required></input><br> -->
            <label for="">Tanggal Naik : </label><br>
            <input type="date" name="tgl_naik" class="form_data" placeholder="Tanggal Naik" autocomplete="off" required></input><br>
            <label for="">Tanggal Turun : </label><br>
            <input type="date" name="tgl_turun" class="form_data" placeholder="Tanggal Turun" autocomplete="off" required></input><br>
            <input type="file" name="gambar" class="form_data" placeholder="Masukkan Foto Anda" required></input><br>
            <button type="submit" name="kirim" class="tombol_kirim" value="kirim">KIRIM</button>
        </form>
    </div>
</body>
</html>


<?php
    require 'koneksi.php';

    //CREATE
    if (isset($_POST['kirim'])){
        $namaPendaki = $_POST['namaPendaki'];
        $ttl = $_POST['ttlPendaki'];
        $daerah = $_POST['daerah'];
        $ortu = $_POST['ortu'];
        $grup = $_POST['grup'];
        $telepon = $_POST['Notelepon'];
        $gunung = $_POST['gunung'];
        // $status = $_POST['status'];
        $naik = $_POST['tgl_naik'];
        $turun = $_POST['tgl_turun'];


        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$namaPendaki.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'img/'.$gambar_baru)){
            $kirim = mysqli_query($koneksi, "INSERT INTO `datapendaki` VALUES ('','$namaPendaki','$ttl','$daerah','$ortu','$grup','$telepon','$gunung','$naik','$turun','$status','$gambar_baru')");
            if($kirim){
                echo "<script> alert('Data Berhasil Dikirim');
                window.location = 'index.php';
                </script>";
                // header("Location:index.php");
            }else {
                echo "gagal mengirim";
            }
        }
    }
?>
