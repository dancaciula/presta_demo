<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:55:32
         compiled from "/var/www/html/presta/themes/theme1151/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196121840256e6def4ce4910-28618002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '196121840256e6def4ce4910-28618002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6def4ced816_09479912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6def4ced816_09479912')) {function content_56e6def4ced816_09479912($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
