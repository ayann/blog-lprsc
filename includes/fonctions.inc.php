<?php
	// fonction permettant d'obtenir les données des variable get et post
	function var_get($nom){
		return isset($_GET[$nom])?$_GET[$nom]:false;
	}

	function var_post($nom){
		return isset($_POST[$nom])?$_POST[$nom]:false;
	}
