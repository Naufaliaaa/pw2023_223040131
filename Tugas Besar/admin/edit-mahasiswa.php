<?php 

require('../config/session.php');
require('../config/database.php');

if($_SESSION['level'] != 'Admin'){
  header("Location: ../user/index.php"); 
}

$id = $_GET['id'];

$sql = "SELECT * FROM pengguna WHERE id='$id'";
$data = mysqli_query($DB_CONNECTION, $sql);
$mahasiswa = mysqli_fetch_array($data);

$getJurusan = "SELECT * FROM `jurusan`";
$jurusan = mysqli_query($DB_CONNECTION, $getJurusan);

if(isset($_POST['submit'])) {
  
  $nama_depan       = $_POST['nama_depan'];
  $nama_belakang    = $_POST['nama_belakang'];
  $email            = $_POST['email'];
  $no_telepon       = $_POST['no_telepon'];
  $jurusan_id       = $_POST['jurusan_id'];

  $sql = "UPDATE pengguna SET 
    nama_depan = '$nama_depan', 
    nama_belakang = '$nama_belakang',
    email = '$email', 
    no_telepon = '$no_telepon',
    jurusan_id = '$jurusan_id'
  WHERE id = '$id'";
  
  $query = mysqli_query($DB_CONNECTION, $sql);

  if($query){
    echo "<script>alert('mahasiswa Berhasil Diubah!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=mahasiswa.php'>";
  
  } else{
    echo "<script>alert('Mahasiswa Gagal Diubah!');</script>";
  echo "<meta http-equiv='refresh' content='0; url=edit-mahasiswa.php'>";

  }
  
}


?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education - Mahasiswa</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <link rel="stylesheet" href="../css/admin/index.css">
    <link rel="stylesheet" href="../css/admin/index2.css">
    <style>
      .page-intro {
        background-color: white;
        width: 100vw;
        min-height: 100vh;
      }

      img {
        max-width: 80%;
      }

      .mdb-page-content {
        padding-left: 240px;
        transition: padding 0.3s linear;
      }

      #toggler {
        display: none;
      }

      @media (max-width: 660px) {
        .mdb-page-content {
          padding-left: 0px;
        }

        #toggler {
          display: unset;
        }

        .mask img {
          width: 100%;
        }
      }
    </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script><style>INPUT:-webkit-autofill,SELECT:-webkit-autofill,TEXTAREA:-webkit-autofill{animation-name:onautofillstart}INPUT:not(:-webkit-autofill),SELECT:not(:-webkit-autofill),TEXTAREA:not(:-webkit-autofill){animation-name:onautofillcancel}@keyframes onautofillstart{from{}}@keyframes onautofillcancel{from{}}
</style></head>

  <body>

  
    <div id="full-screen-example" class="sidenav bg-light sidenav-dark" data-color="dark" data-mode="side" data-hidden="false" data-scroll-container="#scrollContainer" style="width: 240px; height: 100vh; position: fixed; transition: all 0.3s linear 0s; transform: translateX(0%);">
      <div class="mt-4">
        <div id="header-content" class="pl-3">
          <img  src="../img/default.png" alt="avatar" class="rounded-circle img-fluid mb-3" style="max-width: 50px;">

          <h4>
            <span style="white-space: nowrap;"><?= $_SESSION['nama_depan']; ?></span>
          </h4>
          <p><?= $_SESSION['email']; ?></p>
        </div>
        <hr class="mb-0">
      </div>
      <div id="scrollContainer" class="ps ps--active-y" style="max-height: calc(100% - 245px); position: relative;">
        <ul class="sidenav-menu">

        <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" href="../index.php" tabindex="1"> <i class="fas fa-home pr-3"></i>Beranda</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" href="index.php" tabindex="1"> <i class="fas fa-user-astronaut pr-3"></i>Dashboard</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" href="jurusan.php" tabindex="1"> <i class="fas fa-user-graduate pr-3"></i>Jurusan</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" href="mahasiswa.php" tabindex="1"> <i class="fas fa-user pr-3"></i>Mahasiswa</a>
          </li>
          
        </ul>
        <hr class="m-0">
        <ul class="sidenav-menu">
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1" href="../index.php"> <i class="fas fa-sign-out-alt pr-3"></i>Log out</a>
          </li>
        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 469px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 254px;"></div></div></div>
    </div>

    <div class="mdb-page-content page-intro bg-light">
      <div class="container-fluid py-3">
        <div class="row">
          <div class="col-10 m-auto">
            <h4>Ubah data mahasiswa</h4>
          </div>
          <div class="col-10 m-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama depan</label>
                    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="<?= $mahasiswa['nama_depan'] ?>">
                </div>
                <div class="form-group">
                    <label for="namaBelakang">Nama belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" id="namaBelakang" aria-describedby="emailHelp" placeholder="Nama" value="<?= $mahasiswa['nama_belakang'] ?>">
                </div>
                <div class="form-group">
                    <label for="jurusanId">Jurusan</label>
                    <select name="jurusan_id" class="form-control" id="jurusanId">
                        <?php foreach($jurusan as $j): ?>
                        <option value="<?= $j['id'] ?>" <?= $j['id'] === $mahasiswa['jurusan_id'] ? 'selected' : ''; ?>><?= $j['nama']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="<?= $mahasiswa['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No telepon</label>
                    <input name="no_telepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="<?= $mahasiswa['no_telepon'] ?>">
                </div>
                <input type="submit" class="btn btn-primary mt-2" value="Simpan" name="submit"></input>
              </form>
          </div>
        </div>

      </div>
    </div>


    <script type="text/javascript" src="dev/js/new-prism.js"></script>

    <script type="text/javascript" src="dev/js/dist/mdbsnippet.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>


    <script type="text/javascript">
      const sidenav = document.getElementById('full-screen-example');
      const instance = mdb.Sidenav.getInstance(sidenav);

      let innerWidth = null;

      const setMode = (e) => {

        if (window.innerWidth === innerWidth) {
          return;
        }

        innerWidth = window.innerWidth;

        if (window.innerWidth < 660) {
          instance.changeMode('over');
          instance.hide();
        } else {
          instance.changeMode('side');
          instance.show();
        }
      };

      setMode();

      window.addEventListener('resize', setMode);
    </script>
    
       <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  

</body></html>