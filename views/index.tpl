<!-- Vue de la page index -->

{$largeurImage=400} <!-- contient la largeur de l'image à afficher -->

<!-- Affichage des résultat d'une recherche -->
	{if isset($smarty.get.rech)}
		<h2>Résultat de la recherche pour - - {$smarty.get.rech} - - </h2>
		{if $total==0}
			<h3>Aucun résultat</h3>
		{else}
			{if $total>1}
				<h3>{$total} résultats trouvés</h3>
			{else}
			 	<h3>{$total} résultat trouvé</h3>
			{/if}
			{foreach from=$articles  item=i}
				{include file="views/_index_articles.tpl"}
	  		{/foreach}
		{/if}
<!-- Fin -->
	{else}
<!-- Affichage des articles -->
		{if $nr>0}
			{foreach from=$articles  item=i}
					{include file="views/_index_articles.tpl"}
					{if $connecte}
						<br><br/><a class="btn btn-primary" href="article.php?id={$i.id}">Modifier</a>&nbsp;&nbsp;
						<a class="btn btn-danger" href="supprimer_article.php?id={$i.id}">Supprimer</a>
					{/if}	
		  	{/foreach}
		  	{include file="views/pagination.inc.tpl"}
		{else}
			{if $p==0}
					<h1>Désolé !!! Aucun article</h1>
			{else}
			 	<div class="alert alert-error">
					<strong>Erreur !!! </strong> Cette page n'existe pas.
				</div>
			{/if}	
		{/if}
	{/if}
<!-- Fin -->
