<?php /* Smarty version Smarty-3.1.15, created on 2014-01-26 20:52:35
         compiled from "views\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37352e575939f21d2-96968670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca4655aeeb383c1616764f4185500e27f9fa9c3' => 
    array (
      0 => 'views\\connexion.tpl',
      1 => 1390758604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37352e575939f21d2-96968670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e57593add012_61167450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e57593add012_61167450')) {function content_52e57593add012_61167450($_smarty_tpl) {?><!-- Vue de la page de connexion -->

<h2>Connexion</h2>
<p>Saisissez les identifiants choisis lors de votre inscription</p>
<form action="connexion.php" method="post" id="form_connexion">
	<fieldset>
		<div class="clearfix">
			<label for="email"> Email</label>
			<div class="input"> <input id="email" name="email" size="30" type="email" value="" required/> </div>
		</div>
		<div class="clearfix">
			<label for="mdp"> Mot de passe</label>
			<div class="input"> <input id="mdp" name="mdp" size="30" type="password" required> </div>
		</div>
		<div class="form-action">
			<input class="btn btn-large btn-primary" id="submit"   type="submit" value="Se connecter"/> 
		</div>
</form><?php }} ?>
