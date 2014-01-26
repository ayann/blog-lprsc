<!-- Vue de la page de connexion -->

<h2>Connexion</h2>
<p>Saisissez les identifiants choisis lors de votre inscription</p>
<form action="connexion.php" method="post" id="form_connexion">
	<fieldset>
		<div class="clearfix">
			<label for="email"> Email</label>
			<div class="input"> <input id="email" name="email" size="30" type="email" value="" required/> </div>
		</div>
		<div class="clearfix">
			<label for="mdp"> Mot de passe</label>
			<div class="input"> <input id="mdp" name="mdp" size="30" type="password" required> </div>
		</div>
		<div class="form-action">
			<input class="btn btn-large btn-primary" id="submit"   type="submit" value="Se connecter"/> 
		</div>
</form>