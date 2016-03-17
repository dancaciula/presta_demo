<!-- Block mymodule -->
<div id="control-top">
    <div class="currentBox"></div>   
 <div class="toogle_content_box" style="display:none">
     
     <div id="caciula_id">
         {capture name='displayCaciulaHook'}{hook h='displayCaciulaHook'}{/capture}
                            {if $smarty.capture.displayCaciulaHook}
                            <div class="caciula">
                                <div class="container">
                                    <div class="row">
                                        {$smarty.capture.displayCaciulaHook}
                                    </div>
                                </div>
                            </div>
                            {/if}
         
     </div>
 </div>

</div>
<!-- /Block mymodule -->