<?php
include "koneksi.php";

$idpinjam = $_GET["idpinjam"]; 
$sv = "INSERT INTO tb_bukukembali SELECT * FROM tb_pinjam WHERE idpinjam = '$idpinjam'";
$dlt = "DELETE FROM tb_pinjam WHERE idpinjam = '$idpinjam'";
$query_sv = mysqli_query($conn, $sv);

if ($query_sv) {
    $query_dlt = mysqli_query($conn, $dlt);

    if ($query_dlt) {
        header("location: ../beranda.php");
    } else {
        echo "<script>
        alert('Data gagal dihapus.');
        window.location = '../tampildata.php';
        </script>";
    }
} else {
    echo "<script>
    alert('Data gagal diperbarui.');
    window.location = '../tampildata.php';
    </script>";
}
?>
