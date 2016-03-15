<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176180790756e693c3e65ef8-17407995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170c15ac677e947a5465ddd89a04e16337a5e402' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176180790756e693c3e65ef8-17407995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c3e6f179_56096787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c3e6f179_56096787')) {function content_56e693c3e6f179_56096787($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }} ?>
