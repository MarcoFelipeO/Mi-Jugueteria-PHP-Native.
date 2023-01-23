<?php

//TRAIGO LOS DATOS DESDE EL URL Y LOS COLOCO DENTRO DE VARIABLES
if (isset($_GET['documento_seleccionado']) && isset($_GET['nombre'])) {
  $documento_seleccionado = $_GET['documento_seleccionado'];
  $nombre = $_GET['nombre'];
  $notaria_seleccionada = $_GET['notaria_seleccionada'];
}
   

// Conecta a la base de datos
$pdo = new PDO('mysql:host=localhost;dbname=jugueteria', 'root', '');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RainBow Horas</title>
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

<style>
  .texto-formateado {
    font-size: 30px;
    color: darkblue;
    font-family: Times New Roman;
  }
</style>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">RainBow</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto o" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
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


 <!-- ======= Breadcrumbs ======= -->
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Seleccion de Horas</h2>
            <a href="mostrar_notarias.php">Volver a pagina anterior</a>
        </div> <!---AQUI-->
      </div>
      <br><br>
      
      <div class="texto-formateado">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seleccione el dia:</h3>
      </div><br>

    

<!---- PARA MOSTRAR LOS DIAS DISPONIBLES--><!---- PARA MOSTRAR LOS DIAS DISPONIBLES-->
<!---- PARA MOSTRAR LOS DIAS DISPONIBLES--><!---- PARA MOSTRAR LOS DIAS DISPONIBLES-->
<!---- PARA MOSTRAR LOS DIAS DISPONIBLES--><!---- PARA MOSTRAR LOS DIAS DISPONIBLES-->



      <div class="row text-center">
  <?php
  $dias_semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
  for($i = 0; $i < count($dias_semana); $i++) {
  ?>
    <div class="col-2 mb-4">
      <div class="card text-bg-light">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $dias_semana[$i]; ?></h6>
          <p class="card-text">
          </p>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>
<!---- PARA MOSTRAR LOS DIAS DISPONIBLES--><!---- PARA MOSTRAR LOS DIAS DISPONIBLES-->
<!---- PARA MOSTRAR LOS DIAS DISPONIBLES--><!---- PARA MOSTRAR LOS DIAS DISPONIBLES-->
<!---- PARA MOSTRAR LOS DIAS DISPONIBLES--><!---- PARA MOSTRAR LOS DIAS DISPONIBLES-->



<div class="texto-formateado">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seleccione la hora que mas le acomode:</h3>
      </div>



      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->

            <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->

                  <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->

                        <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->


<?php
  // Establecer conexión a la base de datos
  $conn = mysqli_connect('localhost', 'root', '', 'jugueteria');
  
  // Comprobar conexión
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  // Ejecutar consulta
  $result = mysqli_query($conn, "SELECT * FROM horarios WHERE notaria_id = $notaria_seleccionada ORDER BY hora ASC");
$i = 0;
  // Procesar resultados
  while ($row = mysqli_fetch_assoc($result)) {
    $hora = $row['hora'];
    $disponible = $row['disponible'];
    if ($i % 3 == 0) {
      echo '<div class="row text-center">';
    }
  ?>
<div class="col-3 mb-4 px-1 mx-auto <?php if ($row['tipo'] == "mañana") { echo "order-md-1"; } else { echo "order-md-3"; } ?>">

      <div class="card text-bg-light" style="width: 24rem;">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted">Horario:&nbsp; <?php echo $row['tipo']; ?></h6>
          <p class="card-text">
          <button class="btn btn-outline-warning" <?php if (!$disponible) { echo "disabled"; } ?>><?php echo $hora; ?></button>
          </tr><a href="registro_datos.php?documento_seleccionado=<?php echo $documento_seleccionado; ?>&nombre=<?php echo $nombre; ?>" class="btn btn-outline-warning">Continuar</a>
            <br>Disponible: 
            <?php 
              if ($row['disponible']) {
                echo "<strong>Sí</strong>";
              } else {
                echo "<strong>No disponible</strong>";
              }
            ?>
          </p>
        </div>
      </div>
    </div>
  <?php
    if ($i % 3 == 2) {
      echo '</div>';
    }
    $i++;
  }
  
  
  // Cerrar conexión
  mysqli_close($conn);
?>
<br>

      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->
      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->
      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->

      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->      <!---- AQUI MOSTRAREMOS LOS HORARIOS DISPONIBLES PARA ESE DIA --->



  



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
              <strong>Phone:</strong> +56 226965552 - +569 98791715<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
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
          &copy; Copyright <strong><span>RainBow</span></strong>. Todos los derechos reservados.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          
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
    <script src="../public/FrontEnd/jquery/jquery-3.4.1.min.js"></script>

  <script>
  $(document).ready(function(){

$('.btn-seleccionar').click(function(){
  x=$(this).val();

  documento_seleccionado=$('.documento_seleccionado'+x).val();
  console.log(documento_seleccionado);

  window.location.href = 'http://localhost/notariagesnot/onepage/mostrar_documento.php?documento_seleccionado='+x+'&seleccionado='+documento_seleccionado;
    
    });//	Finaliza el click
     });//	Finaliza el ready  
  </script>




</body>
</html>