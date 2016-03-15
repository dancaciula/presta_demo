<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179568165956e693c4095770-59524419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdc0e0344a9f2d480bb2f2bac2fb202a7881f128' => 
    array (
      0 => '/var/www/html/presta/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179568165956e693c4095770-59524419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c409fd52_95217344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c409fd52_95217344')) {function content_56e693c409fd52_95217344($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
