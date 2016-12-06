<?php
define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
require(ROOT.'config.php'); //Fichier de config, ne contient que les coordonnées de la BDD pour l'instant
require(ROOT.'Controller/Controller.php');

//Initialisation de la page
$controller = new Controller();

?>