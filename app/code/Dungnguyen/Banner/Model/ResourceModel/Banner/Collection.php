<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/9/2017
 * Time: 2:28 PM
 */
namespace Dungnguyen\Banner\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'id';

    protected function _construct()
    {
        // Model + Resource Model
        $this->_init('Dungnguyen\Banner\Model\Banner', 'Dungnguyen\Banner\Model\ResourceModel\Banner');
    }

}