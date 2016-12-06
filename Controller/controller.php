<?php
	//Création d'un controller en charge d'initaliser la vue et la BDD
	class Controller{
		private $db;
		private $view;

		function __construct(){
			require(ROOT.'/Model/database.php');
			require(ROOT.'/View/main.php');
			//création de l'objet database pour la création de la liaison à la BDD
			
			$this->db = new database();
			$this->db->initialize(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);
			$data=$this->db->getUsers(); //Recupération de la liste utilisateurs
			$this->db = null; //Fin de la communication

			$this->view = new view(); //Création de la vue
			$this->view->affichage($data); 

		}

	}
?>