<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42497509256e693c4184170-41302888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1155c630f897a3da9333d228bdefb311a88334' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42497509256e693c4184170-41302888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c418e4a8_36600073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c418e4a8_36600073')) {function content_56e693c418e4a8_36600073($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
