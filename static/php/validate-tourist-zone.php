<?php
	
	/*
	*
	*	Validar datos de la zona turistica
	*
	*/

	class vZoneData
	{

		#	verificamos que sea un nombre o titulo
		public static function name($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_nombre = strlen($valor) >= 5 || strlen($valor) <= 60;
			$valor = $condicion_longitud_nombre ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			return $valor;

		}#	Finaliza name

		#	verificamos que sea un latitud
		public static function latitude($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$lat_array = explode( '.' , $valor );

			$condicion_array = sizeof($lat_array) !=2 ;
			$valor = $condicion_array ? false : $valor;

			$condicion_formato_array =  ! ( is_numeric($lat_array[0]) && $lat_array[0]==round($lat_array[0], 0) && is_numeric($lat_array[1]) && $lat_array[1]==round($lat_array[1], 0)  ) ;
			$valor = $condicion_formato_array ? false : $valor;

			$condicion_valor = $valor >= -90 && $valor <= 90  ;
			$valor = $condicion_valor ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			return $valor;

		}#	Finaliza latitude

		#	verificamos que sea una longitud
		public static function longitude($valor, $metodo){
			
			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$long_array = explode( '.' , $valor );

			$condicion_array = sizeof($long_array) !=2 ;
			$valor = $condicion_array ? false : $valor;

			$condicion_formato_array = !( is_numeric($long_array[0]) && $long_array[0]==round($long_array[0], 0) && is_numeric($long_array[1]) && $long_array[1]==round($long_array[1], 0)  );
			$valor = $condicion_formato_array ? false : $valor;

			$condicion_valor = $valor >= -180 && $valor <= 180  ;
			$valor = $condicion_valor ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			return $valor;

		}#	Finaliza longitude

		#	verificamos que sea un link de google maps
		public static function link_Google_Maps($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_nombre = strlen($valor) >= 5 || strlen($valor) <= 60;
			$valor = $condicion_longitud_nombre ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			return $valor;

		}#	Finaliza link_Google_Maps

		#	verificamos que sea copdigo de google maps
		public static function embed_Google_Maps($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_nombre = strlen($valor) >= 5 || strlen($valor) <= 500;
			$valor = $condicion_longitud_nombre ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : $valor;

			return $valor;

		}#	Finaliza embed_Google_Maps

		#	verificamos que sea un llamado a la accion
		public static function call_Action($valor, $metodo){

			$condicion_tipo_metodo = $metodo == "POST" || $metodo == "GET";
			$metodo = $condicion_tipo_metodo ? $metodo : false;

			$condicion_metodo = $_SERVER["REQUEST_METHOD"] == $metodo;
			$valor = $condicion_metodo ? $valor : false;

			$condicion_longitud_nombre = strlen($valor) >= 10 || strlen($valor) <= 300;
			$valor = $condicion_longitud_nombre ? $valor : false;

			$condicion_estatus_valor = $valor == false;
			$valor = $condicion_estatus_valor ? false : filter_var($valor, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			return $valor;

		}#	Finaliza call_Action

	}#	Finaliza la clase vZoneData