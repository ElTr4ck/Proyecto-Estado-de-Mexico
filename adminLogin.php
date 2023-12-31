<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login de Administrador</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">Selecao</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">Sobre Nosotros</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Helados</a></li>
          <li><a class="nav-link scrollto " href="index.html#portfolio">Portafolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#testimonials">Blog</a></li>
          <li><a class="nav-link scrollto" href="index.html#comprobante">Contacto</a></li>
          <li><a class="nav-link scrollto active" href="#">Log-In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pagina de acceso de administrador</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Inicio de sesión de administrador</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Inicio de administrador ======= -->
    <section id="loginAdmin">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center formAdmin">
            <form action="login.php" method="POST">
              <fieldset>
                <legend class="textoAcceso">Acceso de administrador</legend>
                <br><br>
                <div class="form-floating">
                  <input type="text" name="userAdmin" id="userAdmin" placeholder="Ingrese su usuario" class="form-control" required>
                  <label for="userAdmin" class="etiquetasAcceso">Nombre de Usuario</label>
                </div>
                <br>
                <div class="form-floating">
                  <input type="password" name="passAdmin" id="passAdmin" placeholder="Ingrese su contraseña" class="form-control" required>
                  <label for="passAdmin" class="etiquetasAcceso">Contraseña de administrador </label>
                </div>
                <br>
              </fieldset>
              <!--PARA EL QUE HAGA ESTO: Conecctar con JS para que cuando se ingresen credenciales incorrectas, muestre esta parte-->
              <div style="display: none;" id="accesoDenegado">
                <p class="accessDenied">El usuario o contraseña son incorrectos, favor de verificar sus datos</p>
              </div>
          </div>
            <div class="d-flex justify-content-center align-items-center enviarForm">
              <input type="submit" value="Ingresar al sistema" class="botonAcceso">
            </div>
            </form>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Hela-Ditos</h3>
      <p>¡Donde Cada Bocado es un Festival de Frescura y Sabor!</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Hela-Ditos</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        Diseñado con <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer> <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/adminLogin.js"></script>
  <!--Código para el mensaje de no acceso-->
  <script>
  window.onload = function() {
    // Verificar si se estableció la variable de sesión 'accesoDenegado'
    if (<?php echo isset($_SESSION['accesoDenegado']) ? 'true' : 'false'; ?>) {
        mostrarAccesoDenegado();
        
        // Eliminar la variable de sesión 'accesoDenegado'
        <?php unset($_SESSION['accesoDenegado']); ?>
    }
  };
</script>

</body>

</html>