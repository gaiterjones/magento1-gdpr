<?php
class Gaiterjones_GDPR_Model_Cookiealert extends Mage_Core_Block_Template
{
    public function getCmsPageUrl()
    {
        return Mage::helper('cms/page')->getPageUrl(
            Mage::getModel('cms/page')->load(Mage::helper('gaiterjones_gdpr')->getInformationPageIdentifier(), 'identifier')->getId()
        );
    }
}