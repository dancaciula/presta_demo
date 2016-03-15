<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:45
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16778618856e693c5153c75-61028114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f29036423f50b763ae91288c28b00d464e35d5f' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16778618856e693c5153c75-61028114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c515f446_20976314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c515f446_20976314')) {function content_56e693c515f446_20976314($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php } ?><?php }} ?>
