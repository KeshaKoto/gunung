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

                <h2>Tambah Data Korban</h2>
                <form action="input_korban.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label"><b>Nama Gunung</label>
                        <input type="text" name="nama_gunung" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Lokasi</label>
                        <input type="text" name="lokasi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="text" name="tahun" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah Korban Jiwa</label>
                        <input type="text" name="korban" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-light">Tambah</button>
                </form>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                    crossorigin="anonymous"></script>

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