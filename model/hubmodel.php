<?php
	
	class Hub extends Controller
	{
		function __construct(){	
			parent::__construct();
		}
		#	Process requests that arrive by post
		function post(){
			switch(@$_POST['OPERATION']){
				#	filter documents
				case 'search-document':
					#	VALIDAMOS LOS DATOS COMUNES
					include_once('static/php/validate-general-data.php');
					#	FILTER
					$this->view->filtro = vGeneralData::text($_POST['Filtro'], "POST");

					#	search in the bd
					$this->view->search_document = search_document(['Data-Filter' => $this->view->filtro]);
					$this->view->search_document = $this->model->search_document(['Data-Filter' => $this->view->filtro]);

					#	RENDER
					$this->view->render('hub/card/document-list');
				break;
			    default:
			    	#	ERROR RESERVADO
			    	#	NO LOGRAMOS IDENTIFICAR LA OPERACION A REALIZAR
				    echo json_encode(array( 'error' => '1' ));
					exit();
			}
		}#	Finaliza post
	}