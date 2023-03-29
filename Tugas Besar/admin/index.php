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
          <img  src="../img/foto aing.jfif" alt="avatar" class="rounded-circle img-fluid mb-3" style="max-width: 50px;">

          <h4>
            <span style="white-space: nowrap;">Naufaliaaa</span>
          </h4>
          <p>naufalzul45@gmail.com</p>
        </div>
        <hr class="mb-0">
      </div>
      <div id="scrollContainer" class="ps ps--active-y" style="max-height: calc(100% - 245px); position: relative;">
        <ul class="sidenav-menu">
          <li class="sidenav-item">
            <a class="sidenav-link ripple-surface" href="/" tabindex="1"> <i class="fas fa-user-astronaut pr-3"></i>Dashboard</a>
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

    <div class="mdb-page-content text-center page-intro bg-light">
      <div class="text-center py-5">
        <h3 class="my-5">Dashboard</h3>
        
        <button id="toggler" class="btn btn-dark mt-5" data-toggle="sidenav" data-target="#full-screen-example" aria-expanded="true">
          <i class="fas fa-bars"></i>
        </button>
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