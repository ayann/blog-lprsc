<?php 
	//  Deconnection
	setcookie('sid','',-1); // suppression du cookies
	header('Location:index.php'); // redirection vers l'acceuil
?>