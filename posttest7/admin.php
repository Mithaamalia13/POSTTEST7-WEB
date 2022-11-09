<?php 
    require 'koneksi.php';
    date_default_timezone_set("Asia/Singapore"); 
    $result = mysqli_query($koneksi, "SELECT * FROM datapendaki");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="stylesheet/crud.css">
</head>

<body>
    <!-- lihat Data -->
    
    <h3 class="judul"><a href="index.php"><img src="img/logoatas.png" alt="Logo" class="logo"></a>DATA PENDAKI GUNUNG <a href="index.php"><img src="img/logoatas.png" alt="Logo2" class="logo"></a></h3>
    <form action="admin.php" method="GET" >
        <input type='text' name="cari" id="cari" placeholder="Cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
        <button type="submit" name="search">CARI</button>
        <button class='tambah'><a href="addPendaki.php" class='add'>TAMBAH DATA</a></button>
    </form>

    <div class="info_pendaki">
        <table>
            <tr class="info_data">
                <th>NO</th>
                <th>Nama Pendaki</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Asal Daerah</th>
                <th>Nama Orang Tua</th>
                <th>Nama Grup</th>
                <th>Nomor Telepon</th>
                <th>Nama Gunung</th>
                <th>Tanggal Naik</th>
                <th>Tanggal Turun</th>
                <th>Status Pendakian</th>
                <th>Foto</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
        
            include 'koneksi.php';
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $query = "SELECT * FROM datapendaki WHERE nama LIKE '%".$cari."%' or nama_ortu LIKE '%".$cari."%' or nama_grup LIKE '%".$cari."%' or gunung LIKE '%".$cari."%' or status_pendakian LIKE '%".$cari."%' or tgl_naik LIKE '%".$cari."%' or tgl_turun LIKE '%".$cari."%'";			
                }else{
                    $query = "SELECT * FROM datapendaki";		
                }
                $i = 1;
                $result = mysqli_query($koneksi, $query);
                while($row = mysqli_fetch_array($result)){
            ?>

            <tr class="isi">
                <td><?=$i;?></td>
                <td nowrap><?=$row['nama']?></td>
                <td><?=$row['ttl']?></td>
                <td><?=$row['asal_daerah']?></td>
                <td><?=$row['nama_ortu']?></td>
                <td><?=$row['nama_grup']?></td>
                <td><?=$row['telepon']?></td>
                <td><?=$row['gunung']?></td>
                <td><?=$row['tgl_naik']?></td>
                <td><?=$row['tgl_turun']?></td>
                <td>
                    <?php 
                        if($row['tgl_turun'] <= date("Y-m-d")){
                            echo'Selesai';
                        }else {
                            echo'On-Track';
                        }
                    ?>
                </td>
                <td><img src="img/<?=$row['foto']?>" alt="" width="100px"></td>
                <td class="edit">
                    <a href="updatePendaki.php?id=<?=$row['id_pendaki'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>
                    </a>
                </td>
                <td class="hapus">
                    <a href="deletePendaki.php?id=<?=$row['id_pendaki'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </a>
                </td>
            </tr>

            <?php
                $i++;
                }
            ?>

        </table>
    </div>
</body>
</html>