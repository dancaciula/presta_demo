<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:55:33
         compiled from "/var/www/html/presta/themes/theme1151/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59431424056e6def52e0999-92349022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa317e184efaa97a6f1dd6832385340bc818a74f' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59431424056e6def52e0999-92349022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6def52f1538_56659645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6def52f1538_56659645')) {function content_56e6def52f1538_56659645($_smarty_tpl) {?><!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact">
    	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>
	<li id="header_link_sitemap">
    	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
