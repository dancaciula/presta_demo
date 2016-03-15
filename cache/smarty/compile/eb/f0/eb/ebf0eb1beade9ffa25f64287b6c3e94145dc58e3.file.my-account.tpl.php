<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 12:34:44
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214709968456e693c4cd4b99-89513615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf0eb1beade9ffa25f64287b6c3e94145dc58e3' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214709968456e693c4cd4b99-89513615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e693c4cdeb76_92488975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e693c4cdeb76_92488975')) {function content_56e693c4cdeb76_92488975($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
