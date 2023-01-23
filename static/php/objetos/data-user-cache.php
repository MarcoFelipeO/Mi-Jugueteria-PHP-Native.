<?php
	#	Datos del usuario guardados en cache

    error_reporting(E_ERROR);
    session_start();

	// echo "<pre>";
	// print_r($_SESSION['data-Newsletter-Subscriber']);
	// echo "</pre>";
	class userDataCache
	{

		#	Inicial del Nombre(s) del usuario
		public static function initialName(){
			return substr($_SESSION['dataUser']['Name'],0,1);
		}#	Finaliza initialName

		#	Pk del usuario
		public static function userPK(){
			return $_SESSION['dataUser']['PK_User'];
		}#	Finaliza userPK

		#	Nombre(s) del usuario
		public static function name(){
			return $_SESSION['dataUser']['Name'];
		}#	Finaliza name

		#	Apelldio(s) del usuario
		public static function lastName(){
			return $_SESSION['dataUser']['LastName'];
		}#	Finaliza lastName

		#	email del usuario
		public static function email(){
			return $_SESSION['dataUser']['Email'];
		}#	Finaliza email

		#	email del usuario
		public static function telephone(){
			return $_SESSION['dataUser']['Telephone'];
		}#	Finaliza email

	}

	class newsletterSubscriberDataCache
	{

		#	email del usuario
		public static function email(){
			return $_SESSION['data-Newsletter-Subscriber']['Email'];
		}#	Finaliza email

	}