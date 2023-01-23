<?php

	$DomainWeb 			= 'https://intranet..com/';
	$DomainLocal 		= '';
	#	PARA DECIRLE AL SISTEMA DONDE ESTÁN UBICADO LOS ARCHIVOS
	$CDN 			= 'http://cdn..com/resources/permalink/';
	#	PARA DECIRLE AL SISTEMA DONDE GUARDARÁ LOS ARCHIVOS
	$subCDN			= '';

	$Host = 'localhost';	
	$DataBase = 'notaria';	
	$User = 'root';
	$Password = '';
	$COMPANY = '';

	define('URL', $DomainLocal);
	define('CDN', $subCDN);
	define('subCDN', $subCDN);
	define('HOST', $Host);
	define('DB', $DataBase);
	define('USER', $User);
	define('PASSWORD', $Password);
	define('CHARSET', 'utf8');
	define('COMPANY', $COMPANY);