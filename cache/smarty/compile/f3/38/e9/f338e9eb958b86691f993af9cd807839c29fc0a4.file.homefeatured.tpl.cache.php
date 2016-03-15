<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 18:01:43
         compiled from "/var/www/html/presta/themes/theme1151/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57135676856e6e067cc1e16-58677989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f338e9eb958b86691f993af9cd807839c29fc0a4' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/modules/homefeatured/homefeatured.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57135676856e6e067cc1e16-58677989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6e067ccf1c4_32080341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6e067ccf1c4_32080341')) {function content_56e6e067ccf1c4_32080341($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
