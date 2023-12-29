<?php 

include "koneksi.php";
$idpinjam = $_GET['idpinjam'];
 
mysqli_query($conn,"DELETE FROM tb_pinjam WHERE idpinjam='$idpinjam'");
 
header("location: ../beranda.php");
 
?>