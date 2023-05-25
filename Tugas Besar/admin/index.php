<?php 
  require('../config/session.php');
  require('../config/database.php');
  
  $sql = "SELECT pengguna.*, jurusan.nama AS nama_jurusan FROM `pengguna` INNER JOIN jurusan
  ON pengguna.jurusan_id = jurusan.id WHERE level = 'Pengguna'";
  $pengguna = mysqli_query($DB_CONNECTION, $sql);
  
?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education - Dashboard</title>
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
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script><style>INPUT:-webkit-autofill,SELECT:-webkit-autofill,TEXTAREA:-webkit-autofill{animation-name:onautofillstart}INPUT:not(:-webkit-autofill),SELECT:not(:-webkit-autofill),TEXTAREA:not(:-webkit-autofill){animation-name:onautofillcancel}@keyframes onautofillstart{from{}}@keyframes onautofillcancel{from{}}
</style>

</head>

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
            <a class="sidenav-link ripple-surface" tabindex="1" href="logout.php"> <i class="fas fa-sign-out-alt pr-3"></i>Log out</a>
          </li>
        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 469px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 254px;"></div></div></div>
    </div>

    <div class="mdb-page-content page-intro bg-light">
      <div class="container-fluid py-3">
        <div class="row">
          <div class="col-10 m-auto">
            <h4>Daftar Mahasiswa</h4>
          </div>
          <div class="col-10 m-auto">
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $i = 1;
                    while($data = mysqli_fetch_array($pengguna)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $i++; ?></td>
                        <td><?php echo $data['nama_depan']; ?> <?php echo $data['nama_belakang']; ?></td>
                        <td><?php echo $data['nama_jurusan']; ?></td>
                        <td class="text-center">
                            <a href="edit-mahasiswa.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                            <a href="hapus-mahasiswa.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm confirm">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
              </tbody>
            </table>
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
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
      
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
      </script>

</body></html>