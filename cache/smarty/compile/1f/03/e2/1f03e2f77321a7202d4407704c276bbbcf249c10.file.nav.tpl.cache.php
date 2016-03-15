<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 15:22:50
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145516376656e6bb2ab0fd93-76382862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f03e2f77321a7202d4407704c276bbbcf249c10' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/blockcontact/nav.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145516376656e6bb2ab0fd93-76382862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6bb2ab30900_93809638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6bb2ab30900_93809638')) {function content_56e6bb2ab30900_93809638($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>
<?php }} ?>
