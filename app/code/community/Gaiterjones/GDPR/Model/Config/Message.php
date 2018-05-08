<?php

/**
 * PAJ - Cookie Law Compliance
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the The MIT License (MIT)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://blog.gaiterjones.com/dropdev/magento/LICENSE.txt
 *
 * @category    PAJ
 * @package     PAJ_CookieLaw
 * @copyright   Copyright (c) 2014 PAJ
 * @license     http://blog.gaiterjones.com/dropdev/magento/LICENSE.txt  The MIT License (MIT)
 */
class Gaiterjones_GDPR_Model_Config_Message
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label' => 'Default message'),
            array('value' => 'custom', 'label' => 'Custom message'),
        );
    }
}
