<?php

	/*==========  script de connexion utilisateur  ==========*/

	include ('includes/connexion.inc.php');
	include ('includes/verif_connect.inc.php');

	/*==========  si l'utilisateur es deja connecté il est rédirigé vers l'acceuil  ==========*/
		if($connecte){
			header('Location:index.php'); 
			die();
		}
	/*==========  fin  ==========*/
			
	require("lib/SmartyBC.class.php");
	include('includes/haut.inc.php'); 
	include ('includes/fonctions.inc.php');
	$smarty = new SmartyBC();

	/*==========  verification des informations fournie  ==========*/
	
		if(isset($_POST['email'])){
			$email=mysql_real_escape_string(var_post('email'));
			$sid=md5($email.time());
			$mdp=mysql_real_escape_string(var_post('mdp'));
			$sql="SELECT id,email FROM utilisateurs WHERE email='$email' and mdp='$mdp'";
			$res=mysql_query($sql);
			$nr=mysql_num_rows($res);

			/*==========  Informations excates  ==========*/
			
				if($nr>0)
				{
					$sid=md5($email.time());
					setcookie('sid',$sid,time()+3600);
					$sql="UPDATE utilisateurs SET sid='$sid'";
					$res=mysql_query($sql);
					setcookie('erreur','non',time()+1200);
					header('Location:index.php');
				}
			/*==========  fin  ==========*/
			
				else

			/*==========  informations erronées  ==========*/
				{

					setcookie('erreur','oui',time()+1200);
					header('Location:connexion.php');
				}
			/*==========  fin  ==========*/	

		}
	/*==========  fin  ==========*/
	
	$smarty->display("views/connexion.tpl");
	include('includes/bas.inc.php'); 
?>