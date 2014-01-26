<?php
	// Script de connexion a la bdd

	/*==========  connexion local  ==========*/
		mysql_connect ('localhost','root','');
		mysql_select_db('blog');
	/*==========  fin  ==========*/

	/*==========  connexion distant  ==========*/
		// $host ="";
		// $user ="";
		// $pass ="";
		// $db   ="";
		// mysql_connect ($host,$user,$pass);
		// mysql_select_db($db);
	/*==========  fin  ==========*/
	session_start();
