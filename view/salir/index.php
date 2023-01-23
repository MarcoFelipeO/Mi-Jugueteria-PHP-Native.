<?php
	session_start();
	session_unset();
	session_destroy();

	$login = constant('URL').'login/';

	header("location: $login");