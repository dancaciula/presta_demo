<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:43
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12928845056e693c3e97846-90327711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397bdd546acaa72fff0f8ce4318e66cd55bf21b3' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12928845056e693c3e97846-90327711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c3ea8266_02979311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c3ea8266_02979311')) {function content_56e693c3ea8266_02979311($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/presta/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
