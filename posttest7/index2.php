<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                document.location.href = 'index.php';
            </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MounTravelers</title>
  <link rel="stylesheet" href="stylesheet/style.css">
</head>
<body>
  <header>
    <div class="container">
      <img src="img/logoatas.png" alt="Logo" class="logo">
      <div class="logo-text">MounTravelers</div>
      <nav>
        <ul>
          <li>HOME</li>
          <li><a href="addPendaki.php">TAMBAH DATA</a></li>
          <li><a href="admin.php">DATA PENDAKI</a></li>
          <li><img id="dark-mode" src="img/moon.png" alt=""></li>
        </ul>
      </nav>
      <a id="Login" class="login" href="Logout.php">LOGOUT</a>
    </div>
    <div class="header-text">
      <h1>With the mountains <br> reaching for the clouds</h1>
      <p>we believe in a travelling experience by providing our to plan that suits your the best!</p>
      <a class="explore" href="#exploreNow">EXPLORE NOW</a>
    </div>
  </header>
  <section id="exploreNow" class="main">
    <div class="card">
      <img src="img/merbabu.png" alt="">
      <div class="card-body">
        <h3>GUNUNG MERBABU</h3> 
        <p>Jawa Tengah</p>
      </div>
      <div class="card-footer">
        <a class="lihat" href="addPendaki.php">HIKING</a>
      </div>
    </div>
    <div class="card">
      <img src="img/rinjani.png" alt="">
      <div class="card-body">
        <h3>GUNUNG RINJANI</h3> 
        <p>Nusa Tenggara Barat</p>
      </div>
      <div class="card-footer">
        <a class="lihat" href="">HIKING</a>
      </div>
    </div>
    <div class="card">
      <img src="img/semeru.png" alt="">
      <div class="card-body">
        <h3>GUNUNG SEMERU</h3> 
        <p>Jawa Timur</p>
      </div>
      <div class="card-footer">
        <a class="lihat" href="">HIKING</a>
      </div>
    </div>
  </section>

  <section id="aboutM" class="about">
    <div class="show">SHOW MORE</div>
    <div class="about-me">
      <div class="sec1">
        <h1>About MounTravelers</h1>
        <img src="img/about.png" alt="about">
      </div>
      <p><b>Mount Travelers</b> memberikan pengalaman mendaki gunung yang lebih baik, dengan perlengkapan yang aman serta di dampingi penunjuk jalan yang akan menemani sepanjang perjalanan jika kalian mau.</p>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-logo">MounTravelers</div>
      <div class="footer-list">
        <ul>
          <li><a href="aboutMe.html">About Me</a></li>
          <li>Contact Us</li>
          <li>Term and Condition</li>
          <li>FAQ</li>
        </ul>
      </div>
  </footer>
  <script src="jQuery.js"></script>
  
</body>
</html>