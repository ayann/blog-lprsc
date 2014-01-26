<?php /* Smarty version Smarty-3.1.15, created on 2014-01-26 18:51:36
         compiled from "views\pagination.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150452e559389e5d89-61523241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d86ed539fe6a40a1ed4f16c85908f5cb7d4aea3' => 
    array (
      0 => 'views\\pagination.inc.tpl',
      1 => 1390761356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150452e559389e5d89-61523241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nep' => 0,
    'nb' => 0,
    'p' => 0,
    'pr' => 0,
    'i' => 0,
    'j' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e55938c11e90_64703534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e55938c11e90_64703534')) {function content_52e55938c11e90_64703534($_smarty_tpl) {?><!-- Vue de la paginnation -->

<div class="pagination">
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['nep']->value!=$_smarty_tpl->tpl_vars['nb']->value) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['j'])) {$_smarty_tpl->tpl_vars['j'] = clone $_smarty_tpl->tpl_vars['j'];
$_smarty_tpl->tpl_vars['j']->value = 1; $_smarty_tpl->tpl_vars['j']->nocache = null; $_smarty_tpl->tpl_vars['j']->scope = 0;
} else $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(1, null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = 0; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['p']->value>0) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['pr'])) {$_smarty_tpl->tpl_vars['pr'] = clone $_smarty_tpl->tpl_vars['pr'];
$_smarty_tpl->tpl_vars['pr']->value = $_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nep']->value; $_smarty_tpl->tpl_vars['pr']->nocache = null; $_smarty_tpl->tpl_vars['pr']->scope = 0;
} else $_smarty_tpl->tpl_vars['pr'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nep']->value, null, 0);?>
				<li><a href='index.php?p=<?php echo $_smarty_tpl->tpl_vars['pr']->value;?>
'>«</a></li>
			<?php }?>
			<?php while ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['nb']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['i']->value) {?>
					<li class='disabled'> <a href='#'><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</a></li>
				<?php } else { ?>
					<li> <a  href='index.php?p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</a></li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['i']->value+$_smarty_tpl->tpl_vars['nep']->value; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+$_smarty_tpl->tpl_vars['nep']->value, null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['j'])) {$_smarty_tpl->tpl_vars['j'] = clone $_smarty_tpl->tpl_vars['j'];
$_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['j']->value+1; $_smarty_tpl->tpl_vars['j']->nocache = null; $_smarty_tpl->tpl_vars['j']->scope = 0;
} else $_smarty_tpl->tpl_vars['j'] = new Smarty_variable($_smarty_tpl->tpl_vars['j']->value+1, null, 0);?>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['p']->value+$_smarty_tpl->tpl_vars['nep']->value)<$_smarty_tpl->tpl_vars['nb']->value) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['s'])) {$_smarty_tpl->tpl_vars['s'] = clone $_smarty_tpl->tpl_vars['s'];
$_smarty_tpl->tpl_vars['s']->value = $_smarty_tpl->tpl_vars['p']->value+$_smarty_tpl->tpl_vars['nep']->value; $_smarty_tpl->tpl_vars['s']->nocache = null; $_smarty_tpl->tpl_vars['s']->scope = 0;
} else $_smarty_tpl->tpl_vars['s'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value+$_smarty_tpl->tpl_vars['nep']->value, null, 0);?>
				<li><a href='index.php?p=<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
'>»</a></li>
			<?php }?>
		<?php }?>
	</ul>
</div><?php }} ?>
