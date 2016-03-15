<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:45
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196225816656e693c53004a0-78017008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5858190ca82fdee2d292abeff13ab6e203b48b0' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196225816656e693c53004a0-78017008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c530b436_81869115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c530b436_81869115')) {function content_56e693c530b436_81869115($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
