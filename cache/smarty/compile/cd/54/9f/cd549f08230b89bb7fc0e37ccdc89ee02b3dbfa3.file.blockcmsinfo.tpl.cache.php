<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 15:22:48
         compiled from "/var/www/html/presta/modules/blockcmsinfo/blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167604129856e6bb286b4c15-39536157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd549f08230b89bb7fc0e37ccdc89ee02b3dbfa3' => 
    array (
      0 => '/var/www/html/presta/modules/blockcmsinfo/blockcmsinfo.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167604129856e6bb286b4c15-39536157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6bb286c2a43_09170232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6bb286c2a43_09170232')) {function content_56e6bb286c2a43_09170232($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
