<?php
	
	class Home extends Controller{

		function __construct(){	

			parent::__construct();
			#	DATOS GENERALES DEL SISTEMA
			include_once('static/php/general-data-system.php');
			#	DATOS DEL USUARIO GUARDADOS EN CACHE
			include_once('static/php/objetos/data-user-cache.php');
		}

		#	PANTALLA DE CARGA POR DEFAULT
		#	PANTRALLA DE LOGIN
	

// mt_srand(36);

// $count = 0;

// while($count < 11) {

// 	$x = mt_rand(0, 100);
// 	if(strlen($x) == 1 ){
// 		echo "";
// 	}else{
// 		echo $x = $x.'-';
		
// 	}


//     $count++;

// }

			#	DATOS GENERALES DEL SISTEMA
			// include_once('static/php/validate-general-data.php');

			// ECHO $Key = base64_encode('13 28 74 53 63 89 65 80 22 14');           

		// 	$cadena = base64_decode($Key);
         //    $separador = " ";
         //    $separada = str_replace(' ','-', $cadena);
		
		 // echo $x = vGeneralData::idOperation($Key,'GET');

// $cadena = "<br>Esta es la cadena de ejemplo para sustituir un caracter";
// echo $cadena;
// $resultado = str_replace("a", "A", $cadena);
// echo "<br>La cadena resultante es: " . $resultado;

// $cadena2 = "<br>Esta es la cadena de ejemplo para sustituir una cadena";
// echo $cadena2;
// $resultado2 = str_replace("cadena", "CADENA", $cadena2);
// echo "<br>La cadena resultante es: " . $resultado2;

					$this->view->render('WEB/home/index');
			}

		}#	Finaliza render

	}