<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:41
         compiled from "/var/www/html/presta/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123826991156e693c1745234-10955322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd911bb2fb5365a060847134d9013accb5bd09a31' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123826991156e693c1745234-10955322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c174ef37_31104569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c174ef37_31104569')) {function content_56e693c174ef37_31104569($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
