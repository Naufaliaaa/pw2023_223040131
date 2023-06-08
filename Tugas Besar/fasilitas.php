<?php 
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasundan Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
              <a class="nav-link" href="#">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="info_prestasi.php">Prestasi</a>
            </li>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#jurusan">Jurusan</a></li>
                <li><a class="dropdown-item" href="#prestasi">Prestasi</a></li>
              </ul>
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

    <div id="intro" class="bg-image shadow-2-strong">
      
    </div>
  </header>

  <main class="mt-5">
    <div class="container">

      <section id="jurusan">
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://th.bing.com/th/id/OIP.H34xAKFx8zP13QXW1rGlvAHaFj?pid=ImgDet&w=800&h=600&rs=1" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Teknik Informatika</strong></h4>
            <p class="text-muted">
            Lab Informatika umumnya dilengkapi dengan berbagai perangkat keras dan perangkat lunak yang mendukung kegiatan pembelajaran dan pengembangan di bidang teknologi informasi dan komputer. Beberapa komponen yang mungkin ada di Lab Informatika adalah:
                1.	Komputer: Lab Informatika biasanya dilengkapi dengan sejumlah komputer yang terhubung ke jaringan lokal atau internet. Komputer ini digunakan untuk belajar pemrograman, pengembangan perangkat lunak, analisis data, desain grafis, dan kegiatan komputasi lainnya.
                2.	Perangkat Lunak: Lab Informatika biasanya dilengkapi dengan berbagai perangkat lunak yang digunakan untuk pemrograman, analisis data, pengembangan web, desain grafis, pengolahan gambar, pengolahan suara, pemodelan 3D, dan lain sebagainya. Contoh perangkat lunak yang umum digunakan termasuk editor teks seperti Visual Studio Code, kompilator atau interpreter untuk bahasa pemrograman seperti Java, Python, C++, perangkat lunak pengolahan data seperti R atau MATLAB, perangkat lunak desain seperti Adobe Photoshop atau CorelDRAW, dan perangkat lunak pengembangan web seperti HTML/CSS dan PHP.

            </p>
          </div>
        </div>
      </section>
      <div class="container">

      <section>
        <div class="row">
          

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Teknik Industri</strong></h4>
            <p class="text-muted">
            Di dalam lab Teknik Industri, biasanya terdapat berbagai peralatan dan perangkat yang mendukung kegiatan pembelajaran dan penelitian di bidang Teknik Industri. Beberapa komponen yang mungkin ada di dalam lab Teknik Industri adalah sebagai berikut:
            1.	Stasiun Kerja: Lab Teknik Industri biasanya dilengkapi dengan stasiun kerja atau workstation yang berfungsi sebagai tempat untuk melakukan analisis, perencanaan, dan permodelan sistem produksi dan manufaktur. Stasiun kerja ini dilengkapi dengan komputer, perangkat lunak simulasi, dan peralatan pendukung lainnya.
            2.	Peralatan Simulasi Produksi: Lab Teknik Industri sering dilengkapi dengan peralatan simulasi produksi seperti conveyor, robot industri, sistem pengangkutan material, mesin pemrosesan, dan peralatan otomasi lainnya. Peralatan simulasi ini digunakan untuk memodelkan dan menganalisis sistem produksi, mengoptimalkan aliran material, dan menguji strategi pengaturan produksi.

            </p>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://www.its.ac.id/tki/wp-content/uploads/sites/53/2018/11/featured-lab-1.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <div class="container">

      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://unimus.ac.id/wp-content/uploads/2014/07/kimia-analis.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Teknik Pangan</strong></h4>
            <p class="text-muted">
            Di dalam lab Teknik Pangan, terdapat berbagai peralatan dan perangkat yang mendukung kegiatan penelitian dan pengembangan di bidang Teknik Pangan. Berikut adalah beberapa contoh komponen yang umumnya ada di dalam lab Teknik Pangan:
            1.	Alat Pengolahan Pangan: Lab Teknik Pangan dilengkapi dengan peralatan pengolahan pangan seperti mesin penggiling, blender, pengaduk, pemeras, alat pemotong, oven, freezer, dan alat pemanggang. Peralatan ini digunakan untuk mengolah bahan pangan menjadi produk yang siap dikonsumsi atau untuk keperluan penelitian dan pengembangan produk pangan.
            2.	Perangkat Pengujian Kualitas Pangan: Lab Teknik Pangan dilengkapi dengan peralatan untuk pengujian kualitas pangan, seperti alat pengukur kelembaban, alat pengukur suhu, pH meter, alat penetapan kadar lemak, alat pengukur tekstur makanan, alat pengukur kekerasan, dan alat analisis mikrobiologi. Peralatan ini digunakan untuk melakukan analisis dan pengujian kualitas produk pangan, termasuk penentuan kandungan nutrisi, sifat organoleptik, dan keamanan pangan.

            </p>
          </div>
        </div>
      </section>
      <div class="container">

      <section>
        <div class="row">
          

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Teknik Mesin</strong></h4>
            <p class="text-muted">
            Di dalam lab Teknik Mesin, terdapat berbagai peralatan dan perangkat yang mendukung kegiatan pembelajaran dan penelitian di bidang Teknik Mesin. Berikut adalah beberapa komponen yang biasanya ada di dalam lab Teknik Mesin:
            1.	Mesin-Mesin Industri: Lab Teknik Mesin dilengkapi dengan berbagai jenis mesin industri, seperti mesin bubut, mesin frais, mesin bor, mesin gerinda, mesin pemotong laser, mesin penggiling, dan mesin pemotong CNC. Mesin-mesin ini digunakan untuk belajar dan melakukan proses manufaktur serta untuk penelitian dan pengembangan produk dan sistem mekanik.
            2.	Perangkat Pengukuran: Lab Teknik Mesin dilengkapi dengan perangkat pengukuran seperti mikrometer, vernier caliper, dial indicator, gauge blocks, alat ukur profil, alat ukur tekanan, termometer, alat pengukur kecepatan, dan alat pengukur getaran. Perangkat ini digunakan untuk melakukan pengukuran dimensi, toleransi, suhu, kecepatan, tekanan, dan karakteristik mekanik lainnya pada komponen dan sistem mesin.
            3.	Perangkat Pemeliharaan dan Perbaikan: Lab Teknik Mesin juga dilengkapi dengan peralatan pemeliharaan dan perbaikan, seperti alat pemotong, alat bongkar pasang, alat perbaikan sederhana, dan peralatan perawatan sistem mekanis. Peralatan ini digunakan untuk melatih keterampilan dalam perbaikan dan pemeliharaan mesin, serta dalam menangani masalah umum yang terkait dengan perawatan mesin

            </p>
           
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://th.bing.com/th/id/R.b87128947366da91722321ae2992f64c?rik=H3P2z38A6FO5Pw&riu=http%3a%2f%2feng.umy.ac.id%2fwp-content%2fuploads%2f2020%2f04%2fIMG_9934-scaled.jpg&ehk=KDBUATdhTeZdZfBKqsoSfn3%2bb4Ea0xAU7YBD%2fOCOv80%3d&risl=&pid=ImgRaw&r=0" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
        </div>
      </section>
      

      <hr class="my-5" />
      </div>
            </main>

      
  <footer class="bg-light text-lg-start">
    
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Naufaliaaa:
      <a class="text-dark" href="mailto:naufalzul45@gmail.com">Naufalzul45@gmail.com</a>
    </div>

  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

  </body>
</html>
