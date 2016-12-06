//Requete AJAX d'ajout d'utilisateur dans la base de donnée
$(document).ready(function(){

	$("#submit_add_user").click(function(){

		$.post(
			'Controller/add_user.php',
			{
				name : $("#name_add_user").val(),
				lastname : $("#lastname_add_user").val(),
				password : $("#password_add_user").val(),
				email : $("#email_add_user").val(),
				telephone : $("#tel_add_user").val()
			},
			function(data){
				//Création d'une notification d'un succès ou non
				$("#alert-container").html(data);
				if(data == 'Success'){
					$("#alert-container").html("<div class='alert alert-success alert-dismissable fade in'><i class='icon icon-check-circle icon-lg'></i><strong>Succès !</strong> Utilisateur crée !</div>");
				}
				else{
					$("#alert-container").html("<div class='alert alert-danger alert-dismissable fade in'><i class='icon icon-times-circle icon-lg'></i><strong>Erreur !</strong> message d'erreur.</div>");
				}
			},
			'text'
		);

	});
});