<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 18:01:44
         compiled from "/var/www/html/presta/themes/theme1151/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165657268656e6e068667c79-68490261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab6bba5f3dfe4135e2d803893a3127fdbf578b7' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165657268656e6e068667c79-68490261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6e0686792b5_39991076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6e0686792b5_39991076')) {function content_56e6e0686792b5_39991076($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
    <ul id="blocknewproducts" class="blocknewproducts tab-pane">
        <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
    </ul>
<?php }?><?php }} ?>
