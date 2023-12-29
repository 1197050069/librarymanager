<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Beranda</title>
        <link rel="stylesheet" type="text/css" href="css/beranda.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/29af498f0d.js" crossorigin="anonymous"></script>
    </head>

    <body style="background-color: #E3F2FD;">
        <nav class="navbar navbar-custom navbar-expand-lg">
            <div class="container-fluid">
                <i class="fa-solid fa-books"></i>
                <a class="navbar-brand mb-0 font-weight-bold">Library Manager</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class ="nav-link" href="beranda.php">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class ="nav-link" href="undermaintenance.html">Kontak</a>
                    </li>

                    <li class="nav-item">
                        <a class ="nav-link" href="process/logout.php">Log Out</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <br>
        <h2 class="text-center">Data Buku yang Telah Dikembalikan</h2>
        
        <div class="container m-3 mx-auto">
            <a href="tambahdata.php"><button type="button" class="btn btn-primary float-end mb-3">Tambah Data</button></a>


            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tanggal Peminjaman</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    include 'koneksi.php';	
                    $no = 1;
                    $sql = mysqli_query($conn,"SELECT * FROM tb_pinjam ORDER BY tglpinjam");
                    while($d = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['judulbuku']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><?php echo $d['jumlah']; ?></td>
                    <td><?php echo $d['namapeminjam']; ?></td>
                    <td><?php echo $d['tglpinjam']; ?></td>
                    <td>
                        <a href="tampildata.php?idpinjam=<?php echo $d['idpinjam']; ?>">Lihat</a>
                    </td>
                </tr>
                <?php 
                    }
                ?>                    
                </tbody>
            </table>
            
            <div class="text-center">
                <a href="undermaintenance.html"><button type="button" class="btn btn-success btn-block mb-3">Info Buku yang Telah Dikembalikan</button></a>
            </div>

        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>