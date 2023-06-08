<?php 

require('../config/session.php');
require('../config/database.php');

if($_SESSION['level'] != 'Admin'){
  header("Location: ../user/index.php"); 
}

$id = $_GET['id'];

$sql = "SELECT * FROM jurusan WHERE id='$id'";
$data = mysqli_query($DB_CONNECTION, $sql);
$jurusan = mysqli_fetch_array($data);

if(isset($_POST['submit'])) {
  
  $nama            = $_POST['nama'];
  $fileFoto 	    = $_FILES['gambar']['name'];
  $deskripsi        = $_POST['deskripsi'];
  $prospek_kerja    = $_POST['prospek_kerja'];

    if(!empty($fileFoto)) {
        // Rename file foto. Contoh: foto-AG007.jpg
        $extFile = pathinfo($fileFoto, PATHINFO_EXTENSION);
        $fileFotoRename = date('mdY_his') .'.'. $extFile;

        $dirImages = '../img/jurusan/';
        $pathImage = $dirImages . $fileFotoRename;
        $fileFoto = $fileFotoRename; // untuk keperluan Query INSERT
        unlink($dirImages . $jurusan['gambar']);
        move_uploaded_file($_FILES['gambar']['tmp_name'], $pathImage);
    } else {
        $fileFoto = $jurusan['gambar'];
    }

  $sql = "UPDATE jurusan SET 
    nama = '$nama', 
    deskripsi = '$deskripsi',
    prospek_kerja = '$prospek_kerja', 
    gambar = '$fileFoto'
  WHERE id = '$id'";
  
  $query = mysqli_query($DB_CONNECTION, $sql);

  if($query){
    echo "<script>alert('Jurusan Berhasil Diubah!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=jurusan.php'>";
  
  } else{
    echo "<script>alert('Jurusan Gagal Diubah!');</script>";
  echo "<meta http-equiv='refresh' content='0; url=edit-jurusan.php'>";

  }
  
}


?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education - Jurusan</title>
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
            <h4>Ubah data</h4>
          </div>
          <div class="col-10 m-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="<?= $jurusan['nama'] ?>">
                    
                </div>
                <div class="form-group mb-4">
                    <label for="exampleInputPassword1">Gambar</label>
                    <input name="gambar" type="file" class="form-control" id="exampleInputPassword1" placeholder="Gambar">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="30" rows="5" placeholder="deskripsi"><?= $jurusan['deskripsi'] ?></textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleInputPassword1">Prospek Kerja</label>
                    <textarea type="text" rows="3" name="prospek_kerja" class="form-control" id="exampleInputPassword1" placeholder="Prospek Kerja"><?= $jurusan['prospek_kerja'] ?></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan" name="submit"></input>
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