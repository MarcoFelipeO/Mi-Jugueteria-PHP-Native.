<?php

  error_reporting(E_ERROR);
  session_start();

  $SignOff = constant('URL').'salir/';
  $Home = constant('URL').'home/';

  // if(!empty($_SESSION['dataUser'])){header("location: $Home");}
    
  include_once("static/php/google-recaptcha.php");
  include_once("static/templeate/header-login.php");

?>

  <input type="hidden" id="UrlSite" value="<?php echo constant('URL'); ?>">

    <main class="main">
        <div class="content">
            <div class="container-fluid pb-5">
                <div class="row justify-content-md-center">
                    <div class="card-wrapper col-12 col-md-4 mt-5">

                        <div id="Server-Reponse"></div>

                        <div class="brand text-center mb-3">
                            <a href="<?php echo constant('URL'); ?>">
                                <img src="<?php echo constant('URL'); ?>public/Frontend/templeate/corporate/logo.png" alt="Se muestra el logo de emabajadores mayas" class="col-10">
                            </a>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Login</h4>

                                <form id="Form-Login" action="#">

                                    <input type="hidden" name="google-response-token" id="google-response-token" class="form-control" required readonly="readonly">

                                    <div class="form-group">
                                        <label for="email">E-Mail</label>
                                        <input id="email" type="email" class="form-control" name="Email" required="" autofocus="" placeholder="Email" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="Password" required="" placeholder="Password" autocomplete="off" minlength="5" maxlength="300">
                                        <div class="text-right">
                                            <a href="password-reset.html" class="small">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>

                                    <div class="form-group no-margin">
                                        <button type="button" id="Btn-Login" class="btn btn-primary btn-block">
                                            Iniciar sesión
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
      </div>
    </main>

<?php
  include_once("static/templeate/footer-login.php"); 