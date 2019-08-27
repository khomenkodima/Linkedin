<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Redbox\Linkedin\Model\Config\Source;

use Redbox\Linkedin\Helpers\Config;
class Availability implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => Config::CONFIG_AVAILABILITY_INVISIBLE, 'label' => __('Invisible')],
            ['value' => Config::CONFIG_AVAILABILITY_OPTIONAL, 'label' => __('Optional')],
            ['value' => Config::CONFIG_AVAILABILITY_REQUIRED, 'label' => __('Required')]
        ];
    }
}