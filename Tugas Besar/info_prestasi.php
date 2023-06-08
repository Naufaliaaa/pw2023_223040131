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
              <a class="nav-link" href="fasilitas.php">Fasilitas</a>
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
              <img src="https://www.unpas.ac.id/wp-content/uploads/2021/11/258601366_305991194542765_7529735701756241774_n.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>BMC Competition Unsyiah</strong></h4>
            <p class="text-muted">
            BANDUNG, unpas.ac.id – Torehan prestasi di era pandemi kembali dipersembahkan mahasiswa Universitas Pasundan. Kali ini,
            tim ‘Sun Tech’ besutan mahasiswa Teknik Informatika berhasil meraih gelar juara nasional Business Model Canvas
            (BMC) Competition di Universitas Syiah Kuala, Aceh.Kompetisi tingkat nasional ini bertema ‘Menciptakan Usaha Milenial Kreatif Melalui Metode BMC’. 
            Tim Sun Tech yang beranggotakan Reyhan Rasyid Zidan, Drajat Cahya Diningrat, dan Kasyfi Adhadini mesti bersaing dengan 107 kelompok dari 60 perguruan tinggi.
            BMC merupakan kerangka yang membahas model bisnis dalam bentuk sketsa, sehingga lebih mudah dipahami. BMC harus memuat 9 elemen fundamental bisnis yang disebut blok. 
            Karena berbentuk kerangka, BMC sekilas tampak seperti garis besar, namun bahasannya sudah komprehensif.Sembilan elemen tersebut meliputi segmentasi konsumen, proporsi nilai konsumen, sarana pemasaran, sumber pendapatan, sumber daya, hubungan konsumen, aktivitas yang dijalankan, partner, dan struktur pembiayaan bisnis.
            “Selain mengirim poster BMC, kami juga diminta membuat modul yang merincikan BMC tersebut. Adapun produk yang kami ajukan yaitu Augmented Reality (AR) Hardware Learning,” jelas salah satu anggota Sun Tech, Reyhan Rasyid Zidan.AR Hardware Learning yakni sebuah aplikasi yang menyediakan layanan untuk mempelajari perangkat
            keras dari berbagai tipe devices, seperti smartphone, PC, maupun laptop dalam bentuk augmented reality
            </p>
          </div>
        </div>
      </section>
      <div class="container">

      <section>
        <div class="row">
          

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Hemat BBM Dua Kali Lipat</strong></h4>
            <p class="text-muted">
            BANDUNG, unpas.ac.id – Sigit Nur Atmadi, Alumni Magister Teknik Mesin Universitas Pasundan angkatan 2018 berhasil menciptakan terobosan baru.
            Alumni yang juga Guru SMKN 1 Karawang ini membuat Water Injection System yang diklaim bisa menghemat bahan bakar sepeda motor hingga dua kali lipat
            dari penggunaan standar.Inovasi tersebut bermula saat dirinya mengerjakan tesis untuk mendapatkan gelar Magister di Unpas.Tesisnya yang berjudul
            “Rancang Bangun Water Injection System untuk Engine Sepeda Motor” kemudian dikembangkan dan diimplementasikan pada sepeda motor berjenis Honda CB 100.
            “Saya mengerjakan proyek ini bersama dua dosen pembimbing dan sesama rekan guru. Pengerjaannya memakan waktu kurang lebih 6 bulan,” ujarnya, Rabu (8/6/2022).
            Sebelum dinyatakan layak guna, Sigit sempat melakukan 10 kali percobaan. Sigit mengatkan, Water Injection System rancangannya bekerja dengan cara meningkatkan daya dan torsi sepeda motor.
            Water Injection System akan menyemprotkan air ke dalam ruang bakar, sehingga dapat menurunkan temperatur mesin dan mengoptimalkan kinerja sepeda motor dalam proses pembakaran.Secara garis besar,
            Water Injection System tidak berbeda jauh fungsinya dengan intercooler pada mesin turbo yang umum digunakan saat ini. Bedanya, intercooler hanya mendinginkan udara yang masuk ke ruang bakar.
            “Satu liter BBM jenis pertamax normalnya hanya bisa menempuh 14-15 kilometer per jam, tapi dengan bantuan Water Injection System, bisa menempuh 25-27 kilometer per jam,” bebernya.Kini, inovasi
            yang dicetuskannya sudah resmi terdaftar HAKI di Kemenkumham. Sigit menyebut, Water Injection System buatannya hampir sama dengan teknologi ECO Honda dan Blue Cord Yamaha.

            </p>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://www.unpas.ac.id/wp-content/uploads/2022/06/IMG-20220531-WA0043.jpg" class="img-fluid" />
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
              <img src="https://www.unpas.ac.id/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-21-at-9.52.12-AM.jpeg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Kejuaraan Menembak KASAU Cup</strong></h4>
            <p class="text-muted">
            BANDUNG, unpas.ac.id – Menembak dan karate, dua olahraga ini begitu lekat dengan Romadoniyati Ruhhaidah Welliansyah, mahasiswi program studi Pendidikan Bahasa dan Sastra Indonesia (PBSI),
            Fakultas Keguruan dan Ilmu Pendidikan (FKIP) Universitas Pasundan memenangkan prestasi kejuaraan tersebut hingga terlihat dan tersorot di mata prestasi nasional.
            Selain olahraga ini juga banyak prestasi dari universitas pasundan dari bidang olah raga yang mendapatkan prestasi dari ajang nasional hingga ajang internasional.
            Kembali dibukanya berbagai turnamen olahraga pascapandemi dimanfaatkan oleh Niya (sapaan akrabnya) untuk unjuk kemampuan di kancah nasional.

            </p>
          </div>
        </div>
      </section>
      <div class="container">
      

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
