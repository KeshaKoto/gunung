<?php
include 'koneksi.php';

$nama_gunung = $_POST['nama_gunung'];
$lokasi = $_POST['lokasi'];
$tahun = $_POST['tahun'];
$korban = $_POST['korban'];

$query = mysqli_query($konek, "INSERT INTO korban
             VALUES(' ','$nama_gunung','$lokasi','$tahun','$korban')")
    or die(mysqli_error($konek));

if ($query) {
    header("location:data.php");
} else {
    echo "Proses Input Gagal";
}
?>