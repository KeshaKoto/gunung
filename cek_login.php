<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($konek, "SELECT * FROM admin WHERE username='$username' 
    and password='$password'") or die(mysqli_error($konek));

$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index_admin.php");
} else {
    header("location:index.html?pesan=gagal");
}
?>