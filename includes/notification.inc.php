<?php
	/*==========  Notification pour le traitement des articles  ==========*/

		if(isset($_SESSION['article']))
		{
			$th="alert-success";
			switch($_SESSION['article'])
			{
				case 'ajouté':
					$msg='Ajout avec success';
					break;
				case 'connecté':
					$msg='Vous vous êtes connecté avec success';
					break;
				case 'modifié':
					$msg='modifier avec success';
					break;
				case 'supprimé':
					$msg='supprimé avec success';
					break;
				case 'erreur':
					$th="alert-error";
					$msg='Erreur';
					break;
			}
			?>	
			<div class="alert <?php echo $th?>">
			  <?php echo $msg?>
			</div>
			<?php
			unset($_SESSION['article']);
		}

	/*==========  fin  ==========*/
?>

<?php
	/*==========  Notification pour la connexion  ==========*/

		if(isset($_COOKIE['erreur'])&& $_COOKIE['erreur']=='oui')
		{
			?>
			<div class="alert alert-error">
				<strong>Erreur!!!</strong> email ou mot de passe incorrect
			</div>
			<?php
			setcookie('erreur','',-1);
		}elseif(isset($_COOKIE['erreur'])&& $_COOKIE['erreur']=='non') {
			?>
			<div class="alert alert-success">
				<strong>Connecté avec succès!!!</strong>
			</div>
			<?php	
			setcookie('erreur','',-1);
		}

	/*==========  fin  ==========*/	
?>
	


