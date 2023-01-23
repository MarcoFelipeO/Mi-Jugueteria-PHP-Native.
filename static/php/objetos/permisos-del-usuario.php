<?php
	#	para el listado de los permisos del usuario activo
	class user_permissions
	{

		public $Pk_User_Permissions;
		public $System_Module;
		public $System_Sub_Module;
		public $View;
		public $Attach;
		public $Remove;
		public $Swap;
        #   Objeto consumido por los modelos
        #   ->  check_my_system_permissions
        #   Objeto consumido por los controladores
        #   ->  validateLogin
	}	