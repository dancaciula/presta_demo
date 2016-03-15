<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 15:22:49
         compiled from "/var/www/html/presta/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172525886956e6bb29a90758-09625117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52174030f463006733199c694cfd6f314a69b957' => 
    array (
      0 => '/var/www/html/presta/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172525886956e6bb29a90758-09625117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6bb29a9a8b6_04267689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6bb29a9a8b6_04267689')) {function content_56e6bb29a9a8b6_04267689($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
