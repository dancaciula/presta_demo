<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:42
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69211329456e693c2e4a337-08515652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddda75e6a15b6db809a11e96531c9e9365daf0c9' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69211329456e693c2e4a337-08515652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c2e60848_30623193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c2e60848_30623193')) {function content_56e693c2e60848_30623193($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&$_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }} ?>
