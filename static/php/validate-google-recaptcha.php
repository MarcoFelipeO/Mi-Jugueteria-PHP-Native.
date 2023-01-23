<?php
	
	/*
	*
	*	Validar el google recaptcha
	*
	*/

	class vGoogleRecaptcha
	{

		# Validar recaptcha v3
		public static function v3($token){

			if($token){

				// LLAMAMOS LAS LLAVES DE GOOGLE RECAPTCHA
				include_once('static/php/google-recaptcha.php');

				$googleToken = $token;

				$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY_RECAPTCHA."&response={$googleToken}"); 

				$response = json_decode($response);

				$response = (array) $response;

				if($response['success'] && ($response['score'] && $response['score'] > 0.5)){
					return $token;
				}else{
					return false;
				}
			}else{
				return false;
			}

		}#	Finaliza v3

	}#	Finaliza la clase vGoogleRecaptcha