<?php
	session_start();
	session_unset();
	session_destroy();

  $Login = constant('URL');
	//devuelvo al usuario a la página de inicio
	header("location: $Login");