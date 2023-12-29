<?php

     include "koneksi.php";

     if (isset($_POST['submit'])) {
          $username           = $_POST ['username'];
          $password           = $_POST ['password'];

          $cek_user      = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
          $cek_login     = mysqli_num_rows($cek_user);

          if ($cek_login > 0) {
               echo "<script>
               alert('Username telah digunakan.');
               window.location = 'signup.html';
               </script>";
          }
          
          else {
               mysqli_query($conn, "INSERT INTO tb_user VALUES ('$username', '$password')");
               echo "<script>
               alert('Sign Up berhasil dilakukan.');
               window.location = '../index.html';
               </script>";
          }
     }
?>