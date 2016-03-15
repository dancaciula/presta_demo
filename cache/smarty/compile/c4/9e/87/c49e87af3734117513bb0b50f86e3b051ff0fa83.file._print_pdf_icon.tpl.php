<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169544285956e693c3412451-45062463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c49e87af3734117513bb0b50f86e3b051ff0fa83' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169544285956e693c3412451-45062463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c341c6d9_22778252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c341c6d9_22778252')) {function content_56e693c341c6d9_22778252($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
