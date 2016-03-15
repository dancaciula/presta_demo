<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:45
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75779451256e693c53e3476-10932907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118d9fee5ed642079555fa388b084f1a9602d162' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75779451256e693c53e3476-10932907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c53feaf3_92165936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c53feaf3_92165936')) {function content_56e693c53feaf3_92165936($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_add'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_remove'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php if (isset($_GET['id_product'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_id_product'=>intval($_GET['id_product'])),$_smarty_tpl);?>
<?php }?><?php }} ?>
