

<?php

//TRAIGO LOS DATOS DESDE EL URL Y LOS COLOCO DENTRO DE VARIABLES
if (isset($_GET['documento_seleccionado']) && isset($_GET['nombre'])) {
  $documento_seleccionado = $_GET['documento_seleccionado'];
  $nombre = $_GET['nombre'];
}
 ?>
 
 <?php
        
// Conecta a la base de datos
$pdo = new PDO('mysql:host=localhost;dbname=jugueteria', 'root', '');

// Recoge el ID del documento seleccionado del formulario
$id = $_GET['notaria_seleccionada'];

// Ejecuta una consulta para obtener los datos del documento seleccionado
$stmt = $pdo->prepare('SELECT * FROM notarias WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$documento = $stmt->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RainBow Jugueteria</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.9.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">RainBow</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto o" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
<br>
    <!-- ======= Breadcrumbs ======= -->
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Seleccion de Notarias</h2>
            <a href="portfolio-trabajo.php">Volver a documentos</a>
        </div>

      </div>

      <div class="container">
        <p>
<br><br>



<div class="col-md-12">

  <div class="col-md-12"> 

  
  <!--CARD PARA TRAER LAS NOTARIAS-->
  <?php



//GRACIAS A ESTOS PARAMETROS NOSOTROS PODEMOS POR LA URL MANDAR A DIFERENTES PARTES LO QUE EL CLIENTE HA SELECCIONADO.
//GRACIAS A ESTOS PARAMETROS NOSOTROS PODEMOS POR LA URL MANDAR A DIFERENTES PARTES LO QUE EL CLIENTE HA SELECCIONADO.
//GRACIAS A ESTOS PARAMETROS NOSOTROS PODEMOS POR LA URL MANDAR A DIFERENTES PARTES LO QUE EL CLIENTE HA SELECCIONADO.
//GRACIAS A ESTOS PARAMETROS NOSOTROS PODEMOS POR LA URL MANDAR A DIFERENTES PARTES LO QUE EL CLIENTE HA SELECCIONADO.
//GRACIAS A ESTOS PARAMETROS NOSOTROS PODEMOS POR LA URL MANDAR A DIFERENTES PARTES LO QUE EL CLIENTE HA SELECCIONADO.
//GRACIAS A ESTOS PARAMETROS NOSOTROS PODEMOS POR LA URL MANDAR A DIFERENTES PARTES LO QUE EL CLIENTE HA SELECCIONADO.
//GRACIAS A ESTOS PARAMETROS NOSOTROS PODEMOS POR LA URL MANDAR A DIFERENTES PARTES LO QUE EL CLIENTE HA SELECCIONADO.
// Conectarse a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "jugueteria");

// Ejecutar una consulta SQL
$resultado = mysqli_query($conexion, "SELECT * FROM notarias");

// Inicializar un contador
$contador = 0;

// Iterar a través de los resultados y mostrar cada elemento "card"
while($fila = mysqli_fetch_array($resultado)) {
  if ($contador % 3 == 0) {
    // Inicio de una nueva fila
    echo '<div class="row my-3">';
  }
  // Mostrar un elemento "card"
 
echo '<div class="col-4 mx-10" style="margin-bottom: 5px">';
echo '  <div class="card text-bg-light mb-3" style="max-width: 20rem;">';
echo '  <h4><div class="card-header ">'. $fila['comuna'] .'</div></h4>';
echo '    <div class="card-body">';
//echo '      <h3 class="card-title">' . $fila['comuna'] . '</h3>';
echo '      <h6 class="card-subtitle mb-2 text-muted">' . $fila['nombre'] . '</h6>';
echo '      <h5 class="card-title">' . $fila['direccion'] . '</h5>';
echo '<hr>';
echo '      <p class="card-text">' . $fila['referencia'] . '</p>';
echo '<table>';
echo '<tr>';
echo '<td><button class="btn btn-outline-primary">Ver Mapa</button></td>';
echo '<br>';
echo '<td><a href="http://localhost/notariagesnot/onepage/mostrar_horas.php?documento_seleccionado='.$fila['id'].'&nombre='.$fila['nombre'].'&notaria_seleccionada='.$fila['id'].'" class="btn btn-outline-warning"><h6>Continuar</h6></a></td>';
echo '</tr>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
  $contador++;
  if ($contador % 3 == 0) {
    // Fin de la fila
    echo '</div>';
  }
}

// Si no se ha cerrado la última fila, cerrarla
if ($contador % 3 != 0) {
  echo '</div>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>

<!--CARD PARA TRAER LAS NOTARIAS-->

  
  </main><!-- End #main -->






  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>RainBow</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Otros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>RainBow</span></strong>. Todos los derechos reservados
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
    <script src="../public/FrontEnd/jquery/jquery-3.4.1.min.js"></script>
  <script>
  $(document).ready(function(){

$('.btn-seleccionar').click(function(){
  x=$(this).val();

  notaria_seleccionada=$('.notaria_seleccionada'+x).val();
  console.log(notaria_seleccionada);

  window.location.href = 'http://localhost/notariagesnot/onepage/mostrar_documento.php?documento_seleccionado='+x+'&seleccionado='+documento_seleccionado;
    
    });//	Finaliza el click
     });//	Finaliza el ready  
  </script>





</body>
</html>