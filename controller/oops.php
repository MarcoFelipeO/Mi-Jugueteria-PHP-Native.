<?php

class Oops extends Controller
{

	function __construct(){
		
		parent::__construct();
		// $this->view->MainTitle = 'Esta página no está disponible.';
		// $this->view->Subtitle = 'Es posible que el enlace que seleccionaste esté dañado o que se haya eliminado la página.';
		// $this->view->render('notFound/index');
			$this->view->render('oops/404');

	}

}