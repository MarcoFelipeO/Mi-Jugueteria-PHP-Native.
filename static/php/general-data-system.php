<?php
	
	/*
	*
	*	Obtener datos del sistema
	*
	*/

	class vGeneralDataSystem
	{

		#	Obtener fecha del sistema
		public static function date($formato, $periodo){

			/*
			*	formato =
			*		Y-m-d = Año-Mes-Dia
			*		d-m-Y = Dia-Mes-Año
			*		NA = no aplica
			****
			****
			*	periodo =
			*	Unicamente aplica cuando NA es ingresado como formato
			*	Se obtendrá el Día, Mes o Año, 1 valor por peticion
			*   NA = no aplica
			*/

			#	ZONA HORARIA DEL SISTEMA
			date_default_timezone_set('America/Mexico_City');

			if($formato == "Y-m-d" && $periodo == "NA")
			{
				return $valor = date("Y-m-d");
				exit();
			}

			if($formato == "d-m-Y" && $periodo == "NA")
			{
				return $valor = date("d-m-Y");
				exit();
			}

			switch($formato == "NA" && $periodo == "Y" || $periodo == "m" || $periodo == "d"){
			    case "Y":
			        return $valor = date("Y");
			        break;
			    case "m":
			        return $valor = date("m");
			        break;
			    case "d":
			        return $valor = date("d");
			        break;
			    default:
			    return false;
			}

		}#	Finaliza date

		#	Obtener hora del sistema
		public static function hour(){

			#	ZONA HORARIA DEL SISTEMA
			date_default_timezone_set('America/Mexico_City');

			return date('h:i:s A', time());;

		}#	Finaliza hour

		#	Email de la empresa
		public static function email($data){

			switch($data){
			  case "Info":
			     return'info@mayantouristambassadors.com';
			  break;

			  case "Booking":
			     return'booking@EmbajadoresMayas.com';
			  break;

			  case "Newsletter":
			     return'newsletter@EmbajadoresMayas.com';
			  break;

			  case "Support":
			     return'support@mayantouristambassadors.com';
			  break;

			  default:
			    return 'info@mayantouristambassadors.com';
			}

		}#	Finaliza email

		#	Telefono de la empresa
		public static function telephone(){

			return '+52 1 997 127 04 68';

		}#	Finaliza telephone

		#	Address de la empresa
		public static function address(){

			return 'Peto, Yuc.';

		}#	Finaliza address

	}#	Finaliza la clase vGeneralDataSystem