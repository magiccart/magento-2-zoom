<?php

/**
 * @Author: nguyen
 * @Date:   2020-06-09 20:10:33
 * @Last Modified by:   Alex Dong
 * @Last Modified time: 2020-08-08 20:12:11
 */

namespace Magiccart\Zoom\Model\Config\Source;

class Type implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            'grab' 		=> 'grab',
            'click' 	=> 'click',
            'toggle' 	=> 'toggle',
            'mouseover' => 'mouseover'
        ];
    }
}
