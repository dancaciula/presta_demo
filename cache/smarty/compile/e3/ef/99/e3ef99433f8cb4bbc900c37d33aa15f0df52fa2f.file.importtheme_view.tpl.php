<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:24:58
         compiled from "/var/www/html/presta/admin079wbcoso/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108260818656e6d7ca3d21f8-88777947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ef99433f8cb4bbc900c37d33aa15f0df52fa2f' => 
    array (
      0 => '/var/www/html/presta/admin079wbcoso/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108260818656e6d7ca3d21f8-88777947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'context_mode' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6d7ca3eb4f0_68287926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6d7ca3eb4f0_68287926')) {function content_56e6d7ca3eb4f0_68287926($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['context_mode']->value==Context::MODE_HOST) {?><?php echo smartyTranslate(array('s'=>'(Advanced)'),$_smarty_tpl);?>
<?php }?>
    </h3>
    <p><?php echo smartyTranslate(array('s'=>'Duplicate an existing theme and edit it; or create a new theme from scratch! Recommended for advanced users only.'),$_smarty_tpl);?>
</p>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>
