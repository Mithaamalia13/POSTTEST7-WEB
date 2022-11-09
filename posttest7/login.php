
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MounTravelers</title>
    <link rel="stylesheet" href="stylesheet/Login.css">
</head>
<body>
    <div class="masuk">
        <h1 class="logo_login"><b>LOGIN</b></h1>
        <form action="" method="post">
        <input type="text" name="user" class="form_login" placeholder="Username" autocomplete="off" required></input><br>
        <input type="password" name="pass" class="form_login" placeholder="Password" autocomplete="off" required></input><br>
        <p>Belum memiliki akun? <a href="register.php">SIGN UP</a></p><br>
        <button type="submit" name="login" class="tombol_login">LOGIN</button>
        </form>
    </div>
    
</body>
</html>
<?php
    session_start();
    require 'koneksi.php';
    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM `admin` WHERE username = '$user'";
        $result = $koneksi->query($sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if(password_verify($password, $row['pass'])){
                $_SESSION['login'] = true;
                echo "<script>
                        document.location.href = 'index.php';
                    </script>";
            }
            else{
                echo "<script>alert('Username dan Password Salah');
                        </script>";
            }

        }else{
            echo "<script>
                    alert('Username tidak ada');
                    </script>";
        }
    }
?>