<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:45
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121141119856e693c58c6e06-61673226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d0351aa5fbd3cf99a8fcb910e894f60c60386e' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_item_checkbox.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121141119856e693c58c6e06-61673226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c58d8308_40205069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c58d8308_40205069')) {function content_56e693c58d8308_40205069($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="checkbox" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
