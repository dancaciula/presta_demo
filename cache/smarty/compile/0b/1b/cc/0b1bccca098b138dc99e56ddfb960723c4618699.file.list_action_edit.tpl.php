<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39910552956e693c33b8966-15950976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b1bccca098b138dc99e56ddfb960723c4618699' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39910552956e693c33b8966-15950976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c33bdec4_43175712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c33bdec4_43175712')) {function content_56e693c33bdec4_43175712($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
