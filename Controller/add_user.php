<?php
//Script PHP en charge de créer l'objet database afin d'ajouter un utilisateur.

//"à sécuriser + gestion d'erreurs"
	if( isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['password'])){

		require('../config.php');
		require('../Model/database.php');
		require('../View/main.php');

		if(is_numeric($_POST['telephone'])){
			$db = new database();
			$db->initialize(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);
			$db->addUser($_POST['name'], $_POST['lastname'], $_POST['password'], $_POST['email'], $_POST['telephone']);
			$db = null;
			echo ("Success");
		}
		else{
			echo("Failed");
		}

	}
	else{
		echo("Failed");
	}

?>