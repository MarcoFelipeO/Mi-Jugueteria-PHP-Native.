<?php
// Iniciar la sesión
session_start();

// Asignar el valor de la variable del formulario a una variable de sesión
#GUARDA LOS DATOS QUE QUEREMOS GUARDAR
$_SESSION['documento_seleccionado'] = $_POST['documento_seleccionado'];






// Conecta a la base de datos
$pdo = new PDO('mysql:host=localhost;dbname=jugueteria', 'root', '');

// Ejecuta una consulta para obtener los datos de la tabla
$stmt = $pdo->prepare('SELECT * FROM documentos ORDER BY nombre ASC');
$stmt->execute();
$documentos = $stmt->fetchAll();
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

  <!-- Este es mi CSS MAIN -->
  <!-- Este es mi CSS MAIN -->

  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Este es mi CSS MAIN -->
  <!-- Este es mi CSS MAIN -->

  <!-- =======================================================
  * Template Name: OnePage - v4.9.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    /* Estilos para la tabla */
    table {
        width: 1300px; /* Ancho completo de la tabla */
        border-collapse: collapse;
        height: 200px; /* Elimina los bordes dobles */
        margin:0 auto;
        text-align:center;
        
    }

    /* Estilos para las celdas de la tabla */
    td, th, td, tr {
        border: 1px solid #dddddd; /* Añade un borde a las celdas */
        text-align: left; /* Alinea el texto a la izquierda */
        padding: 8px; /* Añade espacio alrededor del texto */
    }

    /* Estilos para la cabecera de la tabla */
    thead {
        background-color: #dddddd; /* Añade un color de fondo a la cabecera */
    }

    
</style>


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

      <h1 class="logo"><a href="index.php"></a><img class="logo-gesnot" src="assets/img/Logo-Final-Gesnot.jpg"></h1>
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Notarias</a></li>
          <li><a class="nav-link scrollto activeo" href="#portfolio">Documentos en linea</a></li>
          <li><a class="nav-link scrollto" href="#team">Preguntas frecuentes</a></li>
         <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>-->
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
  </header>
  <!-- End Header -->
  <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADERHEADER HEADERHEADER HEADER HEADER HEADER HEADER HEADER --->
  <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADERHEADER HEADERHEADER HEADER HEADER HEADER HEADER HEADER --->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
   <br>
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>RainBow</h2>
         
           <a href="index.php"><h>Volver al Inicio</h4></a>
            
          
        </div>

      </div>
    








<center>
<!-- Formulario de búsqueda -->
<?php

// Conectarse a la base de datos MySQL
$server = "localhost";
$username = "root";
$password = "";
$database = "jugueteria";

$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
  die("Error de conexión: " . mysqli_connect_error());
}

// Si se ha enviado el formulario de búsqueda, realizar la consulta a la base de datos
if (isset($_POST['submit'])) {
  $busqueda = mysqli_real_escape_string($connection, $_POST['busqueda']);
  $query = "SELECT * FROM documentos WHERE nombre LIKE '%".$busqueda."%'";
  $result = mysqli_query($connection, $query);
}

?>

<!-- Formulario de búsqueda -->
<form action="" method="post">
  <input type="text" name="busqueda" style="width:350px; height:50px" placeholder="Buscar en RainBow">
  <input class="btn btn-outline-primary" type="submit" style="width:100px; height:50px" name="submit" value="Buscar">
</form>


<!-- Mostrar resultados de la búsqueda -->
<?php if (isset($result) && mysqli_num_rows($result) > 0): ?>
  <h2>Resultados de la búsqueda</h2>
  <?php while ($row = mysqli_fetch_assoc($result)): ?>
     <h5><strong><a href="http://localhost/notariagesnot/onepage/mostrar_documento.php?documento_seleccionado=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre']; ?> <h5><?php echo $row['nombre']; ?> </h5><br></strong></h5>

    
    
    </a>
  <?php endwhile; ?>
<?php else: ?>
  <p>Busque sus Juguetes preferidos</p>
<?php endif; ?>

</center>



   

        
<!--
// 1. Establece una conexión a la base de datos
//$conn = mysqli_connect('localhost', 'root', '', 'notaria');

// 2. Ejecuta una consulta para seleccionar todas las filas de la tabla "sucursales"
//$result = mysqli_query($conn, 'SELECT * FROM notarias');

//echo '<table>';

// 3. Recorre todas las filas de los resultados y las muestra en una tabla
//while ($row = mysqli_fetch_assoc($result)) {
  
//  echo '<tr>';
//  echo '<td>' . $row['id'] . '</td>';
//  echo '</tr>';
//  echo '<tr>';
//  echo '<td>' . $row['nombre'] . '</td>';
//  echo '</tr>';
//  echo '<tr>';
//  echo '<td>' . $row['direccion'] . '</td>';
 //         echo '</tr>';
//}

//echo '</table>';

// 4. Cierra la conexión a la base de datos
//mysqli_close($conn);
-->



<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.----><!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<br>
<center>
  <div class="texto-formateado">
<strong><h2>JUGUETES DISPONIBLES PARA TI</h2></strong>
  </div>
</center>
<br>

  </main>

  <center>
  <!--CARD PARA TRAER LAS NOTARIAS-->
  <?php

// Conectarse a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "jugueteria");

// Ejecutar una consulta SQL
$resultado = mysqli_query($conexion, "SELECT * FROM documentos");

// Inicializar un contador
$contador = 0;

// Iterar a través de los resultados y mostrar cada elemento "card"
while($fila = mysqli_fetch_array($resultado)) {
  if ($contador % 4 == 0) {
    // Inicio de una nueva fila
    echo '<div class="row mx-auto" style="margin: 5px">';
  }
  // Mostrar un elemento "card"
  echo '<div class="col-3">';
  echo '<div class="btn btn-light" style="width: 22rem;">';
  echo '<div class="card-body texto-formateado">';
  echo '<br>';
  echo '<h5 class="texto-formateado"><strong>' . $fila['nombre'] . '</strong></h5>';
  echo '<br>';
  echo '<a href="http://localhost/notariagesnot/onepage/mostrar_documento.php?documento_seleccionado='.$fila['id'].'&id='.'&nombre='.$fila['nombre'].'" class="btn btn-primary"><h6>Ver mas informacion...</h6></a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  $contador++;
  if ($contador % 4 == 0) {
    // Fin de la fila
    echo '</div>';
  }
}

// Si no se ha cerrado la última fila, cerrarla
if ($contador % 4 != 0) {
  echo '</div>';
  echo'</div>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>
  </center>
<!--CARD PARA TRAER LAS NOTARIAS-->


<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.----><!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->
<!---- AQUI TENEMOS UN COMPONENTE UTILIZABLE.---->





 
<!---- PARTE BAJA DE LA PAGINA WEB.----><!---- PARTE BAJA DE LA PAGINA WEB.---->
<!---- PARTE BAJA DE LA PAGINA WEB.---->
<!---- PARTE BAJA DE LA PAGINA WEB.----><!---- PARTE BAJA DE LA PAGINA WEB.---->
<!---- FOOTER PARTE BAJA.----><!---- FOOTER PARTE BAJA.----><!---- FOOTER PARTE BAJA.---->
<!---- FOOTER PARTE BAJA.----><!---- FOOTER PARTE BAJA.----><!---- FOOTER PARTE BAJA.---->

<br><br><br>

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