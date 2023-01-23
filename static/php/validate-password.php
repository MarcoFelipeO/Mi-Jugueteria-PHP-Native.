<?php
	
	/*
	*
	*	Validar y generar contraseña
	*
	*/

	class vPassword
	{

		#	verificamos que la contraseña cumpla con los requerimientos minimos mas nuestra
		#	seguridad
		public static function generate($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_contrasena = strlen($valor) >= 8 && strlen($valor) <= 100;
			$valor = $condicion_longitud_contrasena ? $valor : false;

			$Password = md5(md5(base64_encode($valor)));
			$parametros = [ 'cost' => 13 ];

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : password_hash( $Password , PASSWORD_DEFAULT , $parametros);

			return $valor;

		}#	Finaliza generate

		#	verificamos que sea un password
		public static function password($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_contrasena = strlen($valor) >= 8 && strlen($valor) <= 100;
			return $valor = $condicion_longitud_contrasena ? md5(md5(base64_encode($valor))) : false;

		}#	Finaliza password
		
	}#	Finaliza la clase vPassword