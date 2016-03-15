<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:41
         compiled from "/var/www/html/presta/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41638100456e693c16bf5a7-60005813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3cfc7ab8a2f108aa6f5649c502b49ffb8303536' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41638100456e693c16bf5a7-60005813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c16c1970_61500130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c16c1970_61500130')) {function content_56e693c16c1970_61500130($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
