<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100118292056e693c496a5a6-89981955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '941fee8676dd29299a0864641bd89d18c20568a0' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100118292056e693c496a5a6-89981955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c496de28_64955760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c496de28_64955760')) {function content_56e693c496de28_64955760($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
