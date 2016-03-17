<?php

class caciu extends Module {

    public function __construct()
    {
        $this->name = 'caciu';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Dan Caciula';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Modulu lui Caciula');
        $this->description = $this->l('Display Nothing');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);

        return parent::install() &&
            $this->registerHook('leftColumn') &&
            $this->registerHook('header') &&
            Configuration::updateValue('CACIULA_NAME', 'my friend');
    }

    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('CACIULA_NAME')
        )
            return false;

        return true;
    }

    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit' . $this->name))
        {
            $my_module_name = strval(Tools::getValue('CACIULA_NAME'));
            if (!$my_module_name || empty($my_module_name) || !Validate::isGenericName($my_module_name))
                $output .= $this->displayError($this->l('Invalid Configuration values'));
            else
            {
                Configuration::updateValue('CACIULA_NAME', $my_module_name);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }
        return $output . $this->displayForm();
    }

    public function displayForm()
    {
        // Get default language
        $default_lang = (int) Configuration::get('PS_LANG_DEFAULT');

        // Init Fields form array
        $fields_form[0]['form'] = array(
                'legend' => array(
                        'title' => $this->l('Settings'),
                ),
                'input' => array(
                        array(
                                'type' => 'text',
                                'label' => $this->l('Configuration value'),
                                'name' => 'CACIULA_NAME',
                                'size' => 20,
                                'required' => true
                        )
                ),
                'submit' => array(
                        'title' => $this->l('Save'),
                        'class' => 'button'
                )
        );

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;

        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = false;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit' . $this->name;
        $helper->toolbar_btn = array(
                'save' =>
                array(
                        'desc' => $this->l('Save'),
                        'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name .
                        '&token=' . Tools::getAdminTokenLite('AdminModules'),
                ),
                'back' => array(
                        'href' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                        'desc' => $this->l('Back to list')
                )
        );

        // Load current value
        $helper->fields_value['CACIULA_NAME'] = Configuration::get('CACIULA_NAME');

        return $helper->generateForm($fields_form);
    }

    public function hookDisplayLeftColumn($params)
    {
        $this->context->smarty->assign(
            array(
                    'my_module_name' => Configuration::get('CACIULA_NAME'),
                    'my_module_link' => $this->context->link->getModuleLink('caciu', 'display'),
                    'my_module_message' => $this->l('This is a simple text message')
            )
        );
        return $this->display(__FILE__, 'caciu.tpl');
    }

//    public function hookDisplayRightColumn($params)
//    {
//        return "Caciula";
//    }
//
//    public function hookDisplayHeader()
//    {
//
//        $this->context->smarty->assign(
//            array(
//                    'my_module_name' => Configuration::get('CACIULA_NAME'),
//                    'my_module_link' => $this->context->link->getModuleLink('caciu', 'display')
//            )
//        );
//        return $this->display(__FILE__, 'caciu.tpl');
//    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

