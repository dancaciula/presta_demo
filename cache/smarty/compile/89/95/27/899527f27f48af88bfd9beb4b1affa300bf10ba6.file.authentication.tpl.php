<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162987265756e693c3e70098-56774493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '899527f27f48af88bfd9beb4b1affa300bf10ba6' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162987265756e693c3e70098-56774493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c3e7ab35_73311720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c3e7ab35_73311720')) {function content_56e693c3e7ab35_73311720($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
