<?php
//affichage de notre page web
	class View{

		function affichage($data){
			require(ROOT.'/View/header.html');
			include(ROOT.'/View/body.php');
			require(ROOT.'/View/footer.html');

		}

	}

	
?>