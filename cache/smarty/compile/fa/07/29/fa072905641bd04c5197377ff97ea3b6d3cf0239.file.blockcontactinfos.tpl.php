<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:55:33
         compiled from "/var/www/html/presta/themes/theme1151/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173740449656e6def515b149-78677257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa072905641bd04c5197377ff97ea3b6d3cf0239' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173740449656e6def515b149-78677257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6def5174807_86629071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6def5174807_86629071')) {function content_56e6def5174807_86629071($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/var/www/html/presta/tools/smarty/plugins/function.mailto.php';
?><!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-3">
	<div>
        <h4><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
            	<li>
            		<i class="fa fa-map-marker"></i>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>

                    	<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>
                        	, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
            	<li>
            		<i class="fa fa-phone"></i>
                    <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span class="phone"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<i class="fa fa-envelope-o"></i>
                    <?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
