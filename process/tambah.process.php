<?php

     include "koneksi.php";

     $idpinjam           = $_POST ["idpinjam"];
     $judulbuku          = $_POST ["judulbuku"];
     $kategori           = $_POST ["kategori"];
     $jumlah             = $_POST ["jumlah"];
     $namapeminjam       = $_POST ["namapeminjam"];
     $kelas              = $_POST ["kelas"];
     $email              = $_POST ["email"];
     $notlp              = $_POST ["notlp"];
     $tglpinjam          = $_POST ["tglpinjam"];
     $tglkembali         = $_POST ["tglkembali"];

     $sql = "INSERT INTO tb_pinjam (idpinjam, judulbuku, kategori, jumlah, namapeminjam, kelas, 
     email, notlp, tglpinjam, tglkembali) VALUES('$idpinjam', '$judulbuku', '$kategori', '$jumlah', '$namapeminjam', 
     '$kelas', '$email', '$notlp', '$tglpinjam', '$tglkembali')";
     $query = mysqli_query($conn, $sql);

     header("location: ../beranda.php");

?>