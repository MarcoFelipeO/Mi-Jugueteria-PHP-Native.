<?php
	
	/*
	*
	*	Validar datos de un usuario
	*
	*/

	class vUserData
	{

		#	verificamos que sea un nombre o nombres
		public static function name($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_nombre = strlen($valor) >= 2 || strlen($valor) <= 40;
			$valor = $condicion_longitud_nombre ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			return $valor;

		}#	Finaliza name

		#	verificamos que sea un apellido o apellidos
		public static function lastname($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_nombre = strlen($valor) >= 2 || strlen($valor) <= 60;
			$valor = $condicion_longitud_nombre ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			return $valor;

		}#	Finaliza lastname

	}#	Finaliza la clase vDatosUsuario