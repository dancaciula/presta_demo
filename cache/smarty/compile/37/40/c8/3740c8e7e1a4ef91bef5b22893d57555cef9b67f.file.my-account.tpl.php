<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:45
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171095254256e693c53d15e0-60061632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3740c8e7e1a4ef91bef5b22893d57555cef9b67f' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171095254256e693c53d15e0-60061632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c53e1fb2_90210815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c53e1fb2_90210815')) {function content_56e693c53e1fb2_90210815($_smarty_tpl) {?>

<li class="favoriteproducts">
	<a
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
"
	title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value) {?>
			<i class="icon-heart-empty"></i>
			<span><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>

		<?php }?>
	</a>
</li>
<?php }} ?>
