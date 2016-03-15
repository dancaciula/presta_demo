<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163526808156e693c4f2a5f4-11918468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a82d91c4743a1ad49a9054366f7d0841b2ed2a8' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163526808156e693c4f2a5f4-11918468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c4f34187_74654676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c4f34187_74654676')) {function content_56e693c4f34187_74654676($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
