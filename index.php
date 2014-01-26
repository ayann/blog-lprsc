<?php
	/*==========  Inclusions de different scripts necessaire ==========*/

		include ('includes/connexion.inc.php');
		include ('includes/verif_connect.inc.php');
		include ('includes/haut.inc.php');
		include ('includes/fonctions.inc.php');
		require("lib/SmartyBC.class.php");
	/*==========  fin  ==========*/
	
	$smarty = new SmartyBC(); /*==========  Initialisation smarty  ==========*/
	

	$rech=var_get('rech');
	$articles=array();
	$dir="data/images/";

	/*==========  Traitement lors d'ne recherche  ==========*/
	
		if($rech){
			$rech=mysql_real_escape_string($_GET['rech']);
			$sql="SELECT COUNT(*) AS total FROM articles WHERE titre LIKE '%$rech%'";
			$req=mysql_query($sql);
			$data=mysql_fetch_array($req);
			$total=$data['total'];
			if($total){
				$sql=	"SELECT articles.*, tags.nom FROM articles
					  	LEFT JOIN tags ON tags.id=articles.tags_id 
					  	WHERE titre LIKE '%$rech%'";
				$req=mysql_query($sql);
				while($data=mysql_fetch_array($req)){
					recup_img($dir);
					$articles[]=$data;
				}
				$smarty->assign("articles",$articles);
			}
			$smarty->assign("total",$total);

	/*==========  fin  ==========*/
	
		}else{

	/*==========  Affiche de lla liste des articles  ==========*/
	
			/**
			*	$nep = Nombre element par page
			*	$p = le numero de page
			**/
			$nep=2;
			$i=0;
			$p=(int) var_get('p');
			$sql="SELECT articles.*, tags.nom FROM articles
			LEFT JOIN tags ON tags.id=articles.tags_id
			LIMIT $p,$nep";
			$req=mysql_query($sql) ;
			$nr=mysql_num_rows($req);
			if($nr>0){
				/*==========  recuperation des données de la bdd  ==========*/
				
					while($data=mysql_fetch_array($req)){
						recup_img($dir);
						$articles[]=$data;
					}
				/*==========  fin  ==========*/
				

				/*==========  Envoi des données a la vue  ==========*/
				
					$smarty->assign(array(
										"nr"       => $nr,
										"articles" => $articles,
										"connecte" => $connecte,
										"p"        =>$p,
									));	

				/*==========  fin  ==========*/

				include('includes/pagination.inc.php');
				
			}else{
				$smarty->assign('nr',0);
				$smarty->assign('p',$p);
			}
		}
	/*==========  fin  ==========*/
	
	$smarty->display("views/index.tpl"); /*==========  appel de la vue  ==========*/
	
	include ('includes/bas.inc.php');

	/*==========  fonction recuperation image article  ==========*/
	
		function recup_img($dir){
			global $data;
			if (file_exists($dir.$data['id'].'.jpg')) {
				$data['image'] = $dir.$data['id'].'.jpg';
			}else{
				$data['image'] = false;
			}
		}
	/*==========  fin  ==========*/
	
?>
