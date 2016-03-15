<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 17:55:33
         compiled from "/var/www/html/presta/themes/theme1151/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74095208656e6def54dce36-78288627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88ff4b616c9f17942c60d39a5bff5f796c180108' => 
    array (
      0 => '/var/www/html/presta/themes/theme1151/modules/blockuserinfo/nav.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74095208656e6def54dce36-78288627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6def5501761_48716451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6def5501761_48716451')) {function content_56e6def5501761_48716451($_smarty_tpl) {?><!-- Block user information module NAV  -->
<div class="header_user_info">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<div class="header_user_info">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
        	<span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['cookie']->value->customer_firstname,2,'.'), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span>
        </a>
	</div>
    <?php } else { ?>
    <div class="header_user_info">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
    </div>
<?php }?>
<!-- /Block usmodule NAV --><?php }} ?>
