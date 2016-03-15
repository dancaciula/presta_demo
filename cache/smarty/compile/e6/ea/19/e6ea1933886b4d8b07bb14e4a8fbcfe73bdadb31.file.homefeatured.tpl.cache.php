<?php /* Smarty version Smarty-3.1.19, created on 2016-03-15 10:01:03
         compiled from "/var/www/html/presta/themes/pinkflora/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178404739656e7c13f742985-91281657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ea1933886b4d8b07bb14e4a8fbcfe73bdadb31' => 
    array (
      0 => '/var/www/html/presta/themes/pinkflora/modules/homefeatured/homefeatured.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178404739656e7c13f742985-91281657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e7c13f7ab925_43292152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e7c13f7ab925_43292152')) {function content_56e7c13f7ab925_43292152($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
