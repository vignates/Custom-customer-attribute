<?php

namespace Redbox\CustomerAttribute\Model\Config\Source;

class Options implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'inv', 'label' => __('Invisible')],
            ['value' => 'opt', 'label' => __('Optional')],
            ['value' => 'req', 'label' => __('Required')]
        ];
    }
}
