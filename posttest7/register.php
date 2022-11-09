
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MounTravelers</title>
    <link rel="stylesheet" href="stylesheet/register.css">
</head>
<body>
    <div class="daftar">
        <h1 class="logo_daftar"><b>SIGN UP</b></h1>
        <form action="" method="POST" role="form">
        <input type="text" name="nama" class="form_daftar" placeholder="Masukkan Nama" autocomplete="off" required></input><br>
        <input type="text" name="Username" class="form_daftar" placeholder="Username" autocomplete="off" required></input><br>
        <input type="password" name="password1" class="form_daftar" placeholder="Password" autocomplete="off" required></input><br>
        <input type="password" name="password2" class="form_daftar" placeholder="Konfirmasi Password" autocomplete="off" required></input><br>
        <p>Sudah memiliki akun? <a href="login.php">LOGIN</a></p><br>
        <button type="submit" name="sign-up" class="tombol_daftar" value="signup">DAFTAR</button>
        </form>
    </div>
    
</body>
</html>

<?php
    require 'koneksi.php';

    if(isset($_POST['sign-up'])){
        $nama = $_POST['nama'];
        $username = $_POST['Username'];
        $password = $_POST['password1'];
        $konfirmasi = $_POST['password2'];

        $sql = "SELECT * FROM `admin` WHERE username='$username'";
        $user = $koneksi->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('Username telah terdaftar!');
                  </script>";
        }else{
            // konfirmasi password
            if ($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO `admin` (nama, username, pass)
                            VALUES ('$nama', '$username', '$password')";

                $result = $koneksi->query($query);

                if($result){
                    echo "<script>
                        alert('BERHASIL DAFTAR!');
                        </script>";
                }

                else{
                    echo "<script>
                        alert('Gagal');
                        </script>";
                }
            }
            else{
                echo "<script>
                    alert('Konfirmasi Password Tidak Sesuai!');
                    </script>";
            }
        }



    }

?>