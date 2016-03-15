<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 18:42:34
         compiled from "/var/www/html/presta/themes/pinkflora/modules/tmhtmlcontent/views/templates/hook/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186371479656e6e9faf36630-13336952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e12d1b3bf9ed49c381ef8fe334d9851297b3e708' => 
    array (
      0 => '/var/www/html/presta/themes/pinkflora/modules/tmhtmlcontent/views/templates/hook/top.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186371479656e6e9faf36630-13336952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'hook' => 0,
    'hookName' => 0,
    'hItem' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6e9fb037267_08986819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6e9fb037267_08986819')) {function content_56e6e9fb037267_08986819($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['htmlitems']->value)&&$_smarty_tpl->tpl_vars['htmlitems']->value) {?>
<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['hookName'] = new Smarty_variable($_tmp1, null, 0);?>
<div id="tmhtmlcontent_<?php echo $_smarty_tpl->tpl_vars['hookName']->value;?>
">
	<ul class="tmhtmlcontent-<?php echo $_smarty_tpl->tpl_vars['hookName']->value;?>
 clearfix row">
		<?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
            <li class="tmhtmlcontent-item-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 col-xs-4">
                <?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
                    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1) {?> onclick="return !window.open(this.href);"<?php }?> title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)$_smarty_tpl->tpl_vars['hItem']->value['image']));?>
" class="item-img img-responsive" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_w']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_w']);?>
<?php } else { ?>100%<?php }?>" height="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_h']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_h']);?>
<?php } else { ?>100%<?php }?>"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']&&$_smarty_tpl->tpl_vars['hItem']->value['title_use']==1) {?>
                        <h3 class="item-title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
                        <div class="item-html">
                            <?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>

                        </div>
                    <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
                    </a>
                <?php }?>
            </li>
		<?php } ?>
	</ul>
</div>
<?php }?>
<?php }} ?>
