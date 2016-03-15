<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164619854956e693c427c678-02201769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1313d1e2876d139c2f8df2be6ee189e2bf83124e' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164619854956e693c427c678-02201769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c4280e73_69790724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c4280e73_69790724')) {function content_56e693c4280e73_69790724($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading">
		<?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>

	</h3>
	<div style="width:21px; float:left;">
		<div class="required checkbox">
			<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
		</div>
	</div>
	<div style="width: 92%; float: left; margin-top: 8px;">
        <label for="customer_privacy" style="font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>				
	</div>
</fieldset><?php }} ?>
