<?php 
	
	$METHOD = 'AES-256-CBC';
	$SECRET_KEY = 'HgQXQJFQaRtqmU5naZaypgN5Ta4W273odz';
	$SECRET_IV = '27968234369665387';

	define('METHOD', $METHOD);
	define('SECRET_KEY', $SECRET_KEY);
	define('SECRET_IV', $SECRET_IV);

	class SEDC
	{
		// Encriptamos el contenido
		public static function encryption($data){
			$outputs = false;
			$key = hash('sha256',SECRET_KEY);
			$iv = substr(hash('sha256',SECRET_IV), 0, 16);
			$outputs = openssl_encrypt($data,METHOD, $key, 0, $iv);
			$outputs = base64_encode(base64_encode($outputs));
			return $outputs;
		}

		// Desencriptamos el contenido
		public static function decryption($data){
			$key = hash('sha256', SECRET_KEY);
			$iv = substr(hash('sha256', SECRET_IV), 0, 16);
			$outputs = openssl_decrypt(base64_decode(base64_decode($data)), METHOD, $key, 0, $iv);
			return $outputs;
		}

	}