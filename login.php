<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="assets/images/VulcanWeb3.png" rel="icon">
  <link href="assets/images/VulcanWeb3.png" rel="apple-touch-icon">

  <title>VolcanWEB</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/VulcanWeb.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <body>

    <div class="login-box">
      <a href="cek_login.php"><i class="icofont icofont-user"></i></a>
      <h2>LOGIN</h2>
      <strong>
        <?php
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username dan password salah!";
          } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout!";
          } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
          }
        }
        ?>
      </strong>
      <br><br>
      <center>
        <form method="POST" action="cek_login.php">
          <table>
            <tr>
              <td>
                <h6>USERNAME</h6>
                <input type="text" name="username" placeholder="Username" style="width:300px; color: black;">
              </td>
            </tr>
            <tr>
              <td>
                <h6>PASSWORD</h6>
                <input type="password" name="password" placeholder="Password" style="width:300px; color: black;">
              </td>
            </tr>
          </table>
          <div class="login-remember">
            <input type="checkbox" />
            <span>Remember Me</span>
          </div>
          <div>
            <button type="submit" class="theme-btn" name="login">Login</button>
          </div>
          <span>Or Via Social</span>
          <div class="login-social">
            <a href="https://www.facebook.com/"><i class="icofont icofont-social-facebook"></i></a>
            <a href="https://twitter.com/home"><i class="icofont icofont-social-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="icofont icofont-social-instagram"></i></a>
            <a href="https://bit.ly/3OieyuJ"><i class="icofont icofont-brand-line-messenger"></i></a>
            <a href="https://webogram.org/"><i class="icofont icofont-social-telegram"></i></a>
          </div>
        </form>
    </div>
    </div>
    </div><!-- header section end -->
    <br><br><br><br>
    <br>
    </div>
    </center>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright © 2023 <a href="#">VulcanWEB</a> All rights reserved.
              <br>Design: <a href="https://instagram.com/bintangnihh" target="_blank"
                title="free CSS templates">StarSeverus</a>
            </p>
          </div>
        </div>

    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
      $(".option").click(function () {
        $(".option").removeClass("active");
        $(this).addClass("active");
      });
    </script>

  </body>

</html>