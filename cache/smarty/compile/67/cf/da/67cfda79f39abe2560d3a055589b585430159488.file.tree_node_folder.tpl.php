<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:41
         compiled from "/var/www/html/presta/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41451600556e693c16b9086-13079219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67cfda79f39abe2560d3a055589b585430159488' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41451600556e693c16b9086-13079219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c16be7b0_13943733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c16be7b0_13943733')) {function content_56e693c16be7b0_13943733($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/presta/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
