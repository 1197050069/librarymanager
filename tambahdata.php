<!doctype html>
<html lang="en">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
               <title>Tambah Data</title>
          <link rel="stylesheet" type="text/css" href="css/tampildata.css">
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          <script src="https://kit.fontawesome.com/29af498f0d.js" crossorigin="anonymous"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     </head>

     <body style="background-color: #E3F2FD;">
          <nav class="navbar navbar-custom navbar-expand-lg">
               <div class="container-fluid">
                    <a href="beranda.php"><i class="fa-solid fa-angle-left mx-2"></i></a>
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
          </nav>
     
     <h4 class="text-center mt-3">Formulir Peminjaman Buku</h4>

     <div class="container px-5">

		<form method="post" action="process/tambah.process.php">

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">ID Peminjaman</span>
                    <input type="text" class="form-control" name="idpinjam" aria-label="idpinjam" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">Judul Buku</span>
                    <input type="text" class="form-control" name="judulbuku" aria-label="judulbuku" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori">
                         <option selected>Pilih Kategori</option>
                         <option value="Novel">Novel</option>
                         <option value="Non-Fiksi">Non-Fiksi</option>
                         <option value="Musik">Musik</option>
                         <option value="Kamus">Kamus</option>
                         <option value="Sejarah">Sejarah</option>
                    </select>
               </div>

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">Jumlah</span>
                    <input type="number" class="form-control" name="jumlah" aria-label="jumlah" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">Nama Peminjam</span>
                    <input type="text" class="form-control" name="namapeminjam" aria-label="namapeminjam" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                    <select class="form-select" id="kategori" name="kategori">
                         <option selected>Pilih Kelas</option>
                         <option value="Novel">A</option>
                         <option value="Non-Fiksi">B</option>
                         <option value="Sejarah">C</option>
                    </select>
               </div>

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">Email</span>
                    <input type="email" class="form-control" name="email" aria-label="email" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">No. Telepon</span>
                    <input type="text" class="form-control" name="notlp" aria-label="notlp" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">Tanggal Peminjaman</span>
                    <input type="date" class="form-control" name="tglpinjam" aria-label="tglpinjam" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping">Tanggal Pengembalian</span>
                    <input type="date" class="form-control" name="tglkembali" aria-label="tglkembali" aria-describedby="addon-wrapping">
               </div>

               <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
               </div>
		</form>
     </div>

     </body>

     <footer class="text-center text-lg-start bg-white text-muted">
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
          © 2023 Copyright:
          <a class="text-reset fw-bold" href="contactdev.php">Project PAW</a>
          </div>
     </footer>
</html>