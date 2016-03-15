<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100597663956e693c3e7b9c2-49162434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54b155f289b2e17669d53fd9ba8c875e3d22f3e6' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100597663956e693c3e7b9c2-49162434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discount_display' => 0,
    'discount' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c3e89eb5_46310073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c3e89eb5_46310073')) {function content_56e693c3e89eb5_46310073($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<p id="referralprogram">
	<i class="icon-flag"></i>
	<?php echo smartyTranslate(array('s'=>'You have earned a voucher worth %s thanks to your sponsor!','sprintf'=>$_smarty_tpl->tpl_vars['discount_display']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Enter voucher name %s to receive the reduction on this order.','sprintf'=>$_smarty_tpl->tpl_vars['discount']->value->name,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View your referral program.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
</p>
<br />
<!-- END : MODULE ReferralProgram --><?php }} ?>
