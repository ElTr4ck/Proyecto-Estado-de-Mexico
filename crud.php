<?php
session_start();

$_SESSION['crudAdmin'] = true;

$usuario = $_SESSION['username'];
if ($usuario == null || $usuario = '') {

  header('Location: index.html');
  echo '<link href="assets/css/loginStyle.css" rel="stylesheet">
  <b class="error-acceso">Usted no tiene autorización<b>';
}

$conexion = mysqli_connect('localhost', 'root', '', 'heladeria');
if (!$conexion) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pagina de contratacion</title>
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
  <link rel="stylesheet" href="assets/css/crudStyle.css">

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
          <li><a class="nav-link scrollto active" href="#">Consulta y Bajas</a></li>
          <li><a class="nav-link scrollto" href="crate.html">Altas de productos</a></li>
          <li><a class="nav-link scrollto" href="index.html">Cerrar Sesión</a></li>
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
          <h2>Control de administrador</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Control de acciones de administrador</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <h2>Consultas y eliminaciones</h2>
        <br>
        <table class="table table-bordered">
          <tr>
            <th>Sabor</th>
            <th>Descripción</th>
            <th>Foto</th>
            <th>D</th>
          </tr>
          <?php
          $consulta = "SELECT * FROM helados";

          $resultado = mysqli_query($conexion, $consulta);
          //mientras encuentre elementos del arreglo, se va llenando la tabla
          while ($show = mysqli_fetch_array($resultado)) {
          ?>
            <tr>
              <td><?php echo $show['sabor'] ?></td>
              <td><?php echo $show['descripcion'] ?></td>
              <td><?php echo $show['imagen'] ?></td>
              <td><a href="eliminar.php?sabor=<?php echo $show['sabor']; ?>"> X </a></td>
            </tr>
          <?php
          }

          ?>
        </table>
        <div class="d-flex justify-content-center align-items-center crearHelado">
        <a href="crate.html">Añadir helado</a>
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
  </footer><!-- End Footer -->

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

</body>
</html>
