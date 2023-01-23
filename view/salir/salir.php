<?php
	echo "salir";
	session_start();
	session_unset();
	session_destroy();
	//devuelvo al usuario a la página de inicio

	//header("location: https://intranet.wirelesstw.com/");
?>