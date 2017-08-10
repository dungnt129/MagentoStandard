<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/9/2017
 * Time: 2:26 PM
 */
namespace Dungnguyen\Banner\Model\ResourceModel;

class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        // Table name + primary key column
        $this->_init('banner', 'id');
    }

}