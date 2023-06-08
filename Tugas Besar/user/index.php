<?php 
 require('../config/session.php');
 require('../config/database.php');

 if($_SESSION['level'] != 'Pengguna'){
  header("Location: ../admin/index.php"); 
}

$id = $_SESSION['id_user'];
$sql = "SELECT * FROM pengguna WHERE id='$id'";
$data = mysqli_query($DB_CONNECTION, $sql);
$mahasiswa = mysqli_fetch_array($data);

if(isset($_POST['submit'])){
  $nama_depan       = $_POST['nama_depan'];
  $nama_belakang    = $_POST['nama_belakang'];
  $email            = $_POST['email'];

  $sql = "UPDATE pengguna SET 
    nama_depan = '$nama_depan', 
    nama_belakang = '$nama_belakang',
    email = '$email'
  WHERE id = '$id'";
  
  $query = mysqli_query($DB_CONNECTION, $sql);
  
  if($query){
    $_SESSION['nama_depan']  = $nama_depan;
    $_SESSION['nama_belakang']  = $nama_belakang;
    $_SESSION['email'] = $email;
    
    echo "<script>alert('Profil Berhasil Diubah!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  } else{
    echo "<script>alert('Profil Gagal Diubah!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  }
}
?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
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
          
        </ul>
        <hr class="m-0">
        <ul class="sidenav-menu">
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" tabindex="1" href="logout.php"> <i class="fas fa-sign-out-alt pr-3"></i>Log out</a>
          </li>
        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 469px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 254px;"></div></div></div>
    </div>

    <div class="mdb-page-content page-intro py-5 bg-light">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-5">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nama Depan</th>
                  <th scope="col">Nama Belakang</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $_SESSION['nama_depan']; ?></td>
                  <td><?php echo $_SESSION['nama_belakang']; ?></td>
                  <td><?php echo $_SESSION['email']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-5">
              <div class="card">
                <div class="card-title">
                  <div class="card-header">
                    <h6>Ubah Profile</h6>
                  </div>
                </div>
                <div class="card-body">
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
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="<?= $mahasiswa['email'] ?>">
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" value="Simpan" name="submit"></input>
                  </form>
                </div>
              </div>
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
  

</body></html>