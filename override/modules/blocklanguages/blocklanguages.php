<?php

if (!defined('_CAN_LOAD_FILES_'))
    exit;

class BlockLanguagesOverride extends BlockLanguages {

    public function hookDisplayCaciulaHook($params){

        return $this->hookDisplayTop($params);
    }
}