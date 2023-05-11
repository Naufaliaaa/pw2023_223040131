<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasundan Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <header>
    <style>
      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>


    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
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
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tentang Kami
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Jurusan</a></li>
                    <li><a class="dropdown-item" href="#">Prestasi</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex justify-content-center" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <nav class="navbar bg-body-tertiary">
        <form class="container-fluid justify-content-start">
            <a href="login.php" class="btn btn-outline-success me-2" type="button">Login</a>
            <a href="register.php" class="btn btn-sm btn-outline-secondary" type="button">Register</a>
        </form>
        </nav>
            </div>
        </div>
    </nav>
  </header>


  <main class="mt-5">
    <div class="container">

      

      <section class="mb-5">
        <h4 class="mb-5 text-center"><strong>Login</strong></h4>

        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <form action="admin/index.php">

              <div class="row mb-4">

              <div class="form-outline mb-4">
                
              <label class="form-label" for="form3Example3">Email address</label>
                <input type="email" id="form3Example3" class="form-control" />
              </div>


              <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control" />
              </div>


              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" checked />
                <label class="form-check-label" for="form2Example3">
                  Subscribe to our newsletter
                </label>
              </div>


              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>

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

