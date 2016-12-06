<?php
	// Classe pour la connection et requête sur la base de données
class Database{
	private $db;
	// Création de l'objet PDO
	public function initialize($db_name, $db_host, $db_user, $db_pass){
		$db = new PDO('mysql:dbname='.$db_name.';host='.$db_host.';',$db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
		//Indication que la base de données est en utf-8 en plus du login de connexion
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db = $db;
	}
	
	// Requete de recupération des utilisateurs
	public function getUsers(){
		$query = "SELECT * FROM users;";
		$req = $this->db->query($query);
		$data = $req->fetchAll(PDO::FETCH_OBJ);
		return $data;
	}
	
	
	public function setUser($id, $name, $lastname, $email, $telephone, $password){

	}

	// Préparation et exécution de la requête d'ajout d'utilisateur
	public function addUser($name, $lastname, $password, $email, $telephone){
		$query = "INSERT INTO `users` (`id`, `name`, `lastname`, `telephone`, `email`, `password`) VALUES (NULL, ?, ?, ?, ?, ?);";
		$safe_request = $this->db->prepare($query);
		$safe_request->bindParam(1, $name);
		$safe_request->bindParam(2, $lastname);
		$safe_request->bindParam(3, $telephone);
		$safe_request->bindParam(4, $email);
		$safe_request->bindParam(5, $password);
		$safe_request->execute();
	}

}
//à securiser + gestion des erreurs avec try and catch.
?>