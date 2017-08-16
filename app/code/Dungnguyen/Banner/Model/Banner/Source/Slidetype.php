<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/10/2017
 * Time: 3:43 PM
 */
namespace Dungnguyen\Banner\Model\Banner\Source;

class Slidetype implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('bxslider')],
            ['value' => 2, 'label' => __('flexslider')]
        ];
    }
}