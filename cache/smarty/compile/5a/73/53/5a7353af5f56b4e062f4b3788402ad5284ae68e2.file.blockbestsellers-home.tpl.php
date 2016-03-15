<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:55:32
         compiled from "/var/www/html/presta/themes/theme1151/modules/blockbestsellers/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45850448256e6def4f19003-97249051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a7353af5f56b4e062f4b3788402ad5284ae68e2' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/modules/blockbestsellers/blockbestsellers-home.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45850448256e6def4f19003-97249051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6def4f21f28_39730880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6def4f21f28_39730880')) {function content_56e6def4f21f28_39730880($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
	<ul id="blockbestsellers" class="blockbestsellers tab-pane">
		<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
	</ul>
<?php }?><?php }} ?>
