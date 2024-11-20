<?php
include 'koneksi.php';

$id_gunung = $_POST['id_gunung'];
$nama_gunung = $_POST['nama_gunung'];
$lokasi = $_POST['lokasi'];
$tahun = $_POST['tahun'];
$korban = $_POST['korban'];

$query = mysqli_query($konek, "UPDATE korban SET nama_gunung='$nama_gunung',
    lokasi='$lokasi', tahun='$tahun', korban='$korban' 
    WHERE id_gunung='$id_gunung'");
if ($query) {
    header("location:data.php");
} else {
    echo "Data Gagal Diubah!";
}
?>