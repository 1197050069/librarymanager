<?php

session_start();
include 'koneksi.php';

$username           = $_POST ['username'];
$password           = $_POST ['password'];

$data = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' and password='$password'");

$cek=mysqli_num_rows ($data);

if($cek > 0) {
    $_SESSION['username']   = $username;
    $_SESSION['status']     = "login";
    header("location: ../beranda.php");
}

else {
    header ("location: ../index.html");
}
?>