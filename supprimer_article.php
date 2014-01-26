<?php
	include ('includes/connexion.inc.php');
	require_once('includes/verif_connect.inc.php');
	if(!$connecte){
	    header('Location:index.php');
	    die();
	}   
	include ('includes/fonctions.inc.php');

	$id=(int)var_get('id'); /*==========  id de l'aricle à supprimer  ==========*/
	
	$sql="DELETE FROM articles WHERE id=$id";
	$res=mysql_query($sql);
	$res=mysql_affected_rows();
	if($res>0){

		$_SESSION['article']='supprimé'; /*==========  message de notification  ==========*/
		
		$dir="data/images/";

		$imgdir=$dir.$id.'.jpg';
		
		/*==========  suppresion image article  ==========*/
			if (file_exists(dirname(__FILE__).'/'.$imgdir)) {
				unlink(dirname(__FILE__).'/'.$imgdir);
			}
		/*==========  fin  ==========*/
	}else{
		$_SESSION['article']='erreur';
	}
	header('Location:index.php');
?>
