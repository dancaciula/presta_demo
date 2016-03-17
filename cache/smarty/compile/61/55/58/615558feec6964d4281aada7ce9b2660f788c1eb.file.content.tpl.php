<?php /* Smarty version Smarty-3.1.19, created on 2016-03-17 14:07:57
         compiled from "/var/www/html/presta/admin079wbcoso/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59753837056ea9e1da4d512-34153849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '59753837056ea9e1da4d512-34153849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ea9e1da52572_57668987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ea9e1da52572_57668987')) {function content_56ea9e1da52572_57668987($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
