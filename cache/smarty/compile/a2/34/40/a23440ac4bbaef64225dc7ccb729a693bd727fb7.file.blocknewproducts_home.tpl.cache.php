<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 15:22:48
         compiled from "/var/www/html/presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40912510056e6bb28c58893-95916279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a23440ac4bbaef64225dc7ccb729a693bd727fb7' => 
    array (
      0 => '/var/www/html/presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40912510056e6bb28c58893-95916279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6bb28c696e5_71322162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6bb28c696e5_71322162')) {function content_56e6bb28c696e5_71322162($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
