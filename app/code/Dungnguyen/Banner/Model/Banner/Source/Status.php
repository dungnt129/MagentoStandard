<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/10/2017
 * Time: 3:43 PM
 */
namespace Dungnguyen\Banner\Model\Banner\Source;

class Status implements \Magento\Framework\Data\OptionSourceInterface
{
    protected $banner;

    public function __construct(\Dungnguyen\Banner\Model\Banner $banner)
    {
        $this->banner = $banner;
    }

    public function toOptionArray()
    {
        $availableOptions = $this->banner->getAvailableStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}