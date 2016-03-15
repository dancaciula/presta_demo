<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/orders/_select_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75583208056e693c312ec53-94498922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea61b3e105f5a992288843f072abe8552b966a0' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75583208056e693c312ec53-94498922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'payment_modules' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c31438d0_99106427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c31438d0_99106427')) {function content_56e693c31438d0_99106427($_smarty_tpl) {?>
<select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name'])&&$_smarty_tpl->tpl_vars['module']->value->name==$_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php } ?>
  <?php } else { ?>
      <option value="<?php echo smartyTranslate(array('s'=>'Back office order'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Back office order'),$_smarty_tpl);?>
</option>
  <?php }?>
</select>
<?php }} ?>
