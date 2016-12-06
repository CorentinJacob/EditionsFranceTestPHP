<!-- Scripts jQuery pour AJAX -->
<script src="View/js/add-user.js"></script>
<script src="View/js/edit-user.js"></script>
<script src="View/js/delete-user.js"></script>
<!--Zone de notifications d'erreur ou de succès-->

<div id="alert-container">
</div>

<!-- Header de la page principal -->
<header>
	<div class="container">
		<h1>Gestion des utilisateurs</h1>
		<p>Bienvenue dans un site test sur une gestion d'utilisateurs</p>
	</div>
</header>
<!-- Formulaire d'ajout d'utilisateur -->
<div class="panel panel-default container" id="form_new_user">
	<div class="panel-heading">
		<h3 class="panel-title">Nouveau Utilisateur</h3>
	</div>
	<div class="row">
	<form>
		<div class="col-sm-4">
			<div class="input-group">
				<span class="input-group-addon">Nom</span>
				<input type="text" id="name_add_user" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<span class="input-group-addon">Prenom</span>
				<input type="text" id="lastname_add_user" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<span class="input-group-addon">Mot de Passe</span>
				<input type="password" id="password_add_user" class="form-control">
			</div>
		</div>
		<div class="col-sm-8">
			<div class="input-group">
				<span class="input-group-addon">Email*</span>
				<input type="email" id="email_add_user" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="input-group">
				<span class="input-group-addon">Telephone*</span>
				<input type="tel" id="tel_add_user" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div id="btn-add_user">
			<input type="" id="submit_add_user" class="btn btn-default" value="Ajouter">
		</div>
	</div>
	</form>
</div>
<!-- Liste des utilisateurs -->
<div class="panel panel-default container" id="container_users">
    <div class="panel-heading">
    	<h3 class="panel-title">Utilisateurs</h3>
    </div>
    <table class="table">
    	<thead>
        	<tr>
          		<th>#</th>
          		<th>Nom</th>
          		<th>Prénom</th>
          		<th>Téléphone</th>
          		<th>Email</th>
        	</tr>
      	</thead>
      	<tbody>
      <?php 
      		$i = 0;
      		foreach($data as $user){
      			$i++;
      			echo("<tr>
      					<td>".$i."</td>
      					<td>".$user->name."</td>
      					<td>".$user->lastname."</td>
      					<td>".$user->telephone."</td>
      					<td>".$user->email."</td>
      					<td><input type='button' class='btn mini blue-stripe btn_edit_user' value = 'Editer'></td>
      					<td><input type='button' class='btn mini blue-stripe' value = 'Supprimer' id='submit_del_user'></td>
      				</tr>");
      		}
      ?>
     	</tbody>
    </table>
    </div>
</div>

<div class="container">
  <div class="modal fade" id="Modal_edit_user" role="dialog">
    <div class="modal-dialog">

      <!-- Modal pour edition des utilisateurs-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:green;"><span class="glyphicon glyphicon-pencil"></span> Editer un utilisateur</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user"></span> Nom</label>
              <input type="text" class="form-control" id="name" placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="lastname"><span class="glyphicon glyphicon-user"></span> Prenom</label>
              <input type="text" class="form-control" id="lastname" placeholder="Prenom">
            </div>
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" class="form-control" id="name" placeholder="Entrer un mail">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Nouveau mot de passe">
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"></span> Valider</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" id="submit_edit_user" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
    </div>
  </div> 
</div>

</body>