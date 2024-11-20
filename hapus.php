<?php
include 'koneksi.php';
$id_gunung = $_GET['Id_gunung'];

$query = mysqli_query($konek, "DELETE FROM korban WHERE id_gunung = '$id_gunung'");

if ($query) {
    header("location:data.php");
} else {
    echo "Data Gagal Dihapus!";
}
?>