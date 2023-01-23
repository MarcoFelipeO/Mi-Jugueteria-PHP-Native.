<?php
	
	/*
	*
	*	Validar datos relacionados al tipo de cuenta
	*
	*/

	class vUserAccountType
	{

		#	verificamos que sea un numero entero
		public static function pk($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_pk = strlen($valor) >= 1 && strlen($valor) <= 11;
			$valor = $condicion_longitud_pk ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : ctype_digit($valor);

			return $valor;

		}#	Finaliza pk

	}#	Finaliza la clase vUserAccountType