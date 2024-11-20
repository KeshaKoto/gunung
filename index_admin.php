<?php
// Memulai session
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
  // Pengguna belum login, arahkan ke halaman login
  header("Location: login.php");
  exit;
}
?>
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
            <a href="index_admin.php" class="logo">
              <img src="assets/images/VulcanWeb.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index_admin.php" class="active">Home</a></li>
              <li><a href="data.php">Data Kejadian</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <br>
      <br>
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h1>Hello!!</h1>
              <div class="line-dec"></div>
              <br>
              <h1>Welcome Admin</h1>
            </div>
          </div>
        </div>

      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Ketahui Lebih Lanjut Mengenai Gunung Berapi bersama VolcanWEB</h2>
            <p>Letusan gunung dapat menghasilkan material vulkanik yang kaya akan nutrisi di sekitar lereng gunung.
              Setelah letusan, tanah yang terbentuk cenderung sangat subur dan cocok untuk pertanian.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="items">
            <div class="row">
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="assets/images/krakataunews.jpeg" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>Gunung Anak Krakatau 3 Kali <br> Erupsi Hari Ini, Status Siaga</h4>
                        <span>Lampung Selatan</span>
                        <p>Gunung Anak Krakatau di perairan Selat Sunda, Kabupaten Lampung Selatan, Provinsi Lampung
                          tercatat tiga kali mengalami erupsi pada Minggu (26/11).
                          Erupsi pertama terjadi pada pukul 12.28 WIB dengan tinggi kolom abu teramati kurang lebih 450
                          meter di atas puncak.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="assets/images/merapinews.jpg" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>Gunung Merapi Alami Guguran <br> Lava 13 Kali, Jarak Luncur <br> 1,7 Kilometer</h4>
                        <span>Yogyakarta</span>
                        <p>Balai Penyelidikan dan Pengembangan Teknologi Kebencanaan Geologi (BPPTKG) menyebutkan Gunung
                          Merapi mengeluarkan guguran lava 13 kali dengan jarak luncur maksimum 1.700 meter pada Kamis
                          (2/11/2023).</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item last-item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="assets/images/halmahera.jpeg" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>Gunung Dukono di Pulau <br> Halmahera Meletus, Hujan Abu <br> Melanda 8 Desa</h4>
                        <span>Maluku Utara</span>
                        <p>Gunung Dukono di Pulau Halmahera, Maluku Utara, Rabu (8/11/2023) meletus mengeluarkan abu
                          vulkanik setinggi 1.000 meter di atas puncak gunung api tersebut. Abu vulkanik berdampak
                          hingga ke Kota Tobelo yang berjarak 22 kilometer dari kawah gunung tersebut. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="side-bar-map">
            <div class="row">
              <div class="col-lg-12">
                <div style="width: 100%"><iframe width="100%" height="550" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=550&amp;hl=en&amp;q=Gunung%20Merapi+(Merapi)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                      href="https://www.maps.ie/population/">Population mapping</a></iframe></div>
                <div id="map">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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


</body>

<script>
  function bannerSwitcher() {
    next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
    if (next.length) next.prop('checked', true);
    else $('.sec-1-input').first().prop('checked', true);
  }

  var bannerTimer = setInterval(bannerSwitcher, 5000);

  $('nav .controls label').click(function () {
    clearInterval(bannerTimer);
    bannerTimer = setInterval(bannerSwitcher, 5000)
  });
</script>

</html>