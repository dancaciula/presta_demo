<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83930561156e693c4b87351-03091116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '783d7cce7b31483a8574092d4d1bf0b6fe8a62de' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83930561156e693c4b87351-03091116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c4b93515_54406394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c4b93515_54406394')) {function content_56e693c4b93515_54406394($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
