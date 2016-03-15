<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:41
         compiled from "/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111535130556e693c1bdae39-98182235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9cf0a0010f9e39fc81f7c89fa791cf568910b0' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111535130556e693c1bdae39-98182235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c1be5828_61689605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c1be5828_61689605')) {function content_56e693c1be5828_61689605($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
