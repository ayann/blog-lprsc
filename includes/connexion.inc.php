<?php
	// Script de connexion a la bdd

	/*==========  connexion local  ==========*/
		mysql_connect ('localhost','root','');
		mysql_select_db('blog');
	/*==========  fin  ==========*/

	/*==========  connexion distant  ==========*/
		// $host="mysql.hostinger.fr";
		// $user="u781037186_yaan";
		// $pass="bdd-Niampa1992";
		// mysql_connect ($host,$user,$pass);
		// mysql_select_db('u781037186_blog');
	/*==========  fin  ==========*/
	session_start();
