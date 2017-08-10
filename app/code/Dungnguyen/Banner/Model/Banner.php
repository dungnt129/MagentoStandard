<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/9/2017
 * Time: 2:08 PM
 */
namespace Dungnguyen\Banner\Model;

class Banner extends \Magento\Framework\Model\AbstractModel
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;

    protected function _construct()
    {
        $this->_init('Dungnguyen\Banner\Model\ResourceModel\Banner');
    }

    public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }

}