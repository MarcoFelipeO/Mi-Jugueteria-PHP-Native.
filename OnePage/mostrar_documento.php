

<?php

//TRAIGO LOS DATOS DESDE EL URL Y LOS COLOCO DENTRO DE VARIABLES
if (isset($_GET['documento_seleccionado']) && isset($_GET['nombre'])) {
  $documento_seleccionado = $_GET['documento_seleccionado'];
  $nombre = $_GET['nombre'];
}
   
        
// Conecta a la base de datos
$pdo = new PDO('mysql:host=localhost;dbname=jugueteria', 'root', '');

// Recoge el ID del documento seleccionado del formulario
$id = $_GET['documento_seleccionado'];

// Ejecuta una consulta para obtener los datos del documento seleccionado
$stmt = $pdo->prepare('SELECT * FROM documentos WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$documento = $stmt->fetch();


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RainBow Documentos</title>
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

      <h1 class="logo"><a href="index.html">RainBow Jugueteria</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Notarias</a></li>
          <li><a class="nav-link scrollto o" href="#portfolio">Documentos en linea</a></li>
          <li><a class="nav-link scrollto" href="#team">Preguntas frecuentes</a></li>
          <!--<li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>-->
          <li class="dropdown"><a href="#"><span>Servicios</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">RESERVA DE HORA EN NOTARIA</a></li>
              <li class="dropdown"><a href="#"><span>MAS SOLICITADOS</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="#">RESERVA DE HORA</a></li>
                  <li><a href="#">CONFECCION</a></li>
                  <li><a href="#">VEHICULOS</a></li>
                  <li><a href="#">ESCRITURAS PUBLICAS</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADERHEADER HEADERHEADER HEADER HEADER HEADER HEADER HEADER --->
  <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADERHEADER HEADERHEADER HEADER HEADER HEADER HEADER HEADER --->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
          <ol>
            <li><a href="portfolio-trabajo.php">Volver a pagina anterior</a></li>
          </ol>
        </div> <!---AQUI-->

      </div>
    </section><!-- End Breadcrumbs -->

    <br>
   <center>       
    <h1>Bienvenido a la seleccion de Documentos</h1>
   </center>

   <center>
   <table>
    <section class="inner-page">
      <div class="container">
        <p>
<?php
      # TRAE MIS DATOS DESDE MYSQL Y LOS MUESTRA EN PANTALLA

          echo ' <strong><center><h2>Usted Selecciono:</h2><h1>' . $documento['nombre'] . '</h1><br></center></strong>';
          
          echo '<h2>Descripcion de Documento:</h2><p>' . $documento['descripcion'] . '</p>';

          echo '<td><h2>Requerimientos:</h2><p>' . $documento['requerimientos'] . '</p></td>';
?>
     <td><img src="<?php echo $documento['ruta']; ?>" style="width:500px">
</td>
     <?php echo '</table>'; ?>
  </center>
  <br>
<center>
<label>He leído y comprendo los requerimientos &nbsp;</label><input type="checkbox" name="acuerdo" required>
</center>
<br>

</table>

<center>
<tr>
    <td><button type="submit" class="btn btn-outline-secondary" name="submit"><a href="index.php"><p1>volver al index</p1></a></button></td>
</tr>
<tr>
<!-- Botón para enviar a tercera página -->

</tr><a href="mostrar_notarias.php?documento_seleccionado=<?php echo $documento_seleccionado; ?>&nombre=<?php echo $nombre; ?>" class="btn btn-outline-warning">Continuar</a>
</center>

        </p>
      </div>
    </section>

  </main><!-- End #main -->

    
</body>
</html>