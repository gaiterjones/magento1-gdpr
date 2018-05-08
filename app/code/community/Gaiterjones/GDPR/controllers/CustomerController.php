<?php
class Gaiterjones_GDPR_CustomerController extends Mage_Core_Controller_Front_Action
{
    public function deleteconfirmationAction() {
        if (!Mage::helper('gaiterjones_gdpr')->isEnabled()) {
            return;
        }

        if (!Mage::getSingleton('customer/session')->isLoggedIn()) {
            $this->_redirect('customer/account/login');
            return;
        }

        $this->loadLayout();
        $this->renderLayout();
    }

    public function deleteaccountAction() {
        if (!Mage::helper('gaiterjones_gdpr')->isEnabled()) {
            return;
        }

        // Get customer / check if there is a session
        $customer = Mage::getSingleton('customer/session')->getCustomer();
        if (!$customer) {
            Mage::getSingleton('customer/session')->setBeforeAuthUrl(Mage::getUrl('gaiterjones_gdpr/customer/deleteaccount'));
            $this->_redirect('customer/account/login');
            return;
        }

        // Delete customer and anonymise data
        Mage::register('isSecureArea', true);
        Mage::getModel('gaiterjones_gdpr/accountdeletion')->anonymiseCustomer($customer);
        Mage::unregister('isSecureArea');

        // Clear session, redirect to homepage and show success message
        Mage::getSingleton('core/session')->clear();
        $this->_redirect('/index.php');

        $successMessage = Mage::helper('gaiterjones_gdpr')->getSuccessMessage();
        if ($successMessage != null) {
            Mage::getSingleton('core/session')->addSuccess($successMessage);
            return;
        }
        Mage::getSingleton('core/session')->addSuccess('Your account has been successfully deleted, and all order details have been anonymised.');
        return;
    }
}