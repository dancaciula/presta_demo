<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:41
         compiled from "/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184738332556e693c1799d54-63133102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b594e86208441ae2ab0d172438b9a1f3aec104c6' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184738332556e693c1799d54-63133102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c17a6d44_19224304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c17a6d44_19224304')) {function content_56e693c17a6d44_19224304($_smarty_tpl) {?>

<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="">
	<i class="icon-eye-open"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
