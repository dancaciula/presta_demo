<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83525520556e693c40ac954-58462805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f876bf6f927642a39652e64551a458baccdf52' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83525520556e693c40ac954-58462805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c40aff21_40050021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c40aff21_40050021')) {function content_56e693c40aff21_40050021($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
