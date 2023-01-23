<?php

	#	Para el listado de los usuarios
	class user_list
	{
		public $Pk;
		public $Name;
		public $LastName;
		public $Email;
		public $Account_Type;
	  	#   Objeto consumido por el modulo, controlador y modelo
	  	#   ->  users -> render -> user_list
	}#	Finaliza la clase usuarios

	#	Para datos de un usuario
	class user
	{
		public $Pk;
		public $Name;
		public $LastName;
		public $Email;
		public $FK_Account_Type;
	  	#   Objeto consumido por el modulo, controlador y modelo
	  	#   ->  users -> render -> selected_User
	}#	Finaliza la clase user