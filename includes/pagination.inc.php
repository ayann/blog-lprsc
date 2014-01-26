<?php

	/**
	*
	* $nep = Nombre article par page
	* $nb= nombre total d'article dans la base
	*
	**/
	
	$nep=2;
	$sql='SELECT count(*) AS nb FROM articles';
	$REQ=mysql_query($sql);
	$REQ=mysql_fetch_assoc($REQ);
	extract($REQ);
	$smarty->assign(array('nep' =>2 ,'nb'=>$nb,));
?>