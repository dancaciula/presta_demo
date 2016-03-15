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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e7c1442a3344_18508891',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e7c1442a3344_18508891')) {function content_56e7c1442a3344_18508891($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="clearfix">
	<form id="searchbox" method="get" action="//local.caciushop.ro/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
