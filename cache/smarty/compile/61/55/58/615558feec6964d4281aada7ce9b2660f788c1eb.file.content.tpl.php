<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 14:38:11
         compiled from "/var/www/html/presta/admin079wbcoso/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52011383456e6b0b339d294-22924500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615558feec6964d4281aada7ce9b2660f788c1eb' => 
    array (
      0 => '/var/www/html/presta/admin079wbcoso/themes/default/template/content.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52011383456e6b0b339d294-22924500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6b0b33a2848_58579152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6b0b33a2848_58579152')) {function content_56e6b0b33a2848_58579152($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
