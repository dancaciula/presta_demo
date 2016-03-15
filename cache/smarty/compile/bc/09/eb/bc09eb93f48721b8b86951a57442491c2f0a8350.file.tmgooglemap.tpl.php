<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:55:32
         compiled from "/var/www/html/presta/themes/theme1151/modules/tmgooglemap/views/templates/hook/tmgooglemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172464991456e6def4c256f7-79457267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc09eb93f48721b8b86951a57442491c2f0a8350' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/modules/tmgooglemap/views/templates/hook/tmgooglemap.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172464991456e6def4c256f7-79457267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultLat' => 0,
    'defaultLong' => 0,
    'hasStoreIcon' => 0,
    'img_store_dir' => 0,
    'img_ps_dir' => 0,
    'searchUrl' => 0,
    'logo_store' => 0,
    'map_type' => 0,
    'map_zoom' => 0,
    'map_scroll_zoom' => 0,
    'map_type_control' => 0,
    'map_street_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6def4c41dd6_07387352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6def4c41dd6_07387352')) {function content_56e6def4c41dd6_07387352($_smarty_tpl) {?><div id="homegooglemap" class="clearfix">    
	<div id="map"></div>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map'=>''),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('markers'=>array()),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('infoWindow'=>''),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultLat'=>$_smarty_tpl->tpl_vars['defaultLat']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultLong'=>$_smarty_tpl->tpl_vars['defaultLong']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('hasStoreIcon'=>$_smarty_tpl->tpl_vars['hasStoreIcon']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_store_dir'=>$_smarty_tpl->tpl_vars['img_store_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('searchUrl'=>$_smarty_tpl->tpl_vars['searchUrl']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('logo_store'=>$_smarty_tpl->tpl_vars['logo_store']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map_type'=>$_smarty_tpl->tpl_vars['map_type']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map_zoom'=>$_smarty_tpl->tpl_vars['map_zoom']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map_scroll_zoom'=>$_smarty_tpl->tpl_vars['map_scroll_zoom']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map_type_control'=>$_smarty_tpl->tpl_vars['map_type_control']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map_street_view'=>$_smarty_tpl->tpl_vars['map_street_view']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_1')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'tmgooglemap'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_1'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_2')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_2'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Get directions','mod'=>'tmgooglemap'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_2'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
