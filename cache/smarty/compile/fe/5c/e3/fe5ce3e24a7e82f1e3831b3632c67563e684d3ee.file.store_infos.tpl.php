<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:55:35
         compiled from "/var/www/html/presta/themes/theme1151/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101304846556e6def7bb4f61-82700567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5ce3e24a7e82f1e3831b3632c67563e684d3ee' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/store_infos.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101304846556e6def7bb4f61-82700567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6def7bbd671_42131654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6def7bbd671_42131654')) {function content_56e6def7bbd671_42131654($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> 
        &nbsp;
        <span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
<?php } ?>

<?php }} ?>
