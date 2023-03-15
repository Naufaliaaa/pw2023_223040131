<?php
    $mahasiswa = [
        [
            "nama"      => "Naufal Zul Faza",
            "nrp"       => 223040131,
            "email"     => "Naufalzul45@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "avatar2.webp"
        ],
        [
            "nama"      => "Ahmad Suherman",
            "nrp"       => 223040066,
            "email"     => "ahmad.suherman@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "nomor5.jfif"
        ],
        [
            "nama"      => "Irsan Moch. Taupik Febrian",
            "nrp"       => 223040076,
            "email"     => "irsan321@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "nomor4.jfif"
        ],
        [
            "nama"      => "Arya Saputra",
            "nrp"       => 223040051,
            "email"     => "saputra.arya@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "nomor1.jfif"
        ],
        [
            "nama"      => "Andiana Eka Riyanto",
            "nrp"       => 223040053,
            "email"     => "andien.321@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "avatar1.webp"
        ],
        [
            "nama"      => "Febi Alia Rahman",
            "nrp"       => 223040059,
            "email"     => "febialia@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "OIP.jfif"
        ],
        [
            "nama"      => "Aurelia Melati Suci",
            "nrp"       => 223040045,
            "email"     => "melatisuci@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "nomor1.jfif"
        ],
        [
            "nama"      => "Nova Asyifa",
            "nrp"       => 223040056,
            "email"     => "Nova890@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "nomor2.jfif"
        ],
        [
            "nama"      => "Dena",
            "nrp"       => 223040041,
            "email"     => "Denaa@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "nomor3.jfif"
        ],
        [
            "nama"      => "Nita Febriani",
            "nrp"       => 223040038,
            "email"     => "Nitaa657@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "nomor6.jfif"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>
        
        <div class="row p-3">
        <?php foreach($mahasiswa as $mhs): ?>
            <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="<?=$mhs['gambar'] ?>"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2"><?=$mhs['nama']?></h4>
            <p class="text-muted mb-4"><?= $mhs['nrp'] ?>
             <span class="mx-2">|</span> 
             <a href="#!"><?=$mhs['email']?></a> 
             <p ><?=$mhs['jurusan']?></p>
            
            </p>
            <div class="mb-4 pb-2">
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-facebook-f fa-lg"></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-twitter fa-lg"></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-skype fa-lg"></i>
              </button>
            </div>
            <button type="button" class="btn btn-primary btn-rounded btn-lg">
              Message now
            </button>
            
          </div>
        </div>

      </div>
            <?php endforeach; ?>
        </div>
        
    </section>
</body>
</html>