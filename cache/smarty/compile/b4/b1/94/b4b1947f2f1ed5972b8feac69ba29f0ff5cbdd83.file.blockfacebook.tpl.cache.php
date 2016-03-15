<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 15:22:48
         compiled from "/var/www/html/presta/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95959446556e6bb285e52a5-29133146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4b1947f2f1ed5972b8feac69ba29f0ff5cbdd83' => 
    array (
      0 => '/var/www/html/presta/modules/blockfacebook/blockfacebook.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95959446556e6bb285e52a5-29133146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6bb285effe1_46182413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6bb285effe1_46182413')) {function content_56e6bb285effe1_46182413($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
