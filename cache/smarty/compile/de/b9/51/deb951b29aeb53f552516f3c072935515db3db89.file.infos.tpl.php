<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126305860756e693c4b94623-15945535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deb951b29aeb53f552516f3c072935515db3db89' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126305860756e693c4b94623-15945535',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c4b9ca09_19484523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c4b9ca09_19484523')) {function content_56e693c4b9ca09_19484523($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
