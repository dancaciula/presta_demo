<?php

if (!defined('_PS_VERSION_'))
    exit;

class Blockcontrol extends Module {

    public function __construct()
    {
        $this->name = 'blockcontrol';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->autor = 'Dan Costin Caciula';
        $this->need_instance = 0;
        $this->ps_vestion_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Block Control Module');
        $this->description = $this->l('This module is controller for Nav position');
        if (!Configuration::get('BLOCKCONTROL'))
            $this->warning = $this->l('No name provided');
    }

//
    public function getContent()
    {
        $output = null;
        if (Tools::isSubmit('submit' . $this ->name))
        {
            $blockcontrol = strval(Tools::getValue('BLOCKCONTROL'));
            if (!$blockcontrol || empty($blockcontrol) || !Validate::isGenericName($blockcontrol))
                $output .= $this->displayError($this->l('Invalid Configuration value'));
            else
            {
                Configuration::updateValue('BLOCKCONTROL', $blockcontrol);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }
        return $output.$this->displayForm();
    }
    public function displayForm()
{
    // Get default language
    $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
     
    // Init Fields form array
    $fields_form[0]['form'] = array(
        'legend' => array(
            'title' => $this->l('Settings'),
        ),
        'input' => array(
            array(
                'type' => 'text',
                'label' => $this->l('Configuration value'),
                'name' => 'BLOCKCONTROL',
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
    $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
     
    // Language
    $helper->default_form_language = $default_lang;
    $helper->allow_employee_form_lang = $default_lang;
     
    // Title and toolbar
    $helper->title = $this->displayName;
    $helper->show_toolbar = true;        // false -> remove toolbar
    $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
    $helper->submit_action = 'submit'.$this->name;
    $helper->toolbar_btn = array(
        'save' =>
        array(
            'desc' => $this->l('Save'),
            'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
            '&token='.Tools::getAdminTokenLite('AdminModules'),
        ),
        'back' => array(
            'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
            'desc' => $this->l('Back to list')
        )
    );
     
    // Load current value
    $helper->fields_value['BLOCKCONTROL'] = Configuration::get('BLOCKCONTROL');
     
    return $helper->generateForm($fields_form);
}

    public function install()
{
  if (Shop::isFeatureActive())
    Shop::setContext(Shop::CONTEXT_ALL);
 
  return parent::install() &&
    $this->registerHook('leftColumn') &&
    $this->registerHook('header') &&
      $this->registerHook('displayCaciulaHook') &&
    Configuration::updateValue('BLOCKCONTROL', 'my friend');
}

//
    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('BLOCKCONTROL')
        )
            return false;

        return true;
    }
    public function hookDisplayNav($params)
{
  $this->context->smarty->assign(
      array(
          'blockcontrol' => Configuration::get('BLOCKCONTROL'),
          'blockcontrollink' => $this->context->link->getModuleLink('blockcontrol', 'display')
      )
  );
  return $this->display(__FILE__, 'blockcontrol.tpl');
}
   
public function hookDisplayRightColumn($params)
{
  return $this->hookDisplayLeftColumn($params);
}
//public function hookDisplayCaciulaHook($params)
//{
//  return $this->hookDisplayCaciulaHook($params);
//}
   
public function hookDisplayHeader()
{
  $this->context->controller->addCSS($this->_path.'css/blockcontrol.css', 'all');
}  

}
