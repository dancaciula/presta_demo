<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199566472556e693c3e8adb8-70972145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f2b6c31fb60e66bb3b2f3d06711e82f759f8f0' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199566472556e693c3e8adb8-70972145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c3e92755_65329327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c3e92755_65329327')) {function content_56e693c3e92755_65329327($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>
