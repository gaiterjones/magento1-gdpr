<?php
class Gaiterjones_GDPR_Block_Cookiealert extends Mage_Core_Block_Template
{
	protected $_cookiealert;
	
	protected function _prepareLayout()
	{
        parent::_prepareLayout();
        
		$this->_cookiealert = Mage::getSingleton('gaiterjones_gdpr/cookiealert');
	}

    public function getCmsPageUrl()
    {
        return $this->_cookiealert->getCmsPageUrl();
    }
}