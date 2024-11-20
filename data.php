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
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index_admin.php">Home</a></li>
              <li><a href="data.html" class="active">Data Kejadian</a></li>
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

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Ketahui Lebih Lanjut Mengenai Gunung Berapi bersama VolcanWEB
          </h4>
          <h2>Data Kejadian</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">

          </div>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Gunung</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Tahun Kejadian</th>
              <th scope="col">Jumlah Korban Jiwa</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>

          <?php
          include 'koneksi.php';
          $query = mysqli_query($konek, "SELECT * FROM korban");
          while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
              <td>
                <?php echo $data['id_gunung']; ?>
              </td>
              <td>
                <?php echo $data['nama_gunung']; ?>
              </td>
              <td>
                <?php echo $data['lokasi']; ?>
              </td>
              <td>
                <?php echo $data['tahun']; ?>
              </td>
              <td>
                <?php echo $data['korban']; ?>
              </td>
              <td>
                <a class="btn btn-danger" href="edit.php?id_gunung=<?php echo $data['id_gunung']; ?>"
                  role="button">Edit</a>
                <a class="btn btn-danger" href="hapus.php?id_gunung=<?php echo $data['id_gunung']; ?>"
                  role="button">Hapus</a>
              </td>
            </tr>
            <?php
          } ?>
        </table>




      </div>
      </form>
      <button class="btn btn-danger value"><a href="input.php">Tambah</a></button>
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

  <script>
    $(".option").click(function () {
      $(".option").removeClass("active");
      $(this).addClass("active");
    });
  </script>

</body>

</html>