<h3>{$i.titre}</h3> <!-- titre de l'article -->

<p>{$i.texte|escape|nl2br}</p> <!-- contenu de l'article -->

{if $i.image} <!-- Affichage de l'image de larticle s'il existe  -->
	<img src="includes/generer_images.php?img_id={$i.id}&largeur={$largeurImage}" alt="">
{/if}

{if $i.nom} <!-- Affichage du tag de larticle s'il existe  -->
	<h4>Tag ------> {$i.nom} </h4>
{/if}
