<?php

/**
 * GDPR
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
 * @copyright   Copyright (c) 2018 PAJ
 * @license     http://blog.gaiterjones.com/dropdev/magento/LICENSE.txt  The MIT License (MIT)
 */
class Gaiterjones_GDPR_Model_Config_Skin
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => 'Without skin'),
            array('value' => 'gdpr-yellow-alert', 'label' => 'Yellow alert'),
            array('value' => 'gdpr-dark-clean', 'label' => 'Dark clean'),
            array('value' => 'gdpr-minimalist', 'label' => 'Minimalist')
        );
    }
}
