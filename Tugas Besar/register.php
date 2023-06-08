<?php 

require('config/database.php');

session_start();

if(isset($_SESSION['id_user'])){
  if($_SESSION['level'] == 'Admin'){
    header("Location: admin");
  } else {
    header("Location: user");
  }
} 

$getJurusan = "SELECT * FROM `jurusan`";
$jurusan = mysqli_query($DB_CONNECTION, $getJurusan);
 
if(isset($_POST['submit'])) {
  
  $jurusan_id     = $_POST['jurusan_id'];
  $nama_depan     = $_POST['nama_depan'];
  $nama_belakang  = $_POST['nama_belakang'];
  $no_telepon     = $_POST['no_telepon'];
  $email          = $_POST['email'];
  $password       = $_POST['password'];

  $sql = "INSERT INTO pengguna(jurusan_id, nama_depan, nama_belakang, no_telepon, email, password, level) VALUE('{$jurusan_id}', '{$nama_depan}', '{$nama_belakang}', '{$no_telepon}', '{$email}', '{$password}', 'Pengguna')";
  $query = mysqli_query($DB_CONNECTION, $sql);

  echo "<script>alert('Register Berhasil!');</script>";
  echo "<meta http-equiv='refresh' content='0; url=login.php'>";

}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasundan Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>
  </head>
  <body>

  <header>
    

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Pasundan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="fasilitas.php">Fasilitas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="info_prestasi.php">Prestasi</a>
                </li>
            </ul>
            <nav class="navbar bg-body-tertiary">
        <form class="container-fluid justify-content-start">
        <?php if(!isset($_SESSION['id_user'])): ?>
        <a href="login.php" class="btn btn-outline-success me-2" type="button">Login</a>
        <a href="register.php" class="btn btn-sm btn-outline-secondary" type="button">Register</a>
        <?php else: ?>
          <a href="admin" class="btn btn-outline-success me-2" type="button">Dashboard</a>
        <?php endif; ?>
        </form>
        </nav>
            </div>
        </div>
    </nav>
  </header>

  <main class="mt-5">
    <div class="container">
      
      <section class="mb-5">
        <h4 class="mb-5 text-center"><strong>Register</strong></h4>

        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <form action="" method="post" autocomplete="off">
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="nama_depan"/>
                    <label class="form-label" for="form3Example1">First name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="nama_belakang"/>
                    <label class="form-label" for="form3Example2">Last name</label>
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="number" id="form3Example1" class="form-control" name="no_telepon"/>
                    <label class="form-label" for="form3Example1">No Telepon</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <select id="form3Example2" class="form-control" name="jurusan_id">
                      <option value="">Pilih Jurusan</option>
                        <?php
                            $i = 1;
                            while($data = mysqli_fetch_array($jurusan)) {
                        ?>
                        <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label class="form-label" for="form3Example2">Jurusan</label>
                  </div>
                </div>
              </div>


              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="email"/>
                <label class="form-label" for="form3Example3">Email address</label>
              </div>


              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password"/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>



              <input name="submit" value="Daftar" type="submit" class="btn btn-primary btn-block mb-4"">
            
            </form>
          </div>
        </div>
      </section>

    </div>
  </main>



  <footer class="bg-light text-lg-start fixed-bottom">
  


    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Naufaliaaa:
      <a class="text-dark" href="mailto:naufalzul45@gmail.com">Naufalzul45@gmail.com</a>
    </div>

  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

  </body>
</html>

