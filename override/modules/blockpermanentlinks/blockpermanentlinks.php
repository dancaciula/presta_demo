<?php

if (!defined('_CAN_LOAD_FILES_'))
    exit;

class BlockPermanentLinksOverride extends BlockPermanentLinks {

    public function hookDisplayCaciulaHook($params)
    {
        return $this->hookTop($params);
    }



}
