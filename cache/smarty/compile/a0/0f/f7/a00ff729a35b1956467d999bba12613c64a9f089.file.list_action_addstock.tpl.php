<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:41
         compiled from "/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205416647656e693c1c03f14-96646826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00ff729a35b1956467d999bba12613c64a9f089' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205416647656e693c1c03f14-96646826',
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
  'unifunc' => 'content_56e693c1c092e4_36582302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c1c092e4_36582302')) {function content_56e693c1c092e4_36582302($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
