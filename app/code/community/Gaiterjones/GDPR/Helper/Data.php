<?php
class Gaiterjones_GDPR_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_GDPR_ENABLED = 'gaiterjones_gdpr/configuration/enabled';
    const XML_PATH_INFORMATION_PAGE = 'gaiterjones_gdpr/content/cms_page';
    const XML_PATH_GDPR_SUCCESSMESSAGE = 'gaiterjones_gdpr/configuration/successmessage';

    public function isEnabled()
    {
        return (bool)Mage::getStoreConfig(self::XML_PATH_GDPR_ENABLED);
    }

    public function getSuccessMessage()
    {
        return Mage::getStoreConfig(self::XML_PATH_GDPR_SUCCESSMESSAGE);
    }

    public function getInformationPageIdentifier($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_INFORMATION_PAGE, $store);
    }

    public function debugMode()
    {
        return Mage::getStoreConfig('gaiterjones_gdpr/configuration/debugmode');
    }

    public function getShow()
    {
        return Mage::getStoreConfig('gaiterjones_gdpr/content/show');
    }

    public function getCustomMessage()
    {
        return Mage::getStoreConfig('gaiterjones_gdpr/content/custom_message');
    }

    public function getCustomMoreInfo()
    {
        return Mage::getStoreConfig('gaiterjones_gdpr/content/custom_more_info');
    }

    public function getCustomTitleText()
    {
        return Mage::getStoreConfig('gaiterjones_gdpr/content/custom_title_text');
    }
        public function getCustomAccept()
    {
        return Mage::getStoreConfig('gaiterjones_gdpr/content/custom_accept');
    }

    public function getCustomDecline()
    {
        return Mage::getStoreConfig('gaiterjones_gdpr/content/custom_decline');
    }
}
