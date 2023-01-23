<?php

  error_reporting(E_ERROR);
  session_start();

  $SignOff = constant('URL').'salir/';
  $Home = constant('URL').'panel/';

  // if(!empty($_SESSION['dataUser'])){header("location: $Home");}
    
  include_once("static/php/key-recaptcha.php");
  include_once("static/templeate/header-login.php");

?>

  <input type="hidden" id="UrlSite" value="<?php echo constant('URL'); ?>">

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Tcloud</b>.com</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="#">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="Password" placeholder="Password" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col">
              <button type="button" class="btn btn-primary btn-block">Iniciar sesión</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mt-2 mb-3"></div>

        <p class="mb-1">
          ¿Perdiste tu contraseña? <a href="<?php echo constant('RESET-PASSWORD'); ?>">Recuperar</a>.
        </p>
        <p class="mb-0">
          ¿No tienes una cuenta? <a href="<?php echo constant('REGISTRATION-QUESTION'); ?>" class="text-center">Registrate</a>.
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

<?php
  include_once("static/templeate/footer-login.php"); 