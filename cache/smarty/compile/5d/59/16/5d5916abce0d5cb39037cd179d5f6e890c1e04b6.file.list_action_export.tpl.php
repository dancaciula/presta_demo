<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47741244156e693c4164184-00535310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5916abce0d5cb39037cd179d5f6e890c1e04b6' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47741244156e693c4164184-00535310',
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
  'unifunc' => 'content_56e693c416b7a1_32034820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c416b7a1_32034820')) {function content_56e693c416b7a1_32034820($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
