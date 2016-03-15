<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 18:42:35
         compiled from "/var/www/html/presta/themes/pinkflora/modules/blockbestsellers/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91879683756e6e9fb72ce64-51846298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1c6076cff6da0587afaee96b286e02ce8bc3845' => 
    array (
      0 => '/var/www/html/presta/themes/pinkflora/modules/blockbestsellers/blockbestsellers-home.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91879683756e6e9fb72ce64-51846298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6e9fb739214_63666486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6e9fb739214_63666486')) {function content_56e6e9fb739214_63666486($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
	<ul id="blockbestsellers" class="blockbestsellers tab-pane">
		<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
	</ul>
<?php }?><?php }} ?>
