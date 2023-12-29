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

     $sql = "UPDATE tb_pinjam SET judulbuku='$judulbuku', kategori='$kategori', jumlah='$jumlah', 
     namapeminjam='$namapeminjam', kelas='$kelas', email='$email', notlp='$notlp', tglpinjam='$tglpinjam', 
     tglkembali='$tglkembali' WHERE idpinjam='$idpinjam'";
     $query = mysqli_query($conn, $sql);

     if($conn->query($sql)) {
     header("location: ../beranda.php");
     } else {
     echo "<script>
     alert('Data gagal diperbarui.');
     window.location = '../tampildata.php';
     </script>";
     }
?>