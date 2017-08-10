<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/9/2017
 * Time: 2:08 PM
 */
namespace Dungnguyen\Bai2\Model;

class Banner extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init('Dungnguyen\Bai2\Model\ResourceModel\Banner');
    }

}