{if $MENU != ''}
<!-- Menu -->
<div class="top_menu top-level megamenu_item">
    <div class="currentBox">
        <div class="cat-title">{l s="Menu" mod="blocktopmenu"}</div>
        <div>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <ul class="sf-menu clearfix menu-content">
        
        {if $MENU_SEARCH}
            <li class="sf-search noBack" style="float:right">
                <form id="searchbox" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" method="get">
                    <p>
                        <input type="hidden" name="controller" value="search" />
                        <input type="hidden" value="position" name="orderby"/>
                        <input type="hidden" value="desc" name="orderway"/>
                        <input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'html':'UTF-8'}{/if}" />
                    </p>
                </form>
            </li>
        {/if}
    </ul>

</div>
<!--/ Menu -->
{/if}