<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 15:22:48
         compiled from "/var/www/html/presta/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149028751556e6bb281e00c2-12856240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dbd173de482cde694927be04f533fadf17a4725' => 
    array (
      0 => '/var/www/html/presta/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149028751556e6bb281e00c2-12856240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e6bb281f7760_98787636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6bb281f7760_98787636')) {function content_56e6bb281f7760_98787636($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
