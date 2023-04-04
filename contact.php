<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     
    <title>Contactos</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <link rel="stylesheet" href="assets/css/maicons.css" />

    <link rel="stylesheet" href="assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="assets/vendor/fancybox/css/jquery.fancybox.css" />

    <link rel="stylesheet" href="assets/sass/theme.css" />
  </head>
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      <div class="top-bar mt-2">
        <div class="container">
          <div class="text-center">
            <div class="col">
              <div class="d-inline-block">
                <span class="mai-mail fg-primary"></span>
                <span>yaguado@cepeda.com.es</span>
              </div>
              <div class="d-inline-block ml-2">
                <span class="mai-call fg-primary"></span> <span>+7005048562752</span>
              </div>
            </div>
          </div>
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a href="index.php" class="navbar-brand"
            ><span class="text-primary" style="font-size: 1rem">Vivienda en canadá</span></a
          >

          <button
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto pt-3 pt-lg-0" style="font-size: 0.6rem">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="blog.php" class="nav-link">Artículo</a>
              </li>
              <li class="nav-item active">
                <a href="contact.php" class="nav-link">Contactos</a>
              </li>
              <li class="nav-item">
                <a href="policy.php" class="nav-link">Política de privacidad</a>
              </li>
              <li class="nav-item">
                <a href="terms.php" class="nav-link">Términos y condiciones</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- .container -->
      </nav>
      <!-- .navbar -->
    </header>

    <footer class="page-footer">
      <div class="container">
        <div class="col">
          <div class="col text-center py-3">
            <h1 class="pb-4">Contactos</h1>
            <p>Avenida Inés, 047, 4º B, 81145, Nájera de la Sierra</p>
            <p>yaguado@cepeda.com.es</p>
            <p>+7005048562752</p>
          </div>
        </div>

        <hr />

        <div class="col mt-4">
          <div class="col text-center">
            <p>
              ©
              <script>
                document.write(new Date().getFullYear());
              </script>
              Copyright
            </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="cookie-banner">
      <p style="color: #000000">
        El sitio web utiliza "cookies". Permiten identificarlo y recibir su información de la experiencia del usuario.Continuando con la navegación de la web, estoy de acuerdo con el uso de las cookies, el propietario del sitio de conformidad con 
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Política de cookies</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="assets/vendor/wow/wow.min.js"></script>

    <script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="assets/js/theme.js"></script>
  </body>
</html>
