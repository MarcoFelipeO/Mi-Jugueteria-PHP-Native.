<?php

  error_reporting(E_ERROR);
  session_start();

    // $SignOff = constant('Sign-Off');
    // $Home = constant('URL').'desk/';

    // if(empty($_SESSION['dataUser'])){ header("location: $SignOff");}
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="<?php echo $this->Meta_Keywords; ?>" name="keywords">
    <meta content="<?php echo $this->Meta_escription; ?>" name="description">
    <meta name="author" content="<< druizuch@gmail.com >> ">

    <!-- Title -->
    <title><?php echo $this->Tab_Title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/FrontEnd/templeate/corporate/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo constant('URL'); ?>public/FrontEnd/templeate/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo constant('URL'); ?>public/FrontEnd/templeate/css/style.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
</head>
<body>
<input type="hidden" id="UrlSite" value="<?php echo constant('URL'); ?>">
  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->