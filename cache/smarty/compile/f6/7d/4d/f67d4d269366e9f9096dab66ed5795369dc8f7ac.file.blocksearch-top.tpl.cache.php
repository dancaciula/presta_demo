<?php /* Smarty version Smarty-3.1.19, created on 2016-03-14 18:42:40
         compiled from "/var/www/html/presta/themes/pinkflora/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37005583556e6ea00259ee6-09984710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f67d4d269366e9f9096dab66ed5795369dc8f7ac' => 
    array (
      0 => '/var/www/html/presta/themes/pinkflora/modules/blocksearch/blocksearch-top.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37005583556e6ea00259ee6-09984710',
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
  'unifunc' => 'content_56e6ea00279b22_30289665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6ea00279b22_30289665')) {function content_56e6ea00279b22_30289665($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="clearfix">
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
