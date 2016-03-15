<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105911590456e693c463feb9-82133749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46e8f91227da18714beab09d4244f9c4d1db82e' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105911590456e693c463feb9-82133749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c4645402_23773783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c4645402_23773783')) {function content_56e693c4645402_23773783($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
