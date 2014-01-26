<?php /* Smarty version Smarty-3.1.15, created on 2014-01-26 18:51:36
         compiled from "views\_index_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:611552e559389038d0-69382172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '210374052565771c9fd819a0888d52b25bd9adf4' => 
    array (
      0 => 'views\\_index_articles.tpl',
      1 => 1390757751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '611552e559389038d0-69382172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'largeurImage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e559389be9a1_39391459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e559389be9a1_39391459')) {function content_52e559389be9a1_39391459($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['i']->value['titre'];?>
</h3> <!-- titre de l'article -->

<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['texte'], ENT_QUOTES, 'UTF-8', true));?>
</p> <!-- contenu de l'article -->

<?php if ($_smarty_tpl->tpl_vars['i']->value['image']) {?> <!-- Affichage de l'image de larticle s'il existe  -->
	<img src="includes/generer_images.php?img_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&largeur=<?php echo $_smarty_tpl->tpl_vars['largeurImage']->value;?>
" alt="">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['i']->value['nom']) {?> <!-- Affichage du tag de larticle s'il existe  -->
	<h4>Tag ------> <?php echo $_smarty_tpl->tpl_vars['i']->value['nom'];?>
 </h4>
<?php }?>
<?php }} ?>
