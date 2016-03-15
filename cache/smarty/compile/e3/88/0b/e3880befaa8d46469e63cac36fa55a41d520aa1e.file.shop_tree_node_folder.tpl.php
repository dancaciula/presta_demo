<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27408973256e693c4915709-83244119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3880befaa8d46469e63cac36fa55a41d520aa1e' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27408973256e693c4915709-83244119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c4922063_11121293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c4922063_11121293')) {function content_56e693c4922063_11121293($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/presta/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
