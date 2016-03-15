<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:41
         compiled from "/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196932249956e693c1c0a0b5-40618678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7454a6964f4cbfbe44995fa3e1c5d9ed0aac7e05' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196932249956e693c1c0a0b5-40618678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c1c11867_14617468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c1c11867_14617468')) {function content_56e693c1c11867_14617468($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
