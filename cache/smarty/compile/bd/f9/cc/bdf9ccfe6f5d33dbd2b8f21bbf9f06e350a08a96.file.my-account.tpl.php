<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:45
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153226781056e693c518e638-91348546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf9ccfe6f5d33dbd2b8f21bbf9f06e350a08a96' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153226781056e693c518e638-91348546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c5199402_12121554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c5199402_12121554')) {function content_56e693c5199402_12121554($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
