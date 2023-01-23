<?php
	
	/*
	*
	*	Validar datos de uso común o repetitivos
	*
	*/

	class vGeneralData
	{

		#	verificamos el id de la operacion
		public static function idOperation($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$valor = base64_decode($valor);
			$valor = str_replace(' ','-', $valor);

			$condicion_longitud = strlen($valor) != 29 ;
			$valor = $condicion_longitud ? false : $valor;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : $valor;

			return $valor;

		}#	Finaliza pkInt

		#	verificamos que sea un PK tipo INT
		public static function pkInt($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_pkInt = strlen($valor) >= 1 || strlen($valor) <= 10 ;
			$valor = $condicion_longitud_pkInt ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : $valor;

			return $valor;

		}#	Finaliza pkInt

		#	verificamos que sea un PK tipo Char
		public static function pkChar($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_pkChar = strlen($valor) == 36;
			$valor = $condicion_longitud_pkChar ? $valor : false;

			return $valor;

		}#	Finaliza pkChar

		#	verificamos que sea un telefono
		public static function phone($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_telefono = strlen($valor) >= 6 || strlen($valor) <= 11;
			$valor = $condicion_longitud_telefono ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : ctype_digit($valor);

			return $valor;

		}#	Finaliza phone

		#	verificamos que sea un email
		public static function email($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_email = strlen($valor) >= 8 || strlen($valor) <= 300;
			$valor = $condicion_longitud_email ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			$condicion_email = !filter_var($valor, FILTER_VALIDATE_EMAIL);
			$valor = $condicion_email ? false : $valor;

			return $valor;

		}#	Finaliza email

	}#	Finaliza la clase vDatosGenerales