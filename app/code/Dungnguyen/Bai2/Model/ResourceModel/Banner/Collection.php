<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/9/2017
 * Time: 2:28 PM
 */
namespace Dungnguyen\Bai2\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected function _construct()
    {
        // Model + Resource Model
        $this->_init('Dungnguyen\Bai2\Model\Banner', 'Dungnguyen\Bai2\Model\ResourceModel\Banner');
    }

}