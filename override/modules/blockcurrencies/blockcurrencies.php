<?php

if (!defined('_CAN_LOAD_FILES_'))
    exit;

class BlockCurrenciesOverride extends BlockCurrencies {

    public function hookDisplayCaciulaHook($params)
    {
        return $this->hookDisplayTop($params);
    }



}
