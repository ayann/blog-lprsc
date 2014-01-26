<?php /* Smarty version Smarty-3.1.15, created on 2014-01-26 18:51:36
         compiled from "views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2971452e559384f2541-95335007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3fd37e6f529e330906b3654bbe2b19ae9511a7' => 
    array (
      0 => 'views\\index.tpl',
      1 => 1390758622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2971452e559384f2541-95335007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'articles' => 0,
    'nr' => 0,
    'connecte' => 0,
    'i' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e559388c4c89_29850366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e559388c4c89_29850366')) {function content_52e559388c4c89_29850366($_smarty_tpl) {?><!-- Vue de la page index -->

<?php if (isset($_smarty_tpl->tpl_vars['largeurImage'])) {$_smarty_tpl->tpl_vars['largeurImage'] = clone $_smarty_tpl->tpl_vars['largeurImage'];
$_smarty_tpl->tpl_vars['largeurImage']->value = 400; $_smarty_tpl->tpl_vars['largeurImage']->nocache = null; $_smarty_tpl->tpl_vars['largeurImage']->scope = 0;
} else $_smarty_tpl->tpl_vars['largeurImage'] = new Smarty_variable(400, null, 0);?> <!-- contient la largeur de l'image à afficher -->

<!-- Affichage des résultat d'une recherche -->
	<?php if (isset($_GET['rech'])) {?>
		<h2>Résultat de la recherche pour - - <?php echo $_GET['rech'];?>
 - - </h2>
		<?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
			<h3>Aucun résultat</h3>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['total']->value>1) {?>
				<h3><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 résultats trouvés</h3>
			<?php } else { ?>
			 	<h3><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 résultat trouvé</h3>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("views/_index_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	  		<?php } ?>
		<?php }?>
<!-- Fin -->
	<?php } else { ?>
<!-- Affichage des articles -->
		<?php if ($_smarty_tpl->tpl_vars['nr']->value>0) {?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ("views/_index_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php if ($_smarty_tpl->tpl_vars['connecte']->value) {?>
						<br><br/><a class="btn btn-primary" href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Modifier</a>&nbsp;&nbsp;
						<a class="btn btn-danger" href="supprimer_article.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Supprimer</a>
					<?php }?>	
		  	<?php } ?>
		  	<?php echo $_smarty_tpl->getSubTemplate ("views/pagination.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['p']->value==0) {?>
					<h1>Désolé !!! Aucun article</h1>
			<?php } else { ?>
			 	<div class="alert alert-error">
					<strong>Erreur !!! </strong> Cette page n'existe pas.
				</div>
			<?php }?>	
		<?php }?>
	<?php }?>
<!-- Fin -->
<?php }} ?>
