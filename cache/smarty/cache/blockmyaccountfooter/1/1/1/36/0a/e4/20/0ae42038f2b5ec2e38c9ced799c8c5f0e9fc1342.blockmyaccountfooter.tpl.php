<?php /*%%SmartyHeaderCode:210438559856e7c1412587e9-05328171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae42038f2b5ec2e38c9ced799c8c5f0e9fc1342' => 
    array (
      0 => '/var/www/html/presta/themes/pinkflora/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1457969355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210438559856e7c1412587e9-05328171',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e7c141319df5_14157044',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e7c141319df5_14157044')) {function content_56e7c141319df5_14157044($_smarty_tpl) {?><!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-2">
	<h4>
    	<a href="http://local.caciushop.ro/index.php?controller=my-account" title="Manage my customer account" rel="nofollow">My account</a>
    </h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li>
            	<a href="http://local.caciushop.ro/index.php?controller=history" title="My orders" rel="nofollow">My orders</a>
            </li>
						<li>
            	<a href="http://local.caciushop.ro/index.php?controller=order-slip" title="My credit slips" rel="nofollow">My credit slips</a>
            </li>
			<li>
            	<a href="http://local.caciushop.ro/index.php?controller=addresses" title="My addresses" rel="nofollow">My addresses</a>
            </li>
			<li>
            	<a href="http://local.caciushop.ro/index.php?controller=identity" title="Manage my personal information" rel="nofollow">My personal info</a>
            </li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
