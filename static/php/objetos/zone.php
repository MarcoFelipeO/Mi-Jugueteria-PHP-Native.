<?php
	
	#	OBJETOS

	#	Para el listado de las zonas turisticas
	class points_interaction_area_list
	{
		public $Icon;
		public $Name;	  	#   Objeto consumido por el modulo, controlador y modelo
	  	#   ->  zone -> render -> Point-Interaction -> points_interaction_area

	}#	Finaliza la clase points_interaction_area_list

	#	Para el listado de las zonas turisticas dentro un <select>
	class tourist_areas
	{		
		public $ID;
		public $Name;

	  #   Objeto consumido por el modulo, controlador y modelo
	  #   ->  search -> render -> selector_Tourist_Areas

	}#	Finaliza la clase tourist_areas

	#	Para el listado solo de la informacion basica de la zona tuiristica
	class list_presentation_tourist_areas_OBJ
	{
		public $ID;
		public $Name;
		public $Call_Action;
		public $Photo_Cover;
	  	#   Objeto consumido por el modulo, controlador y modelo
	  	#   ->  hub -> POST -> List-Presentation-Tourist-Of-Areas-Card -> list_presentation_tourist_areas
	}#	Finaliza la clase zone_list

	#	Para datos de las zonas turisticas
	class zones
	{
		public $PK;
		public $Name;
		public $Latitude;
		public $Longitude;
		public $Link_Google_Maps;
		public $Embed_Google_Maps;
		public $Call_Action;
		public $FK_Status_Zone;
	  	#   Objeto consumido por el modulo, controlador y modelo
	  	#   ->  zone -> render -> selected_Zone
	}#	Finaliza la clase zone