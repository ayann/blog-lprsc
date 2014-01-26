<!-- javascript pour gerer l'envoie du formulaire et l'affichage des notifications -->

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#form-art').submit(function(){
				$titre=$('#titre').val();
				$texte=$('#texte').val();
				if(!$titre.length || !$texte.length){
					$div=$('#notif');
					$div.removeClass().addClass('alert alert-error');
					$div.text('Veillez remplir tous les champs');
					$div.slideDown(500).delay(5000).slideUp(500);
					return false;
				}
			})
		});
	</script>

<!-- fin -->

<!-- Affichage de le notification en cas d'erreur -->

	{if isset($err) && $err}
		<div class="alert alert-error">
			<strong>Erreur !!! </strong> lors de l'insertion.
		</div>
	{/if}

<!-- fin -->

<div class="span8">
	<div id="notif" style="display:none;"></div>

	<!-- Formulaire d'ajout et de mofification d'article -->
	
		<form action="article.php" id="form-art" name="formulaire" method="POST" enctype="multipart/form-data">
		    <div class="clearfix">
		        <label for="title">Titre</label>
		        <div class="input"> 
	    	    	{if isset($smarty.get.id)&& isset($data)}
			            <input type="text" name="titre" id="titre" value="{$data.titre}" >
	    	    	{else}
		            	<input type="text" name="titre" id="titre" >
	    	    	{/if}
		        </div>
		    </div>    
		    <div class="clearfix">
		        <label for="texte">Texte</label>
		        <div class="input">
	    	    	{if isset($smarty.get.id) && isset($data)}
		            	<textarea name="texte" id="texte" >{$data.texte}</textarea>
	    	    	{else}
		            	<textarea name="texte" id="texte" ></textarea>
	    	    	{/if}
		        </div>
		    </div>        
		    <div class="clearfix">
		        <label for="title">Tag</label>
		        <div class="input"> 
	    	    	{if isset($smarty.get.id) && isset($data)}
			            <input type="text" name="tag" id="tag" value="{$data.nom}" >
	    	    	{else}
		            	<input type="text" name="tag" id="tag" >
	    	    	{/if}
		        </div>
		    </div>    
		    <div class="clearfix">
		        <label for="texte">Image</label>
		        <div class="input">
		        	<input type="file" name="image" id="image" >
		        </div>
		    </div>    
		    <br>    
		    <div class="form-action">
		    	{if isset($smarty.get.id)}
			        <input name="id" type="hidden" value="{$smarty.get.id}" >
			        <input name="modif" type="submit" value="Enregistrer" class="btn btn-large btn-success">
			        &nbsp;&nbsp;
						<a class="btn btn-large btn-danger" href="index.php">Annuler</a>
		    	{else}
		        	<input name="ajout"  type="submit" value="Ajouter" class="btn btn-large btn-success">
		    	{/if}
		    </div>
		</form>

	<!-- fin -->

</div>